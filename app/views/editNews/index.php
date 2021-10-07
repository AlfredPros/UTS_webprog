
<!-- Form -->
<div class="container" style="padding-top: 4%" data-aos="fade">
    <div class="row text-center" style="margin-bottom: 28px;">
        <h1>Edit News</h1>
    </div>
    <div class="row justify-content-center">
        <form method="POST" action="<?= base_url ?>doeditnews" class="col-md-6" enctype="multipart/form-data">
            <input type="hidden" name="NID" value="<?= $data['nid'][0] ?>" required>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsTitle">Judul Berita</label>
                <input type="text" class="form-control" id="newsTitle" name="newsTitle" placeholder="Berita Baru" value="<?= $data['nid'][1] ?>" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsCategory">Kategori</label><br>
                <select class="form-select" id="newsCategoryList" name="newsCategory"  required>
                    <option selected><?= $data['nid'][2] ?></option>
                    <option value="Game">Game</option>
                    <option value="Animation">Animation</option>
                    <option value="Vtuber">Vtuber</option>
                </select>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsThumbnail">Thumbnail</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="newsThumbnail" name="newsThumbnail" placeholder="Thumbnail berita" value="<?= $data['nid'][3] ?>" required>
                </div>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsWriter">Penerbit</label>
                <input type="text" class="form-control" id="newsWriter" name="newsWriter" placeholder="John Dough" value="<?= $data['nid'][4] ?>" required>
            </div>
            <div class="form-group" style="padding-bottom:15px">
                <label for="newsContent">Konten Berita</label>
                <textarea rows='4' class="form-control" id="newsContent" name="newsContent" placeholder="Lorem ipsum dolor sit amet." value="" required><?= $data['nid'][6] ?></textarea>
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
