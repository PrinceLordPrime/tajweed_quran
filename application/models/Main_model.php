<?php

/*
 *      Author : Muhammad Shahab Ul Hassan
 *      Nick   : PrinceLord Prime
 *      Date   : 11 August 2018
 *      Time   : 03:37 PM Pakistan Standard Time
 *
 *      Project Name : Tajweed Quran
 */


class Main_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function test_model(){
        echo 'Testing Model';
    }




}