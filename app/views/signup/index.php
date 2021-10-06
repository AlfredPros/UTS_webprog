
<!-- Form -->
<div class="container" style="padding-top:25px">
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>/dosignup" class="col-md-6" enctype="multipart/form-data">
            <div class="form-group" style="padding-bottom:15px">
                <label for="firstname">Nama Depan</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="lastname">Nama Belakang</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Dough" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="email">Username/Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="example@email.com" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="birthdate">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="2900-9-21" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="gender">Jenis Kelamin</label><br>
                <select class="form-select" id="genderList" name="gender" placeholder="Male/Female" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="photo">Foto Profil</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Your Face" value="" required>
                </div>
            </div>

            <?php
            if (isset($_SESSION['alertnotif'])) { ?>
            <p style="color:red;"><?= $_SESSION['alertnotif'] ?></p>
            <?php
                unset($_SESSION['alertnotif']);
            }
            ?>

            <button type="submit" class="btn btn-primary" style="margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-right:5px">Cancel</a>
        </form>
    </div>
</div>
<br>
<br>
