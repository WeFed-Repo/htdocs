var sdk;
var sdkParams;
// required: jsrender.min.js -->

/*
 * {
  "targetPanel": null,          OBBLIGATORIO: elemento su cui si basa il tutto - se assente errore non si può andare avanti
  "objectToRender": null,       OBBLIGATORIO: sorgente dati da stampare a video nell'opportuno template
  "responseCallBack": null,     OBBLIGATORIO: funzione passata per esito positivo o negativo visto che siamo in un contesto di azioni async
  "urlTemplate": null,          OPZIONALE   : solo se idTemplate esiste se passato va puntuale a reperire il template
  "idTemplate": null,           OPZIONALE   : solo se urlTemplate esiste se passato va puntuale a reperire il template
  "optionalConverters": null,   OPZIONALE   : funzioni passate se si desidera una formattazione specifica in un specifico campo del template
  "ensureConverters": true      OPZIONALE   : forza a rileggere ogni volta tutte le views.converters applicate al contesto
}
 */

/*
	Funzioni interne standard per la formattazione dei campi da inserire nel tempalte (es: {{formatDataOra:DataEsecuzione}})

	"formatDataOra":
	"formatDateTime":
	prototipo: {{formatDateTime:DataOperazione defaultValue="" locale="it-IT" }}
	- defaultValue: valore in caso di null... must be string 
	- locale="it-IT" regional ... accettati en-US e en-GB

	"formatData":
	"formatDate":
	prototipo: {{formatDate:DataDiNascita defaultValue="" locale="it-IT" }}
	- defaultValue: valore in caso di null... must be string 
	- locale="it-IT" regional ... accettati en-US e en-GB


	"formatSaldo": // deprecata
	"formatAmount":
	prototipo: {{formatImporto:Importo defaultValue="0.00"}}
	- defaultValue: valore in caso di null... must be string 

*/

