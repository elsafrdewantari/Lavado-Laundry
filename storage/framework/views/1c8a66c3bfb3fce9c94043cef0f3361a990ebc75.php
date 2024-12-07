

<?php $__env->startSection('title', 'Tambah Pesanan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Tambah Pesanan</h1>

    <form action="<?php echo e(route('pesanan.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="id_pesanan" class="form-label">ID Pesanan</label>
            <input type="text" class="form-control" id="id_pesanan" name="id_pesanan" value="<?php echo e(old('id_pesanan', $nextId)); ?>" readonly>
        </div>
        
        <div class="mb-3">
            <label for="NoNota" class="form-label">No Nota</label>
            <input type="text" class="form-control" id="NoNota" name="NoNota" value="<?php echo e($noNota); ?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="id_pelanggan" class="form-label">Pilih Pelanggan</label>
            <select class="form-select" id="id_pelanggan" name="id_pelanggan" required>
                <option value="">-- Pilih Pelanggan --</option>
                <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option data-id="<?php echo e($value->id_pelanggan); ?>" data-nama="<?php echo e($value->Nama_Pelanggan); ?>" value="<?php echo e($value->id_pelanggan); ?>">
                        <?php echo e($value->Nama_Pelanggan); ?> (ID: <?php echo e($value->id_pelanggan); ?>)
                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        
        
        
        
        
        
        
        
        <div class="mb-3">
            <label for="berat" class="form-label">Berat (Kg)</label>
            <input type="number" class="form-control" id="berat" name="berat" min="1" required>
        </div>
        <div class="mb-3">
            <label for="paket_layanan" class="form-label">Paket Layanan</label>
            <select class="form-select" id="paket_layanan" name="paket_layanan" required>
                <option value="">Pilih Paket Layanan</option>
                <option value="setrika">Setrika</option>
                <option value="express">Express</option>
                <option value="one_day">One Day</option>
                <option value="regular">Regular</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
        </div>
        <div class="mb-3">
            <label for="status_pesanan" class="form-label">Status Pesanan</label>
            <input type="text" class="form-control" id="status_pesanan" name="status_pesanan" value="Proses" readonly required>
        </div>
        

        <button type="submit" class="btn btn-primary">Simpan Pesanan</button>
        <a href="<?php echo e(route('pesanan.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. KULIAH SISTEM INFORMASI\Website_Lavado\resources\views/pesananproses/create.blade.php ENDPATH**/ ?>