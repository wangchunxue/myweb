<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_model extends CI_Model{
	public function add($data){
		$a=$this->db->insert("t_message",$data);//$data是个数组
		return $a;
	}
}