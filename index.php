
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
        
      <div class="container">
        <div class="row p-3">
          <div class="col-md-6 p-3">
          <ul class="nav nav-tabs">
          <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
          <li><a href="#signup" data-toggle="tab">Sign Up</a></li>
          
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="signin">
          <form action="login.php" method ="POST">
                    <div class = "form-group">
                        <label for="username"></label>
                        <input type="text" placeholder="username" name ="user" class ="form-control" required autocomplete="off">
                    </div>
                    <div class = "form-group">
                        <label for="password"></label>
                        <input type="password" placeholder="password" name ="psw" class ="form-control" required autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">login</button>
                </form>
          </div>
          <div class="tab-pane" id="signup">
          <form action="login.php" method ="POST">
                    <div class = "form-group">
                        <label for="username"></label>
                        <input type="text" placeholder="username" name ="user" class ="form-control" required autocomplete="off">
                    </div>
                    <div class = "form-group">
                        <label for="password"></label>
                        <input type="password" placeholder="password" name ="psw" class ="form-control" required autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
          </div>
          </div>
        </div>
          
        </div>
  </div>


    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
</body>
</html>