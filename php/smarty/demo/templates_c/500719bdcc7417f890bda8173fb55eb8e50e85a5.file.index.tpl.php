<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:01
         compiled from "..\tpl\page\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26270567b80f9153698-02841358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500719bdcc7417f890bda8173fb55eb8e50e85a5' => 
    array (
      0 => '..\\tpl\\page\\index.tpl',
      1 => 1450933788,
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
    'e0ec072207d21f88afc966d1a428e0f402d5273b' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\indexbox1.tpl',
      1 => 1450884448,
      2 => 'file',
    ),
    '8cb7a6ebe3d59f8f3961b9eb5873ad7be1764963' => 
    array (
      0 => 'D:\\workspace\\smarty\\demo\\tpl\\common\\foot.tpl',
      1 => 1450841498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26270567b80f9153698-02841358',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567b80f921e892_84444451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b80f921e892_84444451')) {function content_567b80f921e892_84444451($_smarty_tpl) {?><!DOCTYPE html>

<html><head><meta charset="utf-8"><meta name="description" content="" /><title>网站标题</title><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/css/reset.css" /><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/css/head.css" />
    
<link href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/jquery.bxslider.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/css/index.css" rel="stylesheet" />

    
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/tab.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
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
    
<?php echo '</script'; ?>
>
<!--
<?php echo '<script'; ?>
>
    require.config({
        baseUrl: '<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/src',
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
<?php echo '</script'; ?>
>
-->


</head>

<body>
    
<?php /*  Call merged included template "../common/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clazz'=>"index"), 0, '26270567b80f9153698-02841358');
content_567b80f91c8997_68877182($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/head.tpl" */?>

    
<ul class="bxslider1"><li><img src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/images/hill_road.jpg" /></li><li><img src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/images/tree_root.jpg" /></li><li><img src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/images/trees.jpg" /></li></ul>

<div class="main">

<?php /*  Call merged included template "../common/indexbox1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/indexbox1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26270567b80f9153698-02841358');
content_567b80f9203316_63938429($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/indexbox1.tpl" */?>
<?php /*  Call merged included template "../common/indexbox1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/indexbox1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26270567b80f9153698-02841358');
content_567b80f9203316_63938429($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/indexbox1.tpl" */?>
<?php /*  Call merged included template "../common/indexbox1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/indexbox1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26270567b80f9153698-02841358');
content_567b80f9203316_63938429($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/indexbox1.tpl" */?>
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

    
    <?php /*  Call merged included template "../common/foot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26270567b80f9153698-02841358');
content_567b80f920ee92_03191139($_smarty_tpl);
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
/src/dist/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_prex']->value;?>
/src/dist/tab.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
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
    
<?php echo '</script'; ?>
>
<!--
<?php echo '<script'; ?>
>
    require.config({
        baseUrl: '<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/src',
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
<?php echo '</script'; ?>
>
-->


<!--<?php echo '<script'; ?>
>var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa236098d9e01fb7877977ac4f7d38d64' type='text/javascript'%3E%3C/script%3E"));<?php echo '</script'; ?>
>--></body></html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:01
         compiled from "D:\workspace\smarty\demo\tpl\common\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80f91c8997_68877182')) {function content_567b80f91c8997_68877182($_smarty_tpl) {?><div class="header">
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:01
         compiled from "D:\workspace\smarty\demo\tpl\common\indexbox1.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80f9203316_63938429')) {function content_567b80f9203316_63938429($_smarty_tpl) {?><div class="indexbox1"><div class="box-title"></div><img src=""><ul><li><span>xxxxxx</span><span>xxxxxx</span></li></ul></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-24 06:22:01
         compiled from "D:\workspace\smarty\demo\tpl\common\foot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_567b80f920ee92_03191139')) {function content_567b80f920ee92_03191139($_smarty_tpl) {?><div class="footer">
    <p>&copy;2015&nbsp;xxx&nbsp;<a href="#" target="_blank">使用前必读</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;<a href="#" target="_blank">xxxxxxxx</a>&nbsp;&nbsp;&nbsp;&nbsp;京ICP证xxxxx号</p>
</div>
<?php }} ?>
