<?php


require_once __DIR__ . "/../Entity/Catatanlist.php";
require_once __DIR__ . "/../Repository/CatatanlistRepository.php";
require_once __DIR__ . "/../Service/CatatanService.php";
require_once __DIR__ . "/../View/ViewCatatanlist.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\Catatanlist;
use Repository\CatatanRepositoryImpl;
use Service\CatatanServiceImpl;
use View\ViewCatatanlist;

function testViewShowCatatanlist(): void
{
    $catatanRepositori = new CatatanRepositoryImpl();
    $catatanService = new CatatanServiceImpl($catatanRepositori);
    $catatanView = new ViewCatatanlist($catatanService);

    $catatanService->addCatatanList("Belajar PHP");
    $catatanService->addCatatanList("Belajar MVC");
    $catatanService->addCatatanList("Belajar Database");

    $catatanView->showCatatlist();
}
function testViewAddCatatanlist(): void
{
    $catatanRepositori = new CatatanRepositoryImpl();
    $catatanService = new CatatanServiceImpl($catatanRepositori);
    $catatanView = new ViewCatatanlist($catatanService);

    $catatanService->addCatatanList("Belajar PHP");
    $catatanService->addCatatanList("Belajar MVC");
    $catatanService->addCatatanList("Belajar Database");

    // $catatanView->showCatatlist();
    $catatanView->addCatatlist();
    $catatanView->showCatatlist();
}
function testViewRemoveCatatanlist(): void
{
    $catatanRepositori = new CatatanRepositoryImpl();
    $catatanService = new CatatanServiceImpl($catatanRepositori);
    $catatanView = new ViewCatatanlist($catatanService);

    $catatanService->addCatatanList("Belajar PHP");
    $catatanService->addCatatanList("Belajar MVC");
    $catatanService->addCatatanList("Belajar Database");

    $catatanView->showCatatlist();
    // $catatanView->removeCatatanlist();
    // $catatanView->showCatatlist();
    // $catatanView->removeCatatanlist();
    // $catatanView->showCatatlist();
}
// testViewShowCatatanlist();
// testViewAddCatatanlist();
testViewRemoveCatatanlist();
