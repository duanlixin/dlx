<%extends file='../common/base.tpl'%>
<%block name=b_title%>网站标题<%/block%>

<%block name=b_pagecss%>
<!--
<link rel="stylesheet" href="../src/css/site.css" />
-->
<%/block%>
<%block name=b_pagehead%>
<%strip%>
    <%include file="../common/head.tpl" clazz="service"%>
<%/strip%>
<%/block%>

<%block name=b_pagebody%>
<div class="main">
    <%include file="../common/banner.tpl"%>

    <%include file="../common/nav.tpl"%>

    <%include file="../common/content.tpl"%>
</div>
<%/block%>

<%block name=b_pagefoot%>
    <%include file="../common/foot.tpl"%>
<%/block%>

<%block name=b_pagejs%>
<script src="<%$url_prex%>/src/dist/jquery-1.11.3.js"></script>
<script src="<%$url_prex%>/src/dist/tab.js"></script>

<script>
    $(document).ready(function(){
        tabs('.nav');
    });
</script>
<%strip%>
<!--
<script>
    require.config({
        baseUrl: '<%$PATH%>/src',
        packages: [
            {
                name: 'xxx',
                location: '../dep/xxx/src',
                main: 'main'
            },
            {
                name: 'qrCode',
                location: '../dep/yyy/src',
                main: 'main'
            }
        ]
    });

    require(['XXX'], function (site) {
        site.init();
    });
</script>
-->
<%/strip%>
<%/block%>
