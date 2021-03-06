
<!-- Form -->
<div class="container" style="padding-top: 3%; padding-bottom: 9%;" data-aos="fade">
    <div class="row text-center" style="margin-bottom: 28px;">
        <h1 style="color:#c90000">Login</h1>
    </div>
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>/dologin" class="col-md-6">
            <div class="form-group" style="padding-bottom:15px">
                <label for="username">Username/Email</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Example-chan / example@email.com" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="captcha">Captcha</label>
                <input class="form-control" value="<?= $data['captcha'] ?>" name="captcha" readonly disabled>
                <input type="hidden" name="captcha" value="<?= $data['captcha'] ?>" required>
                <input type="text" class="form-control" id="captcha" name="captchaInput" placeholder="Text you see" value="" required>
            </div>

            <?php
            if (isset($_SESSION['alertnotif'])) { ?>
            <p style="color:red"><?= $_SESSION['alertnotif'] ?></p>
            <?php
                unset($_SESSION['alertnotif']);
            }
            ?>

            <button type="submit" class="btn btn-primary" style="margin-top: 21px; margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-top: 21px; margin-right:5px">Cancel</a>
            <a href="<?= base_url ?>signup" class="btn btn-danger" role="button" style="margin-top: 21px;">Sign Up</a>
        </form>
    </div>
</div>