<?php
include 'Connection.php';
if(isset($_POST['submit'])){

     $name=$_POST['name'];
    


     $sql="INSERT INTO courses (name) VALUES ('$name')";
     $result=$conn->query($sql);
     header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="styleadd.css">
  <title>Document</title>
</head>
<body>
    <main class="signin d-flex justify-content-center py-5">
          <div class="signinf bg-white ">
              <div>
                      <h3 class="border-start border-info border-5 m-4 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="enter text-muted">enter courses information</p>
              </div>
              <form action="" class="p-5 py-5" method="post">
                  <div class="mt-5 ">
                       <label for="exampleInputemail1" class="form-label ">name</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student name" name="name" REQUIRED>
                  
                  <input name="submit"type="submit" class="btn bg-info text-white w-100 mt-3" value="add">
              </form>
          </div>
    </main>
    
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>