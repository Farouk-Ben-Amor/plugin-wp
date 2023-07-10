/** @format */

jQuery(document).ready(function ($) {
	var cookie = Cookies.get('myCookieFromCookiePlugin');
	var declineCookie = Cookies.get('declineCookie');
	if (!cookie && !declineCookie) {
		$('body').append("<div id='cookieBanner'></div>");
		$('#cookieBanner').load(
			'wp-content/plugins/cookie-plugin/template.html',
			function () {
				function hideBanner() {
					$('#cookieBanner').remove();
				}
				$('#accept').on('click', function () {
					Cookies.set('myCookieFromCookiePlugin', true);
					hideBanner();
				});
				$('#decline').on('click', function () {
					Cookies.set('declineCookie', false);
					hideBanner();
				});
			}
		);
	}
});

// $('.wp-block-post-title').css('color','red')
// $('body').append('<div>Hello from app.js</div>')
// $('body').append("<div class='alert alert-primary' role='alert'>Hello from app.js with bootstrap</div>")
