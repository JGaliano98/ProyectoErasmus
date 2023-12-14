//Función que valida si un campo está relleno
HTMLInputElement.prototype.relleno = function(){
    //Crea el parámetro
    var respuesta = false;

    //Si la cadena no es vacía
    if(this.value != ""){
        //Devuelve un verdadero
        respuesta = true;
    }

    //Devuelve el parametro
    return respuesta;
}

//Funcion que valida un dni

HTMLInputElement.prototype.dni = function () {
    var letras = "TRWAGMYFPDXBNJZSQVHLCKET";
    var respuesta = false;

    if (this.value!="") {
        var partes = (/^(\d{8})([TRWAGMYFPDXBNJZSQVHLCKET])$/i).exec(this.value); //coincidencia completa -> partes[0], por eso hacemos partes[1] y partes[2]
        if (partes){
            respuesta = letras[partes[1]%23]==partes[2].toUpperCase();
        }
    }

    //Devuelve el parametro
    return respuesta;
}

//Funcion para edad valida
HTMLInputElement.prototype.edad = function () {
    //Crea el parámetro
    var respuesta = false;

    //Si el valor introducido es mayor o igual que 0 pero menor que 150

    if (this.value==parseInt(this.value) && this.value>=0 && this.value<150) {
        //Es verdadero
        var respuesta = true;
    }

    //Devuelve el parametro
    return respuesta;
}

//Funcion para ver si es menor de edad

HTMLInputElement.prototype.edad = function () {
    //Crea el parámetro
    var respuesta = false;

    //Si el valor introducido es mayor o igual que 0 pero menor que 18
    
    if (this.value==parseInt(this.value) && this.value>=0 && this.value<18) {

        //Es verdadero
        var respuesta = true;
    }

    //Devuelve el parametro
    return respuesta; 
}


//Funcion que indica si un radioButton está seleccionado 
HTMLInputElement.prototype.seleccionado = function () 
{
    //Crea el parámetro
    var respuesta = false;

    //Crea el nombre del radio
    var name = this.name;

    //Si el radio esta relleno
    if(this.form[name].value != "")
    {
        //Es verdadero
        respuesta = true;
    }

    //Devuelve el parametro
    return respuesta;
}

//Funcion que indica si el formulario está validado
HTMLFormElement.prototype.valida = function () 
{
    //Crea el parámetro
    var respuesta = true;

    //Obtiene los elementos que contienen el atributo data-valida
    var elementos = this.querySelectorAll("input[data-valida]");

    //Obtiene la longitud de los elementos
    let n = elementos.length;

    //Bucle que se ejecuta para introducir atributos
    for(let i = 0; i< n; i++)
    {
        //Obtiene el atributo
        let tipo = elementos[i].getAttribute("data-valida");

        //Genera el elemento con su respectivo tipo
        var aux = elementos[i][tipo]();

        //Si es verdadero
        if(aux)
        {
            //Se le añade un atributo valido
            elementos[i].classList.add("valido");

            //Se borra el atributo invalido en caso de que lo tenga
            elementos[i].classList.remove("invalido");
        }
        else
        {
            //Se le añade un atributo valido
            elementos[i].classList.add("invalido");

            //Se borra el atributo invalido en caso de que lo tenga
            elementos[i].classList.remove("valido");
        }

        respuesta = respuesta&&aux;
    }

    //Devuelve el parametro
    return respuesta;
}