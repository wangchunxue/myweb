<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
	public function index()
	{
		$data=array(
          'name'=>$this->input->post('username'),//name的名字与db中的名字必须完全相同
          'email'=>$this->input->post('useremail'),
          'message'=>$this->input->post('usertext'),
          'm_id'=>""
	    );
		// var_dump($data);die;
		$this->load->model('message_model','message');//message覆盖第一个长长的message_model;
		$bool = $this->message->add($data);
		echo $bool;//echo输出标量，var_dump()输出常量，数据类型
       /* if($bool){
        	echo "<script>history.back();</script>";
        }*/

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */