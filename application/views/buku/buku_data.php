<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Buku Digital
        <small>Buku</small>
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
            <h3 class="box-title">Data Buku</h3>

            <div class="pull-right">
              <a href="<?=site_url('buku/add');?>" class="btn btn-primary btn-flat"> 
                <i class="fa fa-plus"></i> Create
              </a>
            </div>
          </div>

          <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <!-- <th>Deskripsi</th> -->
                  <th>Kategori</th>
                  <th>Keahlian/Jurusan</th>
                  <th>File Buku</th>
                  <th>Sampul</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
              <?php foreach($buku->result() as $key => $data) : ?>
                <tr>
                  <td style="width: 5%;"><?=$no++?></td>
                  <td><?=$data->judul_buku?></td>
                  <td><?=$data->penulis?></td>
                  <td><?=$data->penerbit?></td>
                  <!-- <td><?=$data->deskripsi?></td> -->
                  <td><?=$data->nama_kategori?></td>
                  <td><?=$data->nama_keahlian?></td>
                  <td><?=$data->file_buku?></td>
                  <td><img src="<?= base_url('upload/'. $data->file_sampul) ?>" width="50px"></td>


                  <td class="text-center" width="160px">
                    <form action="<?=site_url('buku/del/'. $data->id_buku) ?>" method="post">
                      <a href="<?=site_url('buku/edit/'. $data->id_buku);?>" class="btn btn-warning btn-xs"> 
                        <i class="fa fa-pencil"></i> Update</a>
                        <input type="hidden" name="id_buku" value="<?=$data->id_buku;?>">
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