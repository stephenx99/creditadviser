<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Client_list extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         * 		http://example.com/index.php/welcome
         *	- or -
         * 		http://example.com/index.php/welcome/index
         *	- or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see http://codeigniter.com/user_guide/general/urls.html
         */
        public function index()
        {
            $this->load->view('inc/header');
            $this->load->view('mg_nav');
            $this->load->view('client_list');
            //$this->load->view('dash_view');
            $this->load->view('inc/footer');
        }
    }
