<?php

class ctrlAdmin extends ctrl{

    const ADMIN_LOGIN = "mnvk_admin";
    const ADMIN_PASSWORD = "mnvkAdmin9999";

    function isAdmin(){
        return $_SESSION['login'] === self::ADMIN_LOGIN;// && $_SESSION['password'] === self::ADMIN_PASSWORD;
    }

    function index(){
        $this->posts = $this->db->query("SELECT * FROM posts ORDER BY ctime DESC")->all();
        $this->out("admin/newsAdmin.php");
    }

    function addForm(){
        $this->out("admin/addForm.php");
    }

    function addPost(){
        $title = $_POST["title"];
        $post = $_POST["post"];
        $currentTime = $_SERVER["REQUEST_TIME"];
        if(!empty($title) && !empty($post)){
            $this->db->query("INSERT INTO posts (ctime, title, post) VALUES ('$currentTime', '$title', '$post')");
        }
        $this->index();
    }

    function editForm($id){
        $this->id = $id;
        $this->out("admin/editForm.php");

    }

    function editPost($id){
        $title = $_POST["title"];
        $post = $_POST["post"];
        $currentTime = $_SERVER["REQUEST_TIME"];
        if(!empty($title) && !empty($post)){
            $this->db->query("UPDATE posts SET ctime='$currentTime', title='$title', post='$post' WHERE id='$id'");
        }
        $this->index();
    }

    function delete($id){
        $this->id = $id;
        $this->db->query("DELETE FROM posts WHERE id='$this->id'");
        header('Location index.php');
        $this->index();
    }

}