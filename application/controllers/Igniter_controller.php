<?php

/*
 *      Author : Muhammad Shahab Ul Hassan
 *      Nick   : PrinceLord Prime
 *      Date   : 11 August 2018
 *      Time   : 03:37 PM Pakistan Standard Time
 *
 *      Project Name : Tajweed Quran
 */


class Igniter_controller extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('main_model');
    }

    public function ignite(){

        //return $this->load->view('coming_soon.php');
        return $this->load->view('home.php');
    }

    public function error(){
        return $this->load->view('Error404.php');
    }

    public function devtest(){
        //echo 'Dev Testing';
        //$this->main_model->test_model();
        return $this->load->view('login.php');

    }


}