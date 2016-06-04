<?php

class ctrlIndex extends ctrl{

    function index(){

        $this->posts = $this->db->query("SELECT * FROM posts ORDER BY ctime DESC")->all();
        $this->out("news.php");
    }


    function login(){

    }

    function register(){

    }

    function career(){
        $this->out("career.php");
    }

    function progress(){
        $this->out("progress.php");
    }


}