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
        <?php 
            require "conn.php";
            if (!isset($_GET['p'])) {
                header ('location: /');
            }
            if (!isset($_GET['s'])) {
                header ('location: /');
            }
            $id = $_GET['p'];
            $s = $_GET['s'];

            $result = $conn->query("SELECT * FROM $s WHERE id='$id'");
            $row = $result->num_rows;
            if ($row > 0) :
                $data = $result->fetch_assoc();
                if (isset($_GET['q'])):
                    $delete = $conn->query("DELETE FROM $s WHERE id='$id'");
                    if ($delete) :
                        header ('location: /');
                    else :
                        echo
                        '<div class="alert alert-danger" role="alert">'.
                            $s.' Gagal dihapus
                        </div>';
                    endif;
                endif; 
            else:
                header ('location: /');
            endif;
        ?>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-center">
                        <h4 class="my-0 fw-normal text-capitalize">Hapus <?php echo $s?></h4>
                    </div>
                    <div class="card-body"> 
                        <h4 class="my-0 fw-normal text-center">Yakin Mau Menghapus <b> <?php echo $data['name'] ?></b></h4><br>
                        <div class="row row-cols-md-12 pt-md-3 text-center">
                            <div class="col">
                                <a href="hapus.php?p=<?php echo $data['id']?>&s=<?php echo $s?>&q=delete" class="w-100 btn btn-lg btn-outline-danger">Hapus</a>
                            </div>
                            <div class="col">
                                <a href="detail.php?p=<?php echo $data['id']?>" class="w-100 btn btn-lg btn-outline-primary">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>