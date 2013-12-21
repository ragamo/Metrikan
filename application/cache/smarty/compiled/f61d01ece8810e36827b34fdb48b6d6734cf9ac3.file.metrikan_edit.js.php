<?php /* Smarty version Smarty-3.0.8, created on 2013-12-21 18:55:30
         compiled from "application/views/js/metrikan_edit.js" */ ?>
<?php /*%%SmartyHeaderCode:112303664252b60e529fb7b0-88692162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61d01ece8810e36827b34fdb48b6d6734cf9ac3' => 
    array (
      0 => 'application/views/js/metrikan_edit.js',
      1 => 1387662927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112303664252b60e529fb7b0-88692162',
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
				console.log(mk.getElementPath(element));
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