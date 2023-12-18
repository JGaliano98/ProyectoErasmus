window.addEventListener("load", function(){
    
    var btnRegistrar = document.getElementById("btnRegistroReg");

    btnRegistrar.addEventListener("click", function(ev) {
        ev.preventDefault();
        // Obtener los valores de los campos del formulario
        var ID_Candidato = 1;
        var DNI_Candidato = document.getElementById("txtDNI").value;
        var contraseña = document.getElementById("txtContraseñaReg").value;
        var nombre = document.getElementById("txtNombreReg").value;
        var apellido1 = document.getElementById("txtAp1Reg").value;
        var apellido2 = document.getElementById("txtAp2Reg").value;
        var fecha_nacimiento = document.getElementById("txtNacimientoReg").value;
        var curso = document.getElementById("txtCursoReg").value;
        var telefono = document.getElementById("txtTelefonoReg").value;
        var correo = document.getElementById("txtCorreoReg").value;
        var domicilio = document.getElementById("txtDomicilioReg").value;
        var rol = "Alumno";
        var tutor = document.getElementById("txtTutorReg").value;

        // Crear un objeto con los datos del usuario
        var datosUsuario = {
            ID_Candidato: ID_Candidato,
            DNI_Candidato: DNI_Candidato,
            nombre: nombre,
            apellido1: apellido1,
            apellido2: apellido2,
            fecha_nacimiento: fecha_nacimiento,
            curso: curso,
            telefono: telefono,
            correo: correo,
            domicilio: domicilio,
            contraseña: contraseña,
            rol: rol,
            tutor: tutor
        };

        // Enviar los datos al servidor mediante una solicitud fetch
        fetch("../ProyectoErasmus/API/API_Candidato.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(datosUsuario)
        })
        .then(x => x.json())
        .then(y => {
           //alert("Usuario registrado con éxito");
        })
        .catch(error => {
            console.error('Hubo un error:', error);
            //alert('Hubo un error al procesar la solicitud');
        });
    });
});
