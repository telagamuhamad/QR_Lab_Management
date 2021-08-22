<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>data aset</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                <div class="sidebar-brand-text mx-3">Laboratory Management System</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="data_asset.html">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Aset</span></a>
            </li>
            
             <li class="nav-item active">
                <a class="nav-link" href="rencana_praktikum.html">
                    <i class="fas fa-fw fa-pencil-alt"></i>
                    <span>Perencanaan Praktikum</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="rencana_praktikum.html">
                    <i class="fas fa-fw fa-toolbox"></i>
                    <span>Pelaksanaan Praktikum</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Form Perencanaan </a>
                        <a class="collapse-item" href="">Form Pelaksanaan </a>
                        <a class="collapse-item" href="">Laporan Data Aset </a>
                    </div>
                </div>
            </li>
            
             <li class="nav-item active">
                <a class="nav-link" href="daftar_pengguna.html">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Daftar Pengguna</span></a>
            </li>

      
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $admin['namaloginadm'];?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                            <a href="<?= base_url('c_login/logout'); ?>">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">Logout</i>
                            </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   <div class="row">
                            <div class="col-lg-6">
                            <img src="<?= base_url('assets/'); ?>img/pln.jpeg" height="550"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Data Aset Laboratorium</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('c_tambahdataaset/tambah'); ?>">
                                        <div class="form-group">
                                             <input type="text" class="form-control form-control-user"
                                                id="kode" placeholder="Kode aset" name="kode_aset">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="namaaset" placeholder="nama aset" name="nama_aset">
                                        </div>
                                        
                                        <div class="form-group">
                                        	<td> Klasifikasi : </td>
                                            <td> <select name="klasifikasi">
                                            		<option> Alat Pelindung Diri </option>
                                            		<option> Alat Ukur </option>
                                                    <option> Material Praktikum </option>
                                                    <option> Peralatan Mendukung </option>                                                    
                                            </select>
                                            </td>
                                        </div>
                                        
                                         <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="spek" placeholder="speksifikasi" name="spesifikasi">
                                        </div>
                                        
                                         <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="tempataset" placeholder="tempat aset" name="lokasi_aset">
                                        </div>
                                        
                                        <div class="form-group">
                                        	<td> Foto : </td>
                                            <td><input type="file" id="gambar" name="foto_aset"></td> 
                                            </div>

                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Add</button>
                                        <a href="<?= base_url('c_dataaset'); ?>" class="btn btn-primary btn-user btn-block">
                                            Cancel
                                        </a>
                                        <hr>
                                      
                                </div>
                            </div>
                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>