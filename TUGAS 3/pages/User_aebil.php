<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/user.css">
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
                            <a class="nav-link" aria-current="page" href="#home_link">WELCOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carousel_link">POPULAR</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#models">3D MODELS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/Purchase_aebil.php">BUYS</a>
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

    <!--Profile Video Youtube & Lokasi-->
    <section id="home_link">
        <div class="container-fluid banner">
            <div class="container text-center">
                <div class="colom_typo1">
                    <div class="row">
                        <div class="col">
                            <h1>WELCOME TO THE BLENDER</h1>
                            <h4> Let's create your world</h4>
                            <p>Blender is the free and open source 3D creation suite. It supports the entirety of the 3D
                                pipeline—modeling, rigging, animation, simulation, rendering, compositing and motion
                                tracking, even video editing and game creation. Advanced users employ Blenders API for
                                Python scripting to customize the application and write specialized tools; often these
                                are included in Blenders future releases. Blender is well suited to individuals and
                                small studios who benefit from its unified pipeline and responsive development process.
                            </p>
                        </div>
                        <div class="col">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/QRqY_20ti9A"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="all_margin">
        <!--Carousel-->
        <section id="carousel_link">
            <div>
                <div class="judul">
                    <h1>This Month</h1>
                    <h5 style="color:grey;">the best art and creators this month</h5>
                </div>
            </div>
            <div class="grid_carousel">
                <div id="carousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3"
                            aria-label="Slide 0"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../image/a.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Carribean River</h4>
                                <p>Create by ONIX</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/b.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>SNOW FLAKE</h4>
                                <p>Create by ATR</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/c.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>ThE Serpent</h4>
                                <p>Create by Jackss</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/d.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>SPACE MACHINE</h4>
                                <p>Create by Elen Musk</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!--Card-->
        <section id="models">
            <div class="additem">
                <div class="judul">
                    <h1>3D MODELS</h1>
                    <h5 style="color: grey;">Reasonable price, reasonable design</h5>
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
                                <p class="card-text">price : $ <?php echo $select['harga']?></p>
                                <p class="card-text"><?php echo $select['deskripsi']?></p>
                                <a href="../pages/Buy_aebil.php?id_desain=<?php echo $select['id_desain']?>"
                                    class="btn btn-primary btn-edit me-4">Detail</a>
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
        <div style="margin-top:50px;">
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
            <!-- Modal -->
            <div style="background-color: #353252; text-align: center; margin-bottom: -50px;">
                <div class="container-fluid">
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</body>

</html>