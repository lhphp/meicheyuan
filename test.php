<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->set('redistest','666666');
echo $redis->get('redistest');
