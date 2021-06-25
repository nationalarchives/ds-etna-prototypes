var $contents = $("#contents");
var $chapters = $("#contents ul li a");
var $contentsToggleBtn = $("#contents-toggle button");

$contentsToggleBtn.click(function(){
	$(this).toggleClass("expanded");
	$contents.slideToggle();
});

$chapters.each(function () {
	$(this).click(function() {
		var target = $(this).attr('href');

		$contentsToggleBtn.toggleClass("expanded");

		$contents.slideUp();
		$('html, body').animate({
			scrollTop: $(target).offset().top - 325
		}, 600);
	})
})
