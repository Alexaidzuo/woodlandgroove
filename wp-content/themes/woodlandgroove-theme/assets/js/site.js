'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const Slick = require('./site/slick');
const Bar = require('./site/donateBar');

jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();
  Slick.init();
  Bar.init();

});