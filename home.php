<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    </head>
    <body> 
        <div class="welcome">
            <h1>pet spa</i></h1>
        </div>
        <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#div1">About us</a></li>
            <li><a href="#div2">Contact</a></li>
            <li>
                <input type="checkbox" id="show">
                <label for="show" class="show-btn">Login</label><i class="fas fa-sign-in-alt"></i>
                
                <div class="container">
                  <label for="show" class="close-btn fas fa-times" title="close"></label>


                  
                  <div class="text">Login</div>
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
                          <a href="#" style="color: blue;">Forgot Password?</a>
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
        <div class="logo"><i class="fa fa-paw fa-4x" aria-hidden="true"></i></div>
        <div class="imgslider"></div>
    <div id="div1" >
        <p>
            <h1>ABOUT US</h1>
            sdhjsdsiudchkjdccboiedhjslcdnksjdcfbcbmnckjcbugbcdcb<br>auutveididosdjgywbaoiyepqpmjdguwgygddbn<br>msnbczbcnhcushcdshdu
        </p>
    </div>
    <div id="div2">
        <p><h1>Contact info</h1>
            ajjhwhywwtiiouiwtiwevamicalskiehdiwyeopquqkbc  wygaeouhenbuurtiwournowndnksiuefh<br>gqilan dfbuegfiweourruyueyabdcbdhbb auen fukdhj fdkhj hidlukjz eihldkj</p>
    </div>
    </body>
</html>