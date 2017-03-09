<?php

class HeaderController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function getHeader()
    {
        ?>
        <head>
            <link rel="stylesheet" type="text/css" href="css/style.css" />
            <title>all-wines.com</title>
    	</head>
        <?php
    }
}

