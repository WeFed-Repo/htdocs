(function ($) {
    
    $.widget("tm.swapper",
        {
            options: {
                allTemplates: null,
                currentUserAllPreference: null,
                defaultUser: null,
                saveUrl: null,
                urlWidgetToolBox: null,
                urlWidgetUserPref:null,
                widgets: null,
                peekArea: null,
                dropAreas: null,
                panelMessageSave: null,
                panelMessageAlert: null,
                panelMessageError: null
            },
            reset: function (useUserSettings) {
                //this._defaultEditor(this.options, true);
            },
            defaultUser: function (useUserSettings) {
                this._defaultEditor(this.options, true);
            },
            /////////////////// INIT

            _init: function () {
                Logger.debugMessage("sono in init");
                this._resetEditor(this.options, true);
            },
            _create: function () {
                Logger.debugMessage("sono in create");
            },
            _initializeToolboxItems: function (widgetTemplates) {
                var toRet = [];
                var me = this;
                $.each(widgetTemplates, function (templatesIndex, templatesItem) {
                    toRet[templatesIndex] = me._buildToolBoxItem(templatesItem, templatesIndex, me);
                });
                return toRet;
            },



            _buildToolBoxItem: function (templateItem, templateIndex, me) {
                var toolboxItem = {
                    template: templateItem,
                    toolboxIndex: templateIndex,
                    JpanelToolBox: null,
                    JpanelUser: [],
                    itemChunkToolbox: null,
                    itemChunkDropped: null,

                    getUserItem: function () {

                        if (!toolboxItem.template.IsMultipleInstance) {
                            toolboxItem.JpanelToolBox.hide();
                        }

                        var toRet = $('<li></li>').append($(toolboxItem.itemChunkDropped)).addClass("listyle");
                        toRet.data("owner", toolboxItem).data("IsToolBoxItem", false).data("userPref", { WidgetType: toolboxItem.template.WidgetType });
                        toolboxItem.JpanelUser.push(toRet);

                        return toRet;

                    },
                    recycleUserItem: function (uiItem) {

                        if (!toolboxItem.template.IsOptional && toolboxItem.JpanelUser.length == 1)
                            return false;

                        //aggiunto david per compatibilità IE8
                        if (!toolboxItem.JpanelUser.indexOf) {
                            toolboxItem.JpanelUser.indexOf = function (val) {
                                return jQuery.inArray(val, this);
                            };
                        }

                        var indexOfItem = toolboxItem.JpanelUser.indexOf(uiItem);

                        //if (indexOfItem >= 0) {
                        if (indexOfItem >= -1) {
                            toolboxItem.JpanelUser.splice(indexOfItem, 1);
                        }

                        if (toolboxItem.JpanelUser.length <= 0 && !toolboxItem.template.IsMultipleInstance) {
                            toolboxItem.JpanelToolBox.show();
                        }
                        // aggiorna implicitamente la dropArea di partenza SOLO ... (-1)
                        //debugger;
                        toolboxItem.updateUserPref(uiItem, -1, -1);
                        return true;


                    },
                    getToolboxItem: function () {
                        toolboxItem.JpanelToolBox.empty();
                        toolboxItem.JpanelToolBox.append($(toolboxItem.itemChunkToolbox));
                        return toolboxItem.JpanelToolBox;
                    },
                    isToolboxItem: function (uiItem) {
                        if (uiItem) {
                            var isToolBox = uiItem.data("IsToolBoxItem");
                            if (typeof isToolBox === 'boolean') {
                                return isToolBox;
                            }
                        }
                        return false;
                    },

                    updateUserPref: function (uiItem, columnId, rowId) {

                        var isToolBox = uiItem.data("IsToolBoxItem");

                        if (!isToolBox) {
                            var userPref = uiItem.data("userPref");
                            if (userPref && userPref.WidgetType == toolboxItem.template.WidgetType) {
                                Logger.debugMessage('updating preferences: ' + columnId + '-' + rowId + ' ' + JSON.stringify(userPref));
                                if (userPref.ColumnId !== undefined) {
                                    // correggi la drop area di partenza
                                    var dropAreaSource = me.options.dropAreas[userPref.ColumnId];
                                    if (dropAreaSource) {

                                        //aggiunto david per compatibilità IE8
                                        if (!dropAreaSource.userPrefByCol.indexOf) {
                                            dropAreaSource.userPrefByCol.indexOf = function (val) {
                                                return jQuery.inArray(val, this);
                                            };
                                        }

                                        var index = dropAreaSource.userPrefByCol.indexOf(userPref);
                                        if (index > -1)
                                            dropAreaSource.userPrefByCol.splice(index, 1);
                                    }
                                }

                                userPref.ColumnId = columnId;
                                // userPref.RowId = rowId;

                                // correggi la drop area di arrivo

                                var dropAreaDestination = me.options.dropAreas[userPref.ColumnId];
                                if (dropAreaDestination) {
                                    dropAreaDestination.userPrefByCol.splice(rowId, 0, userPref);
                                }
                            }
                        }
                    }
                };

                //debugger;
                toolboxItem.JpanelToolBox = $('<li></li>').data("owner", toolboxItem).data("IsToolBoxItem", true).addClass("listyle"),

                toolboxItem.itemChunkToolbox = me._createHtmlForElementInToolbox(toolboxItem);
                toolboxItem.itemChunkDropped = me._createHtmlForElementInDropZone(toolboxItem);

                return toolboxItem;
            },

            _createHtmlForElementInToolbox: function (toolboxItem) {
                var onSuccessFunction = function (v1, v2, v3, v4) {
                    toolboxItem.itemChunkToolbox = v1;
                    toolboxItem.JpanelToolBox.empty();
                    var tmpChunk = $(toolboxItem.itemChunkToolbox);
                    toolboxItem.JpanelToolBox.append(tmpChunk);
                }
                communicationSendObject(this.options.urlWidgetToolBox, toolboxItem.template, onSuccessFunction);
                //return '<div class="web-widget riquadro clearfix"> \
                //        <div class="clearfix web-widget-title"> \
                //        <div class="flag cssStaticWidget">&nbsp;</div><h1>' + toolboxItem.template.WidgetType + ' - ' + toolboxItem.template.Description + '</h1></div> \
                //        <div class="web-widget-content"></div> \
                //    </div>';

            },

            _createHtmlForElementInDropZone: function (dropZoneItem) {
                var onSuccessFunction = function (v1, v2, v3, v4) {
                    dropZoneItem.itemChunkDropped = v1;
                    $.each(dropZoneItem.JpanelUser, function (index, item) {
                        item.empty();
                        // suppongo che il widget sia prepend
                        item.append($(dropZoneItem.itemChunkDropped));
                    });
                }
                communicationSendObject(this.options.urlWidgetUserPref, dropZoneItem.template, onSuccessFunction);
                //return '<div class="web-widget riquadro clearfix"> \
                //        <div class="remove-widget"></div> \
                //        <div class="clearfix web-widget-title"> \
                //        <div class="flag cssStaticWidget">&nbsp;</div><h1>' + dropZoneItem.template.WidgetType + ' - ' + dropZoneItem.template.Description + '</h1></div> \
                //        <div class="web-widget-content"></div> \
                //    </div>';



            },
            _defaultEditor: function(pageStateParam, defaultUser) {
                //debugger;
                var defUserTemplate = this.options.defaultUser;
                
                try {

                    $.each(pageStateParam.dropAreas, function (index, item) {
                        item.userPrefByCol = [];
                    });
                    pageStateParam.widgets = this._initializeToolboxItems(pageStateParam.allTemplates);
                    

                    var userPreferencesByCol = [];
                    $.each(this.options.dropAreas, function (index, item) {
                        userPreferencesByCol[item.ColumnId] = [];
                    });

                    $.each(pageStateParam.widgets, function (widgetIndex, widgetItem) {
                        //debugger;
                        var userPreferences = [];
                        var userPreferencesCount = 0;

                        //debugger;
                        var userPrefToUse;
                        if (defUserTemplate != null) {
                            userPrefToUse = defaultUser ? defUserTemplate : [];
                        } else {
                            userPrefToUse = defaultUser ? pageStateParam.currentUserAllPreference : [];
                        }
                        
                        $.each(userPrefToUse, function (userPreferenceId, userPrecerenceItem) {
                            //debugger; 
                            if (userPrecerenceItem.WidgetType == widgetItem.template.WidgetType) {
                                var tmpUserPref = $.extend({}, userPrecerenceItem);
                                if (widgetItem.template.UseTemplateLayout) {
                                    tmpUserPref.ColumnId = widgetItem.template.ColumnId;
                                    tmpUserPref.RowId = widgetItem.template.RowId;
                                }
                                userPreferences[userPreferencesCount++] = tmpUserPref;
                            }
                            return true;
                        });

                        //debugger;
                        if (userPreferencesCount == 0 && !widgetItem.template.IsOptional) {
                            userPreferences[userPreferencesCount++] = $.extend({}, widgetItem.template);
                        }

                        // stampa in toolbox
                        pageStateParam.peekArea.JPanel.append(widgetItem.getToolboxItem());

                        if (userPreferencesCount > 0) {

                            // smisto le pref per colonna
                            $.each(userPreferences, function (index, item) {
                                //debugger;
                                var itemsByCol = userPreferencesByCol[item.ColumnId];
                                if (!itemsByCol) {
                                    itemsByCol = [];
                                    userPreferencesByCol[item.ColumnId] = itemsByCol;
                                }
                                itemsByCol.push({ widget: widgetItem, userPref: item });
                            });
                        }
                    });
                    //debugger;
                    $.each(userPreferencesByCol, function (columnIndex, columnItems) {
                        var dropArea = pageStateParam.dropAreas[columnIndex];
                        //debugger;
                        if (dropArea) {
                            columnItems.sort(function (a, b) {
                                return a.userPref.RowId - b.userPref.RowId;
                            });
                            $.each(columnItems, function (userIndex, userPref) {
                                //debugger;
                                var clonedItem = userPref.widget.getUserItem();
                                userPref.widget.updateUserPref(clonedItem, dropArea.ColumnId, userIndex);
                                if (userIndex == 0) {
                                    dropArea.JPanel.prepend($(clonedItem));
                                } else {
                                    $('li:eq(' + (userIndex - 1) + ')', dropArea.JPanel).after($(clonedItem));
                                }

                            });
                        }
                    });

                } catch (err) {
                    alert(err);
                }
                

            },
            _resetEditor: function (pageStateParam, useUserPreferences) {

                try {

                    $.each(pageStateParam.dropAreas, function (index, item) {
                        item.userPrefByCol = [];
                    });
                    pageStateParam.widgets = this._initializeToolboxItems(pageStateParam.allTemplates);



                    var userPreferencesByCol = [];
                    $.each(this.options.dropAreas, function (index, item) {
                        userPreferencesByCol[item.ColumnId] = [];
                    });

                    $.each(pageStateParam.widgets, function (widgetIndex, widgetItem) {
                        //debugger;
                        var userPreferences = [];
                        var userPreferencesCount = 0;

                        //debugger;
                        var userPrefToUse = useUserPreferences ? pageStateParam.currentUserAllPreference : [];

                        $.each(userPrefToUse, function (userPreferenceId, userPrecerenceItem) {
                            //debugger;
                            if (userPrecerenceItem.WidgetType == widgetItem.template.WidgetType) {
                                var tmpUserPref = $.extend({}, userPrecerenceItem);
                                if (widgetItem.template.UseTemplateLayout) {
                                    tmpUserPref.ColumnId = widgetItem.template.ColumnId;
                                    tmpUserPref.RowId = widgetItem.template.RowId;
                                }
                                userPreferences[userPreferencesCount++] = tmpUserPref;
                            }
                            return true;
                        });

                        //debugger;
                        if (userPreferencesCount == 0 && !widgetItem.template.IsOptional) {
                            userPreferences[userPreferencesCount++] = $.extend({}, widgetItem.template);
                        }

                        // stampa in toolbox
                        pageStateParam.peekArea.JPanel.append(widgetItem.getToolboxItem());

                        if (userPreferencesCount > 0) {

                            // smisto le pref per colonna
                            $.each(userPreferences, function (index, item) {
                                //debugger;
                                var itemsByCol = userPreferencesByCol[item.ColumnId];
                                if (!itemsByCol) {
                                    itemsByCol = [];
                                    userPreferencesByCol[item.ColumnId] = itemsByCol;
                                }
                                itemsByCol.push({ widget: widgetItem, userPref: item });
                            });
                        }
                    });
                    //debugger;
                    $.each(userPreferencesByCol, function (columnIndex, columnItems) {
                        var dropArea = pageStateParam.dropAreas[columnIndex];
                        //debugger;
                        if (dropArea) {
                            columnItems.sort(function (a, b) {
                                return a.userPref.RowId - b.userPref.RowId;
                            });
                            $.each(columnItems, function (userIndex, userPref) {
                                //debugger;
                                var clonedItem = userPref.widget.getUserItem();
                                userPref.widget.updateUserPref(clonedItem, dropArea.ColumnId, userIndex);
                                if (userIndex == 0) {
                                    dropArea.JPanel.prepend($(clonedItem));
                                } else {
                                    $('li:eq(' + (userIndex - 1) + ')', dropArea.JPanel).after($(clonedItem));
                                }

                            });
                        }
                    });

                } catch (err) {
                    alert(err);
                }
            },
            /////////////////// INIT

            cancelCurrentEditor: function () {
                this._resetEditor(this.options, true);
            },

            saveCurrentSettings: function () {
                var messageSave = this.options.panelMessageSave;
                var messageError = this.options.panelMessageError;

                Logger.debugMessage('dumping preferences start');
                var objectsToSave = [];
                $.each(this.options.dropAreas, function (index, item) {

                    var currentIndex = 0;

                    Logger.debugMessage('==============');
                    Logger.debugMessage('begin drop area ' + item.ColumnId);

                    $.each(item.userPrefByCol, function (indexPref, itemPref) {
                        var tmp = $.extend({}, itemPref);
                        tmp.ColumnId = item.ColumnId;
                        tmp.RowId = currentIndex++;
                        objectsToSave.push(tmp);                        
                        Logger.debugMessage(indexPref + ' - pref: ' + JSON.stringify(tmp));
                    });

                    Logger.debugMessage('==============');

                });


                var onSuccessFunction = function (v1, v2, v3, v4) {
                    messageSave.show();
                }
                var onErrorFunction = function (v1, v2, v3, v4) {
                    messageError.show();
                }
                

                communicationSendObject(this.options.saveUrl, objectsToSave, onSuccessFunction, onErrorFunction);

            },
            extactOwner: function (uiItem) {
                if (uiItem) {
                    var owner = uiItem.data("owner");
                    if (owner)
                        return owner;
                }
                return null;
            },
            getPeekArea: function () {
                return this.options.peekArea;
            },
            getDropAreas: function () {
                return this.options.dropAreas;
            }
        });

})(jQuery);