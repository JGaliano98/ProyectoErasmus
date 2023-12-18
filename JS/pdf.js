window.addEventListener("load", function () {
    var url = "entradas.pdf";
    const contenedor = document.getElementById("contenedor");
    const abrirPDF = document.getElementById("abrirPDF");
    const documento1= document.getElementById("documento1");
    const abrirPDF1 = document.getElementById("abrirPDF1");
    const documento2= document.getElementById("documento2");
    

    const volver = document.getElementById("btnVolverCertificados");

    abrirPDF.onclick = function (ev) {
        ev.preventDefault();

        if(documento1.files.length=1 && documento1.files[0].type=="application/pdf" ){

            var iframe = document.createElement("iframe");
            iframe.style.width = "100%";
            iframe.style.height = "100%";
            iframe.src = url;

            // Fondo modal:
            var modal = document.createElement("div");
            modal.style.position = "fixed";
            modal.style.left = 0;
            modal.style.top = 0;
            modal.style.width = "100%";
            modal.style.height = "100%";
            modal.style.backgroundColor = "rgba(0,0,0,0.5)";
            modal.style.zIndex = 99;

            document.body.appendChild(modal);

            // Contenido de modal (pdf):
            var visualizador = document.createElement("div");
            visualizador.style.position = "fixed";
            visualizador.style.left = "15%";
            visualizador.style.top = "15%";
            visualizador.style.width = "70%";
            visualizador.style.height = "70%";
            visualizador.style.backgroundColor = "White";
            visualizador.style.zIndex = 100;
            visualizador.appendChild(iframe);
            document.body.appendChild(visualizador);

            var closer = document.createElement("span");
            closer.innerHTML = "X";
            closer.style.padding = "5px";
            closer.style.position = "fixed";
            closer.style.backgroundColor = "White";
            closer.style.top = 0;
            closer.style.right = 0;
            closer.style.zIndex = 101;
            document.body.appendChild(closer);

            closer.onclick = function () {
                document.body.removeChild(modal);
                document.body.removeChild(visualizador);
                document.body.removeChild(closer);
            }

            // var reader = new FileReader();
            // reader.onload=function(){
            //     iframe.src=reader.result;

            // }
            // reader.readAsDataURL(documento1.files[0]);

            iframe.src= URL.createObjectURL(documento1.files[0]);

        }
    }

    abrirPDF1.onclick = function (ev) {
        ev.preventDefault();

        if(documento2.files.length=1 && documento2.files[0].type=="application/pdf" ){

            var iframe = document.createElement("iframe");
            iframe.style.width = "100%";
            iframe.style.height = "100%";
            iframe.src = url;

            // Fondo modal:
            var modal = document.createElement("div");
            modal.style.position = "fixed";
            modal.style.left = 0;
            modal.style.top = 0;
            modal.style.width = "100%";
            modal.style.height = "100%";
            modal.style.backgroundColor = "rgba(0,0,0,0.5)";
            modal.style.zIndex = 99;

            document.body.appendChild(modal);

            // Contenido de modal (pdf):
            var visualizador = document.createElement("div");
            visualizador.style.position = "fixed";
            visualizador.style.left = "15%";
            visualizador.style.top = "15%";
            visualizador.style.width = "70%";
            visualizador.style.height = "70%";
            visualizador.style.backgroundColor = "White";
            visualizador.style.zIndex = 100;
            visualizador.appendChild(iframe);
            document.body.appendChild(visualizador);

            var closer = document.createElement("span");
            closer.innerHTML = "X";
            closer.style.padding = "5px";
            closer.style.position = "fixed";
            closer.style.backgroundColor = "White";
            closer.style.top = 0;
            closer.style.right = 0;
            closer.style.zIndex = 101;
            document.body.appendChild(closer);

            closer.onclick = function () {
                document.body.removeChild(modal);
                document.body.removeChild(visualizador);
                document.body.removeChild(closer);
            }

            // var reader = new FileReader();
            // reader.onload=function(){
            //     iframe.src=reader.result;

            // }
            // reader.readAsDataURL(documento1.files[0]);

            iframe.src= URL.createObjectURL(documento2.files[0]);

        }
    }

    volver.onclick = function (ev) {
        ev.preventDefault();
        
        window.location.href = '/ProyectoErasmus/index.php?menu=verSolicitudesDisp';
        
    }
})