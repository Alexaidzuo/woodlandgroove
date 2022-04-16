"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		amount: $('.donate-bar__amount'),
        amountInput : $('input[name=amount]')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		
        _this.bind();
    },

    bind:function(){

        _this.$dom.amount.on('click',_this.setAmount);
    },

    setAmount:function(){

        let amount = $(this).data('amount');
        _this.$dom.amountInput.val(amount);

    }

};