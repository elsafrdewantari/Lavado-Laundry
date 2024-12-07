<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'My Application'); ?></title>
    
    <!-- CSS Bootstrap dan FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- Custom Style -->
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 200px;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .content {
            margin-left: 220px; /* Memberi ruang untuk sidebar */
            padding: 20px;
        }
    </style>
    
    <?php echo $__env->yieldContent('custom-style'); ?> <!-- Style tambahan untuk halaman tertentu -->
</head>
<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Header dari file terpisah -->

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Admin Dashboard</h4>
        <ul class="nav flex-column">
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
                <a class="nav-link" href="#">Saran</a>
            </li>
        </ul>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <div class="container mt-5">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <?php if(Request::is('/')): ?>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Footer dari file terpisah -->
    <?php endif; ?>

    <!-- JavaScript Bootstrap dan FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/586c7cf24e.js" crossorigin="anonymous"></script>
    
    <!-- Script tambahan -->
    <script>
        function updateStatus(id_pesanan, status) {
            fetch(`<?php echo e(url('/pesanan/update-status')); ?>/${id_pesanan}`, {
                method: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ status: status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Status update failed');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
<?php /**PATH D:\1. KULIAH SISTEM INFORMASI\Website_Lavado\resources\views/layouts/app.blade.php ENDPATH**/ ?>