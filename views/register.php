<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
    <!--Local / Offline Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--CDN / Online Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--CDN for Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-light">
  <div style="height: 100vh;">
     <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center">REGISTER</h1>
            </div>
            <div class="card-body">
              <form action="../actions/register.php" method="post">
                 <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
                 </div>

                 <div class="mb-3">
                  <label for="last_name" class="form-label">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control" required>
                 </div>

                 <!-- Bold to add emphasis -->
                 <div class="mb-3">
                   <label for="username" class="form-label fw-bold">Username</label>
                   <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
                 </div>

                 <div class="mb-3">
                   <label for="password" class="form-label fw-bold">Password</label>
                   <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                   <div class="form-text" id="password-info">
                     Password must be at least 8 charactars long.
                   </div>
                 </div>

                 <button type="submit" class="btn btn-success w-100">Register</button>
              </form>

              <p class="text-center mt-3 small">Registered already? <a href="../views">Log in.</a></p>
            </div>
        </div>
     </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>