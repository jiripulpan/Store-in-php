$(function() {
    /* Sign In/Sign Up */
	$(".signin-and-signup-form").hide();
    $('.signin-and-signup-button').click(function(e) {
        if($(".signin-and-signup-form").is(':visible')){
            $(".signin-and-signup-form").fadeOut(200);
        }else{
            $(".signin-and-signup-form").fadeIn(200);
        }
        e.preventDefault();
    });
    /* Shopping cart */
    $(".shopping-cart").hide();
    $('.shopping-cart-button').click(function(e) {
        if($(".shopping-cart").is(':visible')){
            $(".shopping-cart").fadeOut(200);
        }else{
            $(".shopping-cart").fadeIn(200);
        }
        e.preventDefault();
	});
});
