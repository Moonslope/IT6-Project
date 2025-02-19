<!DOCTYPE html>
<html lang="en">
<!-- oten -->
<?php
include "../Database/db_connect.php";

$sql = "SELECT COUNT(*) AS total_cashiers FROM cashier";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$sqll = "SELECT COUNT(*) AS total_driver FROM driver";
$resultt = $conn->query($sqll);
$roww = $resultt->fetch_assoc();

$title = "Admin Dashboard";
require "../global/head.php";

?>

<body>
   <div class="con-bg container-fluid vh-100">
      <div class="row border border-start-0 border-end-0 border-top-0 border-2 border-dark pb-2">
         <div class="col d-flex gap-2 ms-2 mt-2">
            <h1 class="fs-3 mt-2 text-white" style="text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.8);">CALTRANSCO</h1>
            <img src="../images/image.png" alt="" class="img-fluid " width="50" height="50">
         </div>
      </div>

      <div class="row pt-3">
         <div class="col col-3">
            <div class="card shadow-lg">
               <div style="padding-bottom: 235px;" class="card_css card-body">
                  <!-- ADD -->
                  <div class="dropdown mx-3 mt-4  mb-4">
                     <button class="btn btn-info border border-1 border-dark dropdown-toggle w-100 fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ADD
                     </button>
                     <ul class="dropdown-menu w-100 text-center">
                        <li><a class="dropdown-item" href="../Cashier/add_cashier.php">Cashier</a></li>
                        <li><a class="dropdown-item" href="../Driver/add_driver.php">Driver</a></li>
                        <li><a class="dropdown-item" href="#">Vehicle</a></li>
                     </ul>
                  </div>
                  <!-- ADD -->

                  <!-- VIEW -->
                  <div class="dropdown mx-3 mb-4">
                     <button class="btn btn-info border border-1 border-dark fw-semibold  dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        VIEW
                     </button>
                     <ul class="dropdown-menu w-100 text-center">
                        <li><a class="dropdown-item" href="../Cashier/view_cashier.php">Cashier</a></li>
                        <li><a class="dropdown-item" href="../Driver/view_driver.php">Driver</a></li>
                        <li><a class="dropdown-item" href="#">Vehicle</a></li>
                     </ul>
                  </div>
                  <!-- VIEW -->

                  <div class="mx-3">
                     <a href="../Login-Register/Login.php" class="btn btn-info w-100 border border-1 border-dark fw-semibold">LOG OUT</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="col col-9">
            <div class="card shadow-lg">
               <div class="card-body">

                  <div class="row mt-3 ms-3">
                     <div class="col col-3">
                        <img class="img-fluid border border-2 border-black rounded-pill" src="../images/adminpic.png" alt="" width="150" height="150">
                     </div>

                     <div class="col">
                        <h1 class="mt-3">ADMIN DASHBOARD</h1>
                        <p class="fs-5 mt-3">DATE: <?php echo date('l, M d Y'); ?></p>
                     </div>
                  </div>

                  <div class="row mt-5 d-flex justify-content-between">
                     <div class="col">
                        <div style="background-color: #7e95a8;" class="card border border-2 border-dark">
                           <div class="card-body text-center">
                              <img src="../images/cashier.png" alt="" width="80" height="80">
                              <p class="text-white fs-5 mt-4">Number of Cashiers</p>

                              <!-- php code para sa total cashier -->
                              <p class="text-white fs-2"><?php echo $row['total_cashiers']; ?></p>
                           </div>
                        </div>
                     </div>

                     <div class="col">
                        <div style="background-color: #7e95a8;" class="card border border-2 border-dark">
                           <div class="card-body text-center">
                              <img src="../images/van.png" alt="" width="80" height="80">
                              <p class="text-white fs-5 mt-4">Number of Vehicles</p>

                              <!-- php code para sa total vehicles -->
                              <p class="text-white fs-2">23</p>
                           </div>
                        </div>
                     </div>

                     <div class="col">
                        <div style="background-color: #7e95a8;" class="card border border-2 border-dark">
                           <div class="card-body text-center">
                              <img src="../images/driver.png" alt="" width="80" height="80">
                              <p class="text-white fs-5 mt-4">Number of Drivers</p>

                              <!-- php code para sa total drivers -->
                              <p class="text-white fs-2"><?php echo $roww['total_driver']; ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>