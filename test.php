<?php
    session_start();
    $connect=mysql_connect('localhost', 'hackathon', 'yt20150705');
    mysql_select_db("hackathon");
    mysql_query("set names utf8");

    mysql_query("TRUNCATE TABLE BOARD");
?>
