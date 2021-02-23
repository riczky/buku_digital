<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Inbox 
        <small class="text-red">Pesan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-inbox"></i></a></li>
        <li class="active">Rekomendasi Buku</li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Daftar Rekomendasi Koleksi Buku</h3>
            <br><br>
              <?php echo $this->session->flashdata('msg');?>
              <table id="table1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					<th style="width:70px;">#Tanggal</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Pesan</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $inbox_id=$i['inbox_id'];
                       $inbox_nama=$i['inbox_nama'];
                       $inbox_email=$i['inbox_email'];
                       $inbox_kontak=$i['inbox_kontak'];
                       $inbox_msg=$i['inbox_pesan'];
                       $tanggal=$i['tanggal'];
                       
                    ?>
                <tr>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $inbox_nama;?></td>
                  <td><?php echo $inbox_email;?></td>
                  <td><?php echo $inbox_kontak;?></td>
                  <td><?php echo $inbox_msg;?></td>
                  
                  <td class="text-center" width="160px">
                      <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $inbox_id;?>"><i class="fa fa-trash"> Delete</i></a>  
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<!-- Modal Hapus-->


	<?php foreach ($data->result_array() as $i) :
              $inbox_id=$i['inbox_id'];
              $inbox_nama=$i['inbox_nama'];
              $inbox_email=$i['inbox_email'];
              $inbox_msg=$i['inbox_pesan'];
              $tanggal=$i['tanggal'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $inbox_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Usulan</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'inbox/hapus_inbox'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
							<input type="hidden" name="kode" value="<?php echo $inbox_id;?>"/> 
                            <p>Apakah Anda yakin mau menghapus data ini?</p>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
