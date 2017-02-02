$(":file").filestyle({buttonName: "btn-primary"});

$(document).ready(function(){
	    $(".import").click(function(){
	        $(".import-body").show().siblings().hide();
	        $(this).addClass("activeC").siblings().removeClass("activeC");
	    });
	     $(".export").click(function(){
	        $(".export-body").show().siblings().hide();
	        $(this).addClass("activeC").siblings().removeClass("activeC");
	    });
});