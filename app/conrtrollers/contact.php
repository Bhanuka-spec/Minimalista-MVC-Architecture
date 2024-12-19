<?php

Class Contact extends controller
{
    function index()
    {
        $data['page_title'] = "Contact Us";
        $this->view("minima/contact",$data);
    }

}