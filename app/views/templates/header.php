<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $data['title'] ?> </title>

    <!-- Bootstrap and jQuery -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<!-- Data Tables-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

	<style>
        @font-face {
            font-family: 'Allerta';
            font-style: normal;
            font-weight: normal;
            src: url('https://fonts.googleapis.com/css2?family=Allerta&family=Roboto&display=swap');
        }
		td.details-control {
			background: url( <?='../app/view/home/details_open.png' ?> ) no-repeat center center;
			cursor: pointer;
		}
		tr.shown td.details-control {
			background: url( <?='../app/view/home/details_close.png' ?> ) no-repeat center center;
		}
	</style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#C90000;">
        <div class="container-fluid">
            <a class="navbar-brand" href=<?= base_url ?> style="">
                <img src="http://localhost/UTS_webprog/design/AnimeNetworkLogo.png" alt="" width="200">
            </a>
            <!-- Button for smaller-size -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                    <li class="nav-item" style="margin-right:16px">
                        <div class="input-group mb-3">
                            <a href="<?= base_url ?>/addnews">
                                <button class="btn btn-primary">+Create News</button>
                            </a>
                        </div>
                    </li>
                    <?php } ?>

                    <li class="nav-item" style="margin-right:16px">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01" style="background-color: white; color: #C90000;"><b>Category</b></label>
                            <select class="form-select" id="inputGroupSelect01" style="border-color: white; background-color: #C90000; color: white">
                                <option selected>Choose...</option>
                                <option value="1">Game</option>
                                <option value="2">Animation</option>
                                <option value="3">Vtuber</option>
                            </select>   
                        </div>
                    </li>

                    <li class="nav-item">
                        <?php if (isset($_SESSION['loggedin'])) { ?>
                        <a href="<?= base_url ?>dologout">
                            <button class="btn btn-danger">Logout</button>
                        </a>
                        <?php } else { ?>
                        <a href="<?= base_url ?>login">
                            <button class="btn btn-primary">Login</button>
                        </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
