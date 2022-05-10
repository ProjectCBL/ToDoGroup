<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
  <link href="../StyleSheets/login.css" rel="stylesheet">
</head> 

<body>
<br> <h1>Login</h1> <br> <br>

<div class="container-fluid">
  <div class="container">
    <div class="row">

      <form name = "form" action = "getDBinfo.php" method = "POST"> 
        <div class="form-group">
          <label for="username">Username:</label><br>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="form-group">    
          <label for="password">Password:</label><br>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        
        <br>
        <button type="submit" value="submit" class="btn btn-primary">Sign In</button><br>
      or <br> <a href="signup.html">Create an Account</a>
      </form>
    </div>
  </div>
</div>
   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
