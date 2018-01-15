var ComingSoon = function () {

    return {
        //main function to initiate the module
        init: function () {
            var austDay = new Date();
            austDay = new Date(austDay.getFullYear() + 1, 2 - 1, 17);
            $('#defaultCountdown').countdown({until: austDay});
            $('#year').text(austDay.getFullYear());

            $.backstretch([
		            "../img/bg/1.jpg",
		            "../img/bg/2.jpg",
		            "../img/bg/3.jpg",
		    		"../img/bg/4.jpg"
		        ], {
		        fade: 1000,
		        duration: 10000
		   });
        }

    };

}();

jQuery(document).ready(function() {    
   ComingSoon.init(); 
});