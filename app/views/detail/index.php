
<div class="container" style="padding-top: 25px" data-aos="fade">
  <div class="row">
    <img src="<?= 'data:image/jpg;base64,'.  $data['nid'][3] ?>" style="padding-bottom:8px; object-fit: cover; height: 500px; border-radius: 50px;" draggable="false">
  </div>
  <br>

  <h1 style="color: #C90000;"><strong><?= $data['nid'][1] ?></strong></h1>
  <p style="font-size: 21px"><?= $data['nid'][5] ?></p>
  <br>
  <p style="font-size:24px; text-align:justify;">
    <?= $data['nid'][6] ?>
  </p>
  <br>
  <p style="font-size:21px">Writer: <?= $data['nid'][4] ?></p>
  <br>

  <h3 style="padding-bottom:8px; color: #C90000;">Comment</h3>
  <?php 
    if (isset($_SESSION['loggedin'])) {
      ?>
      <div class="row">
        <div class="col col-md-1">
          <img src="<?= 'data:image/jpg;base64,'.  $data['user'][7] ?>" class="col-md-12" style="object-fit: cover; width: 100%; border-radius: 50%" draggable="false">
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
      <img src="https://i.ibb.co/n6XFFZS/qnfa0i-QK-400x400.jpg" class="col-md-12" style="object-fit: cover; width: 100%; border-radius: 50%" draggable="false">
    </div>
    <div class="col col-md-11">
      <div class="row">
        <p style="font-weight: bold; font-size:large; margin-bottom:4px;">honohono0416</p>
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
      <div class="row" data-aos="fade" data-aos-offset="80">
      <div class="col col-md-1" >
        <img src="<?= 'data:image/jpg;base64,'.  $comment[3] ?>" class="col-md-12" style="object-fit: cover; width: 100%; border-radius: 50%" draggable="false">
      </div>
      <div class="col col-md-11">
        <div class="row">
          <p style="font-weight: bold; font-size:21px; margin-bottom:4px;"><?= $comment[2] .' &nbsp;' . $comment[4]?></p>
          
        </div>
        <div class="row">
          <p style="font-size:18px; margin-bottom:8px;"><?= $comment[1]?></p>
        </div>
        <div class="row">
          <div class="col">
            <?php if ($comment[6] > 0) { ?>
              <?php if (isset($_SESSION['loggedin']) && $this->model('CommentModel')->hasNotLiked($_SESSION['loggedin'], $comment[5])) { ?>
                <!-- Pass parameter: UID, CID, totalLikes, NID -->
                <a href="<?= base_url ?>dolike<?= "/". $_SESSION['loggedin'] . "/". $comment[5] ."/". $comment[6] ."/". $data['nid'][0]?>" role="button" class="btn btn-light" style="margin-right:5px"><?=$comment[6]?> Like ❤️</a>
              <?php } else if (isset($_SESSION['loggedin']) && !($this->model('CommentModel')->hasNotLiked($_SESSION['loggedin'], $comment[5]))) { ?>
                <!-- Pass parameter: UID, CID, totalLikes, NID -->
                <a href="<?= base_url ?>dolike<?= "/". $_SESSION['loggedin'] . "/". $comment[5] ."/". $comment[6] ."/". $data['nid'][0]?>" role="button" class="btn btn-primary" style="margin-right:5px"><?=$comment[6]?> Dislike 💔</a>
              <?php } else { ?>
                <a href="<?= base_url ?>login" role="button" class="btn btn-light" style="margin-right:5px"><?=$comment[6]?> Like ❤️</a>
              <?php } ?>
            <?php } else { ?>
              <?php if (isset($_SESSION['loggedin']) && $this->model('CommentModel')->hasNotLiked($_SESSION['loggedin'], $comment[5])) { ?>
                <!-- Pass parameter: UID, CID, totalLikes, NID -->
                <a href="<?= base_url ?>dolike<?= "/". $_SESSION['loggedin'] . "/". $comment[5] ."/". $comment[6] ."/". $data['nid'][0]?>" role="button" class="btn btn-light" style="margin-right:5px">Like ❤️</a>
              <?php } else if (isset($_SESSION['loggedin']) && !($this->model('CommentModel')->hasNotLiked($_SESSION['loggedin'], $comment[5]))) { ?>
                <!-- Pass parameter: UID, CID, totalLikes, NID -->
                <a href="<?= base_url ?>dolike<?= "/". $_SESSION['loggedin'] . "/". $comment[5] ."/". $comment[6] ."/". $data['nid'][0]?>" role="button" class="btn btn-primary" style="margin-right:5px">Dislike 💔</a>
              <?php } else { ?>
                <a href="<?= base_url ?>login" role="button" class="btn btn-light" style="margin-right:5px">Like ❤️</a>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <?php
    }
  ?>
  <br>
</div>