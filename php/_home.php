<?php
use Lybra\App;
$db = App::getDb();
$req = $db->query("SELECT * FROM posts");
$posts = $req->fetchAll();