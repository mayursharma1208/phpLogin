<?php

echo "My first PHP script!";

pg_connect("host=localhost port=5433 dbname=cgmaps user=postgres password=postgres");

pg_query("create table testing(id integer)");

echo " script! Executed";

?>