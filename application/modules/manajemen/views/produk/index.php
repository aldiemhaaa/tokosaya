<?php 
$this->load->view('layout/header');
?>
<?= modal('tambahproduk','Tambah Produk',typeText('nama').typeText('stok')) ?>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Daftar Produk</h4>
                    <button type="button" data-toggle="modal" data-target="#tambahproduk" class="btn btn-primary" > <i class="mdi mdi-plus"></i> Tambah</button>
                </div>
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                        <th width="5%">  # </th>
                        <th width="5%"> </th>
                        <th width="40%"> Nama </th>
                        <th width="20%"> Stok </th>
                        <th width="20%"> Terjual </th>
                        <th width="10%"> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td > 1 </td>
                        <td > <img class="rounded-circle" src="https://id.360buyimg.com/Indonesia/s880x0_/amZzL3Q2Ny8yODQvMzM3OTE1ODcwMi84MDIxOC8yOTFhYzQ1Mi82MDJiM2I0YU43MzE0MjUzMg.jpg" alt=""> </td>
                        <td> Celana Panjang </td>
                        <td>100 pcs</td>
                        <td>200</td>
                        <td>
                            <button class="btn btn-sm btn-success"><i class="mdi mdi-eye"></i> Lihat Variasi</button>
                            <button class="btn btn-sm btn-info"><i class="mdi mdi-backup-restore"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
                        </td>
                    </tr>
                   
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
       
<?php 
$this->load->view('layout/footer');
?>