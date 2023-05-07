<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

<meta charset="UTF-8">
<title>Resume</title>
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
  // Start the session
  session_start();

  // If the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the contents in session variables
    $_SESSION['educationalQualification'] = $_POST['educationalQualification'];
    $_SESSION['skillSet'] = $_POST['skillSet'];
    $_SESSION['awardsAndRecognition'] = $_POST['awardsAndRecognition'];
    $_SESSION['workExperience'] = $_POST['workExperience'];
    $_SESSION['Referees'] = $_POST['Referees'];
    
  }
?>


<div class="content-container">
  
  <?php
  // If the session variables are set
  if (isset($_SESSION['educationalQualification']) && isset($_SESSION['skillSet']) && isset($_SESSION['awardsAndRecognition']) && isset($_SESSION['workExperience']) && isset($_SESSION['Referees'])) {
    $educationalQualification = $_SESSION['educationalQualification'];
    $skillSet = $_SESSION['skillSet'];
    $awardsAndRecognition = $_SESSION['awardsAndRecognition'];
    $workExperience = $_SESSION['workExperience'];
    $referees = $_SESSION['Referees'];
    
    echo "<div style='text-align: justify; margin: 0 auto; max-width: 800px; font-size: 20px;'>";
    echo "<dl><strong>Educational Qualifications:</strong><dd>$educationalQualification</dd></dl>";
    echo "<dl><strong>Professional and Technical Skills:</strong><dd>$skillSet</dd></dl>";
    echo "<ol><strong>Awards and Recognition:</strong><li>$awardsAndRecognition</li></ol>";
    echo "<ol><strong>Work Experience:</strong><li>$workExperience</li></ol>";
    echo "<p><strong>Referees:</strong> <span>$referees</span></p>";
    echo "</div>";

  }
  ?>
  
  <button class="button1">Download Full CV</button>

</div>




 





</body>


</html>















