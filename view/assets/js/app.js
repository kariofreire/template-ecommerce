$(".produtos-recomendados").owlCarousel({
	loop: false,
	responsiveClass: true,
	margin: 10,
	nav: false,
	center: false,
	responsive: {
		0 : {
			items: 2
		},
		600 : {
			items: 3
		},
		1000 : {
			items: 6,
			loop: false
		}
	}
});

$(".produtos-destaques").owlCarousel({
	loop: false,
	responsiveClass: true,
	margin: 10,
	nav: false,
	center: false,
	responsive: {
		0 : {
			items: 1
		},
		600 : {
			items: 2
		},
		1000 : {
			items: 6,
			loop: false
		}
	}
});

$(".openNavVertical").click(function() {
	$(".sidenav").width("300px");
});

$(".closeNavVertical").click(function() {
	$(".sidenav").width("0");
});

 $("#body-app").ready(function() {
	var namePage = $("#body-app").attr("name-page");
	$("."+namePage).addClass("active-icon");
});