<div class="container">
	<div class="row">
		<div class="col">
			<h3 class="mt-3"><?=$judul;?></h3>

			<table class="table table-responsive ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($keahlian->result() as $key => $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><img src="<?=base_url('fileSampul/'.$data->file_sampul)?>" class="sampul" width="100px"></td>
                            <td><?=$data->judul_buku?></td>
                            <td><?=$data->penulis?></td>
                            <td><?=$data->penerbit?></td>
                            <td>
                                <a href="<?=site_url('koleksi/detail/'. $data->id_sampul);?>" class="btn btn-primary btn-xs">Detail</a>
                                <a href="<?=site_url('fileBuku/' . $data->file_buku);?>"  class="btn btn-danger btn-xs"><i class="fa fa-download" onclick="basicPopup(this.href): return false"></i> Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

		</div>
	</div>
</div>