<?php /* Smarty version Smarty-3.0.8, created on 2013-12-22 15:35:13
         compiled from "application/views/js/metrikan_inspector.js" */ ?>
<?php /*%%SmartyHeaderCode:9661033752b730e14cd6f6-64658705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45d3af68d661e0b34571625013775345d833752' => 
    array (
      0 => 'application/views/js/metrikan_inspector.js',
      1 => 1387737311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9661033752b730e14cd6f6-64658705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
(function(window, undefined) {

	var metrikan = (function() {

		var mk = {
			domOutliner: null,

			loadScripts: function(_fnCallback) {
				var callback = function() {};
				if(_fnCallback && typeof _fnCallback === 'function') {
					callback = _fnCallback;
				}

				jQuery.getScript('<?php echo $_smarty_tpl->getVariable('FULL_PATH')->value;?>
/js/jquery/jquery.dom-outline-1.0.js', function() {
					mk.domOutliner = DomOutline({ 
						onClick: function(element) {
							mk.domOutlinerCallback(element);
						},
						onStart: function() {
							jQuery('.metrikanInspect').addClass('pressed');
							jQuery('.metrikanMark').removeClass('metrikanMark');
							jQuery('#metrikanTooltip').hide();
						},
						onStop: function() {
							jQuery('.metrikanInspect').removeClass('pressed');
						},
						onUpdate: function(element) {
							jQuery('.metrikanPath').html(mk.getElementPath(element));
						}
					});

					if(typeof jQuery.fancybox === 'undefined') {
						jQuery.getScript('<?php echo $_smarty_tpl->getVariable('FULL_PATH')->value;?>
/js/jquery/jquery.fancybox.pack.js', function() {
							jQuery.get('<?php echo $_smarty_tpl->getVariable('BASE_URL')->value;?>
/metrikan/loadFancyboxCss/', function(data) {
								mk.helpers.writeStylesheet(data);
								callback();
							});
						});

					} else {
						callback();
					}

				});
			},

			buildTools: function() {				
				jQuery('<?php echo $_smarty_tpl->getVariable('tools')->value;?>
').prependTo('body');

				jQuery('.metrikanInspect').on('click', function(e) {
					e.preventDefault();
					if(mk.domOutliner)
						mk.domOutliner.start();
				});
			},

			domOutlinerCallback: function(element) {
				var path = mk.getElementPath(element);
				var element = jQuery(element).addClass('metrikanMark');

				jQuery('#metrikanTooltip').css({
					top: element.offset().top + element.height() + 10,
					left: element.offset().left +10
				}).show();
			},

			getElementPath: function(element) {
				if(!element) return null;

			    var path, node = jQuery(element);
			    while (node.length) {
			        var realNode = node[0], name = realNode.localName;
			        if (!name) break;
			        name = name.toLowerCase();

			        var parent = node.parent();

			        var siblings = parent.children(name);
			        if (siblings.length > 1) { 
			            name += ':eq(' + siblings.index(realNode) + ')';
			        }

			        path = name + (path ? '>' + path : '');
			        node = parent;
			    }

			    return path;
			},

			start: function() {
				this.loadScripts(function() {
					mk.buildTools();
				});
			},

			/**
			 * HELPERS 
			 */
			helpers: {
				writeStylesheet: function(css) {
					var element = document.createElement('style');
					element.type = 'text/css';
					document.getElementsByTagName('head')[0].appendChild(element);

					if (element.styleSheet) element.styleSheet.cssText = css; // IE
					else element.innerHTML = css; // Non-IE
				},

				loadStylesheet: function(url) {
					var fileref = document.createElement("link")
					fileref.setAttribute("rel", "stylesheet")
					fileref.setAttribute("type", "text/css")
					fileref.setAttribute("href", url)
					document.getElementsByTagName("head")[0].appendChild(fileref);
				}
			}
		};

		mk.start();

		//Interfaz publica
		return {

		};

	})();

	window.metrikan = metrikan;
})( window );