
<!-- Form -->
<div class="container" style="padding-top:25px">
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>" class="col-md-6">
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsTitle">Judul Berita</label>
                <input type="text" class="form-control" id="newsTitle" name="newsTitle" placeholder="Berita Baru" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsCategory">Kategori</label><br>
                <input class="form-control" list = "newsCategoryList" type="text" id="newsCategory" placeholder= "Game/Animation/Vtuber" name="" required>
                <datalist id="newsCategoryList" name="newsCategory" value="" >
                    <option value="Game">
                    <option value="Animation">
                    <option value="Vtuber">
                </datalist>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsThumbnail">Thumbnail</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="newsThumbnail" name="newsThumbnail" placeholder="Thumbnail berita" value="" required>
                </div>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsWriter">Penerbit</label>
                <input type="text" class="form-control" id="newsWriter" name="newsWriter" placeholder="John Dough" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsContent">Konten Berita</label>
                <textarea rows='4' class="form-control" id="newsContent" name="newsContent" placeholder="Lorem ipsum dolor sit amet." value="" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-right:5px">Cancel</a>
        </form>
    </div>
</div>
<br>
<br>
