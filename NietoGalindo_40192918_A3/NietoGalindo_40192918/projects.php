<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

<title>Projects</title>

<link rel="stylesheet" href="style.css"/>




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


    <?php
  // Start the session
  session_start();

  // If the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the contents in session variables
    $_SESSION['myProjects'] = $_POST['myProjects'];
    
  }
?>


    <h1 class="info-cv">Projects:</h1>

  

    <?php
  // If the session variables are set
  if (isset($_SESSION['myProjects'])) 
  //This line checks to see if a session variable called myProjects is set. A session variable is a way 
  //to store information that can be used across different pages of a website. So, if myProjects has been set, the code inside the curly braces will run.
  {
    $myProjects = $_SESSION['myProjects'];
    //This line creates a variable called $myProjects and sets it equal to the value stored in the myProjects session variable.
    $projectsList = explode("\n", $myProjects);
    //This line creates an array called $projectsList by splitting up the value of $myProjects into separate items wherever there is a new line character (\n (jump line)).
    echo "<div style='text-align: justify; margin: 0 auto; max-width: 800px;'>";
    //This line starts an HTML div element and sets some styling for it.
    echo "<ol reversed type='I'>";
    //This line starts an ordered list (<ol>) element and sets it to display the list items in reverse order 
    //(using the reversed attribute) and with uppercase Roman numerals (using the type attribute).
    foreach ($projectsList as $project) 
    {
      echo "<li>$project</li>";
    }
    //his code loops through each item in $projectsList and prints out an HTML list item (<li>) for each one. 
    //The value of the item is inserted into the list item using the variable $project.
    echo "</ol>";
    echo "</div>";  
    //These lines close the ordered list and div elements that were opened earlier.
  }
?>














</body>











</html>



























