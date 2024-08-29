<!DOCTYPE html>
<html>
    <head>
        <title>Data Pesanan</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="../assets/images/icon.png">
    </head>
    <body class="bg-dark text-light">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container py-2">
                    <a class="navbar-brand fw-bold fst-italic" href="#">Tripvee</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="./home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="./packages.php">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold active" href="./index.php">Pesanan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <div class="container py-5 mt-5">
            <h2>List Pesanan</h2>
            <table class="table table-dark table-hover">
                <thead class="">
                    <tr>
                        <th>NO</th><th>NAME</th><th>PHONE</th><th>DATE</th><th>PACKAGE</th>
                        <th>QUANTITY</th><th>DURATION</th><th>PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../includes/connection.php';
                    $pesanan = mysqli_query($connection, "SELECT * FROM pesanan");
                    $no = 1;
                    foreach ($pesanan as $row){
                        echo "<tr>
                        <td>$no</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row["phone"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["package"] . "</td>
                        <td>" . $row["quantity"] . "</td>
                        <td>" . $row["duration"] . "</td>
                        <td>" . $row["amount"] . "</td>
                        <td>
                            <a href='form-edit.php?id=".$row['id']."' class='btn btn-sm btn-warning'>
                            <i class='bi bi-pencil-square'></i>
                            </a>
                            <a href='../includes/delete.php?id=".$row['id']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>
                            <i class='bi bi-trash'></i>
                            </a>
                        </td>
                        </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
                
            </table>
        </div>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
