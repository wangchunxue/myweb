<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycon extends CI_Controller {

	
	// public function index()
	// {
	// 	$this->load->view('index');
	// }
	public function index(){
    $this->load->model('blog_category');
  	$this->load->model('blog_model');
    $categories=$this->blog_category->get_all();
    $blogs=$this->blog_model->get_all();
  	$data=array(
  		'category'=>$categories,
  		'blog'=>$blogs
  		);
    $this->load->view('index',$data);
     }
     public function check_blogs(){
     	$id = $this->input->get("id");
     	$this->load->model("blog_model");
   	 	$this->load->model('blog_category');
     	$categories=$this->blog_category->get_all();
	    $blogs=$this->blog_model->get_by_cate_id($id);
	  	$data=array(
	  		'category'=>$categories,
	  		'blog'=>$blogs
	  	);
	    $this->load->view('index',$data);
     }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */