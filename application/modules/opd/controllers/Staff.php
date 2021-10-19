<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Staff extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library(array('form_validation'));
        $this->load->helper(array('html', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');

        $this->load->module('template');

        if (!$this->ion_auth->logged_in()) {
            redirect('auth', 'refresh');
        }

        $sess_data = $this->session->all_userdata();
    }

	public function index()
	{
        // Check if user is Admin 
        if (!$this->ion_auth->is_admin()) 
        {
          return show_error("You Must Be An Administrator To View This Page");
        }

        $data['page'] = "human_resource/staff/list";
        $data['page_title'] = "Staff";
        $this->template->template_one($data);
    }
}

/* End of file Site_config.php */
/* Location: ./application/controllers/Site_config.php */