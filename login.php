<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#Red">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>  
      <FONT  COLOR =#FFFFFF >  Sing in Junk Bank </h3></FONT>
      <form  name="formlogin" action="check_login.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="txtUsername" id="txtUsername" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="txtPassword" id="txtPassword" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> <FONT  COLOR =#FFFFFF > Remember me </FONT> 
                <h5><a href="register.php"><FONT  COLOR =#FFFFFF >Sing Up </a><h5></FONT> 
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
