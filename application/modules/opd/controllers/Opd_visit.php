<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Opd_visit extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper('file');
        $this->load->module('template'); 
        $this->load->module('common'); 
        $this->load->model('common_model');  

        // Check if user Logged in
        if (!$this->ion_auth->logged_in())
        {
        redirect('users/auth', 'refresh');
        }
        // $this->ion_auth->get_user_group();
    }

	public function index()
	{
        // Check if user is Admin 
        if (!$this->ion_auth->is_admin()) 
        {
          return show_error("You Must Be An Administrator To View This Page");
        }

        $data['page'] = "opd/opd_visit/index";
        $data['page_title'] = "OPD Visit";
        $this->template->template_one($data);
    }
}

/* End of file Site_config.php */
/* Location: ./application/controllers/Site_config.php */