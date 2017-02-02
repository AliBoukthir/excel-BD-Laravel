$(document).ready(function(){
    
    var pathname = window.location.pathname; // Returns path only
	var url      = window.location.href;     // Returns full URL

	console.log(pathname);
	console.log(url);

	
    $(".menu a").click(function(){
        $(this).addClass("active-link").siblings().removeClass("active-link");
    });



});

