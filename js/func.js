function login() {

            /*let persona={
                usuario: document.getElementById('usuario').value,
                pasword: document.getElementById('password').value
            }*/
            let urlencoding= `usuario=${document.getElementById('user').value}&pasword=${document.getElementById('clave').value}`;

           // alert(urlencoding);

            let datos =$('#login').serialize();

            //alert(datos);

            $.ajax({
                url:'procesar.php',
                method:'POST',
                data:datos, //URLEncoded, JSON(cadena)
                dataType:'json',
                success:function(res){
                    if (res==1) {
                        alert("Accediendo");
                        window.location.href="sistema/";
                    }else{
                        alert("Contraseña incorrecta");
                    }

                },
                error:function(error) {
                    console.log(error);
                    alert("Usuario o contraseña incorrecta");
                }

            });
            return false;
        }


function registrarUsuario() {
    clave1=document.getElementById('clave').value;
    clave2=document.getElementById('clave2').value;

    if (clave1==clave2) {
        let urlencoding= `nombre=${document.getElementById('nombre').value}&usuario=${document.getElementById('usuario').value}&correo=${document.getElementById('correo').value}&clave=${document.getElementById('clave').value}`;
        //alert(urlencoding);

        $.ajax({
            url:'registrar.php',
            method:'POST',
            data:urlencoding, //URLEncoded, JSON(cadena)
            dataType:'json',
            success:function(res){
                //alert(res);
                if (res==1) {
                    alert("Registro exitoso");
                    window.location.href="login.html";
                }else{
                    alert("Fallo al registrarse");
                }
            },
            error:function(error) {
                    console.log(error);
                    alert("Usuario o contraseña incorrecta");
                }

        });
    }else{
        alert("Las contraseñas no cinciden");
    }
    
    return false;
}