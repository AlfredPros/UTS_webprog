
<!-- Form -->
<div class="container" style="padding-top:25px">
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>/dologin" class="col-md-6">
            <div class="form-group" style="padding-bottom:15px">
                <label for="email">Username/Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Example-chan / example@email.com" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="captcha">Captcha</label>
                <input class="form-control" value="<?= $data['captcha'] ?>" name="captcha" readonly disabled>
                <input type="text" class="form-control" id="captcha" name="captchaInput" placeholder="Text you see" value="">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-right:5px">Cancel</a>
            <a href="<?= base_url ?>/signup" class="btn btn-warning" role="button">Sign Up</a>
        </form>
    </div>
</div>
