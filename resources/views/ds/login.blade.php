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
	  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="newform.css">
    </head>
    <body>
      <form class="form">      
        <h1>Login</h1>
        <fieldset class="">
          
          <label class="label-group">Name:</label>
          <input type="text" name="fname" placeholder="What is your name?" ng-model="formdata.name" required>
          
          <label class="label-group">Password:</label>
          <input type="password" name="password" placeholder="password" ng-model="formdata.password" required ng-maxlength="16" ng-minlength="8">                  
        </fieldset>        
        <button class="submitbtn " ng-disabled="frm.$invalid" ng-click="getInfo()">Log In</button>
      </form>
      
    </body>
</html>
</body>
</html>