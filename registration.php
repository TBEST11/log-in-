<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN UP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><i class="fab fa-wolf-pack-battalion"></i>&nbsp;&nbsp;TBEST</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links >
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>
    </ul>
  </div-->
  </nav>
  <div class="container my-5">
    <h2 style="text-align: center;"> <b>Registration Form</b> </h2>
    <form method="POST" action="./login.php">
      <div class="form-group">
        <label for="fname">first Name</label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First Name">
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name">
      </div>
      <div class="form-group">
        <label for="gender">Select Gender</label>
        <select class="form-control" id="gender" name="gender">
          <option value="">--Select Gender--</option>
          <option value="Male"> Male </option>
          <option value="Female"> Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email Address">
      </div>
      <div>
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" name="dob" id="dob">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="Password" class="form-control" id="password" name="password" placeholder="Enter your Password">
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Repeat the password you enterd before">
      </div>
      <div>
        <button name="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>
  </div>
</body>

</html>