<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="box-title mt-3">Detail Buku</h3>
            
              <a href="<?=site_url('koleksi');?>" class="btn btn-flat"> 
                <i class="fa fa-undo"></i> Back
              </a>
            
            <table class="table">
                <tr>
                    <th>Sampul</th>
                    <th>:</th>
                    <th><img src="<?=base_url('fileSampul/'.$sampul['file_sampul'])?>" width="120px"></th>

                    <th>Deskripsi</th>
                    </th>
                    <th>:</th>
                    <th><?= $sampul['deskripsi'] ?></th>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <th>:</th>
                    <th><?= $sampul['judul_buku'] ?></th>

                    <th>Keahlian</th>
                    <th>:</th>
                    <th><?= $sampul['nama_keahlian'] ?></th>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <th>:</th>
                    <th><?= $sampul['penulis'] ?></th>

                    <th>Kategori</th>
                    <th>:</th>
                    <th><?= $sampul['nama_kategori'] ?></th>
                </tr>

                <tr>
                    <th>Penerbit</th>
                    <th>:</th>
                    <th><?= $sampul['penerbit'] ?></th>

                    <th>Tanggal Update</th>
                    <th>:</th>
                    <th><?= $sampul['updated'] ?></th>
                </tr>
            </table>
        </div>

        <div class="col-sm-12">
            <!-- <iframe src="<?= base_url('fileBuku/' . $sampul['file_buku']) ?>" width="100%" style="border:2px solid lightgreen;" height="900px"></iframe> -->

            <div style="--aspect-ratio: 16/9;">
              <iframe
                src="<?= base_url('fileBuku/' . $sampul['file_buku']) ?>"
                width="1000"
                height="900"
                frameborder="0"
              >
              </iframe>
            </div>

            
        </div>
    </div>
</div>
