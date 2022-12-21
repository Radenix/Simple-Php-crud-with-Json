<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD in PHP with JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center page-header">Add Member To JSON</h1>
    <div class="row">
        <div class="col-6">
            <a href="index.php">Back</a>
        </div>
        <div class="col-12">
           <form method="POST">
               <div class="mb-3">
                   <label for="id" class="form-label">ID</label>
                   <input type="number" class="form-control" id="id" name="id">
               </div>
               <div class="mb-3">
                   <label for="firstname" class="form-label">Firstname</label>
                   <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FirstName add">
               </div>
               <div class="mb-3">
                   <label for="lastname" class="form-label">Lastname</label>
                   <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname add">
               </div>
               <div class="mb-3">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" class="form-control" id="email" name="email" placeholder="Email add">
               </div>
               <input type="submit" name="send" value="Send" class="btn btn-primary"/>
           </form>
        </div>
    </div>
</div>
<?php

   if(isset($_POST["send"])){
       $data=file_get_contents('members.json');
       $data=json_decode($data);

       $input=array(
           'id'=>$_POST['id'],
           'firstname'=>$_POST['firstname'],
           'lastname'=>$_POST['lastname'],
           'email'=>$_POST['email']
       );

       $data[]=$input;
       $data=json_encode($data,JSON_PRETTY_PRINT);

       file_put_contents('members.json',$data);

       header("location:index.php");

   }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>