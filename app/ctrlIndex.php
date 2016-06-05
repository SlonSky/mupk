<?php

class ctrlIndex extends ctrl{

    function index(){

        include ("ctrlAdmin.php");
        $admin = new ctrlAdmin();

        if($admin->isAdmin()){
            $admin->index();
        } else {
            $this->posts = $this->db->query("SELECT * FROM posts ORDER BY ctime DESC")->all();
            $this->out("news.php");
        }
    }

    function team(){
        $this->out("team.html");
    }

    function career(){
        $this->out("career.php");
    }

    function progress(){
        $this->out("progress.php");
    }

    function selectProgress(){

    }

    function education(){
        $this->out("education.html");
    }

    function regulatory(){
        $this->out("regulatory.html");
    }

    function validation(){
        $this->out("validation.html");
    }

    function graduates(){
        $this->out("graduates.php");
    }






}