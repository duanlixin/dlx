<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:04
         compiled from "..\tpl\page\introduces.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19392567b80fc18a190-94203475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47fdb4db349f0c819a4771021991809ed8684b77' => 
    array (
      0 => '..\\tpl\\page\\introduces.tpl',
      1 => 1450933883,
      2 => 'file',
    ),
    'bed88a7e15bbce67ec682ef1d7e7d4663d7f74ec' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\base.tpl',
      1 => 1450933882,
      2 => 'file',
    ),
    '402343636c33d91592d0c8d21a9beab3c082a75a' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\default.tpl',
      1 => 1450881810,
      2 => 'file',
    ),
    '0c2aa35bd3bed1d523ee7e053dd5bdc1704a80a1' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\head.tpl',
      1 => 1450933882,
      2 => 'file',
    ),
    '389b70af1fa1136acf33c047fc0cca91845a629a' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\banner.tpl',
      1 => 1450933882,
      2 => 'file',
    ),
    'bfcbd649fface25e74bf8fff7b12747ad5b02075' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\nav.tpl',
      1 => 1450882582,
      2 => 'file',
    ),
    '222615e4d2b42a781bdc1e7ada61fac3a324c2be' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\content.tpl',
      1 => 1450882560,
      2 => 'file',
    ),
    '8cb7a6ebe3d59f8f3961b9eb5873ad7be1764963' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\foot.tpl',
      1 => 1450841498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19392567b80fc18a190-94203475',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567b80fc284196_02808884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b80fc284196_02808884')) {function content_567b80fc284196_02808884($_smarty_tpl) {?><!DOCTYPE html>

<html><head><meta charset="utf-8"><meta name="description" content="" /><title>网站标题</title><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/css/reset.css" /><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/css/head.css" />
    
<!--
<link rel="stylesheet" href="../src/css/site.css" />
-->

    
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/tab.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        tabs('.nav');
    });
<?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
>require.config({baseUrl: '<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/src',packages: [{name: 'xxx',location: '../dep/xxx/src',main: 'main'},{name: 'qrCode',location: '../dep/yyy/src',main: 'main'}]});require(['XXX'], function (site) {site.init();});<?php echo '</script'; ?>
>-->

</head>

<body>
    
<?php /*  Call merged included template "../common/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clazz'=>"introduces"), 0, '19392567b80fc18a190-94203475');
content_567b80fc226592_10130473($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/head.tpl" */?>

    
<div class="main">
    <?php /*  Call merged included template "../common/banner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19392567b80fc18a190-94203475');
content_567b80fc264d94_61932897($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/banner.tpl" */?>

    <?php /*  Call merged included template "../common/nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19392567b80fc18a190-94203475');
content_567b80fc268c17_24927618($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/nav.tpl" */?>

    <?php /*  Call merged included template "../common/content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19392567b80fc18a190-94203475');
content_567b80fc26ca96_05965377($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/content.tpl" */?>
</div>

    
    <?php /*  Call merged included template "../common/foot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19392567b80fc18a190-94203475');
content_567b80fc274790_78108085($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/foot.tpl" */?>

<!--<?php echo '<script'; ?>
 src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-8/esl.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>require.config({baseUrl: 'xxx/src',paths: {passDomain: 'xxx',js: 'common/js',css: 'common/css',ecom: 'http://s1.bdstatic.com/r/www/cache/biz/ecom'},packages: [{name: 'jquery',location: '../dep/jquery',main: 'jquery1.9.0'},{name: 'qrCode',location: '../dep/jquery-qrcode/src',main: 'jquery.qrcode'}]});<?php echo '</script'; ?>
>-->
    
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/tab.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        tabs('.nav');
    });
<?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
>require.config({baseUrl: '<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/src',packages: [{name: 'xxx',location: '../dep/xxx/src',main: 'main'},{name: 'qrCode',location: '../dep/yyy/src',main: 'main'}]});require(['XXX'], function (site) {site.init();});<?php echo '</script'; ?>
>-->

<!--<?php echo '<script'; ?>
>var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa236098d9e01fb7877977ac4f7d38d64' type='text/javascript'%3E%3C/script%3E"));<?php echo '</script'; ?>
>--></body></html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:04
         compiled from "D:\workspace\smarty\demo\tpl\common\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80fc226592_10130473')) {function content_567b80fc226592_10130473($_smarty_tpl) {?><div class="header">
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
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/index.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index')) {?>cur<?php }?>">网站首页</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/introduces.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='introduces')) {?>cur<?php }?>">公司介绍</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/service.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='service')) {?>cur<?php }?>">服务内容</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/case.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='case')) {?>cur<?php }?>">经典案例</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/partner.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='partner')) {?>cur<?php }?>">合作伙伴</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/news.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='news')) {?>cur<?php }?>">新闻动态</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/page/contact.php" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='contact')) {?>cur<?php }?>">联系我们</a>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:04
         compiled from "D:\workspace\smarty\demo\tpl\common\banner.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80fc264d94_61932897')) {function content_567b80fc264d94_61932897($_smarty_tpl) {?><div class="banner"><img src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/images/trees.jpg" alt="banner" title="banner"></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:04
         compiled from "D:\workspace\smarty\demo\tpl\common\nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80fc268c17_24927618')) {function content_567b80fc268c17_24927618($_smarty_tpl) {?><div class="nav"><div class="nav-title">title</div><ul><li class="cur">1111111111</li><li>2222222222222222</li><li>3333333333333333</li><li>4444444444444</li><li>555555555555</li><li>6666666666666</li></ul></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:04
         compiled from "D:\workspace\smarty\demo\tpl\common\content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80fc26ca96_05965377')) {function content_567b80fc26ca96_05965377($_smarty_tpl) {?><div class="container"><div class="content cur">1111111111</div><div class="content">2222222222222222</div><div class="content">3333333333333333</div><div class="content">4444444444444</div><div class="content">555555555555</div><div class="content">6666666666666</div></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:04
         compiled from "D:\workspace\smarty\demo\tpl\common\foot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80fc274790_78108085')) {function content_567b80fc274790_78108085($_smarty_tpl) {?><div class="footer">
    <p>&copy;2015&nbsp;xxx&nbsp;<a href="#" target="_blank">使用前必读</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;<a href="#" target="_blank">xxxxxxxx</a>&nbsp;&nbsp;&nbsp;&nbsp;京ICP证xxxxx号</p>
</div>
<?php }} ?>
