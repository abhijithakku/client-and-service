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
            <div class="col-xs-3 col-xs-offset-4 col-md-12 col-md-offset-2 passwrong">
                <img src="<?php echo base_url().'images/index.png'?>"><button class="btn-success">SignUp</button>
            </div>
        </div>
    </div>
</div>
<div class="body"><!-- body part starting-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-xs-3">
        </div>
            <div class="col-md-6 col-xs-6 part2">
                <div class="page-header">
                    <p><h3><b><font color="#4867aa">Facebook Login</font></b></h3></p>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1 col-xs-2 ">
                                <p style="padding: 10px;">Login as :</p>
                            </div>
                            <div class="col-md-1 col-xs-1" style="width: 60px;">
                                <img src="<?php echo $value[0]["pro_pic"]; ?>" width="50px" height="50px">
                            </div>
                                    <div class="col-md-1 col-xs-1">
                                        <label><?php echo $value[0]["firstname"]; ?></label>&nbsp
                                        <label><?php echo $value[0]["lastname"]; ?></label>
                                        <label><?php echo $value[0]["email"]; ?></label>
                                    </div>
                        </div><br>
                                            <div class="row">
                                        <form method="post" action="<?php echo base_url().'index.php/User_login/fetch'?>">
                                                <div class="col-md-2 col-md-offset-1 col-xs-2">
                                                    <p style="padding: 10px;">Password :</p>
                                                </div>
                                                    <div class="col-md-1 col-xs-1">
                                                    <input type="hidden" name="email" 
                                                    value="<?php echo $value[0]["email"]; ?>">
                                                        <input type="text" name="password">
                                                    </div>
                                          
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1 col-xs-2 ">
                                                </div>
                                                <div class="col-md-2 col-xs-2">
                                                    <input type="checkbox" name="">Keep me logged in
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-3 col-xs-2 ">
                                                </div>
                                                <div class="col-md-3 col-xs-2" style="">
                                                    <button style="color:white; background-color: #4867aa; border:none;">Login</button>&nbspor&nbsp
                                                        <a href="#">Sign up forFacebook?</a>
                                                </div><br>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1 ">
                                                </div>
                                                <div class="col-md-2 col-xs-1">
                                                <a href="#">Forgotten Password?</a>
                                                </div>
                                            </div>
                                            </form>

                    </div>
            </div>
                <div class="col-md-3 col-xs-3">

                </div>
    </div>
</div>
</div>
<div class="footer">
    <div class="col-md-12" style="width:100%;height: 100%">
        
    </div>
    
</div>
<?php 
}
?>
</body>
</html>