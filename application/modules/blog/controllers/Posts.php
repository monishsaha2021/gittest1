<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Controller 
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
	 * [Load add new post]
	 * @return [void] 
	 */
	public function index()
	{
		$cat_row_count  = $this->db->count_all('blog_categories');
		$tags_row_count = $this->db->count_all('blog_tags');

		if ($cat_row_count > 0 && $tags_row_count > 0) 
		{
			$data['categories'] = $this->common_model->getAllData('blog_categories','*');
			$data['tags']       = $this->common_model->getAllData('blog_tags','*');

			$data['page'] = "blog/Posts";
      		$this->template->template_view($data);
		} 
		else
		{
			show_error("Please Add Some Categories OR Tags First");
		}

	}

	/**
	 * [Add New Post to Blog]
	*/
	public function add_post()
	{
		$this->form_validation->set_rules('title', 'Post Title','trim|required');
		$this->form_validation->set_rules('category', 'Category','trim|required');
		$this->form_validation->set_rules('meta_desc', 'Meta Description','trim|required');
		$this->form_validation->set_rules('meta_keyword', 'Meta Keywords','trim|required');
		$this->form_validation->set_rules('tags[]', 'Tags','trim|required');
		$this->form_validation->set_rules('content', 'Content','trim|required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->index();
		} 
		else
		{
			
			$config['upload_path']          = './uploads/blog_images/';
            $config['allowed_types']        = 'gif|jpg|png';
            

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img'))
            {
                $error = array('error' => $this->upload->display_errors());

                $msg = $error['error'];
		        $this->session->set_flashdata('error',$msg);
		        redirect('blog/posts','refresh');
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $image = base_url().'uploads/blog_images/'.$data['upload_data']['file_name'];
            }
			

			$data = array(
							'title'           => post('title'), 
							'category_id' 	  => post('category'), 
							'meta_desc' 	  => post('meta_desc'), 
							'meta_keywords'   => post('meta_keyword'), 
							'featured_img' 	  => $image, 
							'status' 		  => post('status'), 
							'content'   	  => post('content'),
							'allow_comments'  => post('allow_comment'),
							'user_id'   	  => $this->session->userdata('user_id'),
							'slug'   		  => slugify(post('title')),
							'deleted_at'	  => "Null",
							'created_at'   	  => date("Y-m-d H:i:s"),
							'updated_at'   	  => date("Y-m-d H:i:s"),
						 );

			$this->common_model->InsertData('blog_post',$data);

			$post_id = $this->db->insert_id();

			foreach (post('tags[]') as $tag_id) 
			{
				$data = array(
								'post_id' => $post_id,
								'tag_id'  => $tag_id,
							 );

				$this->common_model->InsertData('blog_post_tags',$data);
			}

			set_flashdata('success','Post Added Successfully');
			redirect('blog/posts','refresh');
		}
	}

	/**
	 * [Get All posts without Trashed]
	*/
	public function manage_posts()
	{
		$data['posts'] = $this->common_model->getAllData('blog_post','*','',array('deleted_at' => 'Null'));

		$data['page'] = "blog/manage_posts";
      	$this->template->template_view($data);	
	}

	/**
	 * [delete post but not deleted permenantly]
	 * @param  [int]  $id [post id]
	 * @return [boolean] 
	 */
	public function delete_post($id)
	{
		$data = array(
						'deleted_at' 	 => date("Y-m-d H:i:s"),
						'status'     	 => 0,
						'allow_comments' => 0,
					 );

		$result = $this->common_model->UpdateDB('blog_post',array('id' => $id),$data);

		if ($result) 
		{
			set_flashdata('success','Post Trashed Successfully');
			redirect('blog/posts/manage_posts','refresh');
		} 
	}

	/**
	 * [permenent_delete a post]
	 * @return [boolean]
	 */
	public function permenent_delete()
	{
		$msg = "This functionality is disable in demo";
		$this->session->set_flashdata('error', $msg);
		redirect('blog/posts/trashed_posts', 'refresh');
		$fileurl = post('delete_img');

		$file_name = basename($fileurl);

		unlink("uploads/blog_images/".$file_name);

		$result = $this->common_model->DeleteDB('blog_post',array('id' => post('post_id')));

		if ($result) 
		{
			set_flashdata('success','Post Permenent Deleted');
			redirect('blog/posts/trashed_posts','refresh');
		}
	}

	/**
	 * [Get All trashed posts]
	 * @return [void]
	*/
	public function trashed_posts()
	{
		$data['posts'] = $this->common_model->getAllData('blog_post','*','',array('deleted_at !=' => 'Null'));

		$data['page'] = "blog/trashed_posts";
      	$this->template->template_view($data);	
	}

	/**
	 * [revert the blog post]
	 * @param  [int] $id [post id]
	 * @return [boolean] 
	 */
	public function revert($id)
	{
		$msg = "This functionality is disable in demo";
		$this->session->set_flashdata('error', $msg);
		redirect('blog/posts/trashed_posts', 'refresh');
		$data = array(
						'deleted_at' 	 => 'Null',
						'status'     	 => 1,
						'allow_comments' => 1,
					 );

		$result = $this->common_model->UpdateDB('blog_post',array('id' => $id),$data);

		if ($result) 
		{
			set_flashdata('success','Post Revert Successfully');
			redirect('blog/posts/trashed_posts','refresh');
		} 
	}

	/**
	 * [Chaned the post status to publish]
	 * @param  [int] $id [post id]
	 * @return [boolean]  
	 */
	public function publish($id)
	{
		$data = array(
						'status' => 1
					 );

		$result = $this->common_model->UpdateDB('blog_post',array('id' => $id),$data);

		if ($result) 
		{
			set_flashdata('success','Post Status Changed to Publish');
			redirect('blog/posts/manage_posts','refresh');
		} 
	}

	/**
	 * [Chaned the post status to unpublish]
	 * @param  [int] $id [post id]
	 * @return [boolean]  
	 */
	public function unpublish($id)
	{
		$data = array(
						'status' => 0
					 );

		$result = $this->common_model->UpdateDB('blog_post',array('id' => $id),$data);

		if ($result) 
		{
			set_flashdata('success','Post Status Changed to Unpublish');
			redirect('blog/posts/manage_posts','refresh');
		} 
	}

	/**
	 * [change the comments status post comments on post]
	 * @param  [int] $id [post id]
	 * @return [boolean]
	 */
	public function allow_comments($id)
	{
		$data = array(
						'allow_comments' => 1
					 );

		$result = $this->common_model->UpdateDB('blog_post',array('id' => $id),$data);

		if ($result) 
		{
			set_flashdata('success','Comment Status Has been changed');
			redirect('blog/posts/manage_posts','refresh');
		} 
	}

	/**
	 * [change the comments status to unallow]
	 * @param  [int] $id [post id]
	 * @return [boolean]
	 */
	public function unallow_comments($id)
	{
		$data = array(
						'allow_comments' => 0
					 );

		$result = $this->common_model->UpdateDB('blog_post',array('id' => $id),$data);

		if ($result) 
		{
			set_flashdata('success','Comments Status has been Changed');
			redirect('blog/posts/manage_posts','refresh');
		} 
	}

	/**
	 * [edit post ]
	 * @param  [int] $id
	 * @return [void]
	 */
	public function edit_post($id='')
	{
		if ($this->input->post()) 
		{

			$this->form_validation->set_rules('title', 'Post Title','trim|required');
			$this->form_validation->set_rules('category', 'Category','trim|required');
			$this->form_validation->set_rules('meta_desc', 'Meta Description','trim|required');
			$this->form_validation->set_rules('meta_keyword', 'Meta Keywords','trim|required');
			$this->form_validation->set_rules('tags[]', 'Tags','trim|required');
			$this->form_validation->set_rules('content', 'Content','trim|required');
			
			if ($this->form_validation->run() == FALSE) 
			{
				$this->index();
			} 
			else
			{
				if (!empty($_FILES["img"]["name"]))
				{
					$config['upload_path']          = './uploads/blog_images/';
		            $config['allowed_types']        = 'gif|jpg|png';
		            

		            $this->load->library('upload', $config);

		            if (!$this->upload->do_upload('img'))
		            {
		                $error = array('error' => $this->upload->display_errors());

		                $msg = $error['error'];
				        $this->session->set_flashdata('error',$msg);
				        redirect('blog/posts','refresh');
		            }
		            else
		            {
		                $data = array('upload_data' => $this->upload->data());
		                $image = base_url().'uploads/blog_images/'.$data['upload_data']['file_name'];
		            }
				} 
				else 
				{
					$image = post('old_img');
				}

				$data = array(
								'title'           => post('title'), 
								'category_id' 	  => post('category'), 
								'meta_desc' 	  => post('meta_desc'), 
								'meta_keywords'   => post('meta_keyword'), 
								'featured_img' 	  => $image, 
								'status' 		  => post('status'), 
								'content'   	  => post('content'),
								'allow_comments'  => post('allow_comment'),
								'user_id'   	  => $this->session->userdata('user_id'),
								'slug'   		  => slugify(post('title')),
								'deleted_at'	  => "Null",
								'updated_at'   	  => date("Y-m-d H:i:s"),
							 );

				$this->common_model->UpdateDB('blog_post',array('id' => post('post_id')),$data);

				$this->common_model->DeleteDB('blog_post_tags',array('post_id' => post('post_id')));

				foreach (post('tags[]') as $tag_id) 
				{
					$data = array(
									'post_id' => post('post_id'),
									'tag_id'  => $tag_id,
								 );

					$this->common_model->InsertData('blog_post_tags',$data);
				}

				set_flashdata('success','Post Updated Successfully');
				redirect('blog/posts/manage_posts','refresh');
			}
		} 
		else 
		{
			$data['post_data'] = $this->common_model->DJoin('*','blog_post','blog_categories','blog_post.category_id = blog_categories.id','1','',array('blog_post.id' => $id));

			$data['categories'] = $this->common_model->getAllData('blog_categories','*');
			$data['tags']       = $this->common_model->getAllData('blog_tags','*');

			$data['post_tags']  = $this->common_model->DJoin('*','blog_post_tags','blog_tags','blog_tags.id = blog_post_tags.tag_id','','',array('blog_post_tags.post_id' => $id));

			// pr($data['post_data']);die;

			$data['page'] = "blog/edit_post";
      		$this->template->template_view($data);	
		}
		
	}
}

/* End of file Posts.php */
/* Location: ./application/modules/blog/controllers/Posts.php */