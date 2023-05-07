


function submitIndex () { /** function submitIndex () { - 
  This is the beginning of a function definition in JavaScript called submitIndex. 
  It takes no input parameters and will be executed when a user clicks the button that calls it. */

  
    const professionalStatement = document.getElementById("professionalStatement").value; /**This line of code declares a variable called professionalStatement and sets 
    it equal to the value of the HTML element with the ID "ps". The getElementById method is used to retrieve the element, and the value property is used to get its value. */
    const briefBio = document.getElementById("briefBiography").value; /**This line of code declares a variable called briefBio and sets it equal to the value of the 
    HTML element with the ID "bio". The getElementById method is used to retrieve the element, and the value property is used to get its value. */
  
  
    const blob1 = new Blob([professionalStatement + '\n' + briefBio], { type: "text/plain;charset=utf-8" }); /**This line of code creates a new Blob object, 
    which is a file-like object of immutable, raw data. The Blob object is constructed with an array of data and an object with metadata about the data. In this case, 
    the array contains a string that concatenates the professionalStatement and briefBio variables with a newline character in between, and the metadata specifies 
    that the data is plain text encoded in UTF-8. */
  
  
    const url1 = URL.createObjectURL(blob1); /**This line of code creates a URL for the Blob object using the createObjectURL method of the 
    URL global object. This URL can be used to download the Blob object as a file. */
  
 
    const link = document.createElement("a"); /**This line of code creates a new a element a in the HTML document.*/
    link.href = url1; //This line of code sets the href attribute of the a element to the URL of the Blob object.
    link.download = "adminIndex.txt"; // This line of code sets the download attribute of the a element to "index.txt". This will be the name of the downloaded file.
    link.click(); //This line of code programmatically clicks the a element, triggering the download of the Blob object as a file.
  

    URL.revokeObjectURL(url1); //This line of code releases the resources associated with the URL created by createObjectURL, freeing up memory.
  
  


}

function submitResume () {

const educationQualification = document.getElementById("educationalQualification").value;
const skillSet = document.getElementById("skillSet").value;
const awardsRecognition = document.getElementById("awardsAndRecognition").value;
const workExperience = document.getElementById("workExperience").value;
const referees = document.getElementById("Referees").value;

const blob2 = new Blob([educationQualification + '\n' +  skillSet + '\n' + awardsRecognition + '\n' + workExperience + '\n' + referees], { type: "text/plain;charset=utf-8" });

const url2 = URL.createObjectURL(blob2);

const link = document.createElement("a");
link.href = url2;
link.download = "adminResume.txt";
link.click();

URL.revokeObjectURL(url2);


}

function submitProjects () {


  const myProjects = document.getElementById("myProjects").value;
  
  const blob3 = new Blob([myProjects], { type: "text/plain;charset=utf-8" });
  
  const url3 = URL.createObjectURL(blob3);
  
  const link = document.createElement("a");
  link.href = url3;
  link.download = "adminProjects.txt";
  link.click();
  
  URL.revokeObjectURL(url3);

}

function readMessages() { //creates a new function

  let fileInput = document.createElement('input'); //creates an element of type input and stores it in the variable fileInput
  fileInput.type = 'file'; //type of element is set to file
  fileInput.accept = '.txt'; //we only accept text files, nothing else
  fileInput.onchange = function() { //this function will be called when the user selects a file 
      let file = this.files[0]; //this. refers to the file input element and files is an array objects where 0 is the first file
      let reader = new FileReader(); //creates a file reader object and it is assigned to the reader variable
      reader.onload = function(event) { //event listener of reader object to a function that reads the contents of the file
          let contents = event.target.result; //gets the contents of the file that was read by the FileReaderObject
          displayContents(contents); //contents as a parameter, calls the method to display teh contents
      };
      reader.readAsText(file); //reads the contensts of the file
  };
    fileInput.click();  //simulates mouse click on the fileinput element, this opens the file selection window and allows user to select file

}

function displayContents(contents) { //takes contents of file as parameter
  var lines = contents.split('\n'); //splits contents into an array of lines, assigns it to variable lines
  var table = '<table style ="margin-left: 90px;">'; //creates html table element and assigns it to the variable table
  table += '<thead><tr><th>Line Number</th><th>Text in the line</th></tr></thead>'; // add table headers for Line Number and Text
  table += '<tbody>'; // add table body
  for (var i = 0; i < lines.length; i++) { //creates a for loop, iterates over each line of the lines array and adds each line as a new row to the table variable
      table += '<tr><td>' + (i+1) + '</td><td>' +  lines[i] + '</td></tr>'; //adds a new row to the html table <tr><td> are the html tags for a table row, lines[i]
      // contains the text of the current line
  }
  table += '</tbody>';
  table += '</table>'; //adds the closing tag for the table element
  var button = document.getElementById('button4'); //get the element of the button
  button.insertAdjacentHTML('afterend', table); //afterends helps insert this table right after the element we wish to which in this case is the button i made
}

function submitSocial() {

  const socialLink1 = document.getElementById("social-link-1").value;
  const socialLink2 = document.getElementById("social-link-2").value;
  const socialLink3 = document.getElementById("social-link-3").value;
  
  const blob3 = new Blob([socialLink1 + '\n' +  socialLink2 + '\n' + socialLink3], { type: "text/plain;charset=utf-8" });
  
  const url3 = URL.createObjectURL(blob3);
  
  const link = document.createElement("a");
  link.href = url3;
  link.download = "adminSocial.txt";
  link.click();
  
  URL.revokeObjectURL(url3);

}

function processLogout () {

sessionStorage.clear();

window.location.href = "adminIndex.html";


}
