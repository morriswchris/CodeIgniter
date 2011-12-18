<?php

class Chris_Controller extends CI_Controller {

    public $em;
    protected $view_params = array();

    public function __construct()
    {
        parent::__construct();

        // Load localization
        $this->view_params['lang'] = 'en';

        // TODO: customize lesscss and jquery libraries based on language

        // Load jquery
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');

        // Load LessCSS library
        $this->load->library('lesscss');
        //TODO: load javascript libraries

        //populate the header
        //$this->_header();
        //$this->_footer();
    }
}