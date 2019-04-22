<?php

use Lybra\App;
$db = App::getDb();
$req = $db->query("SELECT * FROM profs");
$profs = $req->fetchAll();