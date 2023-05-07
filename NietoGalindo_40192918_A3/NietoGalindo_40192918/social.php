<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="en">


<head>



<title>Social</title>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">



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
    


    <?php
  // Start the session
  session_start();

  // If the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the contents in session variables
    $_SESSION['social-link-1'] = $_POST['social-link-1'];
    $_SESSION['social-link-2'] = $_POST['social-link-2'];
    $_SESSION['social-link-3'] = $_POST['social-link-3'];

    // Check and add "http://" to links if missing
    if (isset($_SESSION['social-link-1']) && strpos($_SESSION['social-link-1'], 'http://') !== 0) {
      $_SESSION['social-link-1'] = 'http://' . $_SESSION['social-link-1'];
    }
    //this checks if the link submitted is missing http:// so that the link works on the image map
    if (isset($_SESSION['social-link-2']) && strpos($_SESSION['social-link-2'], 'http://') !== 0) {
      $_SESSION['social-link-2'] = 'http://' . $_SESSION['social-link-2'];
    }
    if (isset($_SESSION['social-link-3']) && strpos($_SESSION['social-link-3'], 'http://') !== 0) {
      $_SESSION['social-link-3'] = 'http://' . $_SESSION['social-link-3'];
    }

  }
?>


<?php
  // If the session variables are set
  if (isset($_SESSION['social-link-1']) && isset($_SESSION['social-link-2']) && isset($_SESSION['social-link-3'])) {
    $socialLink1 = $_SESSION['social-link-1'];
    $socialLink2 = $_SESSION['social-link-2'];
    $socialLink3 = $_SESSION['social-link-3'];

  }
  ?>

<img class="image" src="social_media_icons.jpg" alt="The image could not be displayed!" usemap="#map" />

<map name="map" id="map">
  <area shape="rect" coords="8,108,107,8" href="<?php echo $socialLink1; ?>" alt="Website could not be opened!" />
  <area shape="rect" coords="179,106,278,6" href="<?php echo $socialLink2; ?>" alt="Website could not be opened!" />
  <area shape="rect" coords="354,107,453,7" href="<?php echo $socialLink3; ?>" alt="Website could not be opened!" />
</map>
  





</body>







</html>























