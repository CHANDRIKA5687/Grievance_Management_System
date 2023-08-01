<?php
session_start();
include('includes/dbconnection.php');
include('includes/checklogin.php');
check_login();

if (isset($_POST['submit'])) {
    $catcode = $_POST['catcode'];
    $catname = $_POST['catname'];
    $description = $_POST['description'];
    $query = mysqli_query($con, "INSERT INTO category (categoryCode, categoryName, description) VALUES ('$catcode','$catname','$description')");
    if ($query) {
        echo "<script>alert('Category created');</script>";
    } else {
        echo "<script>alert('Something went wrong please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Admin | Add Category</title>
    <!-- Rest of the code remains the same -->
</head>

<body>
    <?php include("includes/header.php");?>
    <div class="main-container">
        <div class="navbar-content">
            <?php include("includes/sidebar.php");?>
        </div>
        <div class="main-content">
            <div class="container">
                <!-- Rest of the code remains the same -->
            </div>
        </div>
        <!-- Rest of the code remains the same -->
    </div>
    <?php include("includes/footer.php");?>
    <!-- Rest of the code remains the same -->
</body>
<!-- Rest of the code remains the same -->
</html>
