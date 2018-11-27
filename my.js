$(document).ready(function() {
	$(".vertical-tab-menu>.list-group>a").click(function(e) {
		e.preventDefault();
		$(this).siblings('a.active').removeClass("active");
		$(this).addClass("active");
		var index = $(this).index();
		$(".vertical-tab>.vertical-tab-content").removeClass("active");
		$(".vertical-tab>.vertical-tab-content").eq(index).addClass("active");
	});
});


(function($) {
$(function() {

  $('#up').click(function() {
    $('html, body').animate({scrollTop: 0},500);
    return false;
  });

})
})(jQuery)
