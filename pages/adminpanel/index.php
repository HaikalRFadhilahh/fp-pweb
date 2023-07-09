<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <?php
    include('../../material/icons.php');
    include('../../material/fonts.php');
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="#">JOGJA<span class="fs-5">Travel</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="row g-0">
        <div class="offcanvas-lg offcanvas-start col-lg-2 text-bg-dark" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel" style="height: 100vh;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Menu Sidebar</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
            </div>
            <div>

            </div>
        </div>
        <div class="col-lg-10 col-12">
            <div class="container">

            </div>
        </div>
    </div>
    <script src="../../JS/bootstrap.min.js"></script>
</body>

</html>