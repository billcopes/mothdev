/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'moth-luna\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-print': '&#x77;',
		'icon-top': '&#x5e;',
		'icon-mark': '&#x2a;',
		'icon-down': '&#x23;',
		'icon-uniF000': '&#x71;',
		'icon-facebook': '&#x66;',
		'icon-plus': '&#x2b;',
		'icon-close': '&#x78;',
		'icon-next': '&#x6e;',
		'icon-prev': '&#x76;',
		'icon-menu': '&#x7a;',
		'icon-moth-logo': '&#x21;',
		'icon-m-top': '&#x75;',
		'icon-m-next': '&#x73;',
		'icon-pencil': '&#x70;',
		'icon-m-prev': '&#x6c;',
		'icon-m-down': '&#x72;',
		'icon-camera': '&#x63;',
		'icon-award': '&#x61;',
		'icon-bulb': '&#x62;',
		'icon-eye': '&#x65;',
		'icon-web': '&#x68;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
