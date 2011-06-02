<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Story extends CI_Model {

    var $content = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_stories($id)
    {
        $this->db->select('content');
        $this->db->where('proyecto_idproyecto', $id);
        $query = $this->db->get('story');
        return $query->result();
    }



}

?>
