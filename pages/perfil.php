<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../partes/head.php'; ?>
<?php include '../partes/navbar.php'; ?>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Iniciar Sesión</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- PRUEBAS -->
    <div class="containerform" id="containerform">
            <?php
            if (isset($_SESSION['username'])) {
                include '../pages/editProfile.php';
            } else {
                include '../partes/login/formulariologin.php';
            }
            ?>
    </div>

    <!-- PRUEBAS -->
    <?php include '../partes/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>