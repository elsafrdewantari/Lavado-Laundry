
<?php $__env->startSection('title', 'Dashboard Prosess'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Pesanan</h1>

    <!-- Flash Message -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Add New Order Button -->
    <div class="mb-4">
        <a href="<?php echo e(route('pesanan.create')); ?>" class="btn btn-success">Tambah Data</a>
    </div>


   <!-- Table untuk menampilkan pesanan -->
<table class="table">
    <thead>
        <tr>
            <th>ID Pesanan</th>
            <th>No Nota</th>
            <th>Nama Pelanggan</th>
            <th>Berat (Kg)</th>
            <th>Paket Layanan</th>
            <th>Tanggal Masuk</th>
            <th>Estimasi Selesai</th>
            <th>Biaya</th>
            <th>Status Pesanan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $pesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($pesanan->id_pesanan); ?></td> 
            <td><?php echo e($pesanan->NoNota); ?></td>
            <td><?php echo e($pesanan->pelanggan->Nama_Pelanggan); ?></td>
            <td><?php echo e($pesanan->berat); ?></td>
            <td><?php echo e($pesanan->paket_layanan); ?></td>
            <td><?php echo e($pesanan->tanggal_masuk); ?></td>
            <td><?php echo e($pesanan->estimasi_selesai); ?></td>
            <td><?php echo e($pesanan->biaya); ?></td>
            <td>
                <!-- Toggle buttons for status -->
                <?php if($pesanan->status_pesanan == 'Proses'): ?>
                    <button class="btn btn-primary btn-sm" onclick="updateStatus('<?php echo e($pesanan->id_pesanan); ?>', 'Selesai')">Proses</button>
                <?php else: ?>
                    <button class="btn btn-success btn-sm" onclick="updateStatus('<?php echo e($pesanan->id_pesanan); ?>', 'Proses')">Selesai</button>
                <?php endif; ?>
            </td>
            <td>
                <!-- Tombol Edit -->
                <a href="<?php echo e(route('pesanan.edit', $pesanan->id_pesanan)); ?>" class="btn btn-warning btn-sm">Edit</a>
    
                <!-- Tombol Delete -->
                <form action="<?php echo e(route('pesanan.destroy', $pesanan->id_pesanan)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Delete</button>
                </form>
    
                <!-- Tombol Chat WA -->
                <a href="https://wa.me/<?php echo e($pesanan->pelanggan->no_wa); ?>" target="_blank" class="btn btn-success btn-sm">Chat WA</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="8" class="text-center">Belum ada data pesanan.</td>
        </tr>
    <?php endif; ?>
    
    </tbody>
</table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. KULIAH SISTEM INFORMASI\Website_Lavado\resources\views/pesananproses/index.blade.php ENDPATH**/ ?>