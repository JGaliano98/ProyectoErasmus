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

//Funcion que valida un correo electrónico: 

HTMLInputElement.prototype.correoElectronico = function () {
    // Obtén el valor del campo de correo electrónico
    var correoElectronico = this.value;

    // Verifica si el correo electrónico después de quitar espacios en blanco está en blanco
    if (correoElectronico.trim() === '') {
        return false;
    }

    // Utiliza una expresión regular para verificar el formato básico de un correo electrónico
    var respuesta = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correoElectronico);

    // Devuelve el resultado de la validación
    return respuesta;
};

//Funcion que valida un telefono: 

HTMLInputElement.prototype.telefono = function () {
    // Elimina espacios en blanco del valor del teléfono
    var numeroTelefono = this.value.replace(/\s/g, '');

    // Verifica si el número de teléfono después de quitar espacios en blanco está en blanco
    if (numeroTelefono === '') {
        return false;
    }

    // Verifica si el número de teléfono tiene al menos 9 dígitos numéricos
    var respuesta = /^\d{9,}$/.test(numeroTelefono);

    // Devuelve el resultado de la validación
    return respuesta;
};

//Valida fecha de nacimiento:

HTMLInputElement.prototype.fechaNacimiento = function () {
    // Obtén el valor de la fecha de nacimiento
    var fechaNacimiento = this.value;

    // Verifica el formato de fecha "YYYY-MM-DD"
    var formatoValido = /^\d{4}-\d{2}-\d{2}$/.test(fechaNacimiento);

    if (!formatoValido) {
        return false; // Formato de fecha no válido
    }

    // Verifica si la fecha es una fecha válida
    var partesFecha = fechaNacimiento.split("-");
    var año = parseInt(partesFecha[0]);
    var mes = parseInt(partesFecha[1]) - 1; // Los meses en JavaScript son de 0 a 11
    var dia = parseInt(partesFecha[2]);

    var fechaObj = new Date(año, mes, dia);

    var esFechaValida =
        fechaObj.getFullYear() === año &&
        fechaObj.getMonth() === mes &&
        fechaObj.getDate() === dia;

    return esFechaValida;
};


//Funcion que valida un dni

HTMLInputElement.prototype.dni = function () {
    var letras = "TRWAGMYFPDXBNJZSQVHLCKET";
    var respuesta = false;

    if (this.value!="") {
        var partes = (/^(\d{8})([TRWAGMYFPDXBNJZSQVHLCKET])$/i).exec(this.value);
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