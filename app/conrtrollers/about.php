<?php

Class About extends controller
{
    function index()
    {
        $data['page_title'] = "About";
        $this->view("minima/about-us",$data);
    }

}