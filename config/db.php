<?php
if(!@mysql_connect("localhost","root",""))die("DB Error");
if(!@mysql_select_db("classmates"))die("DB error");
?>