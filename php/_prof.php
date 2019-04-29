<?php

use Lybra\App;
$db = App::getDb();
$req = $db->query("SELECT * FROM profs ORDER BY id DESC");
$profs = $req->fetchAll();