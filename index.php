<?php

session_start();

include_once './data/routes.php';
include_once './data/datas.php';
include_once './functions/functions.php';

include_once './views/parts/header.php';

include_once './pages/' . getPage();

include_once './views/parts/footer.php';