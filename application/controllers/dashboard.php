<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author martin
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

   function __construct()
   {
        parent::__construct();
   }

   function index()
   {
        $this->load->view('dashboard');
   }
}
?>
