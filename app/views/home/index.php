<div class="container">
    <h1>Hello World!!!</h1>
    <br>
        <?php 
            for ($i = 0; $i < 3; $i++)
            {
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= base_url ?>detail">
                            <div class="row">
                                <img src="http://localhost/UTS_webprog/design/home_notlogin.png" alt="" style="padding-bottom:8px">
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: large; ">Judul</p>
                            </div>
                            <?php if (isset($_POST['email']) && $_POST['email'] == 'admin') { ?>
                            <div class="col">
                                <a href="<?= base_url ?>" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                                <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: medium;">Penulis</p>
                            </div>
                            <div class="col">
                                <p style="font-size: medium;">Tanggal Terbit</p>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: small; padding-bottom:8px">Kategori</p>
                        </div>
                    </div>
                        
                    <div class="col-md-4">
                        <a href="<?= base_url ?>detail">
                            <div class="row">
                                <img src="http://localhost/UTS_webprog/design/home_notlogin.png" alt="" style="padding-bottom:8px">
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: large; ">Judul</p>
                            </div>
                            <?php if (isset($_POST['email']) && $_POST['email'] == 'admin') { ?>
                            <div class="col">
                                <a href="<?= base_url ?>" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                                <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: medium;">Penulis</p>
                            </div>
                            <div class="col">
                                <p style="font-size: medium;">Tanggal Terbit</p>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: small; padding-bottom:8px">Kategori</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="<?= base_url ?>detail">
                            <div class="row">
                                <img src="http://localhost/UTS_webprog/design/home_notlogin.png" alt="" style="padding-bottom:8px">
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: large; ">Judul</p>
                            </div>
                            <?php if (isset($_POST['email']) && $_POST['email'] == 'admin') { ?>
                            <div class="col">
                                <a href="<?= base_url ?>" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                                <a href="<?= base_url ?>" role="button" class="btn btn-danger">Delete</a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: medium;">Penulis</p>
                            </div>
                            <div class="col">
                                <p style="font-size: medium;">Tanggal Terbit</p>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: small; padding-bottom:8px">Kategori</p>
                        </div>
                    </div>
                </div>
            <?php
            };
        ?>
</div>
