<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<style>

    #chatButton {
        position: fixed;
        bottom: 20px; /* Adjust the values to position the button where you want */
        right: 20px;
        padding: 10px 15px;
        background-color: #007bff; /* Change to your preferred background color */
        color: #fff; /* Change to your preferred text color */
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }
   
</style>
<script>
    // Function to be executed when the chat button is clicked
    function openChat() {
        alert("Chat functionality goes here!"); // Replace this with your chat implementation
    }

    // Add a click event listener to the chat button
    document.getElementById("chatButton").addEventListener("click", openChat);
</script>



     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
   <link rel="stylesheet" href="./style.css"> 
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <title>Webpage Design</title>
    <style>
      * {
    margin: 0;
    padding: 0;
 
    box-sizing: border-box;
}
body{
  background-color: white;
}

.video-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    overflow: hidden;
  }
  .video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .overlay-box {
    position: relative;
    bottom: 95px;
    left: 156px;
    background-color: yellow;
    padding: 10px;
    color: white;
    width: 80%;
    align-items: center;
    height: min-content;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    font-size: xxx-large;
  }
  .overlay-box img{
    width: 585px;
    margin: 1px;
    margin-right: 80px;
  }
  .about {
    margin-top: 20px;
    padding: 20px;
    background-color: #f2f2f2;
    display:flex;
    flex-direction:column;
    justify-content: center;
    font-size: x-large;
    align-items: center;
  }
  .contact{
    margin-top: 20px;
    padding: 20px;
    background-color: #f2f2f2;
    display:flex;
    flex-direction:column;
    justify-content: center;
    font-size: x-large;
    align-items: center;
  }
  button{
    padding:5px;
    background-color:green;
  }
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body >



        <!-- navbar starts --> 
        <nav id="navbar" class="navbar navbar-expand-xl ">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php"><img src="./images\logo.jpeg" alt="" srcset=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " onclick = "fun()" aria-current="page" href="#">Home</a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick = "fun()" href="#p">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick = "fun()" href="#">Contact Us</a>
              </li>
             
               
            </ul>
           

            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" onclick = "fun()" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                              What We Offer?
                                </a>
                                <ul class="dropdown-menu">
                                <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./msme/form.php'></a></li>";
                            }
                          ?>


                          <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./msme/form.php'></a></li>";
                            }
                          ?>


                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./mediation/form.php'></a></li>";
                            }
                          ?>

                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./lokadalat/form.php'></a></li>";
                            }
                          ?>

                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='.//form.php'></a></li>";
                            }
                          ?>

                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./conciliation/form.php'></a></li>";
                            }
                          ?>

                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'></a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./odr/form.php'></a></li>";
                            }
                          ?>                      
                                
                                </ul>
                              </li>      
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" onclick="fun()" role="button" data-bs-toggle="" aria-expanded="false">
                               Consultation
                                </a>
                                <ul class="dropdown-menu">
                                
                            <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Property Law</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\propertylaw.php'>Property Law</a></li>";
                            }
                          ?>        
                          
                          <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Divorce</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\divorce.php'>Divorce</a></li>";
                            }
                          ?>                                 



                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Family</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\family.php'>Family</a></li>";
                            }
                          ?>  
                            <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Employment</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\employment.php'>Employment</a></li>";
                            }
                          ?>        
                          
                          <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Recovery Of Money</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\recovery.php'>Recovery Of Money</a></li>";
                            }
                          ?>                                 


                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Start Up</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\startup.php'>Start Up</a></li>";
                            }
                          ?> 


                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>IPR</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\ipr.php'>IPR</a></li>";
                            }
                          ?> 
                       <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Corporate</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\corporate.php'>Corporate</a></li>";
                            }
                          ?> 

                        <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>General Legal</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\general.php'>Genaral Legal</a></li>";
                            }
                          ?> 

                      <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Criminal</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\criminal.php'>Criminal</a></li>";
                            }
                          ?> 

                      <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Consumer Protection</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\consumer.php'>Consumer Protection</a></li>";
                            }
                          ?> 
                       
                       <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Civil</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\civil.php'>civil</a></li>";
                            }
                          ?> 

                      <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Corporate And Individual Taxation</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\corporate.php'>Corporate And Individual Taxation</a></li>";
                            }
                          ?> 
                       <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Licenses</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\licenses.php'>Licenses</a></li>";
                            }
                          ?> 

                      <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Imigration Services</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\imigration.php'>Imigration Services</a></li>";
                            }
                          ?> 
                      <?php
                            if(!isset($_SESSION['username']))
                            {
                              echo "<li><a class='dropdown-item' href='./partials/login.php'>Marriage</a></li>";
                            }
                            else
                            {
                              echo "<li><a class='dropdown-item' href='./Consultation\marriage.php'>Marriage</a></li>";
                            }
                          ?>                           

   
                                
                                </ul>
                              </li>      
                             
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" onclick="fun()" role="button" data-bs-toggle="" aria-expanded="false">
                               Digital Rooms
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./digital/digitalrooms.php">Digital Rooms</a></li>
                                    <li><a class="dropdown-item" href="./digital\adrcenter.php">The Digital ADR Center</a></li>
                                    <li><a class="dropdown-item" href="./digital\odrcenter.php">ODR Platform</a></li>
                                
                                </ul>
                              </li>
                            </ul>
                            <script type = "text/javascript">  
            function fun() {  
  
  
               alert ("Please Sign-Up before.....");  
            }  
      </script>  
                         
                        <form class="d-flex" role="search">
                            
                                       
                        <?php
                            if(!isset($_SESSION['username'])){
                              echo "<button class='btn btn-success ms-2' type='submit'><a href='./partials/login/login.php'>Login</a></button>";
                            }
                            else
                            {
                              echo "<button class='btn btn-success ms-2' type='submit'><a href='./partials/login/logout.php'>Logout</a></button>";
                            }


                          ?>
                          <button class="btn btn-success ms-3 " type="submit"><a href="./partials/login/register.php">Signup</a></button>
                        
                          
                        </form>
                      </div>
                    </div>
                  </nav>


<div class="video-container">
  <video class="video" autoplay muted loop>
    <source src="./168811 (720p).mp4" type="video/mp4">
   
  </video>
  </div>

<div class="overlay-box">
  <div class="img">
  <img src="https://images.unsplash.com/photo-1600672196900-c98c011a0977?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1228&q=80" alt="Available " srcset="">
  </div>
  <div class="txt">
   Available for 24*7 </div>
  </div>
</div>

<div class="about">
  <h2> About Us </h2>
  <p>Your about content goes here.</p>
  <button onclick="fun()">  <a href="#">About Us</a></button>
</div>

<div class="contact">
  <h2>Contact Us </h2>
  <p>Content Goes Here</p>
 <button onclick="fun()"><a href="#">Contact Us</a></button>
</div>



<a href="#"><button onclick="fun()" id="chatButton"> <img src="./chat.png" alt="Chat" srcset=""></button></a>         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>