var $contents = $("#contents");
var $chapters = $("#contents ul li a");

$contents.hide();

$("#contents-toggle button").click(function(){
	$contents.slideToggle();
});

$chapters.each(function () {
	$(this).click(function() {
		var target = $(this).attr('href');

		$contents.slideUp();
		$('html, body').animate({
			scrollTop: $(target).offset().top - 250
		}, 600);
	})
})
