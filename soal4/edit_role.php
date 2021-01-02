<?php 
require "conn.php";
if (!isset($_GET['p'])) {
    header ('location /');
}
$id = $_GET['p'];
$result = $conn->query("SELECT * FROM role WHERE id='$id'");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Jeep</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Mobile Jeep</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <a class="p-2 text-dark" href="create_role.php">Tambah Role</a>
            <a class="p-2 text-dark" href="create_hero.php">Tambah Hero</a>
        </nav>
    </header>
    <main class="container pt-md-5">
        <div class="row justify-content-center text-center">
            <div class="col-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Edit Role</h4>
                    </div>
                    <div class="card-body">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") :
                                $role = $_POST['role'];
                                $insert = $conn->query("UPDATE role SET name='$role' WHERE id='$id'");
                                if ($insert) :
                                    echo 
                                        '<div class="alert alert-success" role="alert">
                                            Role Berhasil Ubah
                                        </div>';
                                else :
                                    echo 
                                    '<div class="alert alert-danger" role="alert">
                                        Role Gagal Ubah
                                    </div>';
                                endif;
                            endif;
                        ?>    
                        <form action="" method="POST">
                            <input class="form-control" type="text" name="role" value="<?php echo $data['name']?>" placeholder="Masukan Role"><br>
                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>