//Espera que cargue la pantalla
window.addEventListener("load", function(){
    //Obtiene el valor boton
    const boton = document.getElementById("btnRegistroReg");

    //Ejecuta el click que se realiza en el boton
    boton.onclick = function(ev){
        //Previene el submit que tiene por defecto
        ev.preventDefault();

        //Si el formulario es validado
        if(this.form.valida()){
            //Se le añade un atributo valido
            this.form.classList.add("valido");

            //Se borra el atributo invalido en caso de que lo tenga
            this.form.classList.remove("invalido");
        } else{
            //Se le añade un atributo valido
            this.form.classList.add("invalida");
            
            //Se borra el atributo invalido en caso de que lo tenga
            this.form.classList.remove("valida");
        }
    }
})