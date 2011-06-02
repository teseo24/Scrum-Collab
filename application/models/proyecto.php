<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Proyecto extends CI_Model {

    var $content = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_first_project()
    {
        $query = $this->db->get('proyecto', 1);
        return $query->result();
    }

}
?>
