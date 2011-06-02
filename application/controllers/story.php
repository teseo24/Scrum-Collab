<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Story extends CI_Controller {

	function __construct()
	{
            parent::__construct();
	}

	function index()
	{
            $this->load->view('taskboard');
	}

        function getStories($id)
        {
            $this->load->model('Story');
            $data['query'] = $this->Story->getStories($id);
            return $data;

        }
}