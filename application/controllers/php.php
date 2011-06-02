<?php
/*

Consideraciones:

+	es nececesario ingresar los datos de acceso a la base de datos Mysql desde el archivo application/config/config.php
+	es necesario configurar conecci�n autom�tica a db. Para esto hay que ingresar la palabra "database" en el array libraries del archivo application/config/autoload.php
+	es necesario configurar agregar la librer�a de validaciones de formularios. Para esto hay que ingresar la palabra "form_validation" en el array libraries del archivo application/config/autoload.php	
+	en la nueva versi�n de CodeIgniter (2.0), en los modelos es necesario extender la clase "CI_Model" en lugar de "Model" como era en la versi�n (1.7) 

Ventajas de este formulario:

+	Si la validaci�n falla, se regresa autom�ticamente a la p�gina de login informando los errores al usuario
+	Adem�s, se recuerdan los valores previamente ingresados en cada campo

*/
?>

<?php
class Php extends CI_Controller {

    function login(){

        $this->load->helper('form');
        if(!isset($_POST['maillogin'])){	//	Si no recibimos ning�n valor proveniente del formulario, significa que el usuario reci�n ingresa.
            $this->load->view('login2');		//	Por lo tanto le presentamos la pantalla del formulario de ingreso.
        }
        else{								//	Si el usuario ya pas� por la pantalla inicial y presion� el bot�n "Ingresar"
            $this->form_validation->set_rules('maillogin','e-mail','required|valid_email');		//	Configuramos las validaciones ayudandonos con la librer�a form_validation del Framework Codeigniter
            $this->form_validation->set_rules('passwordlogin','password','required');

            if(($this->form_validation->run()==FALSE)){				//	Verificamos si el usuario super� la validaci�n
                $this->load->view('login2');							//	En caso que no, volvemos a presentar la pantalla de login
            }
            else{													//	Si ambos campos fueron correctamente rellanados por el usuario,
                $this->load->model('usuarios_model');
                $ExisteUsuarioyPassoword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);	//	comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
                if($ExisteUsuarioyPassoword){	// La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
                        echo "Validacion Ok<br><br><a href=''>Volver</a>";	//	Si el usuario ingres� datos de acceso v�lido, imprimos un mensaje de validaci�n exitosa en pantalla
                }
                else{	//	Si no logr� validar
                        $data['error']="E-mail o password incorrecto, por favor vuelva a intentar";
                        $this->load->view('login',$data);	//	Lo regresamos a la pantalla de login y pasamos como par�metro el mensaje de error a presentar en pantalla
                }
            }
        }
    }
}
?>