<?php
session_start();
include '../db_connection.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
  }

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get category ID from query string

    // Fetch category data based on the provided ID
    $sql = "SELECT * FROM add_query_list WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $registration = mysqli_fetch_assoc($result);
    } else {
        die("Error: " . mysqli_error($conn));
    }

    if (isset($_POST['update'])) {
        if (isset($_POST['fname'], $_POST['phone'], $_POST['email'], $_POST['message'])) {
            $fname = mysqli_real_escape_string($conn, $_POST['fname']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);
            
            $sql_update = "UPDATE add_query_list SET fname = '$fname', phone = '$phone', email = '$email', message = '$message' WHERE id = $id";
            $update_result = mysqli_query($conn, $sql_update);

            if ($update_result) {
                $message = "User Data updated successfully!";
                $status = "success";
            } else {
                $message = "Error: " . mysqli_error($conn);
                $status = "error";
            }

            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
                    window.onload = function() {
                        Swal.fire({
                            title: '$status',
                            text: '$message',
                            icon: '$status',
                        }).then(function() {
                            window.location = 'index.php'; // Replace with your desired redirect page
                        });
                    }
                  </script>";
        } else {
            die("All form fields are required.");
        }
    }
} else {
    die("No notice ID provided.");
}
?>


<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>
<style>
  @media (min-width: 576px) {
    .col-sm-2 {
      flex: 0 0 auto;
      width: 37.666667% !important;
    }
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <?php
  include('topnavbar.php');
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  include('sidenavbar.php');
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">EDIT QUERY LIST</h5>
              <hr>
              <!-- General Form Elements -->
              <form method="POST" action="edit_query_detais.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="row mb-3 mt-5">
                  <div class="form-group col-lg-6">
                    <label for="inputText" class="col-sm-2 col-form-label mb-2">NAME</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="fname" id="fname" value="<?php echo htmlspecialchars($registration['fname']); ?>">
                    </div>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="inputText" class="col-sm-2 col-form-label mb-2">PHONE</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" id="phone" value="<?php echo htmlspecialchars($registration['phone']); ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3 mt-5">
                  <div class="form-group col-lg-6">
                    <label for="inputText" class="col-sm-2 col-form-label mb-2">EMAIL</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($registration['email']); ?>">
                    </div>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="inputText" class="col-sm-2 col-form-label mb-2">MESSAGE</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="message" id="message" value="<?php echo htmlspecialchars($registration['message']); ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="form-group col-lg-6">
                    <div class="col-sm-10 mt-4">
                    <button type="update" class="btn btn-success fs-5 mt-3" style="width: 150px;background:rgb(0 8 22)" name="update" value="Upload">UPDATE</button>
                    </div>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
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