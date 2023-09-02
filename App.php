<?php
require_once __DIR__ . '/Entity/Catatanlist.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/CatatanlistRepository.php';
require_once __DIR__ . '/Service/CatatanService.php';
require_once __DIR__ . '/View/ViewCatatanlist.php';

use Repository\CatatanRepositoryImpl;
use Service\CatatanServiceImpl;
use View\ViewCatatanlist;

echo "Aplikasi OOP Catatan" . PHP_EOL;
$catatanRepository = new CatatanRepositoryImpl;
$catatanService = new CatatanServiceImpl($catatanRepository);
$catatanView = new ViewCatatanlist($catatanService);

$catatanView->showCatatlist();