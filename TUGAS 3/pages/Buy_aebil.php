<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/images.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!--Navbar-->
    <section>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home_link">
                    <img src="../image/logo.jpg" alt="Logo" width="30" height="30"
                        class="d-inline-block align-text-top">
                    <b class="logo">BLENDER</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/User_aebil.php">WELCOME</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                            <?php echo $_COOKIE['username']; ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../pages/Profil_aebil.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php">LogOut</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="all_margin">
        <?php
            include '../config/connector.php';
    
            $id_desain = $_GET['id_desain'];
            $query = mysqli_query($connect, "SELECT * FROM desain_art WHERE id_desain = '$id_desain'");
            while($data = mysqli_fetch_array($query)){
        ?>
        <!--Buy -->
        <section>
            <div class="additem">
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="../image/<?php echo $data['foto']?>"
                            style="width: 600px; height:500px;" />
                    </div>
                    <div class="col">
                        <div class="judul">
                            <h1><?php echo $data['nama_desain']?></h1>
                            <h4>Price : $ <?php echo $data['harga']?></h4>
                            <p><?php echo $data['deskripsi']?></p>
                            <p style="text-align:right;"><?php echo $data['tgl_upload']?></p>
                        </div>
                        <button type="button" class="btn btn-primary" style="color: aliceblue ;" data-bs-toggle="modal"
                            data-bs-target="#popup">
                            Purchase
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!--Transaction-->
        <section>
            <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../config/purchase.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="id_desain" class="form-label">Design ID</label>
                                    <input type="text" readonly class="form-control" id="id_desain" name="id_desain" 
                                        value="<?php echo $data['id_desain']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nama" name="nama" 
                                        value="<?php echo $_COOKIE['nama']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_beli" class="form-label">Purchase Date</label>
                                    <input type="date" class="form-control" id="tgl_beli" name="tgl_beli"
                                        placeholder="11/12/2022">
                                </div>
                                <br>
                                <br>
                                <div>
                                    <div class="col-14">
                                        <button class="btn btn-secondary" type="submit"
                                            style="float: right;">Confirm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            }
        ?>
    </div>


</body>

</html>