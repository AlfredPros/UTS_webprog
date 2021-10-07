<div class="container" style="padding-top: 25px; padding-bottom: 25px">
    <br>

    <?php
        //var_dump($data['allnews']);
        /*
        echo '<img src="data:image/jpg;base64,'.  $data['allnews'][0][3]  .'"/>';
        echo '<img src="data:image/jpg;base64,'.  $data['allnews'][1][3]  .'"/>';
        */
    ?>

    <!-- Hightlight -->
    <?php if (isset($data['allnews'][0])) { ?>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url ?>detail<?= "/". $data['allnews'][0][0] ?>">
                <div class="row">
                    <img src="<?= 'data:image/jpg;base64,'.  $data['allnews'][0][3] ?>" alt="" style="padding-bottom:8px; object-fit: cover; height: 350px; border-radius: 50px;" draggable="false">
                </div>
            </a>
            <div class="row">
                <div class="col">
                    <a href="<?= base_url ?>detail<?= "/". $data['allnews'][0][0] ?>" style="text-transform: uppercase; color: #C90000; text-decoration: none;">
                        <strong><p style="font-size: x-large; "><?= $data['allnews'][0][1] ?></p></strong>
                    </a>
                </div>
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                <div class="col col-auto">
                    <a href="<?= base_url ?>editnews<?= "/". $data['allnews'][0][0] ?>" role="button" class="btn btn-primary" style="margin-right:5px;">Edit</a>
                    <a href="<?= base_url ?>dodeletenews<?= "/". $data['allnews'][0][0] ?>" role="button" class="btn btn-danger">Delete</a>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col">
                    <p style="font-size: large;"><?= $data['allnews'][0][4] ?></p>
                </div>
                <div class="col col-auto">
                    <p style="font-size: large;"><?= $data['allnews'][0][5] ?></p>
                </div>
            </div>
            <div class="row">
                <p style="font-size: medium; padding-bottom:8px"><?= $data['allnews'][0][2] ?></p>
            </div>
        </div>
    </div>
    
    <hr style="margin-bottom:32px">

    <div class="row">
    <?php 
        foreach(array_slice($data['allnews'],1) as $news) {
    ?>
        <div class="col-md-4">
            <a href="<?= base_url ?>detail<?= "/". $news[0] ?>">
                <div class="row">
                    <img src="<?= 'data:image/jpg;base64,'.  $news[3] ?>" alt="" style="padding-bottom:8px; object-fit: cover; height: 250px; border-radius: 50px;" draggable="false">
                </div>
            </a>
            <div class="row">
                <div class="col">
                    <a href="<?= base_url ?>detail<?= "/". $news[0] ?>" style="text-transform: uppercase; color: #C90000; text-decoration: none;">
                        <strong><p style="font-size: large; "><?= $news[1] ?></p></strong>
                    </a>
                </div>
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                <div class="col col-auto">
                    <a href="<?= base_url ?>editnews<?= "/". $news[0] ?>" role="button" class="btn btn-primary" style="margin-right:5px">Edit</a>
                    <a href="<?= base_url ?>dodeletenews<?= "/". $news[0] ?>" role="button" class="btn btn-danger">Delete</a>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col">
                    <p style="font-size: medium;"><?= $news[4] ?></p>
                </div>
                <div class="col col-auto">
                    <p style="font-size: medium;"><?= $news[5] ?></p>
                </div>
            </div>
            <div class="row">
                <p style="font-size: small; padding-bottom:8px"><?= $news[2] ?></p>
            </div>
        </div>
    <?php 
        } }
    ?>
    </div>

    <br>
</div>
