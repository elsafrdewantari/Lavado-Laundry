<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form action="<?php echo e(route('pelanggan.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="Nama_Pelanggan">Nama Pelanggan:</label>
        <input type="text" name="Nama_Pelanggan" id="Nama_Pelanggan" required><br>

        <label for="NoHP">No HP:</label>
        <input type="text" name="NoHP" id="NoHP" required><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
<?php /**PATH D:\1. KULIAH SISTEM INFORMASI\Website_Lavado\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>