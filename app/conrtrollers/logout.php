<?php

Class Logout extends controller
{
    function index()
    {
        $user = $this->loadModel("user");
        $user->logout();
    }

   
}