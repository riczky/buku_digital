<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sampul Buku
        <small>Cover</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i></a></li>
        <li class="active">Book</li>
      </ol>
    </section>

     <!-- Main Content -->
    <section class="content">
     <?php $this->view('messages') ?>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Sampul Buku</h3>

            <div class="pull-right">
              <a href="<?=site_url('sampul/add');?>" class="btn btn-primary btn-flat"> 
                <i class="fa fa-plus"></i> Create
              </a>
            </div>
          </div>
<div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
              <thead>
                <tr>
                  <!-- <th>#</th> -->
                  <th>Id Sampul</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Deskripsi</th>
                  <th>Kategori</th>
                  <th>Keahlian</th>
                  <th>File Buku</th>
                  <th>File Sampul</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- <?php $no = 1; ?> -->
              <?php foreach($buku->result() as $key => $data) : ?>
                <tr>
                  <!-- <td style="width: 5%;"><?=$no++?></td> -->
                  <td style="width: 5%;"><?=$data->id_sampul?></td>
                  <td><?=$data->judul_buku?></td>
                  <td><?=$data->penulis?></td>
                  <td><?=$data->penerbit?></td>
                  <td><?=$data->deskripsi?></td>
                  <td><?=$data->nama_kategori?></td>
                  <td><?=$data->nama_keahlian?></td>
                  <td><?=$data->file_buku?></td>
                  <td><img src="<?= base_url('fileSampul/'. $data->file_sampul) ?>" width="50px"></td>

                  <td class="text-center" width="160px">
                    <form action="<?=site_url('sampul/del/'. $data->id_sampul) ?>" method="post">
                      <a href="<?=site_url('sampul/edit/'. $data->id_sampul);?>" class="btn btn-warning btn-xs"> 
                        <i class="fa fa-pencil"></i> Update</a>
                        <input type="hidden" name="id_sampul" value="<?=$data->id_sampul;?>">
                        <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs"> 
                          <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>


        </div>

    </section>