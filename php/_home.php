<?php
use Lybra\App;
$db = App::getDb();
$posts = $db->getAll("posts");