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
        /*
        //var_dump($data['allnews']);
        echo '<img src="data:image/jpg;base64,'.  $data['allnews'][0][3]  .'"/>';
        echo '<img src="data:image/jpg;base64,'.  $data['allnews'][1][3]  .'"/>';
        */
    ?>

    <div class="row">
    <?php 
        foreach($data['allnews'] as $news) {
    ?>
        <div class="col-md-4">
            <a href="<?= base_url ?>detail<?= "/". $news[0] ?>">
                <div class="row">
                    <img src="<?= 'data:image/jpg;base64,'.  $news[3] ?>" alt="" style="padding-bottom:8px">
                </div>
            </a>
            <div class="row">
                <div class="col">
                    <a href="<?= base_url ?>detail<?= "/". $news[0] ?>">
                        <p style="font-size: large; "><?= $news[1] ?></p>
                    </a>
                </div>
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                <div class="col">
                    <a href="<?= base_url ?>editnews<?= "/". $news[0] ?>" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                    <a href="<?= base_url ?>deletenews<?= "/". $news[0] ?>" role="button" class="btn btn-danger">Delete</a>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col">
                    <p style="font-size: medium;"><?= $news[4] ?></p>
                </div>
                <div class="col">
                    <p style="font-size: medium;"><?= $news[5] ?></p>
                </div>
            </div>
            <div class="row">
                <p style="font-size: small; padding-bottom:8px"><?= $news[2] ?></p>
            </div>
        </div>
    <?php 
        }
    ?>
    </div>

    <br>
    <br>
</div>
