<div class="container" style="padding-top: 25px; padding-bottom: 25px">
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url ?>detail">
                <div class="row col-md-12">
                    <img src="http://localhost/UTS_webprog/app/views/detail/59855940.jpg" alt="" style="padding-bottom:8px; border-radius: 50px; height: 350px; object-fit: cover;">
                </div>
            </a>
            <div class="row">
                <div class="col">
                    <a href="<?= base_url ?>detail" style="text-decoration: none; color: #C90000;">
                        <p style="font-size: large; "><b>Judul</b></p>
                    </a>
                </div>
                <?php if (isset($_POST['email']) && $_POST['email'] == 'admin') { ?>
                    <div class="col">
                        <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                        <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                    </div>
                <?php } ?>
            </div>
            <div class="row" style="text-decoration: none; color: #C90000;">
                <div class="col">
                    <p style="font-size: medium;">Penulis</p>
                </div>
                <div class="col">
                    <p style="font-size: medium;">Tanggal Terbit</p>
                </div>
            </div>
            <div class="row">
                <p style="font-size: small; padding-bottom:8px; text-decoration: none; color: #C90000;">Kategori</p>
            </div>
        </div>
        <?php 
            for ($i = 0; $i < 3; $i++)
            {
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= base_url ?>detail">
                            <div class="row">
                                <img src="http://localhost/UTS_webprog/app/views/detail/59855940.jpg" alt="" style="padding-bottom:8px; border-radius: 50px; width: 500px; height: 200px; object-fit: cover;">
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <a href="<?= base_url ?>detail" style="text-decoration: none; color: #C90000;">
                                    <p style="font-size: large; "><b>Judul</b></p>
                                </a>
                            </div>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                            <div class="col">
                                <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                                <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row" style="text-decoration: none; color: #C90000;">
                            <div class="col">
                                <p style="font-size: medium;">Penulis</p>
                            </div>
                            <div class="col">
                                <p style="font-size: medium;">Tanggal Terbit</p>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: small; padding-bottom:8px; text-decoration: none; color: #C90000;">Kategori</p>
                        </div>
                    </div>
                        
                    <div class="col-md-4">
                        <a href="<?= base_url ?>detail">
                            <div class="row">
                                <img src="http://localhost/UTS_webprog/design/thumbnail.png" alt="" style="padding-bottom:8px; border-radius: 50px;">
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <a href="<?= base_url ?>detail" style="text-decoration: none; color: #C90000;">
                                    <p style="font-size: large; "><b>Judul</b></p>
                                </a>
                            </div>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                            <div class="col">
                                <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                                <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row" style="text-decoration: none; color: #C90000;">
                            <div class="col">
                                <p style="font-size: medium;">Penulis</p>
                            </div>
                            <div class="col">
                                <p style="font-size: medium;">Tanggal Terbit</p>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: small; padding-bottom:8px; text-decoration: none; color: #C90000;">Kategori</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="<?= base_url ?>detail">
                            <div class="row">
                                <img src="http://localhost/UTS_webprog/design/detail_berita.png" alt="" style="padding-bottom:8px; border-radius: 50px;">
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <a href="<?= base_url ?>detail" style="text-decoration: none; color: #C90000;">
                                    <p style="font-size: large; "><b>Judul</b></p>
                                </a>
                            </div>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                            <div class="col">
                                <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                                <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row" style="text-decoration: none; color: #C90000;">
                            <div class="col">
                                <p style="font-size: medium;">Penulis</p>
                            </div>
                            <div class="col">
                                <p style="font-size: medium;">Tanggal Terbit</p>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: small; padding-bottom:8px; text-decoration: none; color: #C90000;">Kategori</p>
                        </div>
                    </div>
                </div>
            <?php
            };
        ?>
</div>
