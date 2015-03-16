$(document).ready(function(){
	$(document).scroll(function(){
		var el = $('.masthead h3')
		var top = el.offset().top - $(document).scrollTop();
		if(top < 5){
			$("nav").addClass("navbar-fixed-top");
		}
		if($(document).scrollTop() < 20){
			$("nav").removeClass("navbar-fixed-top");
		}
	});
});