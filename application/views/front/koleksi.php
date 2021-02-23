
<div class="container">
    <h3 style="color:green;">Daftar Koleksi Buku <i class="fa fa-book"></i></h3><br><br>
	<div class="row">
		<?php foreach($sampul->result() as $key => $data) : ?>
        <div class="col md-4">
			<div class="card" style="width: 15rem;">
			  <img src="<?=base_url('fileSampul/'.$data->file_sampul)?>" class="card-img-top" width="100%">
			  <div class="card-body">
			  	
			    <a href="<?=site_url('koleksi/detail/'. $data->id_sampul);?>" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-danger"><i class="fa fa-download"> Download</i></a>
			  </div>
			</div>
            <br>				
		</div>
        <?php endforeach; ?>
	</div>
	<?=$this->pagination->create_links();?>
</div>




<!-- 
<div class="container ">
    <div class="row">
        <div class="col">            
            <h1 class="mt-2"><?=$judul;?> <i class="fa fa-book"></i></h1>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th  scope="col">#</th>
                        <th  scope="col">Sampul</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody> -->
                    <!-- <?php $i = 1; ?> -->
                    <!-- <?php foreach($sampul->result() as $key => $data) : ?>
                        <tr>
                            <th scope="row"><?= ++$start ?></th>
                            <td><img src="<?=base_url('fileSampul/'.$data->file_sampul)?>" class="sampul" width="100px"></td>
                            <td><?=$data->judul_buku?></td>
                            <td><?=$data->penulis?></td>
                            <td><?=$data->penerbit?></td>
                            <td>
                                <a href="<?=site_url('koleksi/detail/'. $data->id_sampul);?>" class="btn btn-primary btn-xs">Detail</a>
                                
                                <a href="<?=site_url('fileBuku/' . $data->file_buku);?>" target="_blank" class="btn btn-danger btn-xs"><i class="fa fa-download" onclick="basicPopup(this.href): return false"></i> Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?=$this->pagination->create_links();?>
        </div>
    </div>
</div>
 -->