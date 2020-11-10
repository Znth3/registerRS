<?php
session_start();
if ($_SESSION['no_rm'] == 'adminRS') {
    $no_rm = $_SESSION['no_rm'];
    include "../../connect.php";
} else {
    header("location: ../../login");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/free.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/brand.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/flag.min.css">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="?page=pendaftar">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="../../icons/sprites/free.svg#cil-address-book"></use>
                </svg>
                Daftar Pendaftar</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="?page=user">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="../../icons/sprites/free.svg#cil-user"></use>
                </svg>
                Pengelolaan User</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="?page=dokter">Pengelolaan Dokter</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="?page=jadwal">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="../../icons/sprites/free.svg#cil-clipboard"></use>
                </svg>Pengelolaan Jadwal</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="?page=poliklinik">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="../../icons/sprites/free.svg#cil-hospital"></use>
                </svg>Pengelolaan Poliklinik</a></li>
    </ul>
</div>
<div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="../../icons/sprites/free.svg#cil-menu"></use>
            </svg>
        </button>
        <a class="c-header-brand d-lg-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
        </a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="../../icons/sprites/free.svg#cil-menu"></use>
            </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="../../icons/sprites/free.svg#cil-bell"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="../../icons/sprites/free.svg#cil-list-rich"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="../../icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                      role="button" aria-haspopup="true" aria-expanded="false">
                    <span>Account</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="../../icons/sprites/free.svg#cil-user"></use>
                        </svg>
                        Profile</a><a class="dropdown-item" href="#">

                        <svg class="c-icon mr-2">
                            <use xlink:href="../../icons/sprites/free.svg#cil-settings"></use>
                        </svg>
                        Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../login/logout.php">
                        <svg class="c-icon mr-2">
                            <use xlink:href="../../icons/sprites/free.svg#cil-account-logout"></use>
                        </svg>
                        Logout</a>
                </div>
            </li>
        </ul>
        <div class="c-subheader px-3">
            <!-- Breadcrumb-->
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <!-- Breadcrumb Menu-->
            </ol>
        </div>
    </header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="c-callout c-callout-info"><small class="text-muted">Pasien</small>
                                                        <div class="text-value-lg">
                                                            <?php
                                                            $result = $conn->query("SELECT COUNT(no_rm) as no_rm FROM pasien");
                                                            if ($result->num_rows >0){
                                                                while ($data = $result->fetch_object()):
                                                                    echo $data->no_rm;
                                                                endwhile;
                                                            }else{
                                                                echo "Tidak ada data pasien";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                                <div class="col-4">
                                                    <div class="c-callout c-callout-danger"><small class="text-muted">Pendaftar Hari Ini</small>
                                                        <div class="text-value-lg">
                                                            <?php
                                                            $result = $conn->query("SELECT COUNT(no_antrian) as no FROM daftar WHERE year(waktu) = year(now()) AND month(waktu) = month(now()) AND day(waktu) = day(now())");
                                                            if ($result->num_rows > 0){
                                                                while ($data = $result->fetch_object()):
                                                                    if($data->no == 0){
                                                                        echo "Tidak ada";
                                                                    }else{
                                                                        echo $data->no;
                                                                    }

                                                                endwhile;
                                                            }else{
                                                                echo "Tidak ada data pasien";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                                <div class="col-4">
                                                    <div class="c-callout c-callout-danger"><small class="text-muted">Jumlah Dokter</small>
                                                        <div class="text-value-lg">
                                                            <?php
                                                            $result = $conn->query("SELECT COUNT(id_dokter) as no FROM dokter");
                                                            if ($result->num_rows >0){
                                                                while ($data = $result->fetch_object()):
                                                                    echo $data->no;
                                                                endwhile;
                                                            }else{
                                                                echo "Tidak ada data pasien";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                            <!-- /.row-->
                                            <hr class="mt-0">
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                </div>
                            </div>
<!--                            page control-->
                            <?php
                                $p = $_GET['page'];
                                if ($p == 'pendaftar'):
                                    require_once 'daftar/index.php';
                                elseif ($p == 'poliklinik'):
                                    include "poliklinik/index.php";
                                elseif ($p == 'dokter'):
                                    include "dokter/index.php";
                                elseif ($p == 'user'):
                                    include "user/index.php";
                                endif;
                            ?>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                </div>
            </div>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>
</div>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<script src="../_function.js"></script>

<script>
    $(document).ready(function() {
        $('#table-daftar').DataTable();
    } );
</script>
</body>
</html>