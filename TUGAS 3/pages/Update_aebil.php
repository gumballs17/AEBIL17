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
                            <a class="nav-link" href="../pages/Creators_aebil.php">DESIGN</a>
                        </li>
                    </ul>
                    <a class="btn btn-secondary" href=".../config/logout.php" role="button">LOG OUT</a>
                </div>
            </div>
        </nav>
    </section>

    <div class="all_margin">
        <!--Edit Item -->
        <section>
            <?php
                include '../config/connector.php';
    
                $id_desain = $_GET['id_desain'];
                $query = mysqli_query($connect, "select * from desain_art where id_desain = '$id_desain'");
                while($data = mysqli_fetch_array($query)){
            ?>
            <div class="additem">
                <div class="judul">
                    <h1>Edit Data</h1>
                    <h6 style="color: grey;">Edit : <?php echo $data['nama_desain']?></h6>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="../image/<?php echo $data['foto']?>" style="width: 600px; height:500px;"/>
                    </div>
                    <div class="col">
                        <div>
                            <form action="../config/update.php?id_desain=<?php echo $data['id_desain']?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama_desain" class="form-label">Design Tittle</label>
                                    <input type="text" class="form-control" id="nama_desain" name="nama_desain"
                                        value="<?php echo $data['nama_desain'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="harga" name="harga"
                                        value="<?php echo $data['harga'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_upload" class="form-label">Upload Date</label>
                                    <input type="date" class="form-control" id="tgl_upload" name="tgl_upload"
                                        value="<?php echo $data['tgl_upload'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                        value="<?php echo $data['deskripsi'];?>">
                                </div>
                                <div>
                                    <br>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </section>
    </div>

</body>

</html>