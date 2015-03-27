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
        parent::__construct();
    }
    function getNodejsAll(){
        $this -> load -> database();
        $query = $this->db->query("select * from test");
        //var_dump($query);
        return $query->result();
    }
}