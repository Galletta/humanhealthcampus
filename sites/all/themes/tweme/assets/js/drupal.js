(function ($) {
  $(document).ready(function() {
    $('.field-type-text-long table').addClass('table table-bordered');
    $('.field-type-text-with-summary table').addClass('table table-bordered');

	$(".library-link").click( function() { 
	     $(this).parent().toggleClass('active');
	     return false;
	});
  });
})(jQuery);
