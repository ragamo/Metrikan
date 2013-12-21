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
	background: url("{$FULL_PATH}/img/cursor.png") center left no-repeat;
	color: #000;
	text-decoration: none;
}
#metrikanTools .metrikanInspect.pressed {
	background: url("{$FULL_PATH}/img/cursor.png") center left no-repeat #DDD;
}
</style>

<div id="metrikanTools">
	<a href="#" class="metrikanInspect">Inspect</a>
	<a href="#">Ver elementos marcados</a>
</div>