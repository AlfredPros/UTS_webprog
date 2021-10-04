<div class="container">
    <?php
        if (isset($_SESSION['alertnotif'])) {
            echo $_SESSION['alertnotif'];
            unset($_SESSION['alertnotif']);
        }
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            echo '<br>Admin!!!';
        }
    ?>
    <br>

    <?php
        var_dump($data['allnews']);
        echo '<img src="data:image/jpg;base64,'.  $data['allnews'][1][3]  .'"/>';
    ?>

    <br>
    <br>
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
                                <a href="<?= base_url ?>detail">
                                    <p style="font-size: large; ">Judul</p>
                                </a>
                            </div>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                            <div class="col">
                                <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
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
                                <a href="<?= base_url ?>detail">
                                    <p style="font-size: large; ">Judul</p>
                                </a>
                            </div>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                            <div class="col">
                                <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
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
                                <a href="<?= base_url ?>detail">
                                    <p style="font-size: large; ">Judul</p>
                                </a>
                            </div>
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                            <div class="col">
                                <a href="<?= base_url ?>/editnews" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
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
