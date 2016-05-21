<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 15:01:24
         compiled from "..\tpl\page\site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30103567957b400bb87-70549891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748b8ffba0e34071eb4828361307032a7dd3b188' => 
    array (
      0 => '..\\tpl\\page\\site.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
    '8c5144b2284b35980bd93b9a861abba18ea08068' => 
    array (
      0 => 'E:\\xampp\\htdocs\\workspace\\smarty\\demo\\tpl\\common\\base.tpl',
      1 => 1419092524,
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
      1 => 1419092524,
      2 => 'file',
    ),
    '065673591ca385d8ff181a095814606a552b5221' => 
    array (
      0 => 'E:\\xampp\\htdocs\\workspace\\smarty\\demo\\tpl\\common\\foot.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30103567957b400bb87-70549891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567957b41ec308_45230307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567957b41ec308_45230307')) {function content_567957b41ec308_45230307($_smarty_tpl) {?><!DOCTYPE html>

<html><head><meta charset="utf-8"><meta name="description" content="" /><title>网站标题</title>
    
<!--
<link rel="stylesheet" href="../src/css/site.css" />
-->

</head>

<body>
    
<?php /*  Call merged included template "../common/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clazz'=>"index1"), 0, '30103567957b400bb87-70549891');
content_567957b416f300_62990462($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/head.tpl" */?>

    
I AM BODY

    
    <?php /*  Call merged included template "../common/foot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '30103567957b400bb87-70549891');
content_567957b41c9084_72246473($_smarty_tpl);
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 15:01:24
         compiled from "E:\xampp\htdocs\workspace\smarty\demo\tpl\common\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567957b416f300_62990462')) {function content_567957b416f300_62990462($_smarty_tpl) {?><header >
    <nav>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index1')) {?>cur<?php }?>">index1</a>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index2')) {?>cur<?php }?>">index2</a>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index3')) {?>cur<?php }?>">index3</a>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index4')) {?>cur<?php }?>">index4</a>
    </nav>
</header>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 15:01:24
         compiled from "E:\xampp\htdocs\workspace\smarty\demo\tpl\common\foot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567957b41c9084_72246473')) {function content_567957b41c9084_72246473($_smarty_tpl) {?><footer>
    <p>&copy;2015&nbsp;xxx&nbsp;<a href="#" target="_blank">使用前必读</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;<a href="#" target="_blank">xxxxxxxx</a>&nbsp;&nbsp;&nbsp;&nbsp;京ICP证xxxxx号</p>
</footer>
<?php }} ?>
