<?php
class Login_data extends CI_Model{
	public function data($user_data){
		//echo $user_data['email'];
		$result=$this->db->select('*')
		                 ->from('data')
		                 ->where($user_data)
		                 ->get();
		    if($result->num_rows()==1){
                    $row=$result->result_array();   
                    $row["ResponceCode"]="200";
		        	$row["msg"]="success";
		    }else{
		    	$result=$this->db->select('*')
		        	                 ->from('data')
		        	                 ->where('email',$user_data['email'])
		        	                 ->get();
		        	if($result->num_rows()==1){
		        		$row=$result->result_array();
		        		$row["ResponceCode"]="500";
		        		$row["msg"]="password error";
		        	}else{
		        		$row=array("ResponceCode" =>"404","msg"=>"User not Found" );
		         	} 
		    } 
		    return $row;            
	}
}
?>