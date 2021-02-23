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
     
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit Book</h3>

            <div class="pull-right">
              <a href="<?=site_url('sampul');?>" class="btn btn-flat"> 
                <i class="fa fa-undo"></i> Back
              </a>
            </div>
          </div>

            <div class="box-body">
              <div class="row">
              <div class="col-md-4 col-md-offset-4">
              <?php echo form_open_multipart('sampul/prosesEdit/'. $sampul['id_sampul']);?>
                  <div class="form-group <?=form_error('id_sampul')? 'has-error' : null?>">
                     <label for="id_sampul">Id Sampul *</label>
                     <input class="form-control" type="text" name="id_sampul" id="id_sampul" value="<?=$sampul['id_sampul']?>" readonly><?=form_error('id_sampul')?>
                     <input type="hidden" name="id_buku" value="<?=set_value('id_sampul')?>">
                   </div>
                  <div class="form-group <?=form_error('judul_buku')? 'has-error' : null?>">
                     <label for="judul_buku">Judul Buku *</label>       
                     <input class="form-control" type="text" name="judul_buku" id="judul_buku" value="<?=$sampul['judul_buku']?>"><?=form_error('judul_buku')?>
                   </div>
                   <div class="form-group <?=form_error('penulis')? 'has-error' : null?>">
                     <label for="penulis">Penulis *</label>
                     <input class="form-control" type="text" name="penulis" id="penulis" value="<?=$sampul['penulis']?>"><?=form_error('penulis')?>
                   </div>
                   <div class="form-group <?=form_error('penerbit')? 'has-error' : null?>">
                     <label for="penerbit">Penerbit *</label>
                     <input class="form-control" type="text" name="penerbit" id="penerbit" value="<?=$sampul['penerbit']?>"><?=form_error('penerbit')?>
                   </div>
                   <div class="form-group <?=form_error('deskripsi')? 'has-error' : null?>">
                     <label for="deskripsi">Deskripsi *</label>
                     <textarea class="form-control" name="deskripsi" id="deskripsi" cols="53" rows="4" value="<?=$sampul['deskripsi']?>"><?=$sampul['deskripsi']?><?=form_error('deskripsi')?></textarea>
                   </div>
                   
                   <div class="form-group <?=form_error('kategori')? 'has-error' : null?>">
                     <label>Kategori *</label>
                     <select class="form-control" name="id_kategori">
                     <option value="<?= $sampul['id_kategori']?>"><?= $sampul['nama_kategori']?></option>
                       <?php foreach($kategori->result() as $key => $data) : ?>
                          <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori?></option>
                        <?php endforeach; ?>
                     </select>
                   </div>

                    <div class="form-group <?=form_error('keahlian')? 'has-error' : null?>">
                     <label>Keahlian/jurusan *</label>
                     <select class="form-control" name="id_keahlian">
                     <option value="<?= $sampul['id_keahlian']?>"><?= $sampul['nama_keahlian']?></option>
                       <?php foreach($keahlian->result() as $key => $value) : ?>
                          <option value="<?= $value->id_keahlian?>"><?= $value->nama_keahlian?></option>
                        <?php endforeach; ?>
                     </select>
                   </div>


                   <div class="form-group <?=form_error('file_sampul')? 'has-error' : null?>">
                     <label for="file_sampul">Sampul*</label>
                     <input class="form-control" type="file" name="file_sampul" id="file_sampul" value="<?=$sampul['file_sampul']?>"><?=form_error('file_sampul')?>
                     <input type="hidden" name="old_image" value="<?=$sampul['file_sampul']?>">
                     <img src="<?=base_url('fileSampul/'.$sampul['file_sampul']) ?>" width="50px">
                     <small><?=$sampul['file_sampul']?></small><br>
                     <label class="text-danger">*File Harus Format .Png, .Jpg, .Jpeg</label>
                   </div>

                   <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                   <button type="reset" class="btn btn-warning btn-flat">Reset</button>
                   </div>
                <?= form_close() ?>

        </div>
      </section>


