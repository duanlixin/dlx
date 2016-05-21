<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 16:02:12
         compiled from "..\tpl\page\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29057567961917c4480-34732495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6355c867c525a1f15458b12fae4f4dff69a5eda5' => 
    array (
      0 => '..\\tpl\\page\\news.tpl',
      1 => 1450795366,
      2 => 'file',
    ),
    '8c5144b2284b35980bd93b9a861abba18ea08068' => 
    array (
      0 => 'E:\\xampp\\htdocs\\workspace\\smarty\\demo\\tpl\\common\\base.tpl',
      1 => 1450796046,
      2 => 'file',
    ),
    'ef2a9cba3584b4c6feb88dfeb5d83f0cacbc2be0' => 
    array (
      0 => 'E:\\xampp\\htdocs\\workspace\\smarty\\demo\\tpl\\common\\default.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
    '7fb98059d70a02c3287f51656e6c7303f5546866' => 
    array (
      0 => 'E:\\xampp\\htdocs\\workspace\\smarty\\demo\\tpl\\common\\head.tpl',
      1 => 1450795197,
      2 => 'file',
    ),
    '065673591ca385d8ff181a095814606a552b5221' => 
    array (
      0 => 'E:\\xampp\\htdocs\\workspace\\smarty\\demo\\tpl\\common\\foot.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29057567961917c4480-34732495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56796191918209_18954195',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56796191918209_18954195')) {function content_56796191918209_18954195($_smarty_tpl) {?><!DOCTYPE html>

<html><head><meta charset="utf-8"><meta name="description" content="" /><title>网站标题</title><link rel="stylesheet" href="../src/css/reset.css" /><link rel="stylesheet" href="../src/css/head.css" />
    
<!--
<link rel="stylesheet" href="../src/css/site.css" />
-->

    
<!--<?php echo '<script'; ?>
>require.config({baseUrl: '<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/src',packages: [{name: 'xxx',location: '../dep/xxx/src',main: 'main'},{name: 'qrCode',location: '../dep/yyy/src',main: 'main'}]});require(['XXX'], function (site) {site.init();});<?php echo '</script'; ?>
>-->

</head>

<body>
    
<?php /*  Call merged included template "../common/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clazz'=>"news"), 0, '29057567961917c4480-34732495');
content_567965f44b7085_45697067($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/head.tpl" */?>

    
I AM news

    
    <?php /*  Call merged included template "../common/foot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '29057567961917c4480-34732495');
content_567965f4543a85_06004308($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/foot.tpl" */?>

<!--<?php echo '<script'; ?>
 src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-8/esl.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>require.config({baseUrl: 'xxx/src',paths: {passDomain: 'xxx',js: 'common/js',css: 'common/css',ecom: 'http://s1.bdstatic.com/r/www/cache/biz/ecom'},packages: [{name: 'jquery',location: '../dep/jquery',main: 'jquery1.9.0'},{name: 'qrCode',location: '../dep/jquery-qrcode/src',main: 'jquery.qrcode'}]});<?php echo '</script'; ?>
>-->
    
<!--<?php echo '<script'; ?>
>require.config({baseUrl: '<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/src',packages: [{name: 'xxx',location: '../dep/xxx/src',main: 'main'},{name: 'qrCode',location: '../dep/yyy/src',main: 'main'}]});require(['XXX'], function (site) {site.init();});<?php echo '</script'; ?>
>-->

<!--<?php echo '<script'; ?>
>var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa236098d9e01fb7877977ac4f7d38d64' type='text/javascript'%3E%3C/script%3E"));<?php echo '</script'; ?>
>--></body></html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 16:02:12
         compiled from "E:\xampp\htdocs\workspace\smarty\demo\tpl\common\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567965f44b7085_45697067')) {function content_567965f44b7085_45697067($_smarty_tpl) {?><div class="header">
    <div class="header-logo">
    	<a href="http://sports.qq.com/kbsweb/"><img src="http://mat1.gtimg.com/sports/kbsweb/statics/logo_1ed4f1.png" class="boss" data-mod="导航栏" data-action="看比赛logo"></a>
    </div>
    <div class="mini-menu">
    	<ul>
    		<li>Chinese</li>
    		<li>English</li>
    		<li>加入收藏</li>
    		<li>设为首页</li>
    	</ul>
    </div>
    <div class="menu">
        <a href="index.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index')) {?>cur<?php }?>">网站首页</a>
        <a href="introduces.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='introduces')) {?>cur<?php }?>">公司介绍</a>
        <a href="service.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='service')) {?>cur<?php }?>">服务内容</a>
        <a href="case.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='case')) {?>cur<?php }?>">经典案例</a>
        <a href="partner.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='partner')) {?>cur<?php }?>">合作伙伴</a>
        <a href="news.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='news')) {?>cur<?php }?>">新闻动态</a>
        <a href="contact.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='contact')) {?>cur<?php }?>">联系我们</a>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 16:02:12
         compiled from "E:\xampp\htdocs\workspace\smarty\demo\tpl\common\foot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567965f4543a85_06004308')) {function content_567965f4543a85_06004308($_smarty_tpl) {?><footer>
    <p>&copy;2015&nbsp;xxx&nbsp;<a href="#" target="_blank">使用前必读</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;<a href="#" target="_blank">xxxxxxxx</a>&nbsp;&nbsp;&nbsp;&nbsp;京ICP证xxxxx号</p>
</footer>
<?php }} ?>
