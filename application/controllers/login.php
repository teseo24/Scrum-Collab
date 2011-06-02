<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
                $this->load->helper('form');

	}

	function index()
	{
            $this->load->view('login');
	}

        function validarUsuario()
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[30]');
            $this->form_validation->set_rules('userpassword', 'Password', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('login');
            }else{

                $this->load->model('usuarios');
                $ExisteUsuarioyPassoword=$this->usuarios->ValidarUsuario($_POST['username'],$_POST['userpassword']);	//	comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta

                if($ExisteUsuarioyPassoword){	// La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
                         echo anchor('dashboard');	//	Si el usuario ingres� datos de acceso v�lido, imprimos un mensaje de validaci�n exitosa en pantalla
                }
                else{
                        $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
                        $this->load->view('login',$data);	//	Lo regresamos a la pantalla de login y pasamos como par�metro el mensaje de error a presentar en pantalla
                }


            }
        }
}
?>
