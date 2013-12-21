<?php /* Smarty version Smarty-3.0.8, created on 2013-12-21 19:42:17
         compiled from "application/views/tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196503973652b61949e02c74-24299544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3751292af36e8bdd4284161a4c57f8d5b8618a3' => 
    array (
      0 => 'application/views/tools.tpl',
      1 => 1387665735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196503973652b61949e02c74-24299544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style>
#metrikanTools { 
	position:fixed; 
	width: 100%; 
	height: 30px; 
	top:0; 
	left: 0; 
	font: 12px Arial;
	color: #000;
	border-bottom: 1px solid #CCC;
	background: linear-gradient(to bottom, #fefefe 0%,#dbdbdb 50%,#d1d1d1 51%,#e2e2e2 100%);
}
#metrikanTools > a {
	float: left;
	display: block;
	padding: 8px 8px 8px 20px;
	border-right: 1px solid #CCC;
}
#metrikanTools > a.pressed {
	
}
#metrikanTools .metrikanInspect {
	background: url("<?php echo $_smarty_tpl->getVariable('FULL_PATH')->value;?>
/img/cursor.png") center left no-repeat;
	color: #000;
	text-decoration: none;
}
#metrikanTools .metrikanInspect.pressed {
	background: url("<?php echo $_smarty_tpl->getVariable('FULL_PATH')->value;?>
/img/cursor.png") center left no-repeat #DDD;
}
</style>

<div id="metrikanTools">
	<a href="#" class="metrikanInspect">Inspect</a>
	<a href="#">Ver elementos marcados</a>
</div>