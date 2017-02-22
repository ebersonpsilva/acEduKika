jQuery(function($){
    /*Exibe e oculta DIV*/
    $(".collapse-link").on("click",function(){
        var e=$(this).closest(".x_panel"),t=$(this).find("i"),n=e.find(".x_content");
        e.attr("style")?n.slideToggle(200,function(){
            e.removeAttr("style")
        }):(n.slideToggle(200),e.css("height","auto")),t.toggleClass("fa-chevron-up fa-chevron-down");
        checkMsg();
    });
    checkMsg = function(){
        if($("#Warning").is(':visible')){
            $("#Warning").hide();
            $("#rsWarning").empty();
        }
        if($("#Info").is(':visible')){
            $("#Info").hide();
            $("#rsInfo").empty();
        }
        if($("#Alert").is(':visible')){
            $("#Alert").hide();
            $("#rsAlert").empty();
        }
    }
});