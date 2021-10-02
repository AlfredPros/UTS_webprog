<?php

class Dologout extends Controller {
    public function index() {
        unset($_SESSION['loggedin']);
        unset($_SESSION['admin']);
        unset($_SESSION['alertnotif']);

        echo "Logged out.";

        header('Location: '.base_url);
        die();
    }
}