<?php

class ctrlIndex extends ctrl{

    function index(){
        $this->posts = $this->db->query("SELECT * FROM posts ORDER BY ctime DESC")->all();
        $this->out("news.php");
    }


    function login(){
        $this->out("login/login.php");
    }

    function testReg(){

        $this->out("login/testreg.php");
    }

    function userExit(){
        $this->out("login/exit.php");
    }


    function save(){
        $this->out("login/save.php");
    }

    function register(){
        $this->out("login/register.php");
    }

    function career(){
        $this->out("career.php");
    }

    function progress(){
        $this->out("progress.php");
    }


}