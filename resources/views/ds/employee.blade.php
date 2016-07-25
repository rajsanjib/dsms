<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form class="form">
		<h1>Employee Info</h1>
		<label class="label-group">First Name:</label>
			<input type="text" placeholder="First Name" name="first_name">
		
		<label class="label-group">Middle Name:</label>
			<input type="text" placeholder="Middle Name" name="middle_name">
		
		<label class="label-group">Last Name:</label>
			<input type="text" placeholder="Last Name" name="last_name">
		
		<label class="label-group">Address:</label>
			<input type="text" placeholder="Address" name="address">
		
		<label class="label-group">Contact:</label>
			<input type="number" placeholder="Ph. number" name="contact_number">
		
		<label class="label-group">Date of Join:</label>
			<input type="date" placeholder="Date of Join" name="date_joined">
		
		<label class="label-group">Date of Birth:</label>
			<input type="date" placeholder="Date of birth" name="dob">		
		
		<label class="label-group">Email:</label>
			<input type="email" placeholder="E-mail" name="email">
		
		<label class="label-group">Position:</label>
			<input type="text" placeholder="Position " name="position">
		
		<label class="label-group">Gender:</label>
          <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">MALE</label><br>
          <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">FEMALE</label>	
		<input type="number" placeholder="salary" name="salary">
		
		<button class="submitbtn " ng-disabled="frm.$invalid" ng-click="getInfo()">Submit</button>
	</form>
</body>
</html>