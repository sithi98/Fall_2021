
<!DOCTYPE html>
<html>
<head>
	<title>Search Employee</title>
	 <script>
function showmyuser() {
  var username=  document.getElementById("username").value;
  var userinterest=  document.getElementById("userinterest").value;
  var userdesignation=  document.getElementById("userdesignation").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("display").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../../FTLabExam/control/getUser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("username="+username+"&userinterest="+userinterest+"&userdesignation="+userdesignation);


}

</script>
</head>
	
</head>
	 

<body>
	<legend>
		<hr>
		<h1>Serach Faculty </h1>
		Search By Faculty Name:
		  <input type="text" id="username" ><br><br>
		  Search By Research Interest:
		  <input type="text" id="userinterest" ><br><br>
		  Search By Designation: <select id="userdesignation" name ="userdesignation">
  <option value="">select Designation</option>
  <option value="Lecturer">Lecturer</option>
  <option value="Assistant Professor">Assistant Professor</option>
  <option value="Professor">Professor</option>
</select><br><br>
  <button name="submit" onclick="showmyuser()">Search</button>
  <hr>

<p id="display"></p>

		
	</legend>
	

</body>
</html>