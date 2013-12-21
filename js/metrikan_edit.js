(function(window, undefined) {

	var metrikan = (function() {

		var mk = {
			domOutliner: null,

			loadScripts: function(_fnCallback) {
				jQuery.getScript('js/jquery/jquery.dom-outline-1.0.js', function() {
					mk.domOutliner = DomOutline({ 
						onClick: function(element) {
							mk.domOutlinerCallback(element);
						}
					});

					if(_fnCallback && typeof _fnCallback === 'function') {
						_fnCallback();
					}
				});
			},

			buildTools: function() {				
				var css = '.metrikanTools { position:relative; width: 100%; height: 30px; top:0; left: 0; border:1px solid red; }';
				mk.helpers.writeStylesheet(css);

				var html = '<div class="metrikanTools"></div>';
				var wrapper = jQuery(html).prependTo('body');
				jQuery('<a href="#">Inspect</a>').appendTo(wrapper).on('click', function(e) {
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