
	<!-- Row About -->
    <section id="profile" class="profile">
    <div class="container mb-5 pb-5 pt-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="text-success"><i class="fa fa-user"> Profile</i></h2>
        </div>
      </div>

      <div class="row justify-content-center gaya">
        <div class="col-md-5 text-center">
          <p>DigitalLibrary adalah salah satu solusi bagi mereka yang ingin mengeluarkan buku namun kesulitan dalam pembuatannya. Seperti kita ketahui, proses pembuatan buku cetak cukup panjang dan terbilang sulit.
		  Hal ini tidak terjadi jika kita membuat buku digital. Namun, tentu saja format e-book tersebut harus dibuat semenarik mungkin agar layak untuk disebarkan.</p>
        </div>
        <div class="col-md-5 text-center">
          <p>Dengan adanya e-book maka proses belajar dan mengajar menjadi lebih mudah. Pengajar bisa membuat materi pelajaran dalam bentuk e-book lalu mengirimkannya kepada muridnya.
		  Dari sisi pelajar tentu saja akan sangat dimudahkan karena bisa mempelajari materi pelajaran 
		  dalam bentuk e-book di mana saja dan kapan saja.</p>
        </div>
      </div>
    </div>
    </section>
    
     <!-- Usulan -->
    <section id="inbox" class="usulan bg-dark mb-5">
      <div class="container">
        <div class="row pt-4 mb-5">
          <div class="col text-center">
            <h2 class="text-success"><i class="fa fa-user-secret"> Usulan Koleksi</i></h2>
            <?php echo $this->session->flashdata('msg');?>
          </div>
        </div>

        <div class="row justify-content-center mb-5 pb-4">
          <div class="col-lg-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body text-center">
                  <h5 class="card-title">Usulan Koleksi.</h5>
                  <p class="card-text">Usulan boleh saja hal lainnya seperti kritik dan saran ataupun pengembangan sistem yang masih banyak kekurangan ini.</p>
                </div>
              </div>

              <ul class="list-group">
                <li class="list-group-item text-success"><h3>Buku Digtal</h3></li>
                <li class="list-group-item text-success">Be Smart</li>
                <li class="list-group-item text-success">Creative</li>
                <li class="list-group-item text-success">and Action</li>
              </ul>
          </div>

          <div class="col-lg-6">
            <form method="post" action="<?php echo base_url().'home/kirim_pesan'?>">
              <div class="form-group">
                <label class="text-white" for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
              <div class="form-group">
                <label class="text-white" for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" required=>
              </div>
              <div class="form-group">
                <label class="text-white" for="telp">No telp</label>
                <input type="text" class="form-control" id="telp" name="telp" required>
              </div>
              <div class="form-group">
                <label class="text-white" for="pesan">Pesan</label>
                <textarea name="pesan" id="pesan" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Kirim Pesan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>  


    <!-- 	<div class="col-md-12 text-center pt-5">
			<p><a href="#" class="btn btn-outline-success">View More....</a></p>
		</div>   -->
      </div>
  </section>

