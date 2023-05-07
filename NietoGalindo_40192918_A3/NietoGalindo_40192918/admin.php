<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="en">



<head>



<title>Admin</title>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<!-- A stylesheet is like a set of instructions that tells the website how to look. -->
<!-- To make sure that the stylesheet is up-to-date,  a little bit of code is added to the link that connects the stylesheet to the website. In this case,
I used ?v=timestamp which adds a version number to the stylesheet link, this version number will be based in the current time and will always be different.
Therefore, everytime someone will visit this website, they will get the latest version of the stylesheet (css) even if they visited the website in the past.  -->

</head>





<body>
  
  <div class="banner-menu-layout">

    <div>
      
      <table class="table" >
        <tr class="table2">
    
        <th class="th1"><a class="home-menu" href="home.php">Home</a></th>
    <th class="th1"> <a class="resume-menu" href="resume.php">Resume</a></th>
    <th class="th1"> <a class="projects-menu" href="projects.php">Projects</a></th>
    <th class="th1"> <a class="contact-menu" href="contact.php">Contact</a></th>
    <th class="th1"> <a class="social-menu" href="social.php">Social</a></th>
    <th class="th1"> <a class="admin-menu" href="admin.php">Admin</a></th>
         
        </tr>
    
      </table>
      
    
      
    
     
    
     
    </div>
    
    
    </div>


  <div class="admin-form">

    
    <h1 class="admin1">Admin </h1>
    <input type="text" name="username" id="input5" />
    <input type="password" name="password"  id="input6" />
    <input type="button" name="Login" id="input7" value="Login"/>


  </div>

  <script>
    function processLogin() { //This line starts a new function called processLogin which will run when the user clicks the login button.
      // get user input
      var username = document.getElementById("input5").value;
      var password = document.getElementById("input6").value;
      //These lines get the values that the user entered in the username and password fields and save them to the variables username and password.

      // validate user input
      if (username === "admin" && password === "password") { //This checks if the username entered is "admin" and the password entered is "password". 
        //If both are true, the code inside the curly braces will run.
        sessionStorage.setItem("username", username);
        sessionStorage.setItem("password", password);
        sessionStorage.setItem("loginTime", new Date().toLocaleString());
        sessionStorage.setItem("userAgent", navigator.userAgent);
        //These lines save the user's username, password, login time, and user agent information to their browser's 
        //sessionStorage. This information will be used to verify that the user is logged in when they navigate to the administrative website.
        
        // This line redirects the user to the administrative website if their login information is correct.
        window.location.href = "http://localhost/NIETOGALINDO_40192918/SOEN287_Assignment_2/adminIndex.html";
      } else { //If the user's login information is not correct, the code inside these curly braces will run.
        alert("Invalid username or password."); //This line displays an alert box with the message "Invalid username or password." to tell the user that their login information is incorrect.
      }
    }

    
    var loginButton = document.getElementById("input7");
    loginButton.addEventListener("click", processLogin);
    //These lines find the login button on the page and add an event listener to it. 
    //When the login button is clicked, it will call the processLogin function that we defined earlier.
  </script>



</body>




</html>





















