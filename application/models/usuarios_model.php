<?php
class Usuarios_model extends CI_Model{

	function ValidarUsuario($email,$password){			//	Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
		$query = $this->db->where('Usuario',$email);	//	La consulta se efect�a mediante Active Record. Una manera alternativa, y en lenguaje m�s sencillo, de generar las consultas Sql.
		$query = $this->db->where('Password',$password);
		$query = $this->db->get('Usuarios');
		return $query->row(); 	//	Devolvemos al controlador la fila que coincide con la b�squeda. (FALSE en caso que no existir coincidencias)
	}
}
?>