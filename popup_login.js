jQuery(document).ready(function ($) {
	var body = jQuery('body');

	$(".sign_in_but").click(function() {
		$("#popup-login").css("display", "block");
	});

	$(".popup-cancel").click(function() {
		$("#popup-login").css("display", "none");
	});

	$(".log_switch").click(function(){
		$("#popup-registration").css("display", "none");
		$("#popup-login").css("display", "block");
	})

	$(".reg_switch").click(function(){
		$("#popup-login").css("display", "none");
		$("#popup-registration").css("display", "block");
	})
});