<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
       <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$this->fungsi->count_inbox()?></h3>

              <p>Inbox</p>
            </div>
            <div class="icon">
              <i class="fa fa-inbox"></i>
            </div>
            <a href="<?=base_url('inbox')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$this->fungsi->count_kategori()?><sup style="font-size: 20px"></sup></h3>

              <p>Kategori</p>
            </div>
            <div class="icon">
              <i class="fa fa-book-open"></i>
            </div>
            <a href="<?=base_url('kategori')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$this->fungsi->count_keahlian()?></h3>

              <p>Keahlian</p>
            </div>
            <div class="icon">
              <i class="fa fa-building"></i>
            </div>
            <a href="<?=base_url('keahlian')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$this->fungsi->count_buku()?></h3>

              <p>Data Buku</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?=base_url('book')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$this->fungsi->count_sampul()?></h3>

              <p>Data Sampul</p>
            </div>
            <div class="icon">
              <i class="fa fa-book-open"></i>
            </div>
            <a href="<?=base_url('sampul')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Info</h3>

              <p>Bantuan</p>
            </div>
            <div class="icon">
              <i class="fa fa-info"></i>
            </div>
            <a href="<?=base_url('help')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <h2 class="text-center" style="color:red">MyBook</h2>
      <p class="text-center" style="color:grey">Buku Digital Masa Kini.</p>
<!-- ///////////////////////////////////////////// -->

   
    </section>

    </section>