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
            <h3 class="box-title">Edit Book</h3>

            <div class="pull-right">
              <a href="<?=site_url('book');?>" class="btn btn-flat"> 
                <i class="fa fa-undo"></i> Back
              </a>
            </div>
          </div>

          <div class="box-body">
              <div class="row">
              <div class="col-md-4 col-md-offset-4">
              <?php echo form_open_multipart('book/prosesEdit/'. $buku['id_buku']);?>
                  <div class="form-group <?=form_error('id_buku')? 'has-error' : null?>">
                     <label for="id_buku">Id Buku *</label>
                     <input class="form-control" type="text" name="id_buku" id="id_buku" value="<?=$buku['id_buku']?>" readonly><?=form_error('id_buku')?>
                   </div>
                   <div class="form-group <?=form_error('file_buku')? 'has-error' : null?>">
                     <label for="file_buku">File Buku*</label>
                     <input class="form-control" type="file" name="file_buku" id="file_buku" value="<?=$buku['file_buku']?>"><?=form_error('file_buku')?>
                      <small>File <?=$buku['file_buku']?></small>
                     <label class="text-danger">*File Harus Format .Pdf</label>
                   </div>
                   <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                   <button type="reset" class="btn btn-warning btn-flat">Reset</button>
                   </div>
                <?= form_close() ?>

        </div>
      </section>


