$(".img_container").mouseover(function() {
	$(".xray_box").removeClass("box_out");
	$(".xray_box").addClass("box_in");
	setTimeout(function() {
		$("img").attr("src", "https://beta.michaelrappaz.com/img/xray.png");
	}, 175); //delay has to be EXACTLY half the animation time so that the img change stays invisible
});
$(".img_container").mouseout(function() {
	$(".xray_box").removeClass("box_in");
	$(".xray_box").addClass("box_out");
	setTimeout(function() {
		$("img").attr("src", "https://beta.michaelrappaz.com/img/parallax.png");
	}, 175); //delay has to be EXACTLY half the animation time so that the img change stays invisible
});