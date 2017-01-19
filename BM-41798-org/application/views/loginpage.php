<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php $this->load->helper('url');?>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>">
	    <script src="<?php echo base_url().'js/jquery-3.1.1.js'?>"></script>
		<script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/loginpage.css'?>">
	</head>
		<body style="background-color: #e8eaf3;">
		<?php 
		foreach ($data as $value) {
                  // echo $value[0]["firstname"];
               

		?>
		<div class="header">
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-md-4 col-md-offset-1 col-xs-3 col-xs-offset-4">
		                <div>
		                    <form class="form-horizontal">
			                    <div class="form-group"  style="margin-top: 4px;">
			                        <input type="text" name="" placeholder="Search" class="form-control">	
			                        <i class="glyphicon glyphicon-search form-control-feedback"></i>
			                    </div>
		                    </form>
		                </div>
		            </div>
		            <div class="col-md-offset-7" style="margin-top: 1%;">
		                <img src="<?php echo $value[0]["pro_pic"]; ?>" width="20px" height="20px">
		                <label>
		                     <?php  echo $value[0]["firstname"]; ?></label>&nbsp
		                </label>
                            <label>
                                 <?php echo $value[0]['lastname']; ?> 
                            </label>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="body" style="margin-top: 1%;">
			<div class="container-fluid">
			    <div class="row" margin-top:2%;>
		            <div class="col-md-2" style="padding: 1%">
		                <img src="<?php echo $value[0]["pro_pic"]; ?>" width="20px" height="20px">
		                <label>
		                <label>
		                   <?php echo $value[0]["firstname"];?></label>&nbsp
		                </label>
                            <label>
                                <?php echo $value[0]["lastname"]; ?>  
                            </label><br><i class="glyphicon glyphicon-edit"><a href="#"> EditProfile</a></i>
		           	</div>
		            <div class="col-md-5 part2">
		            <div class="row hr">
				            <div class="col-md-4">
				                <i class="glyphicon glyphicon-edit"></i><a href="#">UpdateStatus</a>
				            </div>
				            <div class="col-md-4">
				                <i class="glyphicon glyphicon-picture"></i><a href="#">Add Photo/Video</a>
				            </div>
				            <div class="col-md-4">
				                <i class="glyphicon glyphicon-edit"></i><a href="#">UpdateStatus</a>
				            </div>
		                </div> 
		                <div class="row">
		                    <div class="col-md-1" style="width: 60px;padding: 1%">
                                <img src="<?php echo  $value[0]['pro_pic']; ?>" width="50px" height="50px">
                            </div>
                            <div class="col-md-10" style="margin-top: 3%;">
                            	<div class="form-group"  style="">
			                        <input type="text" name="" placeholder="What's On Your Mind?" class="form-control">	
			                    </div>
                            </div>
		                </div>
		                
		            </div>
		           	<div class="col-md-2 part3" style="background-color: #ffffff;border-radius: 3px;
		           	border: 1px solid #CCD1D1;background-color: white;height: 285px;">
		           	</div>
		           	<div class="col-md-2">part4
		            </div>
		        </div>
		        <div class="row">
		        <div class="col-md-2">
		        </div>
		        <div class="col-md-5 " style="margin-top: 1%; height: 100%;">wd

		            </div>
		           	
		
		        	
		        </div>
		    </div>
		</div>
		<?php 
		}
		?> 
	</body>
</html>