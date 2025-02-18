<!DOCTYPE html>
<html lang="en">

<?php
include "../Database/db_connect.php";

require "../global/head.php";
$title = "View Cashier Lists";
?>

<body>
   <div class="con-bg container-fluid vh-100">
      <div class="row border border-start-0 border-end-0 border-top-0 border-2 border-dark pb-2">
         <div class="col d-flex gap-2 ms-2 mt-2">
            <a href="../AdminUI/adminDashboard.php" style="text-decoration: none;" class="d-flex gap-2">
               <h1 class="fs-3 mt-2 text-white" style="text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.8);">CALTRANSCO</h1>
               <img src="../images/image.png" alt="" class="img-fluid " width="50" height="50">
            </a>
         </div>
      </div>

      <div class="row pt-3">
         <div class="col col-3">
            <div class="card shadow-lg">
               <div style="padding-bottom: 280px;" class="card_css card-body">
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

         <!-- mao ni para sa view -->
         <div class="col col-9">
            <div class="card shadow">
               <div class="card-body">
                  <h1 class="card-title fs-3 mb-3 text-center">CASHIER | LISTS</h1>


                  <div style="max-height: 400px; overflow-y: auto;">
                     <?php
                     try {
                        $sql = "SELECT * FROM cashier";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                     ?>
                              <div>
                                 <ul class="list-group mb-1">
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <div>
                                             <img src="../images/cashier.png" alt="" class="img-fluid rounded-pill border border-2 border-dark me-3" width="50" height="50">
                                          </div>
                                          <div>
                                             <span><?php echo '<strong>Name   : </strong>' . $row['cashier_fname'] . ' ' . $row['cashier_lname'] ?></span> <br>
                                             <span><?php echo '<strong>Address   : </strong> ' . $row['cashier_address'] ?></span><br>
                                             <span><?php echo '<strong>Contact Number   : </strong>' . $row['cashier_contactNum'] ?></span>
                                          </div>
                                       </div>
                                       <div class="group-btn">
                                          <a href="../Cashier/edit_cashier.php?id=<?php echo $row['id'] ?>" class="btn"><i class="btn btn-outline-success bi bi-pencil-square"></i></a>
                                          <a href="../Operations/op_delete_cashier.php?id=<?php echo $row['id'] ?>" class="btn"><i class="btn btn-outline-danger bi bi-trash"></i></a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                     <?php
                           }
                        } else {
                           echo '<div class="text-center mt-3"><p class="text-muted fs-5">No cashiers found.</p></div>';
                        }

                        $conn->close();
                     } catch (\Exception $e) {
                        die($e);
                     }
                     ?>

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