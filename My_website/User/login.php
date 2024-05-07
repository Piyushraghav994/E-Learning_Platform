<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="loginSetup.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
           
            <span style="color:red;">
          
            </span>
        
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button class="Butt" onclick= "editProfile() " type="submit" >Login</button>
        </div>
    </form>
</div>



<script>
        function editProfile() {
            // Implement functionality to edit profile
            confirm("DO YOU WANT TO LOGIN...!!");
        }
</script>

</body>
</html>
