
<!-- Form -->
<div class="container" style="padding-top:25px">
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>" class="col-md-6">
            <div class="form-group" style="padding-bottom:15px">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="example@email.com" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="recaptcha">Recaptcha</label>
                <input type="text" class="form-control" id="recaptcha" name="recaptcha" placeholder="Text you see" value="">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-right:5px">Cancel</a>
            <a href="<?= base_url ?>/signup" class="btn btn-warning" role="button">Sign Up</a>
        </form>
    </div>
</div>
