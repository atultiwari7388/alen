<html>
<head>
<style>
  .form-group{
    margin:10px;
    padding:10px;
    border:2px solid rgba(0,0,0,0.4);
    width:700;
    border-radius:50px;
  } 
</style>
</head>
<form action="#" method="post">
 <h1><center>User Form</center></h1>
<center>
 <div class="form-group">
  Name:<input type="text" name="Name" placeholder="Name" required/>
  <br>
  Email:<input type="email" name="Email" placeholder="Email" required/>
  <br>
  DOB:<input type="dob" name="DOB" placeholder="dd/mm/yy" required/>
  <br>
  About Yourself: <textarea type="text" name="about" placeholder="about yourslef" required>
  </textarea><span>
  <label>Captcha:</label>
   <input type="text" id="captcha" placeholder="Enter captcha" name="captcha"/>
   </span>
   <img src="captcha.php"/>
   <br>
  <input type="button" value="Submit"/>
  </div>
  </center>
</form>
</html>