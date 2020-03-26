<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<%@ taglib uri="/WEB-INF/tld/struts-html-el.tld" prefix="html" %>
<%@taglib uri="/WEB-INF/tld/struts-tiles-el.tld" prefix="tiles"%>
<%@ taglib uri="/WEB-INF/tld/c.tld" prefix="c" %>
<%@ taglib uri="/WEB-INF/tld/fmt.tld" prefix="fmt" %>
<fmt:message key="date.format" var="fmtdate" />
<html:xhtml/>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<jsp:include page="/jsp/ht/common/meta.jsp" flush="true"/>
	<jsp:include page="/jsp/ht/common/css.jsp" flush="true" />
	<tiles:insert attribute="javascript" ignore="true"/>
	<tiles:insert attribute="head" ignore="true"/>
	<title><c:out value="${resultBean.titoloHomepage}" /></title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<tiles:insert attribute="gridHeader" ignore="true"/>
			<tiles:insert attribute="gridNavigazione" ignore="true"/>	
			<tiles:insert attribute="breadcrumb" ignore="true"/>
		<c:if test="${resultBean.ruoloRif !=null}">
			<p class="pull-left visible-xs-block">
            	<button id="menu-mobile" type="button" class="btn-menu" data-toggle="offcanvas" >
            	<span class="icon-bar"></span> 
        		<span class="icon-bar"></span> 
        		<span class="icon-bar"></span> 
            	</button>
          	</p>
          	</c:if>
		</div>
		<div class="main row row-offcanvas row-offcanvas-left">
			<div class="container">
				<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs">
					<tiles:insert attribute="contentLeft" ignore="true"/>
				</div>
				<div id="mainContent" class="center col-sm-80 col-xs-12">
					<div class="visible-print-block"> 
						<html:img src="${resultBean.urlImages}nGrafica/logo.png" altKey="button.pref.tornaHomepage" titleKey="button.pref.tornaHomepage" />
						<div class="pull-right">
							<jsp:useBean id="now" class="java.util.Date"/>  
							<fmt:formatDate type="date" value="${now}" pattern="${fmtdate}" />	
						</div>
					</div>
					<tiles:insert attribute="contentPage" ignore="true"/>
					<tiles:insert attribute="contentCenter" ignore="true"/>
					<tiles:insert attribute="form" ignore="true"/>
					<tiles:insert attribute="opera" ignore="true"/>
				</div>
						<c:if test="${resultBean.ruoloRif !=null}">
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-print" id="sidebar">
					<div class="sidebar-container">
				 		<div class="list-group">
							<jsp:include page="/jsp/ht/common/gridNavigazioneHTresponsive.jsp" flush="true"/>
						</div>
					</div>
		        </div>
		        </c:if>
			</div>
		</div>
	</div><!--  .wrapper -->
	<div id="divFooter">
		<tiles:insert attribute="footer" ignore="true"/>
	</div>
</body>
</html>