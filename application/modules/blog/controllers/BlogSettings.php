<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Created By Salman Iqbal
*/

class BlogSettings extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	    $this->load->module('template'); 
	    $this->load->model('common_model'); 
	    $this->load->library('form_validation'); 

		if (!$this->ion_auth->logged_in()):
		    redirect('users/auth', 'refresh');
		endif;

		if (!$this->ion_auth->is_admin()):
	      return show_error("You Must Be An Administrator To View This Page");
	    endif;  
	}

	/**
	 * [Laod blog setting page]
	 * @return [void]
	 */
	public function index($value='')
	{
		$data['settings'] = $this->common_model->getAllData('blog_settings','*','1');
		// pr($data);die;
		$data['page'] = "blog/blog_settings";
      	$this->template->template_view($data);
	}

	/**
	 * [Insert Blog Settings OR Update Blog Settings]
	 * @return [void]
	 */
	public function blog_settings()
	{
		$this->form_validation->set_rules('comments', 'comments','trim|required');
		$this->form_validation->set_rules('meta_desc', 'meta desc','trim|required');
		$this->form_validation->set_rules('meta_keyword', 'meta keyword','trim|required');
		$this->form_validation->set_rules('post_per_page', 'post per page','trim|required');
		$this->form_validation->set_rules('category_posts', 'related posts','trim|required');
		$this->form_validation->set_rules('enable_recent_posts', 'enable recent posts','trim|required');
		$this->form_validation->set_rules('youtube', 'youtube','trim|required|prep_url');
		$this->form_validation->set_rules('linkedin', 'linkedin','trim|required|prep_url');
		$this->form_validation->set_rules('youtube', 'youtube','trim|required|prep_url');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->index();
		} 
		else
		{
			if ($_FILES['img']['name'] != "") 
			{
				$config['upload_path']          = './uploads/';
	            $config['allowed_types']        = 'gif|jpg|png';
	            

	            $this->load->library('upload', $config);

	            if (!$this->upload->do_upload('img'))
	            {
	                $error = array('error' => $this->upload->display_errors());

	                $msg = $error['error'];
			        $this->session->set_flashdata('error',$msg);
			        redirect('blog/blog_settings','refresh');
	            }
	            else
	            {
	                $data = array('upload_data' => $this->upload->data());
	                $image = base_url().'uploads/'.$data['upload_data']['file_name'];
	            }
			}
			else
			{
				$image = post('update_img');
			}
			$data = array(
							'enable_comments'      => post('comments'), 
							'meta_description' 	   => post('meta_desc'), 
							'meta_kewords' 		   => post('meta_keyword'), 
							'per_page_posts' 	   => post('post_per_page'), 
							'default_img' 		   => $image, 
							'enable_category_posts'=> post('category_posts'), 
							'enable_recent_post'   => post('enable_recent_posts'), 
							'youtube' 			   => post('youtube'), 
							'Linkedin' 			   => post('linkedin'), 
							'facebook' 			   => post('facebook'), 
						 );

			$result = $this->common_model->UpdateDB('blog_settings',array('id' => 1),$data);

			if ($result) 
			{
				set_flashdata('success','Settings Updated');
				redirect('blog/BlogSettings','refresh');
			}
			else
			{
				set_flashdata('error','Database Error');
				redirect('blog/BlogSettings','refresh');
			}	
		}
	}	
}	

/* End of file blog.php */
/* Location: ./application/modules/blog/controllers/blog.php */