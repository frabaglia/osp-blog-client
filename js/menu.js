$(document).ready(function(){
	$("#menuButton").click(function(){
		console.log(1);
		var menuOpened = $("#menuContent").hasClass("menu-content-mobile");

		if (menuOpened){
			$("#menuContent").removeClass("menu-content-mobile");
			$("#menuContent").addClass("menu-content");
		}
		else {
			$("#menuContent").removeClass("menu-content");
			$("#menuContent").addClass("menu-content-mobile");
		}
	});
	
	function toggleMenu () {
		if($(window).scrollTop() >= 25)
			$(".navbar-fixed").addClass("shrink");
		else
			$(".navbar-fixed").removeClass("shrink");		
	}
	
	$(document).scroll(function(){
		toggleMenu ();
	});
	
	toggleMenu();
	
});

