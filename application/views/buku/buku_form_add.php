<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Buku Digital
        <small>Buku</small>
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
            <h3 class="box-title">Add Book</h3>

            <div class="pull-right">
              <a href="<?=site_url('buku');?>" class="btn btn-flat"> 
                <i class="fa fa-undo"></i> Back
              </a>
            </div>
          </div>

            <div class="box-body">
              <div class="row">
              <div class="col-md-4 col-md-offset-4">
              <?php echo form_open_multipart('buku/insert_data');?>
                  <div class="form-group <?=form_error('judul_buku')? 'has-error' : null?>">
                     <label for="judul_buku">Judul Buku *</label>
                
                     <input class="form-control" type="text" name="judul_buku" id="judul_buku" value="<?=set_value('judul_buku')?>"><?=form_error('judul_buku')?>
                   </div>
                   <div class="form-group <?=form_error('penulis')? 'has-error' : null?>">
                     <label for="penulis">Penulis *</label>
                     <input class="form-control" type="text" name="penulis" id="penulis" value="<?=set_value('penulis')?>"><?=form_error('penulis')?>
                   </div>
                   <div class="form-group <?=form_error('penerbit')? 'has-error' : null?>">
                     <label for="penerbit">Penerbit *</label>
                     <input class="form-control" type="text" name="penerbit" id="penerbit" value="<?=set_value('penerbit')?>"><?=form_error('penerbit')?>
                   </div>
                   <div class="form-group <?=form_error('deskripsi')? 'has-error' : null?>">
                     <label for="deskripsi">Deskripsi *</label>
                     <textarea class="form-control" name="deskripsi" id="deskripsi" cols="53" rows="4" value="<?=set_value('deskripsi')?>"><?=form_error('deskripsi')?></textarea>
                   </div>


                   <div class="form-group <?=form_error('kategori')? 'has-error' : null?>">
                     <label>Kategori *</label>
                     <select class="form-control" name="id_kategori">
                     <option value="">--Pilih Kategori--</option>
                       <?php foreach($kategori->result() as $key => $data) : ?>
                          <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori?></option>
                        <?php endforeach; ?>
                     </select>
                   </div>

                   <div class="form-group <?=form_error('keahlian')? 'has-error' : null?>">
                     <label>Keahlian/Jurusan *</label>
                     <select class="form-control" name="id_keahlian">
                      <option value="">--Pilih Keahlian--</option>
                      <?php foreach($keahlian->result() as $key => $data) : ?>
                        <option value="<?= $data->id_keahlian ?>"><?= $data->nama_keahlian?></option>
                        <?php endforeach; ?>
                     </select>
                   </div>


                   <div class="form-group <?=form_error('file_buku')? 'has-error' : null?>">
                     <label for="file_buku">File Buku*</label>
                     <input class="form-control" type="file" name="file_buku" id="file_buku" value="<?=set_value('file_buku')?>" required><?=form_error('file_buku')?>
                     <label class="text-danger">*File Harus Format .Pdf</label>
                   </div>
                   <div class="form-group <?=form_error('file_sampul')? 'has-error' : null?>">
                     <label for="file_sampul">Sampul*</label>
                     <input class="form-control" type="file" name="file_sampul" id="file_sampul" value="<?=set_value('file_sampul')?>" required><?=form_error('file_sampul')?>
                     <label class="text-danger">*File Harus Format .Png, .Jpg, .Jpeg</label>
                   </div>
                   <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                   <button type="reset" class="btn btn-warning btn-flat">Reset</button>
                   </div>
                <?= form_close() ?>

        </div>
      </section>


