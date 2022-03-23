<?php

    $css='../CSS/';
    $images='../images/';
    $includes='../includes/';
    $js='../js/';
    $adminPages='../AdminPages/';
    $UserPages='../UserPages/';

    if(!(isset($noNavAdmin))){
        include($includes.'inline_header.php');
    }
    if(!(isset($noNavUser))){
        include($includes.'header.php');
    }
?>