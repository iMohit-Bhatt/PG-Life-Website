<?php
?>

<div class="Register_form" id="myForm">
    <div class="box">
    <form method="POST" action="./Api/register_submit.php">
      <div class="msg">
      <p>Signup with PGLife</p>
      <i class="fa fa-times" onclick="closeForm()"></i>
      </div>
      
      <div class="name details">
        <button><i class="fa fa-user" ></i></button>
        <input type="text" name= "name" placeholder="Your Name" required>
      </div>
      <div class="Phone details">
        <button><i class="fa fa-phone"></i></button>
        <input type="text" name="phone" placeholder="Phone Number" required>
      </div>
      <div class="Email details">
        <button><i class="fa fa-envelope"></i></button>
        <input type="email" name="email" placeholder="Email Id" required>
      </div>
      <div class="Password details">
        <button><i class="fa fa-lock"></i></button>
        <input type="password" name="pass" placeholder="Enter Password" required>
      </div>
      <div class="College details">
        <button><i class="fa fa-university"></i></button>
        <input type="text" name= "college" placeholder="College Name" required>
      </div>
      <div class="radio detail">
        <p>I'm a </p><p><input type="radio" value="male" name="gender" id="">Male</p>
        <p><input type="radio" value="female" name="gender" id="">Female</p>
      </div>
      <div class="Create_btn">
        <button class="acc">Create Account</button>
      </div>
      <div class="last_text">
        <p>Already have an account? <a href="#" onclick="openForm2()">Login</a></p>
      </div>
    </form>
    </div>  
</div>

<!-- Login Form -->
<div class="Login_form" id="myForm2">
    <div class="box">
    <form method="POST" action="./Api/login_submit.php">
      <div class="msg">
      <p>Login in PGLife</p>
      <i class="fa fa-times" onclick="closeForm2()"></i>
      </div>
      <div class="Email details">
        <button><i class="fa fa-envelope"></i></button>
        <input type="text" name="email" placeholder="Email Id" required>
      </div>
      <div class="Password details">
        <button><i class="fa fa-lock"></i></button>
        <input type="password" name="pass" placeholder="Enter Password" required>
      </div>
      <div class="Create_btn">
        <button class="acc">Login</button>
      </div>
      <div class="last_text">
        <p><a href="#" onclick="openForm()" >Click here</a> to register a new account</p>
      </div>
    </form>
    </div>  
</div>

<div class="navbar">
<div class="nav-items">
  <div class="logo">
    <a href="home.php"><img src="img/logo.png" alt="PG Life"></a>
  </div>

  <div class="user">
    <a href="#" onclick="openForm()"><i class="fa fa-user"></i> Signup</a>
    <div class="sepration"></div>
    <a href="#" onclick="openForm2()"><i class="fa fa-sign-in
    "></i>
      Login</a>
  </div>
</div>
</div>



