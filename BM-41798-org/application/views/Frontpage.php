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
<div class="header">
     <div class="container-fluid">
        <div class="row">
        <!--<div class="col-md-12 col-xs-12" style="background-color: #4867aa; height:83px">!-->
            <div class="col-xs-3 col-xs-offset-4 col-md-3 col-md-offset-1 ">
             <img src="<?php echo base_url().'images/index.png'?>"
             width="180px" height="">
            </div>
                <div class="hidden-lg hidden-md col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1" style="margin-top: 2%;" >
                <button class="btn-success pull-right" style="border:none;">CreateAccount</button>
            </div>
                <div class="hidden-xs hidden-sm col-md-2 col-md-offset-2 emailorphone" >
                    <form action="<?php echo base_url().'index.php/user_login/fetch' ?>" method="post" class="form-horizontal" style="margin-left: 19%;">
                    Email or Phone<br>
                        <input type="text" class="form-inline" name="email" style="color: black;" >
                </div>

                    <div class="hidden-xs hidden-sm  col-md-2 emailorphone">
                        Password<br>
                        <input type="text" class="form-inline" name="password" style="color: black;">
                    </div>
                        <div class="hidden-xs hidden-sm col-md-2  col-lg-2 login" style="margin-left: -3%;">
                            <input type="submit" value="Login" class="login1">
                        </div>
                    </form>
            </div>
        </div>
        <!--</div>-->
     </div><!-- second part-->
     <div class="container-fluid colorc">
     <div class="row">
    <div class=" hidden-md hidden-lg visible-xs visible-sm col-sm-12 col-xs-12 ">
     <div class="row">
     <form method="post" action="">
     <div class="col-sm-12  col-xs-12  ">
     Email or phone<br><input type="text" class="form-control">
     </div>
     <div class="col-sm-12  col-xs-12 ">
     Password<br><input type="text" class="form-control"><br>
     </div>
     <div class="col-sm-12  col-xs-12 ">
     <p><button type="submit" class="btn btn-primary" style="width:100%;">Login</button></p>
     </div>
     <div class=" col-xs-12 col-sm-12 ">
     <button class="btn-success center-block" style="border:none;width: 25%;border-radius: 6%;margin-top: 4%;">CreateAccount</button>
     </div>
     <div>
         <a href="#">Forgot Password?</a><br><a href="#">Help Center</a>
     </div>
     </form>
     </div>
     </div>
     </div><!-- end second-->
     <div class="body"><!--body part-->
     <div class="container">
     <div class=" hidden-xs hidden-sm col-md-12 col-lg-12">
     <div class="row">
     <div class="col-md-6 col-lg-6 font1"
     <h1>Facebook helps you connect and share with the people in your life.</h1>
     </div>
     <div class=" hidden-xs hidden-sm col-md-offset-1 col-md-5" style="    margin-left: 11%;">
     <h1 class="signup2"><strong>SignUp</strong><br><h4 class="signup2">It's free and always will be.</h4></h1>
     <strong></strong></div>
     <div class="row">
     <div class="hidden-xs hidden-sm col-md-12 col-lg-12">
     <div class="col-md-6  img1">
     <img src="<?php echo base_url().'images/pyNVUg5EM0j.png'?>">
     </div>
     <div class="row">
     <div class=" hidden-xs hidden-sm col-md-offset-1 col-md-5">
         <form class="form-inline" action="<?php echo base_url().'index.php/User_login/fetch'?>" method="post">
             <div class="form-group">
             <input type="text" placeholder="Firstname"  class="form-control">
             <input type="text" placeholder="Lastname"  class="form-control"><br><br>
             <input type="text" placeholder="EmailAddress"  class="form-control" style="width: 100%;"><br><br>
             <input type="text" placeholder="Re-enter EmailAddress"  class="form-control" style="width: 100%;"><br>
             <br>
              <input type="text" placeholder="Password"  class="form-control" style="width: 100%;"><br><br><h3>
              <strong>Birthday</strong></h3>
             <select  name="day">
<option>Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="5">15</option>
    <option value="5">16</option>
    <option value="5">17</option>
    <option value="5">18</option>
    <option value="5">19</option>
    <option value="5">20</option>
    <option value="5">21</option>
    <option value="5">22</option>
    <option value="5">23</option>
    <option value="5">24</option>
    <option value="5">25</option>
    <option value="5">26</option>
    <option value="5">27</option>
    <option value="5">28</option>
    <option value="5">29</option>
    <option value="5">30</option>
    <option value="5">31</option>
    </select>
    <select  name="Month">
    <option>Month</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    </select><select  name="Year">
    <option>Year</option>
    <option value="1">1994</option>
    <option value="2">1995</option>
    <option value="3">1996</option>
    <option value="4">1997</option>
    <option value="5">1998</option>
    <option value="6">1999</option>
    <option value="7">2000</option>
    <option value="8">2001</option>
    <option value="9">2002</option>
    <option value="10">2003</option></select><font size="1" color="blue">Why Do I Provide My Date Of Birth ?
    </font><br><br><font size="4%" color="black">Female<input type="radio"name="gender" value="Female" >&nbsp Male<input type="radio" name="gender" value="Male"></font><br><font size="1">By clicking create a account,you agree to our <font color="blue">terms</font> and,that<br> you have learn our <font color="blue">Data Policy</font>,includeing our cookie use.
    </font><br><br><button class="btn-success" style="border-radius: 3px;height: 27px;width: 41%;border: none;">Create Account</button>
             </div>
         </form>
     </div>    
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div><!--body end-->
     </div>
     
     
     
</body>
</html>