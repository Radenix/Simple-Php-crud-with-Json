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
    <h1 class="text-center page-header">PHP CRUD with JSON</h1>
    <div class="row">
        <div class="col-12">
            <a href="add.php" class="btn btn-primary">Add Member</a>
            <table class="table table-striped table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                 $data=file_get_contents('members.json');
                 $data=json_decode($data);
                 foreach ($data as $element){
                     echo "
                     <tr>
                            <th scope='row'>".$element->id."</th>
                            <td>".$element->firstname."</td>
                            <td>".$element->lastname."</td>
                            <td>".$element->email."</td>
                            <td>
                                <a href='update.php' class='btn btn-success btn-sm'>Edit</a>
                                <a href='delete.php' class='btn btn-danger btn-sm'>Delete</a>
        
                            </td>
                     </tr>
                     ";
                 }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>