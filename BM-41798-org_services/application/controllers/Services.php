<?php
class Services extends CI_Controller{
	public function login(){
		if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
			$array['email']=$this->input->get_post('email');
			$array['password']=$this->input->get_post('password');
			$this->load->model('Login_data');//load Login_data page in model
			$All=$this->Login_data->data($array);
			$msg[]=$All;
		}else{
			$msg[0]=array("ResponceCode"=>"404","msg"=>"No data insert");//if no data insert display this message
		}
		echo json_encode($msg);
	}
}

?>