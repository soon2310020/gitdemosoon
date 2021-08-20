<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="">

    <title><?php
        $controller='';
        $action='';
        if (isset($_GET['controller']))
        {
            $controller=$_GET['controller'];
        }
        if (isset($_GET['action']))
        {
            $action=$_GET['action'];
        }

        echo "$controller-$action"?></title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


    <?php require_once 'header.php'; ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" style="text-align: center">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->error)): ?>
        <div class="alert alert-danger" style="text-align: center" id="error">
            <?php
            echo $this->error;
            ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success" style="text-align: center">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php endif; ?>

            <?php echo $this->content; ?>


    <?php require_once 'footer.php'; ?>


</div>
<!-- End of Main Content -->
<!-- jQuery 3 -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/ckeditor/ckeditor.js"></script>


<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>
<script src="assets/js/script.js"></script>
<!-- Custom scripts for all pages-->

<!---->
<!-- Page level plugins-->
<script src="assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts-->
<script src="assets/js/demo/chart-area-demo.js"></script>
<script src="assets/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>
