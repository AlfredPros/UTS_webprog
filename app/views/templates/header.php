<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $data['title'] ?> </title>
    <link rel="icon" href="https://i.ibb.co/X32pLV5/anime-news-icon.png">

    <!-- Bootstrap and jQuery -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<!-- AOS-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<style>
        .btn-login{
            background-color: #C90000;
            color: white;
            border-color: #CED4DA;
        }
        .btn-login:hover{
            background-color: #800000;
            color: white;
        }
        body {
            background-image: url("https://i.ibb.co/SmTcdPb/92752671-p0.jpg");
            background-position: top left, top middle;
            background-repeat: repeat-xy;
            background-size: 100%; 
            background-attachment: fixed;  
        }
        footer {
                position: relative;
                width: 100%;
                bottom: 0px;
                margin-top: 15px;
                padding: 15px;
                text-align: center;
                background-color: #C90000;
                color: white;
            }
	</style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#C90000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url ?>" style="">
                <img src="https://i.ibb.co/tmrys7B/anime-news-logo-white.png" width="200">
            </a>
            <!-- Button for smaller-size -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 10px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) { ?>
                    <li class="nav-item" style="margin-right:16px">
                        <div class="input-group mb-3">
                            <a href="<?= base_url ?>addnews">
                                <button class="btn btn-login">+Create News</button>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                    <form action="<?= base_url ?>" method="POST">
                        <li class="nav-item" style="margin-right:16px">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" style="background-color: #C90000; color: white;">Category</label>
                                <select class="form-select" id="inputGroupSelect01" name="category" style="color: #C90000; width: 150px">
                                    <option selected><?php if(isset($data['category'])) echo $data['category'] ?></option>
                                    <option value="All">All</option>
                                    <option value="Game">Game</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Vtuber">Vtuber</option>
                                </select>   
                                <button class="btn btn-warning" type="submit">Go</button>
                            </div>
                        </li>
                    </form>
                   

                    <li class="nav-item">
                        <?php if (isset($_SESSION['loggedin'])) { ?>
                        <a href="<?= base_url ?>dologout">
                            <button class="btn btn-danger">Logout</button>
                        </a>
                        <?php } else { ?>
                        <a href="<?= base_url ?>login">
                            <button class="btn btn-login">Login</button>
                        </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>