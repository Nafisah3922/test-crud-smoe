<?php
include "koneksi.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $employe_id = $_POST['employe_id'];
    $job = $_POST['job'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO `mst_users`(`nama`, `employe_id`, `job`, `no_hp`, `alamat`) 
    VALUES ('$name', '$employe_id', '$job', '$no_hp', '$alamat')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created succesfully");
    }
    else {
        echo "Failed: " . mysqli_connect_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>CRUD</title>
    </head>

    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
            style="background-color: #FF7F3E;">
            PHP Complete CRUD Application
        </nav>

        <div class="container">
            <div class="text-center mb-4">
                <h3>Add New User</h3>
                <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Albert">

                </div>

                <div class="col">
                    <label class="form-label">Employe ID:</label>
                    <input type="text" class="form-control" name="employe_id" placeholder="1">

                </div>
            </div>

            <div class="mb-3">
                    <label class="form-label">Job:</label>
                    <input type="job" class="form-control" name="job" placeholder="">

                </div>
            

            <div class="mb-3">
                    <label class="form-label">No Hp:</label>
                    <input type="no_hp" class="form-control" name="no_hp" placeholder="+62">

                </div>
            

            <div class="mb-3">
                    <label class="form-label">Alamat:</label>
                    <input type="alamat" class="form-control" name="alamat" placeholder="....">

                </div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                 <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
            

        </form>
    </div>
</div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    

</html>