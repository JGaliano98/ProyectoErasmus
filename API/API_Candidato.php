<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

    //todo: Hay que estar logueado
    if ($_SERVER['REQUEST_METHOD'] == "GET") 
    {
        if(isset($_GET['DNI']))
        {
            //Obtiene el id enviado
            $dniCandidato = $_GET['DNI'];

            //Busca el objeto con su debido ID
            $candidatoObt = RP_Candidato::BuscarPorDNI($dniCandidato);


            if($candidatoObt != null)
            {
                // Establecer el código de estado HTTP (en este caso, 200 OK)
                http_response_code(200);

               
                
                //Devolver la respuesta en JSON
                $devuelve=json_encode($candidatoObt);
                echo $devuelve;
            }
            else
            {
                //Indicamos el mensaje a devolver
                $data = 'El recurso que buscas no ha sido encontrado. Por favor, introduzca bien el parámetro.';
                
                //Establecer el código de estado HTTP (en este caso, 404 NO ENCONTRADO)
                http_response_code(404);
                
                //Imprimir la respuesta JSON
                echo json_encode($data);
            }
        }
        else
        {
            $candidatos = RP_Candidato::MostrarTodo();

            $candidatosData = [];
            
            foreach ($candidatos as $candidato) 
            {
                if ($candidato == false) 
                {
                    //Devuelve una respuesta indicando que no ha encontrado nada
                    echo json_encode(array("success" => false));
                } 
                else 
                {
                    //Crea el objeto
                    $candidatoData = array
                    (
                        "ID_Candidato" => $candidato->getID_Candidato(),
                        "DNI_Candidato" => $candidato->getDNI_Candidato(),
                        "contraseña" => $candidato->getContraseña(),
                        "nombre" => $candidato->getNombre(),
                        "apellido1" => $candidato->getApellido1(),
                        "apellido2" => $candidato->getApellido2(),
                        "fecha_nacimiento" => $candidato->getfechaNacimiento(),
                        "curso" => $candidato->getCurso(),
                        "telefono" => $candidato->getTelefono(),
                        "correo" => $candidato->getCorreo(),
                        "domicilio" => $candidato->getDomicilio(),
                        "rol" => $candidato->getRol(),
                        "tutor" => $candidato->getTutor(),
                    );
    
                    //Agrega los datos en un array
                    $candidatosData[] = $candidatoData;
                }
            }
            // Establecer el código de estado HTTP (en este caso, 200 OK)
            http_response_code(200);

            //devuelve el contenido en JSON
            echo json_encode($candidatosData);
        }
        
    }

    //Todo: comprobar administrador
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        //Indicamos el tipo del contenido     
        header('Content-Type: application/json');

        //Obtiene los valores para insertar datos
        $candidatoJSON = json_decode(file_get_contents("php://input"));

        //TODO: Validar
        $ID_Candidato=0;
        $DNI_Candidato = $candidatoJSON->DNI_Candidato;
        $nombre = $candidatoJSON->nombre;
        $apellido1 = $candidatoJSON->apellido1;
        $apellido2 = $candidatoJSON->apellido2;
        $fecha_nacimiento = $candidatoJSON->fecha_nacimiento;
        $curso = $candidatoJSON->curso;
        $telefono = $candidatoJSON->telefono;
        $correo = $candidatoJSON->correo;
        $domicilio = $candidatoJSON->domicilio;
        $contraseña = $candidatoJSON->contraseña;
        $rol = "Alumno";
        $tutor = $candidatoJSON->tutor;

        //Inserta el candidato
        RP_Candidato::InsertaObjeto(new Candidato($ID_Candidato, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio, $contraseña, $rol, $tutor));

        //Obtiene el candidato obtenido
        $candidato = RP_Candidato::BuscarPorDNI($DNI_Candidato);

        //Establece el código de estado HTTP(en este caso, 200 OK)
        http_response_code(200);

        echo json_encode(array("candidato" => $candidato));
    }
?>