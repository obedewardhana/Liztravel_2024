<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-8">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">
                        <a href="<?php echo base_url(''); ?>" class="logo d-flex flex-row align-items-center">
                            <img class="mr-2" height="60"
                                src="<?php echo base_url(); ?>/img/<?= $this->company_info->get_company_logo(); ?>">
                            <h5 class="text-white font-weight-bold  mb-0 ml-3">PT. LIZ GRUP JAYA ABADI</h5>
                        </a>
                    </h2>

                    <div class="block-23 mb-2">
                        <p>MAIN OFFICE</p>
                        <ul>
                            <li class="w-100">
                                <span class="icon icon-map-marker"></span>
                                <span class="text text-white ml-auto">
                                    <?= $this->company_info->get_company_address(); ?>
                                </span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon icon-phone"></span>
                                    <span class="text">
                                        <?= $this->company_info->get_company_whatsapp(); ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-23 mb-3">
                        <p>BRANCH OFFICE</p>
                        <ul>
                            <li class="w-100">
                                <span class="icon icon-map-marker"></span>
                                <span class="text text-white">
                                    <?= $this->company_info->get_company_addressbranch(); ?>
                                </span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon icon-phone"></span>
                                    <span class="text">
                                        <?= $this->company_info->get_company_whatsappbranch(); ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="<?= $this->company_info->get_company_facebook();?>" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="<?= $this->company_info->get_company_instagram();?>" target="_blank"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="<?= $this->company_info->get_company_youtube();?>" target="_blank"><span class="icon-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Legal</h2>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url('privacy');?>" target="_blank" class="py-2 d-block">Privacy Policy</a></li>
                        <li><a href="<?= base_url('LepasKunci');?>" target="_blank" class="py-2 d-block">Syarat & Ketentuan Penyewaan Lepas Kunci</a></li>
                        <li><a href="<?= base_url('syarat');?>" target="_blank" class="py-2 d-block">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | <?= $this->company_info->get_company_name();?>
                </p>
            </div>
        </div>
    </div>
</footer>