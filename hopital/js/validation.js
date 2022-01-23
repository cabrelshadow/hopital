$(document).ready(function(){
    var titulaire="";
    var email    ="";
    var password ="";
    var confirm  ="";

    $('#titulaire').focusout(function (){
        var titmaire_validation=$('#titulair').val();
        if (titmaire_validation == "") {
            $(".tittulaire_error").html("Le nom est obligatoire!");
            $("#name").addClass("border-red");
            $("#name").removeClass("border-green");
            
          
      }
    })
});