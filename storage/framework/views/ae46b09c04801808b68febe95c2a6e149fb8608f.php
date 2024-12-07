<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard'); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            width: 100%;
            background-color: #2C3030;
            color: white;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            height: 100vh;
            width: 200px;
            background-color: #2C3030;
            position: fixed;
            top: 56px; /* Adjusted for header height */
            left: 0;
            padding-top: 20px;
            color: white;
            border-right: 1px solid #3E4444;
            margin-top: -10px;
        }

        .content {
            margin-left: 200px; /* Adjust for sidebar width */
            padding: 20px;
            margin-top: 56px; /* Adjust for header height */
            background-color: #f4f4f4;
        }

        .nav-link {
            color: white;
            font-size: 14px;
            display: flex; /* Menggunakan Flexbox untuk pengaturan tata letak */
            justify-content: center; /* Memposisikan teks secara horizontal di tengah */
            align-items: center; /* Memposisikan teks secara vertikal di tengah */
            text-decoration: none;
            height: 50px; /* Memberikan tinggi konsisten */
            padding: 0; /* Menghapus padding default */
        }

        .nav-link:hover {
            background-color: #3E4444;
            border-radius: 5px;
        }

        .sidebar h5 {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Full-Width Header -->
    <div class="header">
        <span class="font-weight-bold" style="margin-left: 200px">Selamat Datang Admin</span>
        <div>
            <a href="#" class="btn btn-sm btn-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('image/logo.png')); ?>" alt="Laundry Lavado" style="margin-top:-10px;width: 150px; height: auto; margin-left:20px"> 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('pelanggan.index')); ?>">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#pesananDropdown" role="button" aria-expanded="false" aria-controls="pesananDropdown">
                    Pesanan <i class="fas fa-caret-down"></i>
                </a>
                <div class="collapse" id="pesananDropdown">
                    <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('pesanan.index')); ?>">Pesanan Proses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pesanan Selesai</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('saran.index')); ?>">Saran</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/586c7cf24e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\1. KULIAH SISTEM INFORMASI\Website_Lavado\resources\views/layouts/adminlayout.blade.php ENDPATH**/ ?>