<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="CSS/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    </head>
    <body> 
        <div class="menu">
        <ul>
            <!-- <li><a href="#">Home</a></li> -->
            <li><a href="#div1">About us</a></li>
            <li><a href="#div2">Contact</a></li>
            <li>
                <input type="checkbox" id="show">
                <label for="show" style="font-size:20px" class="show-btn">Login</label><i style="font-size:20px" class="fas fa-sign-in-alt"></i>
                
                <div class="container">
                  <label for="show" class="close-btn fas fa-times" title="close"></label>
                  
                  <div class="text" style="color:blueviolet'" >Login</div>
                  <form action="login.php" method="POST">
                      <div class="data">
                         <label>User Type</label>
                         <select class="select" name="usertype">
                             <option selected disabled>--Select--</option>
                             <option value="admin" name="admin" >Admin</option>
                             <option value="user" name="customer">User</option>
                             <option value="spa" name="shops">Spa</option>
                         </select>
                      </div>   
                      <div class="data">
                        <label>Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>    
                      <div class="data">
                          <label>Password</label>
                          <input type="password" id="passwd" name="passwords" required>
                      </div>
                      <div class="forgot-pass">
                          <a href="#" style="color:white font-size:10px">Forgot Password?</a>
                      </div>
                      <div class="btn">
                          <div class="inner"></div>
                          <button type="submit" name="save" value="submit">Login</button>
                      </div>
                    </form>
                   </div>

            </li>
            <li><a href="#" id="show1">Register  <i class="fas fa-user-plus"></i></a>
                <div class="submenu1">
                    <ul>
                        <li><a href="signup.html">User</a></li>
                        <li><a href="#">Spa</a></li> 
                    </ul>
                </div>
            </li>
        </ul>

        </div>

        <div class="logo"><i class="fa fa-paw fa-4x" style="font-style:italic" aria-hidden="true">    PET SPA</i></p></div>
        <div class="imgslider"></div>
            <div id=div1>
                <p>
                <h1>About us</h1>
                Worried About your pet..!!<br>Book a spa treatment Today for your pet.<br>We groom him the best.<br>We understand the pets better.
                </p></div>
            <div id=div2>
                <p>
                <h1>Contact us</h1>
                Write to us at : aishwaryac21121999@gmail.com /  lavanyacnaik44@gmail.com <br>For further queries call :  9900520806 / 9108170247.<br>
                <address>

                <center><a href="mailto:aishwaryac21121999@gmail.com?subject=PetSpa" id="write"><i class="material-icons" style="font-size:50px">send</i></a>
                <a href="mailto:lavanyacnaik44@gmail.com?subject=PetSpa Application Feedback" id="write"><i class="material-icons" style="font-size:50px">feedback</i></a></center>

                </address>
            </p></div>
         
        
    </body>
</html>