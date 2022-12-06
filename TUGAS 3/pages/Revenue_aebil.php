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
                            <a class="nav-link" href="../pages/Creators_aebil.php">DESIGN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/Order_aebil.php">ORDER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">REVENUE</a>
                        </li>
                    </ul>
                    <a class="btn btn-secondary" href="../config/logout.php" role="button">LOG OUT</a>
                </div>
            </div>
        </nav>
    </section>

    <div class="all_margin">
        <!--Revenue-->
        <section id="contact">
            <div class="grid_table">
                <div class="judul">
                    <h1>Revenue</h1>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID Design</th>
                            <th scope="col">Design Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Upload Date</th>
                            <th scope="col">Sold</th>
                            <th scope="col">Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config/connector.php';

                        $query = mysqli_query($connect, "SELECT * FROM desain_art ORDER BY tgl_upload ASC ");
                        while($select = mysqli_fetch_assoc($query)){
                    ?>
                        <tr>
                            <td><?php echo $select['id_desain']?></td>
                            <td><?php echo $select['nama_desain']?></td>
                            <td>$ <?php echo $select['harga']?></td>
                            <td><?php echo $select['tgl_upload']?></td>
                            <td><?php echo $select['terjual']?></td>
                            <td>$ <?php echo $select['total_harga']?></td>

                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</body>

</html>