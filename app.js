$(document).ready(function(){

    $(document).ajaxStart(function(){
        $.mobile.loading('show');
    });

    
    $(document).ajaxStop(function(){
        $.mobile.loading('hide');
    });

    var localinfo = localStorage.getItem('infosaved');


    if (localinfo!=null){
        var jsonparse = JSON.parse(localinfo);
        if (jsonparse[1]=="found"){
            $.mobile.changePage ("#page1", {transition: "slideup", changeHash: false});
            console.log(jsonparse[0].usuario);
            document.getElementById('usuariox1').value=jsonparse[0].usuario;
            document.getElementById('idx1').value=jsonparse[0].id;
        } else {
            $.mobile.changePage ("#login", {transition: "slideup", reverse: true, changeHash: false});
        }
    } else {
        $.mobile.changePage ("#login", {transition: "slideup", reverse: true, changeHash: false});
    }


    $("#btniniciar").click(function(){
        if($("#usuario").val()=="" || $("#contrasena").val()==""){
            alert("Por favor, asegurese de llenar todos los campos");
        } else {
            $.ajax({
                url: "login.php", async: true,
                type: "POST",
                data: {
                    user: $("#usuario").val(),
                    pass: $("#contrasena").val()
                },
                success: function(response){
                    if (response == "notfound"){
                        alert("usuario NO encontrado en la base de datos. Verifique su información");
                    } else {
                        localStorage.setItem('infosaved', response);
                        $.mobile.changePage("#page1", {transition: "slideup", changeHash: false});
                        var localinfoa = localStorage.getItem('infosaved');
                        var jsonparse1 = JSON.parse(localinfoa);
                        console.log(jsonparse1[0].usuario);
                        document.getElementById('usuariox1').value=jsonparse1[0].usuario;
                        document.getElementById('idx1').value=jsonparse1[0].id;
                    }
                }
            });
        }
    });

    $("#btncerrar").click(function(){
        localStorage.removeItem("infosaved");
        $.mobile.changePage ("#login", {transition: "slideup", reverse: true, changeHash: false});
    });

    $("#btnanadir").click(function(){
        if($("#barcode").val()=="" || $("#p_name").val()=="" || $("#p_type").val()==""){
            alert("Por favor, asegurese de llenar todos los campos");
        } else {
            $.ajax({
                url: "save_info.php", async: true,
                type: "POST",
                data: {
                    barcode: $("#barcode").val(),
                    p_name: $("#p_name").val(),
                    p_type: $("#p_type").val()
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
    
    $("#btnregistro").click(function(){
        if($("#usuariox").val()=="" || $("#contrasenax").val()=="" || $("#correo").val()==""){
            alert("Por favor, asegurese de llenar todos los campos");
        } else {
            $.ajax({
                url: "registro.php", async: true,
                type: "POST",
                data: {
                    usuariox: $("#usuariox").val(),
                    contrasenax: $("#contrasenax").val(),
                    correo: $("#correo").val()
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

    $("#btncontra").click(function(){
        console.log("funciona");
        if($("#idx1").val()=="" || $("#usuariox1").val()=="" || $("#contrasenax1").val()==""){
            alert("Por favor, asegurese de llenar todos los campos");
        } else {
            $.ajax({
                url: "Npass.php", async: true,
                type: "POST",
                data: {
                    idx1: $("#idx1").val(),
                    usuariox1: $("#usuariox1").val(),
                    contrasenax1: $("#contrasenax1").val()
                },
                success: function(response){
                    if (response == 1){
                        alert("La contraseña ha sido modificada con exito!");
                    } else {
                        alert("Fallo en el servidor")
                    }
                }
            });
            return false;
        }

    });



});