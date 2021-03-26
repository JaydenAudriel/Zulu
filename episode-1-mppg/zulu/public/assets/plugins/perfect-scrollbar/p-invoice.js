(function($) {
	"use strict";	
	
	//P-scrolling
	const ps31 = new PerfectScrollbar('.invoicelist', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	
	//P-scrolling
	const ps32 = new PerfectScrollbar('.invoicedetailspage', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	
})(jQuery);