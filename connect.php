<?php
@mysql_connect("localhost", "root", "12345") or die(mysql_error());
mysql_select_db("janaab") or die("Cannot find database");
?>