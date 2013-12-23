<?php /* Smarty version Smarty-3.0.8, created on 2013-12-22 22:24:12
         compiled from "application/views/tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36140742052b790bcb1dac6-47095870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3751292af36e8bdd4284161a4c57f8d5b8618a3' => 
    array (
      0 => 'application/views/tools.tpl',
      1 => 1387761850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36140742052b790bcb1dac6-47095870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style>
.metrikanMark {
	outline: 2px solid #F00;
}
#metrikanTools { 
	position:fixed; 
	width: 100%; 
	height: 30px; 
	top:0; 
	left: 0; 
	font: 12px Arial;
	color: #333;
	border-bottom: 1px solid #CCC;
	background: linear-gradient(to bottom, #fefefe 0%,#dbdbdb 50%,#d1d1d1 51%,#e2e2e2 100%);
	text-shadow:0px 1px 0px #EEE;
}
#metrikanTools > a {
	float: left;
	display: block;
	padding: 8px 12px 8px 25px;
	border-right: 1px solid #CCC;
	color: #333;
	text-decoration: none;
}
#metrikanTools > a.pressed {
	background-color: #DDD;
}
#metrikanTools .metrikanInspect {
	background: url("<?php echo $_smarty_tpl->getVariable('FULL_PATH')->value;?>
/img/cursor.png") 5px center no-repeat;
}
#metrikanTools .metrikanElements {
	background: url("<?php echo $_smarty_tpl->getVariable('FULL_PATH')->value;?>
/img/script_code_red.png") 5px center no-repeat;
}
#metrikanTools .metrikanTools {
	float: left;
	font-weight: bold;
	padding: 8px;
	border-right: 1px solid #CCC;
}
#metrikanTools .metrikanPath {
	padding: 8px;
	float: left;
	color: #666;
}

#metrikanTooltip {
	display: none;
	position: absolute;
	background:#FFF;
	width: 450px;
	box-shadow: 0 0 3px #CCC;
	border:1px solid #CCC;
	border-radius: 3px;
}
#metrikanTooltip .metrikanFlecha {
	position: absolute;
	width: 0px;
	height: 0px;
	border-style: solid;
	border-width: 0 10px 10px 10px;
	border-color: transparent transparent #FFF transparent;
	top: -10px;
	left: 15px;
}
#metrikanTooltip .metrikanInfo {
	padding: 10px;
	font: 12px Arial;
}
#metrikanTooltip .metrikanFila:first-child {
	margin: 0 0 10px 0;
}
#metrikanTooltip .metrikanInfo label {
	display: block;
	float: left;
	width: 50px;
	margin: 6px 0 0 0;
	color: #666;
}
#metrikanTooltip .metrikanInfo select {
	/*padding: 5px;*/
	width: 100px;
}
#metrikanTooltip .metrikanInfo input {
	border:1px solid #CCC;
	width: 365px;
	padding: 5px;
}

</style>

<div id="metrikanTools">
	<div class="metrikanTools">Metrikan Tools</div>
	<a href="#" class="metrikanInspect">Inspeccionar</a>
	<a href="#" class="metrikanElements">Ver elementos tageados</a>
	<div class="metrikanPath"></div>
</div>


<div id="metrikanTooltip">
	<div class="metrikanFlecha"></div>
	<div class="metrikanInfo">
		<div class="metrikanFila">
			<label for="metrikanEvent">Evento</label>
			<select name="metrikanEvent" id="metrikanEvent">
				<option value="click">Click</option>
			</select>
		</div>
		<div class="metrikanFila">
			<label for="metrikanValue">Valor</label>
			<input type="text">
		</div>
	</div>
</div>