<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tripvee</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="icon" type="image/png" href="../assets/images/icon.png">
    <script>
        function calculate() {
            var packageType = document.getElementById("package").value;
            var quantity = parseFloat(document.getElementById("quantity").value) || 0;
            var duration = parseFloat(document.getElementById("duration").value) || 0;
            var price = 0;
            
            if (packageType == "Silver") {
                price = 579000;
            } else if (packageType == "Gold") {
                price = 959000;
            } else if (packageType == "Platinum") {
                price = 1399000;
            }
            
            var amount = price * quantity * duration;
            document.getElementById("price").innerText = "Total Harga: Rp" + amount.toLocaleString('id-ID');
            document.getElementById("amount").value = amount;
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('package').addEventListener('change', calculate);
            document.getElementById('quantity').addEventListener('input', calculate);
            document.getElementById('duration').addEventListener('input', calculate);
        });
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top text-light">
        <div class="container py-2">
            <a class="navbar-brand fst-italic fw-bold" href="#">Tripvee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="./packages.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="./index.php">Pesanan</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./login.html">Login</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid d-flex align-items-center" style="background-image: url('../assets/images/img.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <div class="jumbotron container text-light py-5">
            <div class="container">
                <h1 class="display-4 fw-normal">Hello There!</h1>
                <p class="lead fw-bold text-shadow">Lets explore the world with us.</p>
                <a href="#order-form" class="btn btn-dark">Take me there!</a>
            </div>
        </div>
    </div>     
</header>
    <section class="bg-dark text-light">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <iframe class="card-img-top" style="height: 224px;" src="https://www.youtube.com/embed/_dlBUHhDOQU" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Silver Package</h5>
                            <p class="card-text">Basic package for travellers.</p>
                            <a href="#order-form" class="btn btn-dark">Order Package!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <img src="../assets/images/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gold Package</h5>
                            <p class="card-text">Medium Package for better experience.</p>
                            <a href="#order-form" class="btn btn-dark">Order Package!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <img src="../assets/images/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Platinum Package</h5>
                            <p class="card-text">The experience you will never forget.</p>
                            <a href="#order-form" class="btn btn-dark">Order Package!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <img src="../assets/images/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Silver Package</h5>
                            <p class="card-text">Medium Package for better experience.</p>
                            <a href="#order-form" class="btn btn-dark">Order Package!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <iframe class="card-img-top" style="height: 224px;" src="https://www.youtube.com/embed/Z9TOAOWWLsY" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Gold Package</h5>
                            <p class="card-text">Basic package for travellers.</p>
                            <a href="#order-form" class="btn btn-dark">Order Package!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <img src="../assets/images/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Platinum Package</h5>
                            <p class="card-text">The experience you will never forget.</p>
                            <a href="#order-form" class="btn btn-dark">Order Package!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5" id="order-form">
            <div class="row">
                <div class="col">
                    <div class="card w-50 mt-5 mb-5 mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Order Now</h5>
                            <form method="post" action="../includes/save.php">
                                <div class="mb-3">
                                    <label class="form-label fw-medium">Orderer's Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your name ..." required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-medium">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Your number ..." required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-medium">Date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="package" class="form-label fw-medium">Package Type</label>
                                    <select class="form-select w-25" id="package" name="package">
                                        <option selected>Choose...</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                      </select>                                    
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label fw-medium">Package Quantity</label>
                                    <div class="input-group w-25">
                                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="0" value="1" min="1" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label fw-medium">Trip Duration</label>
                                    <div class="input-group w-25">
                                        <input type="number" class="form-control" id="duration" name="duration" placeholder="0" value="1" min="1" required>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="mb-3">
                                    <dl class="row">
                                        <dt class="col-sm-3">Silver Package</dt>
                                        <dd class="col-sm-9">-Rp579.000</dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">Gold Package</dt>
                                        <dd class="col-sm-9">-Rp959.000</dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">Platinum Package</dt>
                                        <dd class="col-sm-9">-Rp1.399.000</dd>
                                    </dl>
                                </div>
                                <hr>
                                <label for="amount" class="fw-bold form-label fw-medium">Total Price</label>
                                <div class="input-group mb-3 w-50">
                                    <div class="input-group-prepend">
                                      <div class="alert alert-info mt-2 text-center" id="price" name="price">Total Harga: Rp0</div>
                                    </div>
                                  </div>
                                <input type="hidden" id="amount" name="amount">
                                <button type="submit" class="btn btn-dark" value="save">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 text-light custom-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>About Us</h5>
                    <p>We offer the best travel packages for your dream destinations. Explore the world with us!</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./home.php" class="text-white">Home</a></li>
                        <li><a href="./packages.php" class="text-white">Packages</a></li>
                        <li><a href="./index.php" class="text-white">Pesanan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p class="mb-0">&copy; VSGA : Muhammad Fikri. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) { // Ganti dengan nilai scroll yang diinginkan
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        });
    </script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>