(function (sdk, $, args) {
	// namespace Sdk.Utils
	sdk.utils = (function (utils, $, args) {
		// namespace sdk.utils.templates
		utils.templates = (function (templates, $, args) {

			var templateDivName = "___sdk__utils__template__panel__";
			var initStandardFormattersDone = false;

			//Funzioni Interne
			//var _templateParamDefault = function (parameters) {
			//    if (parameters && parameters.length > 0) {
			//        return parameters;
			//    }
			//    return null;
			//}

						/*
						* dato un valore, viene verificato sia non undefined e del tipo "expected", 
						* se si viene tornato "value", altrimenti "replace"
						*/
			var _fixTemplateValue = function (value, expected, replace) {
				if (value !== undefined && typeof(value) === expected)
					return value;
				return replace;
			}
			
			var _fixTemplateValueLocale = function (value) {
				var toRet = "it-IT";
				switch (value) {
					case "en-US":
					case "en-GB":
					case "it-IT":
						toRet = value;
						break;
				}
				return toRet;
			}

			var _templateFormatDateTime = function (val, defaultValue, locale) {
				defaultValue = _fixTemplateValue(defaultValue, 'string', '');
				locale = _fixTemplateValueLocale(locale);
				if (val) {
					var dtFormat = "DD/MM/YYYY HH:mm:ss";
					switch (locale) {
						case "en-US":
						case "en-GB":
							dtFormat = "MM/DD/YYYY HH:mm:ss";
							break;
					}
					return sdk.utils.text.formatDateTime(moment(val).local(), dtFormat);
				}
				return defaultValue;
			};
			var _templateFormatDate = function (val, defaultValue, locale) {
				defaultValue = _fixTemplateValue(defaultValue, 'string', '');
				locale = _fixTemplateValueLocale(locale);
				if (val) {
					var dtFormat = "DD/MM/YYYY";
					switch (locale) {
						case "en-US":
						case "en-GB":
							dtFormat = "MM/DD/YYYY";
							break;
					}
					return sdk.utils.text.formatDateTime(moment(val).local(), dtFormat);
				}
				return defaultValue;
			};
			var _templateFormatAmount = function (val, defaultValue, locale) {
				//var defaultValue = _fixTemplateValue(defaultValue, 'string', '0,00');
				//locale = _fixTemplateValueLocale(locale);
				//if (val || val === 0) {
				//	return sdk.utils.text.formatAmmountDecimal(val);
				//}
				//return defaultValue;
                var toret = '';
                var defaultValue = _fixTemplateValue(defaultValue, 'string', '0,00');
                locale = _fixTemplateValueLocale(locale);
                //la funzione sdk.utils.text.formatAmmountDecimal restituisce "" se il valore passato è: 0, "", null
                toret = sdk.utils.text.formatAmmountDecimal(val);
                if (toret != "") {
                    return toret;
                }
                return defaultValue;
			};
			//Funzioni Interne


			var initStandardFormatters = function (parameter) {
				if ($.views) {
					if (parameter.ensureConverters || !initStandardFormattersDone) {
						$.views.converters("formatDataOra", function (val) { return _templateFormatDateTime(val, this.tagCtx.props.defaultValue, this.tagCtx.props.locale); });
						$.views.converters("formatData", function (val) { return _templateFormatDate(val, this.tagCtx.props.defaultValue, this.tagCtx.props.locale); });
						$.views.converters("formatSaldo", function (val) { return _templateFormatAmount(val, this.tagCtx.props.defaultValue, this.tagCtx.props.locale); });
						
						$.views.converters("formatDateTime", function (val) { return _templateFormatDateTime(val, this.tagCtx.props.defaultValue, this.tagCtx.props.locale); });
						$.views.converters("formatDate", function (val) { return _templateFormatDate(val, this.tagCtx.props.defaultValue, this.tagCtx.props.locale); });
						$.views.converters("formatAmount", function (val) { return _templateFormatAmount(val, this.tagCtx.props.defaultValue, this.tagCtx.props.locale); });

						initStandardFormattersDone = true;
					}
				}
			}

			var _fixParam = function (parameter) {

				var tmpParam = {
					"targetPanel": null,
					"objectToRender": null,
					"responseCallBack": $.noop,
					"urlTemplate": null,
					"idTemplate": null,
					"optionalConverters": null,
					"ensureConverters": true
				};
				tmpParam = $.extend(tmpParam, parameter);
				return tmpParam;
			};

			var _checkParam = function (parameter) {
				if (!parameter.targetPanel) {
					parameter.responseCallBack(false, 'no panel specified');
					return false;
				}

				if (!parameter.objectToRender) {
					parameter.responseCallBack(false, 'object to render must be specified');
					return false;
				}

				if (!parameter.urlTemplate && !parameter.idTemplate) {
					parameter.responseCallBack(false, 'at least url or id must be specified');
					return false;
				}
				return true;
			};

			var _getTemplateItem = function (parameter, templatePanel) {
				var templateId = parameter.idTemplate;
				if (templateId == null || templateId === '') {
					// ricerco chi ha la property type="text/x-jsrender" ???
					return $('[type="text/x-jsrender"]', templatePanel).first();
				}

				return $('#' + templateId, templatePanel);
			}

			var _renderAsyncTemplateLoaded = function (parameter, templatePanel) {
				var templateItem = _getTemplateItem(parameter, templatePanel);
				if (!templateItem.length) {
					parameter.responseCallBack(false, 'template not found');
					return;
				}

				var template = null;
				try {
					template = $.templates(templateItem.html());
				}
				catch (creationError) {
					sdk.utils.log.errorMessage('template.load: error: ' + creationError);
					parameter.responseCallBack(false, 'error loading template:' + creationError);
					return;
				}

				if (!template) {
					sdk.utils.log.errorMessage('template.unknown');
					parameter.responseCallBack(false, 'error template.unknown');
					return;
				}

				initStandardFormatters(parameter);
				
				if (parameter.optionalConverters != null) {
					$.each(parameter.optionalConverters, function (index, item) {                        
						$.views.converters(index, item, template);
					});
				}


				var chunk = null;
				try {

					chunk = $(template.render(parameter.objectToRender));
				}
				catch (renderError) {
					sdk.utils.log.errorMessage('template.render: error: ' + renderError);
					parameter.responseCallBack(false, 'error rendering template' + renderError);
					return;
				}

				chunk = chunk || '';
				parameter.targetPanel.html(chunk);
				parameter.responseCallBack(true, 'rendered !!!');

			};

			var _renderAsync = function (parameter) {
				
				var urlTemplate = parameter.urlTemplate;
				var targetPanel = parameter.targetPanel;

				if (urlTemplate == null || urlTemplate === '') {
					_renderAsyncTemplateLoaded(parameter, $("html"));
				}

				var tmpPanel = $('#' + templateDivName, targetPanel);
				if (!tmpPanel.length) {
					tmpPanel = targetPanel.append('<div style="display:none" id="' + templateDivName + '"/>');
				}
				try {
					tmpPanel.load(urlTemplate, function (response, status, xhr) {
						if (status === "success") {
							_renderAsyncTemplateLoaded(parameter, tmpPanel);
						}
						if (status === "error") {
							sdk.utils.log.errorMessage('template.download: error: ' + xhr.status + ' - ' + xhr.statusText);
							parameter.responseCallBack(false, '' + xhr.status + ' - ' + xhr.statusText);

						}
					});
				}
				catch (loadError) {
					sdk.utils.log.errorMessage('template.download: exception: ' + loadError);
					parameter.responseCallBack(false, loadError);
				}
			};



			var _render = function (parameter) {
				if (parameter === null || parameter === undefined) {
					sdk.utils.log.errorMessage('template.init: exception: inputParameter is null');
				}
				parameter = _fixParam(parameter);
				if (!_checkParam(parameter))
					return;
				_renderAsync(parameter);
				return;
			};

			templates["renderAsync"] = _render;

			return templates;
		})(utils.templates || {}, $, args && args.templates ? args.templates : {});
		// end namespace sdk.utils.templates
		return utils;
	})(sdk.utils || {}, $, args && args.utils ? args.utils : {});
	// end namespace sdk.utils
	return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
