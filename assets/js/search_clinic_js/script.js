$(document).ready(function(){

    $("#live-search").keyup(function(){

        var input = $(this).val();

        // alert(input)

       if(input != ""){
        $.ajax({
            url: "search.php",
            method: "POST",
            data: {input: input},
            success: function(data){
                $("#live-search-results").html(data);
            }
        });
       }
       else{
        $("#live-search-results").css("display","none");
       }
    });

    
});