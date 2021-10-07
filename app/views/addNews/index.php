
<!-- Form -->
<div class="container" style="padding-top: 4%" data-aos="fade">
    <div class="row text-center" style="margin-bottom: 28px;">
        <h1>Add News</h1>
    </div>
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>doaddnews" class="col-md-6" enctype="multipart/form-data">
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsTitle">Judul Berita</label>
                <input type="text" class="form-control" id="newsTitle" name="newsTitle" placeholder="Berita Baru" value="" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsCategory">Kategori</label><br>
                <select class="form-select" id="newsCategoryList" name="newsCategory" placeholder="Game/Animation/Video" required>
                    <option value="Game">Game</option>
                    <option value="Animation">Animation</option>
                    <option value="Vtuber">Vtuber</option>
                </select>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsThumbnail">Thumbnail</label>
                <div class="custom-file">
                    <input type="file" class="form-control" accept="image" id="newsThumbnail" name="newsThumbnail" placeholder="Thumbnail berita" value="" required>
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

            <?php
            if (isset($_SESSION['alertnotif'])) { ?>
            <p style="color:red;"><?= $_SESSION['alertnotif'] ?></p>
            <?php
                unset($_SESSION['alertnotif']);
            }
            ?>

            <button type="submit" class="btn btn-primary" style="margin-top: 21px; margin-right:5px">Submit</button>
            <a href="<?= base_url ?>" class="btn btn-secondary" role="button" style="margin-top: 21px; margin-right:5px">Cancel</a>
        </form>
    </div>
</div>
<br>
<br>
