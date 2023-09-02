<?php

use Entity\Catatanlist;
use Repository\CatatanRepositoryImpl;
use Service\CatatanServiceImpl;

require_once __DIR__ . "/../Entity/Catatanlist.php";
require_once __DIR__ . "/../Repository/CatatanlistRepository.php";
require_once __DIR__ . "/../Service/CatatanService.php";


function testShowCatatanList(): void
{
    $catatanlistRepository = new CatatanRepositoryImpl();
    $catatanlistRepository->catatanlist[1] = new Catatanlist("Ctatan 1");
    $catatanlistRepository->catatanlist[2] = new Catatanlist("Ctatan 2");
    $catatanlistRepository->catatanlist[3] = new Catatanlist("Ctatan 3");
    $catatanlistService = new CatatanServiceImpl($catatanlistRepository);

    $catatanlistService->showCatatanlist();
}
function testAddCatatanList(): void
{
    $catatanlistRepository = new CatatanRepositoryImpl();

    $catatanlistService = new CatatanServiceImpl($catatanlistRepository);
    $catatanlistService->addCatatanList("Ctatan PHP");
    $catatanlistService->addCatatanList("Ctatan MVC");
    $catatanlistService->addCatatanList("Ctatan Database");

    $catatanlistService->showCatatanlist();
}
function testRemoveCatatanList(): void
{
    $catatanlistRepository = new CatatanRepositoryImpl();

    $catatanlistService = new CatatanServiceImpl($catatanlistRepository);
    $catatanlistService->addCatatanList("Ctatan PHP");
    $catatanlistService->addCatatanList("Ctatan MVC");
    $catatanlistService->addCatatanList("Ctatan Database");

    $catatanlistService->showCatatanlist();
    $catatanlistService->removeCatatanlist(0);
    $catatanlistService->showCatatanlist();
}

// testShowCatatanList();
// testAddCatatanList();
testRemoveCatatanList();
