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
                    <a class="btn btn-secondary" href="../config/logout.php" role="button">LOG OUT</a>
                </div>
            </div>
        </nav>
    </section>

    <div class="all_margin">
        <!--Add Form-->
        <section>
            <div class="additem">
                <div class="judul">
                    <h1>Upload your design</h1>
                    <h6 style="color: grey;">the great amount of money comes from great design</h6>
                </div>
                <br>
                <form action="../config/upload.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_desain" class="form-label">Design Tittle</label>
                        <input type="text" class="form-control" id="nama_desain" name="nama_desain" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Price</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_upload" class="form-label">Upload Date</label>
                        <input type="date" class="form-control" id="tgl_upload" name="tgl_upload"
                            placeholder="11/12/2022">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Your Design</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                    <div>
                        <br>
                        <div class="col-12">
                            <button class="btn btn-secondary" type="submit">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

</body>

</html>