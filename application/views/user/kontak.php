<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form" style="background-color: purple;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?= site_url('u_kontak/proses_kontak'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Phone" name="xtelp" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="xpesan" required rows="5"></textarea>
                                    </div>
                                    <button type="submit" name="kirim_pesan" class="btn btn-default btn-submit">KIRIM</button>
                                </form>
                            </div>
                        </div>
                        <style type="text/css">
                        	.contact-details p {
                        		color: white;
                        	}
                        </style>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details" >
                                    <i class="icon-location-pin" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Politeknik Negeri Batam
                                        <br> Jl. Ahmad Yani Batam Kota.
                                        <br> Kota Batam. kepulauan Riau. Indonesia.</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p> info@batamlinux.or.id</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>+62 852 6369 6498 <br>+62 852 7839 3822</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center bg-primary"><b>OR</b></p>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .header-top_address {
        color: white;
    }
    .btn-submit:hover {
        color: black;
    }
    </style>