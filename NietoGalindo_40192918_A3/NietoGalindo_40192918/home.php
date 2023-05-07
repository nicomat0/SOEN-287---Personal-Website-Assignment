<!DOCTYPE html>
<html lang="en">

<head>

<title>Home</title>

<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">


</head>




<body>
  

<div class="banner-menu-layout">

   <div>
  
  <table class="table">
    <tr class="table2" >

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


<?php
  
  session_start();
  //This function starts a new or resumes an existing session. It enables the use of session variables that can be accessed across multiple pages in a web application.

  // If the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //This checks if the current request method is "POST". This is usually used to check if a form has been submitted.
    $_SESSION['professionalStatement'] = $_POST['professionalStatement'];
    // This line stores the value of the "professionalStatement" form field in a session variable called "professionalStatement".
    $_SESSION['briefBiography'] = $_POST['briefBiography'];
    //This line stores the value of the "briefBiography" form field in a session variable called "briefBiography".
  }
?>

<div class="content-container">
  <img class="mateo-img" src="mateo.jpg" alt="The image could not be displayed!"/>
  
  
  <?php
  // If the session variables are set
  if (isset($_SESSION['professionalStatement']) && isset($_SESSION['briefBiography']))
  //This checks if the session variables "professionalStatement" and "briefBiography" have been set.
  {
    $professionalStatement = $_SESSION['professionalStatement'];
    //This line assigns the value of the "professionalStatement" session variable to a new variable called "professionalStatement".
    $briefBiography = $_SESSION['briefBiography'];
    //This line assigns the value of the "briefBiography" session variable to a new variable called "briefBiography".
    echo "<div style='text-align: justify; margin: 0 auto; max-width: 800px;'>";
    echo "<p><strong><span>Professional Statement:</span></strong> $professionalStatement</p>";
    //This line echoes an HTML "p" element with bold and underlined text, followed by the value of the "professionalStatement" variable.
    echo "<p><strong><span>Brief Biography:</span></strong> $briefBiography</p>";
    //same as above
    echo "</div>";  
  }
  ?>
  
</div>










</body>









</html>











