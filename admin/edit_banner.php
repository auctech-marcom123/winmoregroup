<?php
session_start();
include '../db_connection.php';

// Ensure user is logged in as admin
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Get ID from URL
$id = $_GET['id'] ?? '';
if (!$id) {
    header("Location: add_banner.php");
    exit;
}

// Fetch existing data for the given ID
$sql = "SELECT * FROM add_banner WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$banner = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $logo = $banner['logo'];  // Keep the existing logo by default

    // If new logo is uploaded
    if (!empty($_FILES['logo']['name'])) {
        $logo = $_FILES['logo']['name'];
        $target_file = "assets/uploads_banner/" . basename($logo);
        move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);
    }

    // Update the banner in the database
    $sql = "UPDATE add_banner SET logo=?, heading=?, paragraph=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $logo, $heading, $paragraph, $id);
    $stmt->execute();

    echo "<script>
            alert('Banner updated successfully!');
            window.location = 'add_gallery.php';
          </script>";
    exit;
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
                            <h5 class="card-title">Add Banner</h5>
                            <hr>
                            <!-- General Form Elements -->
                            <form method="POST" action="edit_banner.php?id=<?php echo $id; ?>"
                                enctype="multipart/form-data">
                                <div class="row mb-3 mt-5">
                                    <div class="form-group col-lg-6">
                                        <label for="logo" class="col-sm-2 col-form-label mb-2">UPLOAD PHOTO</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="logo" name="logo"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="logo" class="col-sm-2 col-form-label mb-2">Heading</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="heading" name="heading"
                                                value="<?php echo htmlspecialchars($banner['heading']); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 mt-2">
                                    <div class="form-group col-lg-6">
                                        <label for="logo" class="col-sm-2 col-form-label mb-2">Paragraph</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="paragraph" id="paragraph"
                                                required value="<?php echo htmlspecialchars($banner['paragraph']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-4">
                                        <button type="submit" class="btn btn-success fs-5 mt-2"
                                            style="width: 150px; background: rgb(0 8 22);" name="update">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div id="pagination" class="d-flex justify-content-center align-items-center mt-3">
                    <button id="prev" class="btn btn-warning mr-2" aria-label="Previous">
                        <i class="fa fa-arrow-left"></i>
                    </button>

                    <div id="pageNumbers" class="mx-3">
                        <label>
                            <input type="checkbox" id="page1"> Page 1
                        </label>
                        <label>
                            <input type="checkbox" id="page2"> Page 2
                        </label>
                        <!-- Add more checkboxes as needed -->
                    </div>

                    <button id="next" class="btn btn-warning ml-2" aria-label="Next">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include('footer.php');
    ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const rowsPerPage = 10;
            const rows = document.querySelectorAll('#tableBody tr');
            const totalPages = Math.ceil(rows.length / rowsPerPage);
            let currentPage = 1;

            function showPage(page) {
                rows.forEach((row, index) => {
                    row.style.display = (index >= (page - 1) * rowsPerPage && index < page * rowsPerPage) ? 'table-row' : 'none';
                });
                updateButtons(page);
            }

            function updateButtons(page) {
                document.getElementById('pageNumbers').textContent = `Page ${page} of ${totalPages}`;
                document.getElementById('prev').disabled = page === 1;
                document.getElementById('next').disabled = page === totalPages;
            }

            document.getElementById('prev').addEventListener('click', function () {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            document.getElementById('next').addEventListener('click', function () {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            showPage(1); // Show the first page by default
        });
    </script>
</body>

</html>