    <section class="hero-wrap hero-wrap-2 js-fullheight mb-5" style="background-image: url('<?php echo base_url();?>/img/<?php echo $dataBanner->photo;?>');" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Penginapan <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Penginapan</h1>
          </div>
        </div>
      </div>
    </section>

  <!--  <section class="ftco-section">-->
		<!--	<div class="container">-->
		<!--		<div class="row justify-content-center mb-5">-->
  <!--        <div class="col-md-7 text-center heading-section ftco-animate">-->
  <!--        	<span class="subheading">Services</span>-->
  <!--          <h2 class="mb-3">Our Latest Services</h2>-->
  <!--        </div>-->
  <!--      </div>-->
		<!--		<div class="row">-->
		<!--			<div class="col-md-3">-->
		<!--				<div class="services services-2 w-100 text-center">-->
  <!--          	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>-->
  <!--          	<div class="text w-100">-->
  <!--              <h3 class="heading mb-2">Wedding Ceremony</h3>-->
  <!--              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
  <!--            </div>-->
  <!--          </div>-->
		<!--			</div>-->
		<!--			<div class="col-md-3">-->
		<!--				<div class="services services-2 w-100 text-center">-->
  <!--          	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>-->
  <!--          	<div class="text w-100">-->
  <!--              <h3 class="heading mb-2">City Transfer</h3>-->
  <!--              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
  <!--            </div>-->
  <!--          </div>-->
		<!--			</div>-->
		<!--			<div class="col-md-3">-->
		<!--				<div class="services services-2 w-100 text-center">-->
  <!--          	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>-->
  <!--          	<div class="text w-100">-->
  <!--              <h3 class="heading mb-2">Airport Transfer</h3>-->
  <!--              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
  <!--            </div>-->
  <!--          </div>-->
		<!--			</div>-->
		<!--			<div class="col-md-3">-->
		<!--				<div class="services services-2 w-100 text-center">-->
  <!--          	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>-->
  <!--          	<div class="text w-100">-->
  <!--              <h3 class="heading mb-2">Whole City Tour</h3>-->
  <!--              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
  <!--            </div>-->
  <!--          </div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->
		
<section class="ftco-section bg-white pt-5" id="car-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-3 text-center">Room yang tersedia</h2>
        <div class="carousel-car owl-carousel">
          <?php foreach ($dataProducts as $pro): ?>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end"
                  style="background-image: url('<?php echo base_url(); ?>img/<?php echo $pro->photo; ?>');">
                </div>
                <div class="text">
                  <h2 class="mb-2"><a href="#">
                      <?= $pro->name; ?>
                    </a></h2>
                  <div class="d-flex flex-column mb-3">
                    <div class="d-flex align-items-center mr-2">
                      <i class="fa fa-shower text-orange pb-1 mr-1"></i>
                      <span class="ml-1"> <?= $pro->hotwater; ?></span>
                    </div>
                    <div class="d-flex align-items-center">
                      <i class="fa fa-wifi text-orange pb-1"></i>
                      <span class="ml-1"> <?= $pro->wifi; ?></span>
                    </div>
                    <p class="price ml-auto">
                      <?= rupiah($pro->price); ?> <span>/hari</span>
                    </p>
                  </div>
                  <p class="d-flex mb-0 d-block"><button type="button" data-toggle="modal" data-target="#modalBook"
                      class="btn btn-primary py-2 mr-1 w-100" id="btnBook_<?= $pro->id; ?>"
                      data-product="<?= $pro->id; ?>" data-proname="<?= $pro->name; ?>"
                      data-price="<?= rupiah($pro->price); ?>"
                      data-photo="<?php echo base_url(); ?>img/<?php echo $pro->photo; ?>" data-wifi="<?= $pro->wifi; ?>"
                      data-hotwater="<?= $pro->hotwater; ?>" data-pickdate="" data-picktime="" data-dropdate=""
                      data-droptime="" data-location="">Pesan</button>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
		
		<section class="ftco-section ftco-intro" style="background-image: url('<?php echo base_url();?>/img/hotel-women.png'); background-size:cover;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Nyaman dan terjangkau, tunggu apa lagi.</h2>
            <a href="https://wa.me/<?= $this->company_info->get_company_whatsapp();?>" class="btn btn-primary btn-lg">BOOKING DISINI</a>
          </div>
				</div>
			</div>
		</section>
		
<!-- Modal -->
<div class="modal fade px-0" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="modalBookTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Sudah yakin sama pilihanmu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="confirm-form" class="request-form pt-0 px-0 pb-0">
        <div class="modal-body">
          <!-- <h2>Lengkapi data anda <br>dan pilih mobil yang akan disewa.</h2> -->
          <div id="detailCar"></div>
          <div class="d-flex">
            <div class="form-group mr-2">
              <label for="" class="label">Nama lengkap</label>
              <input type="text" name="fix_name" class="form-control" autocomplete="newname" id="fix_name"
                placeholder="Nama lengkap">
              <input type="hidden" name="fix_service" id="fix_service">
            </div>
            <div class="form-group ">
              <label for="" class="label">Nomor HP.</label>
              <input type="number" name="fix_handphone" class="form-control" autocomplete="newphone" id="fix_handphone"
                placeholder="Pastikan No bisa dihubungi.">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="label">Lokasi penginapan</label>
            <select class="form-control" name="fix_location" id="fix_location">
              <option value="0" selected disabled>Pilih lokasi</option>
              <option value="Singkawang">Singkawang</option>
              <option value="Pontianak">Pontianak</option>
            </select>
          </div>
          <div class="d-flex">
            <div class="form-group mr-2">
              <label for="" class="label">Tanggal mulai</label>
              <input type="text" class="form-control" autocomplete="off" name="fix_pickdate" id="fix_pickdate"
                placeholder="Tanggal mulai">
            </div>
            <div class="form-group">
              <label for="" class="label">Waktu mulai</label>
              <input type="text" class="form-control" name="fix_picktime" id="fix_picktime" placeholder="Waktu mulai">
            </div>
          </div>
          <div class="d-flex">
            <div class="form-group mr-2">
              <label for="" class="label">Tanggal selesai</label>
              <input type="text" class="form-control" autocomplete="off" name="fix_dropdate" id="fix_dropdate"
                placeholder="Tanggal selesai">
            </div>
            <div class="form-group">
              <label for="" class="label">Waktu selesai</label>
              <input type="text" class="form-control" name="fix_droptime" id="fix_droptime" placeholder="Waktu selesai">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Nanti dulu.</button>
          <button type="submit" class="btn btn-primary">Ya, Pesan sekarang.</button>
        </div>

      </form>
    </div>
  </div>
</div>