<div class="hero-wrap ftco-degree-bg" data-stellar-background-ratio="0.5">
  <!-- <div class="overlay"></div> -->
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-12">
        <div class="row no-gutters section-top pt-0 pt-md-5">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 order-2 order-md-2 order-lg-1 d-flex align-items-center">
            <form action="" id="order-form" class="request-form ftco-animate bg-blur-clear">
              <!-- <h2>Lengkapi data anda <br>dan pilih mobil yang akan disewa.</h2> -->
              <div class="form-group">
                <label for="" class="label">Lokasi rental</label>
                <select class="form-control" name="location" id="location">
                  <option value="0" selected disabled>Pilih lokasi</option>
                  <option value="Singkawang">Singkawang</option>
                  <option value="Pontianak">Pontianak</option>
                </select>
              </div>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Tanggal mulai</label>
                  <input type="text" class="form-control" autocomplete="off" name="book_pick_date" id="book_pick_date"
                    placeholder="Tanggal mulai">
                </div>
                <div class="form-group">
                  <label for="" class="label">Waktu mulai</label>
                  <input type="text" class="form-control" name="pick_time" id="pick_time" placeholder="Waktu mulai">
                </div>
              </div>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Tanggal selesai</label>
                  <input type="text" class="form-control" autocomplete="off" name="book_off_date" id="book_off_date"
                    placeholder="Tanggal selesai">
                </div>
                <div class="form-group">
                  <label for="" class="label">Waktu selesai</label>
                  <input type="text" class="form-control" name="drop_time" id="drop_time" placeholder="Waktu selesai">
                </div>
              </div>

              <div class="form-group mt-2">
                <button type="submit" class="btn btn-secondary py-3 px-4">
                  <i class="fa fa-search mr-2"></i> Lihat mobil
                </button>
              </div>
            </form>
          </div>
          <div
            class="col-12 col-sm-12 col-md-12 col-lg-8 order-1 order-md-1 order-lg-2 mt-5 mb-5 mb-lg-0 mt-lg-0  d-flex align-items-center">
            <div class="banner-left ftco-animate">
              <div class="car-buble">
                <h1 class="">Kami siap melayani kebutuhan rental anda</h1>
              </div>
              <div class="car-display">
                <img class="car" width="100%" src="<?php echo base_url(); ?>img/<?php echo $dataBanner->photo; ?>"
                  alt="car">
                <img class="white-stage"
                  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/images/white-stage.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <canvas id="demo"></canvas>
</div>

