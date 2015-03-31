<?php
/**
 * Created by PhpStorm.
 * User: XIAODI001
 * Date: 2015/3/26
 * Time: 17:11
 */

class Nodejs_mode extends CI_Model {

    function __construct()
    {
        $this -> load -> database();
        parent::__construct();
    }
    function getNodejsAll(){

        $query = $this->db->get("test");
        //var_dump($query);
        return $query->result();
    }
    function geblogAll(){
        $query = $this->db->get("blog");
        //var_dump($query);
        return $query->result();
    }
    function insertArticle($d){
        //var_dump($d);
        $query = $this->db->insert('blog',$d);
    /*    if($query>0){
            echo 'true';
        }else{
            echo 'false';
        }*/
        echo $query>0?true: false;
    }
}