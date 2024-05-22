<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- CSS lainnya -->

    <title>CRUD</title>
    </head>

    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
            style="background-color: #FF7F3E;">
            PHP Complete CRUD Application
        </nav>

        <div class="container">
            <?php
            if(isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type ="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
                </div>';
            }
            ?>
            <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

            <table class="table table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Employe ID</th>
                        <th scope="col">Job</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                include "koneksi.php";

                $sql = "SELECT * FROM `mst_users`"; 
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                    <td><?php echo $row ['nama'] ?></td>
                        <td><?php echo isset($row['employe_id']) ? $row['employe_id'] : 'N/A'; ?></td>
                        <td><?php echo isset($row['job']) ? $row['job'] : 'N/A'; ?></td>
                        <td><?php echo isset($row['no_hp']) ? $row['no_hp'] : 'N/A'; ?></td>
                        <td><?php echo isset($row['alamat']) ? $row['alamat'] : 'N/A'; ?></td>
                    <td>
                    <a href="edit.php" class="link-dark"><i class="fas fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="delete.php" class="link-dark"><i class="fas fa-trash fs-5"></i></a>
                    </tr> 
                    <?php
                }
                ?>
                
            </tbody>
        </table>
                    


        </div>
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    

</html>