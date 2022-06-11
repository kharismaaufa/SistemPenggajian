<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="alert alert-success font-weight-bold mb-4" style="width: 65%">
        Selamat datang, Anda login sebagai karyawan.
    </div>

    <div class="card" style="margin-bottom: 120px; width: 65%">
        <div class="card-header font-weight-bold bg-primary text-white">
            Data Karyawan
        </div>

        <?php foreach($karyawan as $k) : ?>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img style="width: 200px" src="<?php echo base_url('template/photo/'.$k->photo) ?>">
                </div>
                
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Karyawan</td>
                            <td>:</td>
                            <td><?php echo $k->nama_karyawan ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $k->jabatan ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td>:</td>
                            <td><?php echo $k->tanggal_masuk ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $k->status ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>

</div>
