<%extends file="./default.tpl" %>
<%block name=p_head%>
<%strip%>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="" />
    <title><%block name=b_title%><%/block%></title>
    <link rel="stylesheet" href="<%$url_prex%>/src/css/reset.css" />
    <link rel="stylesheet" href="<%$url_prex%>/src/css/head.css" />
<%/strip%>
    <%block name=b_pagecss%><%/block%>
    <%block name=b_pagejs%><%/block%>
</head>
<%/block%>
