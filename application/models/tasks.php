<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Tasks extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('tasks', 10);
        return $query->result();
    }


}
?>
