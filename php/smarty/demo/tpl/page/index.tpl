<%extends file='../common/base.tpl'%>
<%block name=b_title%>网站标题<%/block%>

<%block name=b_pagecss%>
<link href="<%$url_prex%>/src/dist/jquery.bxslider.css" rel="stylesheet" />
<link href="<%$url_prex%>/src/css/index.css" rel="stylesheet" />
<%/block%>
<%block name=b_pagehead%>
<%strip%>
    <%include file="../common/head.tpl" clazz="index"%>
<%/strip%>
<%/block%>

<%block name=b_pagebody%>
<%strip%>
<ul class="bxslider1">
  <li><img src="<%$url_prex%>/src/images/hill_road.jpg" /></li>
  <li><img src="<%$url_prex%>/src/images/tree_root.jpg" /></li>
  <li><img src="<%$url_prex%>/src/images/trees.jpg" /></li>
</ul>
<%/strip%>

<div class="main">

<%include file="../common/indexbox1.tpl"%>
<%include file="../common/indexbox1.tpl"%>
<%include file="../common/indexbox1.tpl"%>
</div>
<div class="slider1" style="width: 200px;">
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar1"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar2"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar3"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar4"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar5"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar6"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar7"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar8"></div>
  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar9"></div>
</div>
<%/block%>

<%block name=b_pagefoot%>
    <%include file="../common/foot.tpl"%>
<%/block%>

<%block name=b_pagejs%>
<script src="<%$url_prex%>/src/dist/jquery-1.11.3.js"></script>
<script src="<%$url_prex%>/src/dist/jquery.bxslider.min.js"></script>
<script src="<%$url_prex%>/src/dist/tab.js"></script>

<script>
    $(document).ready(function(){
        $('.bxslider1').bxSlider({
            auto: true
        });
        $('.slider1').bxSlider({
            minSlides: 3,
            maxSlides: 4,
            slideWidth: 100,
            slideMargin: 10,
            ticker: true,
            speed: 66000
          });
    });
    
</script>
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

<%/block%>
