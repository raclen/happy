<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    /*取数据*/
    function nodejs_controller()
    {
        $this->load->model('Nodejs_mode');
        $data = $this->Nodejs_mode->getNodejsAll();
        echo json_encode($data);
    }


    function insertArticle_controller()
    {
        $this->load->model('Nodejs_mode');
        $title = $_GET['title'];
        $date = date('Y-m-d');
        $content = $_GET['content'];
        /*   $title ='2223';
           $date = date('Y-m-d') ;
           $content = '222222';*/
        $data = array('title' => $title, 'date' => $date, 'content' => $content);
        $this->Nodejs_mode->insertArticle($data);
    }


}
