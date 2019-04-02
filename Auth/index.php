<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-12 offset-sm-4 col-sm-4">
      <h3 class="text-center">jwt-php-project</h3>
      <br>
      <h4 class="text-center">Login</h4>
      <form id="login">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
               maxlength="255"
               class="form-control"
               id="login-email"
               required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password"
               maxlength="32"
               class="form-control"
               id="login-password"
               required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Log in">
        </div>
      </form>
    </div>
    <div class="col-xs-12 offset-sm-4 col-sm-4">
      <hr>
      <div id="result-container"></div>
    </div>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="script.js"></script>
</body>
</html>