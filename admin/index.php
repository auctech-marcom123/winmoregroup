<?php
session_start();
include '../db_connection.php';

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body>

  <!-- ======= Header ======= -->
  <?php
  include('topnavbar.php');
  ?>

  <!-- ======= Sidebar ======= -->
  <?php
  include('sidenavbar.php');
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body mt-4">
              <!-- Table with stripped rows -->
              <table class="table">
                <thead class="text-center">
                  <tr>
                    <th>S.NO.</th>
                    <th>FIRST NAME</th>
                   
                    <th>PHONE NUMBER</th>
                    <th>EMAIL</th>
                    <th>MESSAGE</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    // Fetch data from the database
                    $sql = "SELECT * FROM add_query_list ORDER BY added_date DESC";
                    $result = mysqli_query($conn, $sql);

                    // Check if there are any rows returned
                    if (mysqli_num_rows($result) > 0) {
                      $sno = 1;
                      // Loop through each row and display data
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $sno . "</td>";
                        echo "<td>" . $row['fname'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td>" . $row['added_date'] . "</td>";
                        echo "<td><a href='edit_query_detais.php?id={$row['id']}' onclick='return confirmUpdate()' class='border-edit  p-2 fw-bold rounded'><i class='fa-solid fa-pen-to-square' style='color:red'></i></a>
                                  <a href='delete_query.php?id={$row['id']}' onclick='return confirmDelete()' class='  p-2 fw-bold rounded'><i class='fa-solid fa-trash' style='color:red'></i></a></td>";
                        echo "</tr>";
                        $sno++;
                      }
                    } else {
                      echo "<tr><td colspan='4'>No data found.</td></tr>";
                    }

                    // Close the connection
                    mysqli_close($conn);
                    ?>
                    <script>
                      function confirmUpdate() {
                        return confirm("Are you sure you want to Edit this Record.");
                      }
                    </script>
                    <script>
                      function confirmDelete() {
                        return confirm("Are you sure you want to delete this Record.");
                      }
                    </script>
                  </tbody>
              </table>
              
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('footer.php');
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>