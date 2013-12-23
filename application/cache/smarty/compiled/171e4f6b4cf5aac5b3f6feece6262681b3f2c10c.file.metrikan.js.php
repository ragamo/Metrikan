<?php /* Smarty version Smarty-3.0.8, created on 2013-12-22 15:41:58
         compiled from "application/views/js/metrikan.js" */ ?>
<?php /*%%SmartyHeaderCode:96133856752b73276927fd8-36149894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171e4f6b4cf5aac5b3f6feece6262681b3f2c10c' => 
    array (
      0 => 'application/views/js/metrikan.js',
      1 => 1387737717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96133856752b73276927fd8-36149894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
//jQuery(window).on('hashchange', function() {
//	if(window.location.hash == "#metrikan") {
		jQuery.getScript('<?php echo $_smarty_tpl->getVariable('BASE_URL')->value;?>
/metrikan/inspector/');
//	}
//});

jQuery(document).ready(function() {

	//TODO: Loop 
	/*jQuery(document).on('click','path',function() {
		_ga...
	});*/

});