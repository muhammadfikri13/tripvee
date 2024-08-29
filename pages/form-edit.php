<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pesanan</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> 
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
    <?php
        include '../includes/connection.php';
        $id = $_GET['id'];
        $pesanan = mysqli_query($connection, "SELECT * FROM pesanan WHERE id = '$id'");

        if (!$pesanan) {
            die("Query failed: " . mysqli_error($connection));
        }

        $row = mysqli_fetch_array($pesanan);

        $package = array("Silver", "Gold", "Platinum");

        function active_dropdown($value, $selected) {
            $result = $value == $selected ? 'selected="selected"' : '';
            return $result;
        }
        ?>
    <div class="container py-5">
            <div class="row">
                <div class="col">
                    <div class="card w-50 mt-5 mb-5 mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center">Order Now</h5>
                            <form method="post" action="../includes/update.php">
                            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                                <div class="mb-3">
                                    <label class="form-label">Orderer's Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" value="<?php echo $row['date'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="package" class="form-label">Package Type</label>
                                    <select class="form-select w-25" id="package" name="package">
                                    <?php 
                                    foreach ($package as $j){
                                        echo "<option value='$j' ";
                                        echo $row['package']==$j?'selected="selected"':'';
                                        echo ">$j</option>";
                                    } 
                                    ?>   
                                    </select>                                    
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Package Quantity</label>
                                    <div class="input-group w-25">
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $row['quantity'];?>">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Trip Duration</label>
                                    <div class="input-group w-25">
                                        <input type="number" class="form-control" id="duration" name="duration" value="<?php echo $row['duration'];?>">
                                    </div>
                                </div>
                                <hr>
                                <label class="fw-bold form-label">Total Price</label>
                                <div class="input-group mb-3 w-50">
                                    <div class="input-group-prepend">
                                    <div class="alert alert-info mt-2 text-center" id="price" name="price">Total Harga: Rp0</div>
                                      <!-- <div class="alert alert-info mt-2 text-center" id="price" name="price">Total Harga: Rp<?php echo $row['amount'];?></div> -->
                                    </div>
                                  </div>

                                <input type="hidden" id="amount" name="amount">
                                <button type="submit" class="btn btn-dark" value="save">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>