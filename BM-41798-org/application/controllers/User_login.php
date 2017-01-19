<?php
class User_login extends CI_Controller
{
	public function fetch()
	{
		$user['email']=$this->input->get_post('email');
        $user['password']=$this->input->get_post('password');
        $url="http://localhost/BM-41798-org_services/index.php/services/login";
			$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);

		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service
		//print_r($result);//
        $test =json_decode($result ,true);//web service returns a json data, convert it to php array using 
        $result1['data']=$test;
        //echo $test[0]["ResponceCode"];
               // foreach ($result1['data'] as $value) {
               //     echo $value[0]["firstname"];
               // }
        //print_r($test);
            if($test[0]["ResponceCode"]==200)  //checks the value of responsecode returned from the service
                $this->load->view("loginpage",$result1);  //loads a view from views folder
            else if($test[0]["ResponceCode"]==500)
                $this->load->view("wrngpass",$result1);
            else if($test[0]["ResponceCode"]==404)
                $this->load->view("wrngemail",$result1);
     

    }
}
