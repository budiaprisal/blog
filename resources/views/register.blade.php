<!DOCTYPE html>
<html>
<head>
	<title> Registrasi </title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="welcome">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>

  <label for="gender">Gender:</label><br>
  <input type="radio" id="male" name="male" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="female" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="other" value="other">
  <label for="other">Other</label><br><br>

  <label for="nation">Nationality:</label><br>
  <select name="nation" id="nation"><br>
  <option value="idn">Indonesian</option>
  <option value="sing">Singaporean</option>
  <option value="malay">Malaysian</option>
  <option value="aus">Australian</option> </select>
 
  <br><br>

  <label for="language">Language Spoken:</label><br>
  <input type="checkbox" name="value1" value="Bahasa Indonesia">
  <label for="value1">Bahasa Indonesia</label><br>
  <input type="checkbox" name="value2" value="English">
  <label for="value2">English</label><br>
  <input type="checkbox" name="value3" value="Other">
  <label for="value3">Other</label><br><br>

<label for="bio">Bio:</label><br>
<textarea id="bio" name="bio" rows="10" cols="30">
</textarea><br>

<button type="submit"> Sign Up </button>
</form>
</html>
