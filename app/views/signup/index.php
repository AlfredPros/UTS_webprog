
<!-- Form -->
<div class="container" style="padding-top:25px">
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>" class="col-md-6">
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
                <input class="form-control" list = "genderList" type="text" id="gender" placeholder= "Male/Female" name="" required>
                <datalist id="genderList" name="gender" value="" >
                    <option value="Male">
                    <option value="Female">
                    <option value="Other">
                </datalist>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="photo">Foto Profil</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Your Face" value="" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-right:5px">Cancel</a>
        </form>
    </div>
</div>
<br>
<br>
