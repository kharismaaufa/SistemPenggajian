<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="width: 60%; margin-bottom: 100px">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataKaryawan/tambahDataAksi') ?>" enctype="multipart/form-data">

            <div class="from-group">
                <label>NIK</label>
                <input type="number" name="nik" class="form-control">
                <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control">
                <?php echo form_error('nama_karyawan', '<div class="text-small text-danger"></div>') ?>
            </div>
            
            <div class="from-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="">--Pilih Jabatan--</option>
                    <?php foreach($jabatan as $j): ?>
                    <option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                    <?php endforeach;  ?>
                </select>
                <?php echo form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control">
                <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="Tetap">Tetap</option>
                    <option value="Tidak Tetap">Tidak Tetap</option>
                </select>
                <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
                <?php echo form_error('photo', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Hak Akses</label>
                <select name="hak_akses" class="form-control">
                    <option value="">--Pilih Hak Akses--</option>
                    <option value="1">Admin</option>
                    <option value="2">Karyawan</option>
                </select>
                <?php echo form_error('hak_akses', '<div class="text-small text-danger"></div>') ?>
            </div>

            <button type="submit" class="btn btn-success mt-4">Simpan</button>

        </form>


    </div>
</div>

</div>
