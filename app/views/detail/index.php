<div class="container">
  <div class="row">
    <img src="<?= 'data:image/jpg;base64,'.  $data['nid'][3] ?>">
  </div>
  <br>

  <h1><strong><?= $data['nid'][1] ?></strong><h1>
  <p style="font-size:21px"><?= $data['nid'][5] ?></p>
  <br>
  <p style="font-size:24px">
    <?= $data['nid'][6] ?>
  </p>
  <br>
  <p style="font-size:18px">Penerbit: <?= $data['nid'][4] ?></p>
  <br>

  <h3 style="padding-bottom:8px">Comment</h3>
  <?php 
    if (isset($_SESSION['loggedin'])) {
      ?>
      <div class="row">
        <div class="col col-md-1">
          <img src="<?= 'data:image/jpg;base64,'.  $data['user'][7] ?>" class="col-md-12" style="border-radius: 50%">
        </div>
        <div class="col col-md-11">
          <div class="row">
            <p style="font-weight: bold; font-size:21px; margin-bottom:4px;"><?= $data['user'][3] ?></p>
          </div>
          <form class="form-group" action="<?= base_url ?>doaddcomment" method="POST">
            <input type="hidden" name="NID" value="<?=$data['nid'][0]?>" required>
            <div class="row">
              <div class="col col-md-6">
                <textarea name="comment" class="form-control" style="margin-bottom:12px" placeholder="Your comment here!"></textarea>
              </div>
            </div>
            <?php
              if (isset($_SESSION['alertnotif'])) {
                echo "<p style='color:red'>" . $_SESSION['alertnotif'] . "</p>";
                unset($_SESSION['alertnotif']);
              }
            ?>
            <div class="row">
              <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php
    } else {
        ?>
  <div class="row">
    <div class="col col-md-1">
      <img src="http://localhost/UTS_webprog/app/views/detail/qnfa0iQK_400x400.jpg" class="col-md-12" style="border-radius: 50%">
    </div>
    <div class="col col-md-11">
      <div class="row">
        <p style="font-weight: bold; font-size:21px; margin-bottom:4px;">honohono0416</p>
      </div>
      <form class="form-group">
        <div class="row">
          <div class="col col-md-6">
            <textarea name="comment" class="form-control" style="margin-bottom:12px" placeholder="Your comment here!"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a class="btn btn-primary" href="<?= base_url ?>login">Submit</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php
    }
    ?>
  <hr>
  <?php
    foreach ($data['comments'] as $comment) {
      ?>
      <div class="row">
      <div class="col col-md-1">
        <img src="<?= 'data:image/jpg;base64,'.  $comment[3] ?>" class="col-md-12" style="border-radius: 50%">
      </div>
      <div class="col col-md-11">
        <div class="row">
          <p style="font-weight: bold; font-size:21px; margin-bottom:4px;"><?= $comment[2] .' ' . $comment[4]?></p>
          
        </div>
        <div class="row">
          <p style="font-size:18px; margin-bottom:8px;"><?= $comment[1]?></p>
        </div>
        <div class="row">
          <div class="col">
            <?php if (isset($_SESSION['loggedin'])) { ?>
              <!-- Pass parameter: UID, CID  -->
              <a href="<?= base_url ?>dolike<?= "/". $_SESSION['loggedin'] . "/". $comment[5] ?>" role="button" class="btn btn-primary" style="margin-right:5px">Like ❤️</a>
            <?php } else { ?>
              <a href="<?= base_url ?>login" role="button" class="btn btn-primary" style="margin-right:5px">Like ❤️</a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <?php
    }
  ?>
  <div class="row">
    <div class="col col-md-1">
      <img src="http://localhost/UTS_webprog/app/views/detail/download.png" class="col-md-12" style="border-radius: 50%">
    </div>
    <div class="col col-md-11">
      <div class="row">
        <p style="font-weight: bold; font-size:21px; margin-bottom:4px;">honohono416</p>
      </div>
      <div class="row">
        <p style="font-size:18px; margin-bottom:8px;">I made this.</p>
      </div>
      <div class="row">
        <div class="col">
        <button class="btn btn-light" style="margin-bottom:4px;">Like ❤️</button>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col col-md-1">
      <img src="http://localhost/UTS_webprog/app/views/detail/htwh_c8I_400x400.jpg" class="col-md-12" style="border-radius: 50%;">
    </div>
    <div class="col col-md-11">
      <div class="row">
        <p style="font-weight: bold; font-size:21px; margin-bottom:4px;">穂海ほのほの</p>
      </div>
      <div class="row">
        <p style="font-size:18px; margin-bottom:8px;">I also made this.</p>
      </div>
      <div class="row">
        <div class="col">
          <button class="btn btn-light" style="margin-bottom:4px;">Like ❤️</button>
        </div>
      </div>
    </div>
  </div>
  <br>
</div>