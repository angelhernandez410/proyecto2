$(document).ready(function(){

    $(document).ajaxStart(function(){
        $.mobile.loading('show');
    });

    $(document).ajaxStop(function(){
        $.mobile.loading('hide');
    });

    $("#btnnew").click(function(){
        if($("#precio1").val()==""){
            alert("Por favor, asegurese de llenar todos los campos");
        } else {
            $.ajax({
                url: "save_precio.php", async: true,
                type: "POST",
                data: {
                    barcode: $("#barcode").val(),
                    precio1: $("#precio1").val()
                },
                success: function(response){
                    if (response == 1){
                        alert("Agregado con exito");
                    } else {
                        alert("Fallo en el servidor")
                    }
                }
            });
            return false;
        }
    });
});