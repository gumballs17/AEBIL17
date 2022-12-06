<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/creator.css">
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
                            <a class="nav-link" href="#models">DESIGN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/Order_aebil.php">ORDER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/Revenue_aebil.php">REVENUE</a>
                        </li>
                    </ul>
                    <a class="btn btn-secondary" href="../config/logout.php" role="button">LOG OUT</a>
                </div>
            </div>
        </nav>
    </section>

    <!--Design-->
    <section id="home_link">
        <div class="container-fluid banner">
            <div class="container text-center">
                <div class="colom_typo1">
                    <div class="row">
                        <div class="col">
                            <h1>WELCOME</h1>
                            <h4><?php echo $_COOKIE['nama']; ?></h4>
                            <p>Your Imagination become real with BLENDER
                            </p>
                            <a class="btn btn-secondary btn-lg" href="../pages/Design_aebil.php" role="button"> Upload
                                Design</a>
                            <br>
                            <br>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="all_margin">
        <!--Card-->
        <section id="models">
            <div class="additem">
                <div class="judul">
                    <h1>Your Art's</h1>
                    <h6 style="color: grey;">The Great amount of money comes from the great design</h6>
                </div>
                <br>
                <div class="row">
                    <?php
                    include '../config/connector.php';

                    $query = mysqli_query($connect, "SELECT * FROM desain_art ORDER BY tgl_upload DESC");
                    while($select = mysqli_fetch_assoc($query)){
                ?>
                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../image/<?php echo $select['foto']?>" class="card-img-top" alt="gambar mobil"
                                style="width: 288px; height:190px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $select['nama_desain']?></h5>
                                <p class="card-text"><?php echo $select['deskripsi']?></p>
                                <a href="../pages/Update_aebil.php?id_desain=<?php echo $select['id_desain']?>"
                                    class="btn btn-primary btn-edit me-4">Detail</a>
                                <a href="../config/delete.php?id_desain=<?php echo $select['id_desain']?>"
                                    class="btn btn-danger btn-edit">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                ?>
        </section>
    </div>

    <!--Footer-->
    <section>
        <div style="margin-top:80px;">
            <footer class="sticky-bottom">
                <div class="container text-center">
                    <div class="colom_typo3">
                        <div class="row">
                            <div class="col">
                                <span style="color: white;"> Social Media </span>
                                <div class="row">
                                    <div class="col">Facebook</div>
                                </div>
                                <div class="row">
                                    <div class="col">Instagram</div>
                                </div>
                                <div class="row">
                                    <div class="col">Twitter</div>
                                </div>

                            </div>
                            <div class="col">
                                <span style="color: white;"> About </span>
                                <div class="row">
                                    <div class="col">Blender Foundation</div>
                                </div>
                                <div class="row">
                                    <div class="col">Blender Institute</div>
                                </div>
                                <div class="row">
                                    <div class="col">License</div>
                                </div>
                            </div>
                            <div class="col">
                                <span style="color: white;"> Developers </span>
                                <div class="row">
                                    <div class="col">Blog</div>
                                </div>
                                <div class="row">
                                    <div class="col">Forum</div>
                                </div>
                                <div class="row">
                                    <div class="col">Python API</div>
                                </div>
                            </div>
                            <div class="col">
                                <span style="color: white;"> Support </span>
                                <div class="row">
                                    <div class="col">Community</div>
                                </div>
                                <div class="row">
                                    <div class="col">Manual</div>
                                </div>
                                <div class="row">
                                    <div class="col">FAQ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Modal -->
        <div style="background-color: #353252; text-align: center; margin-bottom: -50px;">
            <div class="container-fluid">
                <!-- Button trigger modal -->
                <button type="button" class="btn" style="color: aliceblue ;" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Copyright Aebil Taskari Rusydi
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">This Design Belongs</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <P>AEBIL TASKARI RUSYDI</P>
                                <P>1202204126</P>
                                <P>SI4402</P>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>