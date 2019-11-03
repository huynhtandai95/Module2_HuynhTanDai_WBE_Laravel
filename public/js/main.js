$(function(){

	$('.probootstrap-toggle').on('click', function(){
		// console.log('nice');

		var mainNav = $('.probootstrap-main-nav');


			if ( !mainNav.hasClass('active') ) {

					mainNav.addClass('active');

			} else {
				mainNav.removeClass('active');

			}




	});

});

// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
        formatCurrency($(this));
    },

});


function formatNumber(n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input) {
    var input_val = input.val();
        input_val = formatNumber(input_val);
    input.val(input_val);


}


