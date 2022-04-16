"use strict";


/**
 * 1. Add [ "slick-carousel": "1.8.1" ], to package.json
 * 2. npm install
 * 3. Import slick scss file in assets/scss/plugins/slick.scss => @import "../../../node_modules/slick-carousel/slick/slick.scss";
 * 4. Add require('slick-carousel');
 * 5. Initialize slick
 *
*/
require('slick-carousel');

module.exports = {

	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		slickSlider: $(".slick"),
	},


	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		this.$dom.slickSlider.slick({
			slidesToScroll: 1,
			slidesToShow: 1,
			centerMode: true,
			centerPadding: 100,
			arrows: true,
			fade: true,
			infinite: true,
			autoplay: true,
			speed: 800,
			pauseOnHover: true,
			nextArrow: '<span class="icon-angle-right"></span>',
      		prevArrow: '<span class="icon-angle-left"></span>',
		});

	}
};