<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model{
	public function get_all(){
		return $this->db->get('t_blog')->result();
	}
	public function get_by_cate_id($id){
		$query = $this->db->query("select * from t_blog where cate_id='$id'");
		return $query->result();
	}

}
	/*public function get_category_all($cate_id){
        $this->db->order_by('post_date','desc');
		return $this->db->get_where('t_blog',array('cate_id'=>$cate_id))->result();

	}*/
