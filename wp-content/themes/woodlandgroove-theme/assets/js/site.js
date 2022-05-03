'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const Slick = require('./site/slick');
const Bar = require('./site/donateBar');
const SmoothScroll = require('./site/smoothScroll');

jQuery( function(){

  /**
   * Initialize
   */
  Navigation.init();
  Slick.init();
  Bar.init();
  SmoothScroll.init();

});