<?php
require_once ("conf/config.php");
require 'vendor/autoload.php';


DB::connToDB();
Routing::buildRoute();