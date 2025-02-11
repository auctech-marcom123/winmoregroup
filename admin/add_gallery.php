<?php
session_start();
include '../db_connection.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$id = $_POST['id'] ?? '';
$heading = $_POST['heading'] ?? '';
$paragraph = $_POST['paragraph'] ?? '';
$added_date = date('Y-m-d H:i:s');

if (isset($_POST['submit']) && !empty($_FILES['logo']['name'][0])) {
    $logoFiles = $_FILES['logo']['name'];
    $target_dir = "assets/uploads_banner/";

    foreach ($logoFiles as $key => $logo) {
        $target_file = $target_dir . basename($logo);
        
        // Move uploaded file to the target directory
        move_uploaded_file($_FILES['logo']['tmp_name'][$key], $target_file);

        if ($id) {
            // Update query
            $stmt = $conn->prepare("UPDATE add_banner SET logo=?, heading=?, paragraph=?, added_date=? WHERE id=?");
            if ($stmt === false) {
                // Check if prepare fails
                echo "Error: " . $conn->error;
                exit;
            }
            $stmt->bind_param('ssssi', $logo, $heading, $paragraph, $added_date, $id);
        } else {
            // Insert query
            $stmt = $conn->prepare("INSERT INTO add_banner (logo, heading, paragraph, added_date) VALUES (?, ?, ?, ?)");
            if ($stmt === false) {
                // Check if prepare fails
                echo "Error: " . $conn->error;
                exit;
            }
            $stmt->bind_param('ssss', $logo, $heading, $paragraph, $added_date);
        }
        $stmt->execute();
    }

    // SweetAlert for success
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
              window.onload = function() {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data has been $action successfully!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'add_gallery.php';
                        }
                    });
                }
              </script>";
} else {
    // SweetAlert for no files uploaded
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
               window.onload = function() {
                      title: 'Error!',
                  text: 'No files uploaded!',
                  icon: 'error',
                  confirmButtonText: 'OK'
                  }
                </script>";
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
                            <form method="POST" action="add_gallery.php" enctype="multipart/form-data">
                                <div class="row mb-3 mt-5">
                                    <div class="form-group col-lg-6">
                                        <label for="logo" class="col-sm-2 col-form-label mb-2">UPLOAD PHOTO</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="logo[]" id="logo" multiple
                                                required accept=".jpeg, .png, .jpg, .webp">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="logo" class="col-sm-2 col-form-label mb-2">Heading</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="heading" id="heading"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 mt-2">
                                    <div class="form-group col-lg-6">
                                        <label for="logo" class="col-sm-2 col-form-label mb-2">Paragraph</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="paragraph" id="paragraph"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-4">
                                        <button type="submit" class="btn btn-success fs-5 mt-2"
                                            style="width: 150px; background: rgb(0 8 22);" name="submit"
                                            value="Upload">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body mt-4">
                            <!-- Table with stripped rows -->
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th>S.NO.</th>
                                        <th>IMAGE</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody" class="text-center">
                                    <?php
                                    $query = "SELECT * FROM add_banner ORDER BY added_date DESC";
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        $sno = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            $statusText = $row['status'] ? 'Active' : 'Inactive';
                                            $imageStyle = $row['status'] ? '' : 'display: none;';
                                            echo "<tr>
                    <td>{$sno}</td>
                    <td>";
                                            if (!empty($row['logo'])) {
                                                echo "<img id='image-{$row['id']}' src='assets/uploads_banner/{$row['logo']}' alt='Image' style='max-width: 100px; max-height: 100px; {$imageStyle}'>";
                                            } else {
                                                echo "No Image";
                                            }
                                            echo "</td>
                  <td>
                      <select class='form-select changeStatus' onchange='changeStatus({$row['id']}, this.value)'>
                          <option value='activate' " . ($row['status'] ? "selected" : "") . ">Active</option>
                          <option value='deactivate' " . (!$row['status'] ? "selected" : "") . ">Inactive</option>
                      </select>
                  </td>
                  <td>
                      <a href='edit_banner.php?id={$row['id']}' onclick='return confirmEdit()' class='border-edit p-2 fw-bold rounded'>
                          <i class='fa-solid fa-pen-to-square' style='color:red'></i>
                      </a>
                      <a href='delete_banner.php?id={$row['id']}' onclick='return confirmDelete()' class=' p-2 fw-bold rounded'>
                          <i class='fa-solid fa-trash' style='color:red'></i>
                      </a>
                  </td>
                  </tr>";
                                            $sno++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>No data found.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <script>
                                function confirmEdit() {
                                    return confirm("Are you sure you want to edit this record?");
                                }

                                function confirmDelete() {
                                    return confirm("Are you sure you want to delete this record?");
                                }

                                function changeStatus(id, status) {
                                    if (!confirm(`Are you sure you want to ${status === 'activate' ? 'activate' : 'deactivate'} this record?`)) {
                                        return;
                                    }
                                    const xhr = new XMLHttpRequest();
                                    xhr.open("GET", `banner_status.php?id=${id}&status=${status}`, true);
                                    xhr.onload = function () {
                                        if (xhr.status >= 200 && xhr.status < 300) {
                                            const image = document.getElementById('image-' + id);
                                            if (image) {
                                                image.style.display = (status === 'activate') ? 'block' : 'none';
                                            }
                                        } else {
                                            alert("Error updating the status.");
                                        }
                                    };
                                    xhr.send();
                                }
                            </script>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
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
            const rowsPerPage = 5;
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