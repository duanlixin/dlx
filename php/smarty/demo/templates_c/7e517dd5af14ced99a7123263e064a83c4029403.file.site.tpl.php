<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 06:30:13
         compiled from "..\tpl\page\site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125765678dfe53c24f4-62842481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e517dd5af14ced99a7123263e064a83c4029403' => 
    array (
      0 => '..\\tpl\\page\\site.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
    'bed88a7e15bbce67ec682ef1d7e7d4663d7f74ec' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\base.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
    '402343636c33d91592d0c8d21a9beab3c082a75a' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\default.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
    '0c2aa35bd3bed1d523ee7e053dd5bdc1704a80a1' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\head.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
    '8cb7a6ebe3d59f8f3961b9eb5873ad7be1764963' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\foot.tpl',
      1 => 1419092524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125765678dfe53c24f4-62842481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5678dfe549d143_47277596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5678dfe549d143_47277596')) {function content_5678dfe549d143_47277596($_smarty_tpl) {?><!DOCTYPE html>

<html><head><meta charset="utf-8"><meta name="description" content="" /><title>网站标题</title>
    
<!--
<link rel="stylesheet" href="../src/css/site.css" />
-->

</head>

<body>
    
<?php /*  Call merged included template "../common/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clazz'=>"index1"), 0, '125765678dfe53c24f4-62842481');
content_5678dfe54433a4_66676253($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/head.tpl" */?>

    
I AM BODY

    
    <?php /*  Call merged included template "../common/foot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '125765678dfe53c24f4-62842481');
content_5678dfe5481bc0_24378961($_smarty_tpl);
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 06:30:13
         compiled from "D:\workspace\smarty\demo\tpl\common\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5678dfe54433a4_66676253')) {function content_5678dfe54433a4_66676253($_smarty_tpl) {?><header >
    <nav>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index1')) {?>cur<?php }?>">index1</a>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index2')) {?>cur<?php }?>">index2</a>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index3')) {?>cur<?php }?>">index3</a>
        <a href="#" class="<?php if ((!empty($_smarty_tpl->tpl_vars['clazz']->value)&&$_smarty_tpl->tpl_vars['clazz']->value=='index4')) {?>cur<?php }?>">index4</a>
    </nav>
</header>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-22 06:30:13
         compiled from "D:\workspace\smarty\demo\tpl\common\foot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5678dfe5481bc0_24378961')) {function content_5678dfe5481bc0_24378961($_smarty_tpl) {?><footer>
    <p>&copy;2015&nbsp;xxx&nbsp;<a href="#" target="_blank">使用前必读</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;<a href="#" target="_blank">xxxxxxxx</a>&nbsp;&nbsp;&nbsp;&nbsp;京ICP证xxxxx号</p>
</footer>
<?php }} ?>