<section class="ftco-section bg-white d-none pt-4" id="car-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-3">Pilih mobil</h2>
        <div class="carousel-car owl-carousel">
          <?php foreach ($dataProducts as $pro): ?>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end"
                  style="background-image: url('<?php echo base_url(); ?>img/<?php echo $pro->photo; ?>');">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">
                      <?= $pro->name; ?>
                    </a></h2>
                  <div class="d-flex flex-column mb-3">
                    <div class="d-flex mr-2">
                      <span class="flaticon-car-seat price"></span>
                      <?= $pro->seat; ?> <span class="ml-1"> seats</span>
                    </div>
                    <div class="d-flex">
                      <span class="flaticon-pistons price mr-1"></span>
                      <?= $pro->transmission; ?>
                    </div>
                    <p class="price ml-auto">
                      <?= rupiah($pro->price); ?> <span>/hari</span>
                    </p>
                  </div>
                  <p class="d-flex mb-0 d-block"><button type="button" data-toggle="modal" data-target="#modalBook"
                      class="btn btn-primary py-2 mr-1 w-100" id="btnBook_<?= $pro->id; ?>"
                      data-product="<?= $pro->id; ?>" data-proname="<?= $pro->name; ?>"
                      data-price="<?= rupiah($pro->price); ?>"
                      data-photo="<?php echo base_url(); ?>img/<?php echo $pro->photo; ?>" data-seat="<?= $pro->seat; ?>"
                      data-transmission="<?= $pro->transmission; ?>" data-pickdate="" data-picktime="" data-dropdate=""
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
<section class="ftco-section bg-white pt-4 pb-3">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section">
        <h2 class="mb-3 ftco-animate">Kenapa Harus LIZRENTCAR?</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="services services-2 w-100 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
            y="0px" viewBox="0 0 70 87.5" enable-background="new 0 0 70 70" xml:space="preserve" width="70"
            height="87.5">
            <path
              d="M15.0732422,21.949707H9.706543c-0.5522461,0-1,0.4472656-1,1v5.3671875c0,0.5527344,0.4477539,1,1,1h5.3666992  c0.5522461,0,1-0.4472656,1-1V22.949707C16.0732422,22.3969727,15.6254883,21.949707,15.0732422,21.949707z M14.0732422,27.3168945  H10.706543V23.949707h3.3666992V27.3168945z"
              class="icon-reveal-1"></path>
            <path
              d="M15.0732422,43.5737305H9.706543c-0.5522461,0-1,0.4472656-1,1v5.3662109c0,0.5527344,0.4477539,1,1,1h5.3666992  c0.5522461,0,1-0.4472656,1-1v-5.3662109C16.0732422,44.0209961,15.6254883,43.5737305,15.0732422,43.5737305z   M14.0732422,48.9399414H10.706543v-3.3662109h3.3666992V48.9399414z"
              class="icon-reveal-2"></path>
            <path
              d="M26.7392578,21.949707h-5.3671875c-0.5522461,0-1,0.4472656-1,1v5.3671875c0,0.5527344,0.4477539,1,1,1h5.3671875  c0.5522461,0,1-0.4472656,1-1V22.949707C27.7392578,22.3969727,27.2915039,21.949707,26.7392578,21.949707z M25.7392578,27.3168945  h-3.3671875V23.949707h3.3671875V27.3168945z"
              class="icon-reveal-3"></path>
            <path
              d="M26.7392578,32.762207h-5.3671875c-0.5522461,0-1,0.4472656-1,1v5.3662109c0,0.5527344,0.4477539,1,1,1h5.3671875  c0.5522461,0,1-0.4472656,1-1V33.762207C27.7392578,33.2094727,27.2915039,32.762207,26.7392578,32.762207z M25.7392578,38.128418  h-3.3671875V34.762207h3.3671875V38.128418z"
              class="icon-reveal-4"></path>
            <path
              d="M26.7392578,43.5737305h-5.3671875c-0.5522461,0-1,0.4472656-1,1v5.3662109c0,0.5527344,0.4477539,1,1,1h5.3671875  c0.5522461,0,1-0.4472656,1-1v-5.3662109C27.7392578,44.0209961,27.2915039,43.5737305,26.7392578,43.5737305z   M25.7392578,48.9399414h-3.3671875v-3.3662109h3.3671875V48.9399414z"
              class="icon-reveal-5"></path>
            <path
              d="M38.4047852,21.949707h-5.3671875c-0.5522461,0-1,0.4472656-1,1v5.3671875c0,0.5527344,0.4477539,1,1,1h5.3671875  c0.5522461,0,1-0.4472656,1-1V22.949707C39.4047852,22.3969727,38.9570313,21.949707,38.4047852,21.949707z M37.4047852,27.3168945  h-3.3671875V23.949707h3.3671875V27.3168945z"
              class="icon-reveal-6"></path>
            <path
              d="M15.0732422,32.762207H9.706543c-0.5522461,0-1,0.4472656-1,1v5.3662109c0,0.5527344,0.4477539,1,1,1h5.3666992  c0.5522461,0,1-0.4472656,1-1V33.762207C16.0732422,33.2094727,15.6254883,32.762207,15.0732422,32.762207z M14.0732422,38.128418  H10.706543V34.762207h3.3666992V38.128418z"
              class="icon-reveal-7"></path>
            <path
              d="M38.4047852,43.5737305h-5.3671875c-0.5522461,0-1,0.4472656-1,1v5.3662109c0,0.5527344,0.4477539,1,1,1h5.3671875  c0.5522461,0,1-0.4472656,1-1v-5.3662109C39.4047852,44.0209961,38.9570313,43.5737305,38.4047852,43.5737305z   M37.4047852,48.9399414h-3.3671875v-3.3662109h3.3671875V48.9399414z"
              class="icon-reveal-8"></path>
            <path
              d="M51.0703125,39.128418V33.762207c0-0.5527344-0.4477539-1-1-1H44.703125c-0.5522461,0-1,0.4472656-1,1v5.3662109  c0,0.5527344,0.4477539,1,1,1h5.3671875C50.6225586,40.128418,51.0703125,39.6811523,51.0703125,39.128418z M49.0703125,38.128418  H45.703125V34.762207h3.3671875V38.128418z"
              class="icon-reveal-9"></path>
            <path
              d="M38.4047852,32.762207h-5.3671875c-0.5522461,0-1,0.4472656-1,1v5.3662109c0,0.5527344,0.4477539,1,1,1h5.3671875  c0.5522461,0,1-0.4472656,1-1V33.762207C39.4047852,33.2094727,38.9570313,32.762207,38.4047852,32.762207z M37.4047852,38.128418  h-3.3671875V34.762207h3.3671875V38.128418z"
              class="icon-reveal-10"></path>
            <path
              d="M44.703125,29.3168945h5.3671875c0.5522461,0,1-0.4472656,1-1V22.949707c0-0.5527344-0.4477539-1-1-1H44.703125  c-0.5522461,0-1,0.4472656-1,1v5.3671875C43.703125,28.8696289,44.1508789,29.3168945,44.703125,29.3168945z M45.703125,23.949707  h3.3671875v3.3671875H45.703125V23.949707z"
              class="icon-reveal-11"></path>
            <path fill="#f3581f"
              d="M51.9433594,60.7680664c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688  s0.5117188-0.0976563,0.7070313-0.2929688l3.4172363-3.4174194l3.4172363,3.4174194  c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688s0.5117188-0.0976563,0.7070313-0.2929688  c0.390625-0.390625,0.390625-1.0234375,0-1.4140625l-3.4172974-3.4174805l3.4172974-3.4174805  c0.390625-0.390625,0.390625-1.0234375,0-1.4140625s-1.0234375-0.390625-1.4140625,0l-3.4172363,3.4174194l-3.4172363-3.4174194  c-0.390625-0.390625-1.0234375-0.390625-1.4140625,0s-0.390625,1.0234375,0,1.4140625l3.4172974,3.4174805l-3.4172974,3.4174805  C51.5527344,59.7446289,51.5527344,60.3774414,51.9433594,60.7680664z"
              class="icon-reveal-12"></path>
            <path fill="#f3581f"
              d="M14.2612305,2.8422852c-0.5522461,0-1,0.4472656-1,1v2.2207031H5.7617188H5.7602539  c-0.1689453,0-0.3302002,0.0281982-0.4932861,0.0499878c-0.086853,0.0115967-0.1778564,0.0092773-0.2627563,0.0266724  c-0.005249,0.0010986-0.0099487,0.0036011-0.0151978,0.0046997C3.2844849,6.5019531,2,8.0155029,2,9.824707v7.4501953  c0,0.0068359,0.0037842,0.0125122,0.0039063,0.0193481v35.8781128c0,2.0761719,1.6850586,3.765625,3.7563477,3.765625h39.8416748  c0.5083618,5.7191162,5.3200684,10.2197266,11.1690674,10.2197266C62.9628906,67.1577148,68,62.1245117,68,55.9379883  c0-5.8538818-4.5045776-10.6694946-10.2290039-11.1778564V17.2942505c0.0001221-0.0068359,0.0039063-0.0125122,0.0039063-0.0193481  V9.824707c0-1.7643433-1.2254639-3.2380981-2.8671265-3.642334c-0.0469971-0.0115967-0.0898438-0.032959-0.1375122-0.0427856  c-0.0476685-0.0097656-0.0991821-0.007019-0.147522-0.0149536c-0.1990967-0.0328369-0.3998413-0.0616455-0.6080933-0.0616455  h-0.0019531h-7.4990234V3.8422852c0-0.5527344-0.4477539-1-1-1s-1,0.4472656-1,1v2.2207031H15.2612305V3.8422852  C15.2612305,3.2895508,14.8134766,2.8422852,14.2612305,2.8422852z M47.3153076,49.9190063  c-0.111145,0.1741943-0.2203369,0.3492432-0.3219604,0.5297852c-0.0706787,0.1255493-0.1361084,0.2537842-0.2020264,0.3822632  c-0.092041,0.1793823-0.1803589,0.3604736-0.2628784,0.5453491c-0.0596924,0.1337891-0.1164551,0.2686768-0.1710205,0.4051514  c-0.0755615,0.1888428-0.1448975,0.3803101-0.2103271,0.5740356c-0.0466309,0.1381226-0.0927734,0.2759399-0.1341553,0.4163818  c-0.0597534,0.203064-0.1104126,0.4093018-0.1588745,0.6168823c-0.0317993,0.1364136-0.0661621,0.2716064-0.0929565,0.4098511  c-0.0444336,0.2294922-0.0762939,0.4628906-0.1065674,0.6970215c-0.015625,0.1210327-0.0368652,0.2400513-0.048584,0.3622437  c-0.0025635,0.0269775-0.0083618,0.0529785-0.0107422,0.0800171H5.7602539c-0.9682617,0-1.7563477-0.7919922-1.7563477-1.765625  V18.2749023h51.7670898V44.753418c-0.0274048,0.0024414-0.053772,0.0082397-0.0811157,0.0108643  c-0.1182861,0.0114136-0.2334595,0.0321045-0.350647,0.0471191c-0.2384033,0.0305786-0.4759521,0.0632324-0.7095337,0.1086426  c-0.1339111,0.026062-0.2646484,0.0593872-0.3968506,0.0901489c-0.2125244,0.0494385-0.423584,0.1014404-0.6312866,0.1628418  c-0.135376,0.039978-0.2682495,0.0845947-0.4014282,0.1295166c-0.1991577,0.0671997-0.395813,0.1384888-0.5897827,0.2164307  c-0.1317139,0.0529175-0.2619629,0.107666-0.3911743,0.1654053c-0.1898804,0.0848389-0.3759155,0.1755981-0.5600586,0.2704468  c-0.1236572,0.0637207-0.2471924,0.1268311-0.368103,0.1948853c-0.1855469,0.1044312-0.3654175,0.2167969-0.5442505,0.3312988  c-0.1107788,0.0709229-0.2230835,0.1390381-0.3311768,0.2136841c-0.1900024,0.1312866-0.3723145,0.2720947-0.5535889,0.4145508  c-0.0877075,0.0688477-0.178833,0.1331177-0.2644653,0.2045898c-0.2572021,0.2146606-0.5057373,0.4393311-0.7427979,0.6757813  c-0.0078125,0.0078125-0.015625,0.0153809-0.0234375,0.0231934c-0.2368164,0.2376709-0.461731,0.4870605-0.6766968,0.7449951  c-0.0740967,0.0889282-0.1408691,0.1836548-0.2122803,0.2749023c-0.1390991,0.1777344-0.2769165,0.3560791-0.4052734,0.5420532  C47.4595337,49.6870728,47.3887939,49.803833,47.3153076,49.9190063z M56.7709961,46.7094727  C61.8598633,46.7094727,66,50.8491211,66,55.9379883c0,5.0839844-4.1401367,9.2197266-9.2290039,9.2197266  c-5.0839844,0-9.2197266-4.1357422-9.2197266-9.2197266C47.5512695,50.8491211,51.6870117,46.7094727,56.7709961,46.7094727z   M44.5136719,8.0629883v1.3792725c-1.1140747,0.4100952-1.9150391,1.4725342-1.9150391,2.7271729  c0,1.6074219,1.3076172,2.9150391,2.9150391,2.9150391s2.9150391-1.3076172,2.9150391-2.9150391  c0-1.2546387-0.8009644-2.3170776-1.9150391-2.7271729V8.0629883h7.4990234c0.0979614,0,0.1924438,0.0134888,0.2861328,0.0289307  c0.022522,0.0037231,0.0465698,0.0023804,0.0687866,0.006958c0.0201416,0.0040894,0.038147,0.0132446,0.0580444,0.0180664  c0.7697754,0.1871338,1.3453369,0.8809814,1.3453369,1.7116699v6.4462891H4.0039063V9.8286133  c0-0.8963623,0.6702881-1.6306152,1.5318604-1.7427979c0.0747681-0.0097046,0.1486206-0.0228271,0.2259521-0.0228271h7.4995117  v1.3792725c-1.1140747,0.4100952-1.9150391,1.4725342-1.9150391,2.7271729c0,1.6074219,1.3076172,2.9150391,2.9150391,2.9150391  c1.6069336,0,2.9145508-1.3076172,2.9145508-2.9150391c0-1.2545776-0.8008423-2.3168945-1.9145508-2.7271118V8.0629883H44.5136719z"
              class="icon-reveal-13"></path>
          </svg>
          <div class="text w-100">
            <h3 class="heading mb-2">Pembatalan Gratis</h3>
            <p>Anda dapat membatalkan pesanan jika tidak jadi menyewa mobil (Kecuali hari raya).</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services services-2 w-100 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
            y="0px" viewBox="0 0 70 87.5" enable-background="new 0 0 70 70" xml:space="preserve" width="70"
            height="87.5">
            <path
              d="M46.8874512,35.8312378c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688  s0.5117188-0.0976563,0.7070313-0.2929688c0.390625-0.390625,0.390625-1.0234375,0-1.4140625L30.1687012,16.2843628  c-0.390625-0.390625-1.0234375-0.390625-1.4140625,0s-0.390625,1.0234375,0,1.4140625L46.8874512,35.8312378z"
              class="icon-reveal-1"></path>
            <path
              d="M42.3132324,40.4054565L24.1804199,22.272644c-0.390625-0.390625-1.0234375-0.390625-1.4140625,0  s-0.390625,1.0234375,0,1.4140625L40.8991699,41.819519c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688  s0.5117188-0.0976563,0.7070313-0.2929688C42.7038574,41.428894,42.7038574,40.7960815,42.3132324,40.4054565z"
              class="icon-reveal-2"></path>
            <path
              d="M18.1921387,28.2609253c-0.390625-0.390625-1.0234375-0.390625-1.4140625,0s-0.390625,1.0234375,0,1.4140625  l18.1328125,18.1328125c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688s0.5117188-0.0976563,0.7070313-0.2929688  c0.390625-0.390625,0.390625-1.0234375,0-1.4140625L18.1921387,28.2609253z"
              class="icon-reveal-3"></path>
            <path
              d="M65.1325684,54.2858276c0-7.1524658-5.5060425-13.0352783-12.5009766-13.6524048l9.1181641-9.1185913  c0.2084961-0.2084961,0.3144531-0.4980469,0.2895508-0.7919922L59.9491577,6.1854858l2.4714966-2.479248  c0.3901367-0.3911133,0.3891602-1.0244141-0.0019531-1.4140625c-0.3920898-0.3911133-1.0249023-0.3891602-1.4140625,0.0019531  l-2.3562622,2.3637085L33.8630371,2.5465698c-0.2924805-0.0253906-0.5839844,0.0805664-0.7919922,0.2895508L5.1604004,30.7467651  c-0.390625,0.390625-0.390625,1.0234375,0,1.4140625l27.2646484,27.2646484  c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688s0.5117188-0.0976563,0.7070313-0.2929688l3.9266968-3.9266968  c0.6169434,6.9951172,6.4998169,12.5014038,13.6524048,12.5014038  C58.9802246,68.0001831,65.1325684,61.8478394,65.1325684,54.2858276z M33.1320801,57.3043823L7.2814941,31.4537964l26.875-26.875  l22.6474609,1.9293213l-3.1358032,3.1456909C53.0758667,9.3057251,52.3952026,9.09198,51.6599121,9.09198  c-2.2011719,0-3.9921875,1.7910156-3.9921875,3.9926758c0,2.2011719,1.7910156,3.9921875,3.9921875,3.9921875  c2.2016602,0,3.9926758-1.7910156,3.9926758-3.9921875c0-0.7398071-0.2158203-1.4246826-0.5678711-2.0193481l3.0151367-3.0245972  l1.9072266,22.3886719L49.7573853,40.6795044c-6.249939,0.7614136-11.1852417,5.6973877-11.946228,11.9458008L33.1320801,57.3043823  z M50.9538574,13.7926636c0.1953125,0.1948242,0.4506836,0.2919922,0.7060547,0.2919922  c0.2563477,0,0.5126953-0.0981445,0.7080078-0.2939453l1.2106934-1.2144775  c0.043457,0.1633301,0.0739746,0.331665,0.0739746,0.5084229c0,1.0986328-0.894043,1.9921875-1.9926758,1.9921875  s-1.9921875-0.8935547-1.9921875-1.9921875s0.8935547-1.9926758,1.9921875-1.9926758  c0.1746216,0,0.3411255,0.0297852,0.5026245,0.0722046l-1.2106323,1.2144165  C50.5617676,12.7697144,50.5627441,13.4030151,50.9538574,13.7926636z M51.4182129,66.0001831  c-6.4589844,0-11.7138672-5.2548828-11.7138672-11.7143555c0-0.3725586,0.0112305-0.7333984,0.0458984-1.0966797  c0.5253906-5.6000977,4.9711914-10.0458984,10.574707-10.5712891c0.3608398-0.034668,0.7207031-0.0458984,1.0932617-0.0458984  c6.4594727,0,11.7143555,5.2548828,11.7143555,11.7138672C63.1325684,60.7453003,57.8776855,66.0001831,51.4182129,66.0001831z"
              class="icon-reveal-4"></path>
            <path
              d="M54.5637207,46.8092651c-1.1699219,0-2.2822266,0.425293-3.1455078,1.1748047  c-0.862793-0.7495117-1.9750977-1.1748047-3.1450195-1.1748047c-2.6459961,0-4.7988281,2.152832-4.7988281,4.7988281  c0,2.3266602,5.534668,8.1323242,7.230957,9.855957c0.1879883,0.1914063,0.4448242,0.2988281,0.7128906,0.2988281  s0.5249023-0.1074219,0.7128906-0.2988281c1.6962891-1.7236328,7.2314453-7.5292969,7.2314453-9.855957  C59.3625488,48.9620972,57.2097168,46.8092651,54.5637207,46.8092651z M51.4182129,59.3258667  c-2.9755859-3.1157227-5.9248047-6.7636719-5.9438477-7.7177734c0-1.543457,1.2553711-2.7988281,2.7988281-2.7988281  c0.9282227,0,1.7949219,0.4599609,2.3173828,1.2304688c0.1860352,0.2744141,0.4960938,0.4384766,0.8276367,0.4384766  s0.6411133-0.1640625,0.8271484-0.4384766c0.5234375-0.7705078,1.3901367-1.2304688,2.3183594-1.2304688  c1.543457,0,2.7988281,1.2553711,2.7988281,2.7983398C57.3435059,52.5621948,54.3937988,56.210144,51.4182129,59.3258667z"
              class="icon-reveal-5"></path>
          </svg>
          <div class="text w-100">
            <h3 class="heading mb-2">Harga Jelas</h3>
            <p>Anda dapat mendapatkan konfirmasi harga diawal.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services services-2 w-100 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
            y="0px" viewBox="0 0 70 87.5" enable-background="new 0 0 70 70" xml:space="preserve" width="70"
            height="87.5">
            <path
              d="M17.2319336,15.3027344l-6.1987305,8.6132813L8.5625,22.1376953  c-0.4487305-0.3222656-1.0727539-0.2207031-1.3955078,0.2275391s-0.2207031,1.0732422,0.2275391,1.3955078l3.2822266,2.3623047  c0.1708984,0.1230469,0.3754883,0.1884766,0.5839844,0.1884766c0.0537109,0,0.1074219-0.0039063,0.1606445-0.0126953  c0.262207-0.0429688,0.4960938-0.1875,0.6508789-0.4033203l6.7827148-9.4248047  c0.3227539-0.4482422,0.2207031-1.0732422-0.2275391-1.3955078C18.1791992,14.7539063,17.5546875,14.8554688,17.2319336,15.3027344z  "
              class="icon-reveal-1"></path>
            <path
              d="M22.121582,22.3535156h34.4907227c0.5522461,0,1-0.4472656,1-1s-0.4477539-1-1-1H22.121582c-0.5522461,0-1,0.4472656-1,1  S21.5693359,22.3535156,22.121582,22.3535156z"
              class="icon-reveal-2"></path>
            <path
              d="M17.2319336,29.7041016l-6.1987305,8.6123047L8.5625,36.5380859  c-0.4487305-0.3212891-1.0727539-0.2197266-1.3955078,0.2275391c-0.3227539,0.4482422-0.2207031,1.0732422,0.2275391,1.3955078  l3.2822266,2.3623047c0.1767578,0.1269531,0.3808594,0.1884766,0.5830078,0.1884766  c0.3110352,0,0.6171875-0.1445313,0.8125-0.4160156l6.7827148-9.4238281  c0.3227539-0.4482422,0.2207031-1.0732422-0.2275391-1.3955078C18.1791992,29.1552734,17.5546875,29.2568359,17.2319336,29.7041016z  "
              class="icon-reveal-3"></path>
            <path
              d="M22.121582,36.7548828h19.7504883c0.5522461,0,1-0.4472656,1-1s-0.4477539-1-1-1H22.121582c-0.5522461,0-1,0.4472656-1,1  S21.5693359,36.7548828,22.121582,36.7548828z"
              class="icon-reveal-4"></path>
            <path
              d="M17.2319336,44.1044922l-6.1987305,8.6132813L8.5625,50.9394531  c-0.4487305-0.3212891-1.0727539-0.2197266-1.3955078,0.2275391C6.8442383,51.6152344,6.9462891,52.2402344,7.3945313,52.5625  l3.2822266,2.3623047c0.1708984,0.1230469,0.3754883,0.1884766,0.5839844,0.1884766  c0.0537109,0,0.1074219-0.0039063,0.1606445-0.0126953c0.262207-0.0429688,0.4960938-0.1875,0.6508789-0.4033203  l6.7827148-9.4248047c0.3227539-0.4482422,0.2207031-1.0732422-0.2275391-1.3955078  C18.1791992,43.5556641,17.5546875,43.6572266,17.2319336,44.1044922z"
              class="icon-reveal-5"></path>
            <path
              d="M37.4052734,49.1552734H22.121582c-0.5522461,0-1,0.4472656-1,1s0.4477539,1,1,1h15.2836914c0.5522461,0,1-0.4472656,1-1  S37.9575195,49.1552734,37.4052734,49.1552734z"
              class="icon-reveal-6"></path>
            <path
              d="M62.5908203,37.7304688V12.5849609c0-2.9580078-2.4067383-5.3652344-5.3647461-5.3652344H7.3647461  C4.4067383,7.2197266,2,9.6269531,2,12.5849609v44.8300781c0,2.9580078,2.4067383,5.3652344,5.3647461,5.3652344h47.4799805  c0.1019287,0,0.1947021-0.0296631,0.2873535-0.0579834C62.3240967,62.1367188,68,56.1079102,68,48.7675781  C68,44.2849121,65.8761597,40.2973633,62.5908203,37.7304688z M7.3647461,60.7802734  C5.5092773,60.7802734,4,59.2705078,4,57.4150391V12.5849609c0-1.8554688,1.5092773-3.3652344,3.3647461-3.3652344h49.8613281  c1.8554688,0,3.3647461,1.5097656,3.3647461,3.3652344v23.8295898c-1.9689331-1.0567627-4.2163086-1.659668-6.6030273-1.659668  c-7.7265625,0-14.0126953,6.2861328-14.0126953,14.0126953c0,5.1015625,2.7493286,9.5617676,6.8353882,12.0126953H7.3647461z   M53.987793,60.7802734c-6.6240234,0-12.0126953-5.3886719-12.0126953-12.0126953s5.3886719-12.0126953,12.0126953-12.0126953  C60.6113281,36.7548828,66,42.1435547,66,48.7675781S60.6113281,60.7802734,53.987793,60.7802734z"
              class="icon-reveal-7"></path>
            <path
              d="M59.2392578,43.3720703l-8.6689453,8.6689453l-1.8344727-1.8339844c-0.390625-0.390625-1.0234375-0.390625-1.4140625,0  s-0.390625,1.0234375,0,1.4140625l2.5415039,2.5410156c0.1953125,0.1953125,0.4511719,0.2929688,0.7070313,0.2929688  s0.5117188-0.0976563,0.7070313-0.2929688l9.3759766-9.3759766c0.390625-0.390625,0.390625-1.0234375,0-1.4140625  S59.6298828,42.9814453,59.2392578,43.3720703z"
              class="icon-reveal-8"></path>
          </svg>
          <div class="text w-100">
            <h3 class="heading mb-2">Teruji</h3>
            <p>Kami telah melayani ribuan customer baik individu, perusahaan maupun pemerintah.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-gradient pt-5 pb-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section">
        <h2 class="mb-3 ftco-animate mt-0 mb-5">Cara pesan</h2>
      </div>
      <div class="col-md-12 mt-0 mt-lg-5">
        <div class="row mt-0 mt-md-5">
          <div class="col-12 col-sm-6">
            <div class="tutor tutor-1 text-left">
              <div class="text">
                <h3 class="heading mb-2">Isi form <br> pada website ini</h3>
                <p>Atau anda juga dapat menghubungi call center kami.</p>
                <span class="tutor-step">1</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="tutor tutor-2 text-left">
              <div class="text">
                <h3 class="heading mb-2">Terima konfirmasi</h3>
                <p>Staff kami akan langsung menghubungi anda untuk meninjau beberapa dokumen wajib</p>
                <span class="tutor-step">2</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="tutor tutor-3 text-left">
              <div class="text">
                <h3 class="heading mb-2">Mobil diantar </br> ke tempat anda</h3>
                <p>Setelah dokumen anda lengkap & terverifikasi, mobil akan diantar ke tempat anda.</p>
                <span class="tutor-step">3</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="tutor tutor-4 text-left">
              <div class="text">
                <h3 class="heading mb-2">Selamat menikmati perjalanan anda!</h3>
                <p>Nikmati perjalanan anda!</p>
                <span class="tutor-step">4</span>
              </div>
            </div>
          </div>
          <img class="tutor-girl" src="<?php echo base_url(); ?>/img/girl.png">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-grey pt-5 pb-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section">
        <h2 class="mb-3 ftco-animate text-white mt-5">Profil kami</h2>
      </div>
      <div class="col-md-12 mt-5">
        <div class="row ">
          <div class="video-box">
              <video class="video-js" id="video-player">
                <source src="<?php echo base_url(); ?>img/<?php echo $this->company_info->get_company_video(); ?>" type="video/mp4">
              </video>
          </div>
          <img class="tutor-car" src="<?php echo base_url(); ?>/img/barutes.png">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-white pt-5 pb-3" style="z-index:4;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section">
        <h2 class="mb-3 ftco-animate mt-4">Mitra kami</h2>
      </div>
      <div class="col-md-12 mt-5">
        <div class="row bg-white justify-content-center">
          <?php foreach ($dataClients as $client) { ?>
            <div class="col-6 col-sm-3 col-md-2">
              <div class="client-logo">
                <img src="<?php echo base_url(); ?>/img/<?php echo $client->logo; ?>" alt="client">
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(<?= base_url() ?>img/bg_3.png);" style="background-size: cover;
    background-position: top right;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-12 col-lg-6 order-2 order-md-2 order-lg-1 d-flex align-items-center pr-md-2">
        <form action="" id="partnership-form" class="request-form ftco-animate bg-primary bg-blur">
          <h2 class="pb-2">Bergabunglah bersama kami.</h2>
          <div class="form-group">
            <label for="" class="label">Nama anda</label>
            <input type="text" class="form-control" name="partner_name" placeholder="Masukkan nama anda.">
          </div>
          <div class="form-group">
            <label for="" class="label">No. yang bisa dihubungi</label>
            <input type="text" class="form-control" name="partner_phone" placeholder="Masukkan nomer hp anda.">
          </div>
          <div class="form-group pb-4">
            <label for="" class="label">Jenis kerjasama yang diinginkan.</label>
            <select class="form-control" name="partner_type">
              <option value="0"> Pilih kerjasama</option>
              <option value="Titip unit"> Titip unit</option>
              <option value="Agen kota"> Agen di kota Anda</option>
            </select>
          </div>
          <div class="form-group pb-4">
            <input type="submit" value="KIRIM" class="btn btn-secondary py-3 px-4">
          </div>
        </form>
      </div>
      <div
        class="col-md-12 col-lg-6 order-1 order-md-1 order-lg-2 mb-4 ftco-animate heading-section d-flex align-items-center flex-column justify-content-center ">
        <h2 class="text-white mb-3">Jadilah mitra kami.</h2>
        <p class="text-white text-center">Kami bermimpi menjadi perusahaan rental mobil terbesar di Kalimantan Barat.
        </p>
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
            <label for="" class="label">Lokasi rental</label>
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