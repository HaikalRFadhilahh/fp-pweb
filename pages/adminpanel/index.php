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
           <nav id="sidebarMenu" class="collapse d-md-block sidebar collapse .bg-secondary.bg-gradient">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-4 mt-7">

        <!-- Collapsed content -->
        <ul id="collapseExample1" class="collapse show list-group list-group-flush">
          <li class="list-group-item py-1">
            <a href="user.php" class="text-reset">User</a>
          </li>
          <li class="list-group-item py-1">
            <a href="ticket_admin.php" class="text-reset">Detail Pemesan</a>
          </li>
          <li class="list-group-item py-1">
            <a href="jadwal.php" class="text-reset">Jadwal</a>
          </li>
          <li class="list-group-item py-1">
            <a href="tujuan.php" class="text-reset">Tujuan</a>
          </li>
          <li class="list-group-item py-1">
            <a href="kelas.php" class="text-reset">Kelas</a>
          </li>
          <li class="list-group-item py-1">
            <a href="bus.php" class="text-reset">Bus</a>
          </li>
          <li class="list-group-item py-1">
            <a href="tipe_bus.php" class="text-reset">Tipe Bus</a>
          </li>
         
        </ul>
        <!-- Collapse 1 -->

      </div>
    </div>
  </nav>
        </div>
        <div class="col-lg-10 col-12">
            <div class="container">

            </div>
        </div>
    </div>
    <script src="../../JS/bootstrap.min.js"></script>
</body>

</html>