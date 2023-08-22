<?php
header("Cache-Control: max-age=31536000");
header("ETag: " . md5_file(__FILE__));
$versao = '1.4';