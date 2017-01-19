<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>">
    <script src="<?php echo base_url().'js/jquery-3.1.1.js'?>"></script>
	<script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/fb_page.css'?>">
</head>
<body>
<?php 
        foreach ($data as $value) {
                  // echo $value[0]["firstname"];
               

        ?>
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 col-xs-3 col-xs-offset-4 passwrong">
                <img src="<?php echo base_url().'images/index.png'?>"><button class="btn-success">SignUp</button>
            </div>
        </div>
    </div>
</div>
<div class="body"><!-- body part starting-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
    	</div>
            <div class="col-md-6 col-xs-3 col-xs-offset-4 part2">
                <div class="page-header">
                    <p><h3><b><font color="#4867aa">Facebook Login</font></b></h3></p>
                </div>
                    <div class="container">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                	<p style="padding: 10px;">Email or Phone :</p>
                                </div>
                                <div class="col-md-1" style="width: 60px;">
                                    <input type="text"  value="" name="email">
                                </div>
                                        
                            </div><br>

                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <p style="padding: 10px;">Password :</p>
                                </div>
                                <div class="col-md-1">
                                    <input type="text" name="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" name="">Keep me logged in
                                    </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-3 ">
                                </div>
                                    <div class="col-md-3" style="">
                                        <button   style="color:white; background-color: #4867aa; border:none;">Login</button>&nbspor&nbsp
                                            <a href="#">Sign up forFacebook?</a>
                                    </div><br>
                            </div><br>

                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                </div>
                                    <div class="col-md-2">
                                        <a href="#">Forgotten Password?</a>
                                    </div>
                            </div>
                        </form>
                    </div>
            </div>
                <div class="col-md-3">

                </div>
    </div>
</div>
</div>
<div class="footer">
    <div class="col-md-12" style="background-color: red;width:100%;height: 100%">
    	
    </div>
	
</div>
<?php 
}
?>
</body>
</html>
