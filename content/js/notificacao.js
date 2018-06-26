$(document).ready(function(){
    $("#enviarMensagem").click(function(){
        $(".notification").toggle();
    });

     $(".notification .delete").click(function(){
        $(".notification").toggle();
    });
});