<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">


<head>

<title>Contact</title>

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

    <div class="form">
        <h1 class="cf">Contact Form</h1>
        <form action="#" method="post" onsubmit="return submitContactMsg()"> <!--This is creating a new form element with a method of "post" and an action of "#", 
        which means the form will be submitted to the current page. The onsubmit attribute is set to a function called "submitContactMsg()" 
        which will be called when the form is submitted. The "return" statement ensures that the form will only be submitted if the function returns true.-->
            <input type="text" name="name" placeholder="Enter your name" id="input1" />
            <input type="text" name="email" placeholder="Enter your email" id="input2" />
            <input type="text" name="phone" placeholder="Enter your phone number" id="input3" />
            <textarea name="message" placeholder="Enter your message" id="input4" rows="10" cols="50"></textarea>
            <!--These are input fields for the user to enter their name, email, phone number, and a message. 
            The "type" attribute for the name, email, and phone fields is "text", while the "type" attribute for the message 
            field is "textarea". The "placeholder" attribute provides a hint to the user about what to enter in each field. 
            The "id" attribute is used to uniquely identify each field so we can get their values later.-->
            <input type="submit" class="contact-form-button" value="Submit">
            <!--This is a submit button with a class of "contact-form-button" and a value of "Submit". When the user clicks this button, 
            the form will be submitted and the function "submitContactMsg()" will be called.-->
        </form>
    </div>
	
	<script>

		function submitContactMsg() { //This is defining a new function called "submitContactMsg()". This function will be called when the form is submitted.

  var name = document.getElementById("input1").value;
  var email = document.getElementById("input2").value;
  var phone = document.getElementById("input3").value;
  var message = document.getElementById("input4").value;
  //These lines are getting the values of the input fields with the ids "input1", "input2", "input3", and "input4", respectively. 
  //These values will be used to create the text of the contact message.
  // Combine the contents into a single string
  var text = "Name: " + name + "\nEmail: " + email + "\nPhone: " + phone + "\nMessage: " + message;

  // Create a new anchor element
  //This element will eventually be used as a link to download the message. 
  var downloadLink = document.createElement("a");


  downloadLink.href = "data:text/plain;charset=utf-8," + encodeURIComponent(text);
  //We are setting the "href" attribute of the link to include the contents of the message. 
  //The encodeURIComponent() function ensures that the message is properly encoded so that it can be downloaded without any errors. 
  //This link will be used to download the message file.

 
  downloadLink.download = "contact_message.txt";
  //In this case, we are naming the file "contact_message.txt", which will be the name of the file that the user will download when they click the link.

 
  document.body.appendChild(downloadLink);
  //We are adding the link element to the webpage, so that the user can see it and click on it to download the message file.

  // Click the link to trigger the download
  downloadLink.click();

 
  document.body.removeChild(downloadLink);
  //We are removing the link element from the webpage after the file has been downloaded. 
}
	</script>
</body>

</html>





















