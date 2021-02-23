<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Skills
        <small>Keahlian/Jurusan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Keahlian</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
     
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit Keahlian/Jurusan</h3>

            <div class="pull-right">
              <a href="<?=site_url('keahlian');?>" class="btn btn-flat"> 
                <i class="fa fa-undo"></i> Back
              </a>
            </div>
          </div>

           <div class="box-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">

                <form action="" method="post">
                   <div class="form-group <?=form_error('nama_keahlian')? 'has-error' : null?>">
                     <label for="name">Nama Keahlian *</label>
                     <input type="hidden" name="id_keahlian" value="<?=$row->id_keahlian?>">
                     <input class="form-control" type="text" name="nama_keahlian" id="nama_keahlian" value="<?=$this->input->post('nama_keahlian') ? $this->input->post('nama_keahlian'): $row->nama_keahlian?>"><?=form_error('nama_keahlian')?>
                   </div>
                    <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                   
                   </div>
             </form>     
              </div>
            </div>

          </div>
        </div>

    </section>