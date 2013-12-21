(function(window, undefined) {

	var metrikan = (function() {

		var mk = {
			domOutliner: null,

			loadScripts: function(_fnCallback) {
				var callback = function() {};
				if(_fnCallback && typeof _fnCallback === 'function') {
					callback = _fnCallback;
				}

				jQuery.getScript('{$FULL_PATH}/js/jquery/jquery.dom-outline-1.0.js', function() {
					mk.domOutliner = DomOutline({ 
						onClick: function(element) {
							mk.domOutlinerCallback(element);
						}
					});

					if(typeof jQuery.fancybox === 'undefined') {
						jQuery.getScript('{$FULL_PATH}/js/jquery/jquery.fancybox.pack.js', function() {
							jQuery.get('{$BASE_URL}/metrikan/loadFancyboxCss/', function(data) {
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
				jQuery('{$tools}').prependTo('body');

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