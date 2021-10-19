<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogFrontend extends MY_Controller 
{
	public $setting;

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('common_model');

		$this->setting = $this->common_model->getAllData('blog_settings','*','1'); 	
	}

	/**
	 * [All Posts]
	 * @return [void]
	 */
	public function index()
	{
		$this->load->library('pagination');

		/* Getting per page post for settings table */
        $per_page_posts = $this->common_model->getAllData('blog_settings','per_page_posts','1');

        /* count all rows in blog posts table */
		$total_rows = $this->db->count_all("blog_post");

		$config = array();
        $config["base_url"] = base_url() . "blog/BlogFrontend/index";
        $config["total_rows"] = $total_rows;
        $config["per_page"] = empty($per_page_posts->per_page_posts) ? 8 : $per_page_posts->per_page_posts;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
    	$config["num_links"] = round($choice);

    	$config['full_tag_open']    = "<ul class='cd-pagination animated-buttons custom-icons'>";
		$config['full_tag_close']   ="</ul>";
		$config['num_tag_open']     = '<li>';
		$config['num_tag_close']    = '</li>';
		$config['cur_tag_open']     = "<li><a class='current' href='#0'>";
		$config['cur_tag_close']    = "</a></li>";
		$config['next_tag_open']    = "<li>";
		$config['next_tagl_close']  = "</li>";
		$config['prev_tag_open']    = "<li>";
		$config['prev_tagl_close']  = "</li>";
		$config['first_tag_open']   = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open']    = "<li>";
		$config['last_tagl_close']  = "</li>";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $data["posts"] = $this->common_model->
            fetch_posts($config["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        $data['setting'] = $this->setting;

		view('blog/talos/blog',$data);
	}

	/**
	 * [Single Post]
	 * @return [void]
	 */
	public function single_post()
	{
		$title = $this->uri->segment(3);

		$data['post'] = $this->common_model->DJoin('*,blog_post.id AS post_id','blog_post','users','blog_post.user_id = users.id','1','',array('slug' => $title));

		$data['prev'] = $this->common_model->getAllData('blog_post','slug','1',array('id <'=> $data['post']->post_id),'id desc');

		$data['next'] = $this->common_model->getAllData('blog_post','slug','1',array('id >'=> $data['post']->post_id));

        $data['setting'] = $this->setting;

        $data['setting'] = $this->setting;

        $data['tags'] = $this->common_model->getAllData('blog_tags','*');

        $data['recent_posts'] = $this->common_model->getAllData('blog_post','id,title,slug','','','id  desc','5');

        $data['categories'] = $this->common_model->getAllData('blog_categories','id,cat_name,slug','','','id  desc','5');

		view("talos/post",$data);
	}

	/**
	 * [Get All data related to tags]
	 * @return [type] [description]
	 */
	public function tags()
	{

		$title = $this->uri->segment(3);

		$tags = array('blog_post' => 'blog_post.id = blog_post_tags.post_id');

		$data['setting'] = $this->setting;

		$data['tag_posts'] = $this->common_model->DJoin('*','blog_tags','blog_post_tags','blog_tags.id = blog_post_tags.tag_id','',$tags,array('blog_tags.slug' => $title));

		view('talos/tags_post',$data);
	}

	/**
	 * [Get All data to Categories]
	 * @return [void]
	 */
	public function categories()
	{		
		$category = $this->uri->segment(3);

		$data['category_posts'] = $this->common_model->DJoin('*','blog_categories','blog_post','blog_categories.id = blog_post.category_id','','',array('blog_categories.slug' => $category));

		$data['setting'] = $this->setting;

		view('talos/category_posts',$data);
	}

	public function search()
	{
		$keyword = $this->input->get('search');

		$data['search'] = $this->common_model->getAllData('blog_post','*','','','','','',array('title' => $keyword));

		$data['setting'] = $this->setting;

		// pr($data);

		view('talos/search',$data);

	}

	public function about()
	{
		view('talos/about');
	}
	public function home()
	{
		view('talos/index');
	}
	public function contact()
	{
		view('talos/contact');	
	}
	public function services()
	{
		view('talos/services');
	}
	public function work()
	{
		view('talos/work');
	}
	public function work1()
	{
		view('talos/work1');
	}
	public function work2()
	{
		view('talos/work2');
	}
	public function work3()
	{
		view('talos/work3');
	}
	public function work4()
	{
		view('talos/work4');
	}
	public function work5()
	{
		view('talos/work5');
	}
	public function work6()
	{
		view('talos/work6');
	}
	public function project()
	{
		view('talos/project');
	}
	public function shop()
	{
		view('talos/shop');
	}
	public function single_product()
	{
		view('talos/product');
	}
}

/* End of file BlogFrontend.php */
/* Location: ./application/modules/blog/controllers/BlogFrontend.php */