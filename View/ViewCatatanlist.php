<?php

namespace View;

use Service\CatatanService;
use Helper\InputHelper;

class ViewCatatanlist
{
    private CatatanService $catatanService;

    public function __construct(CatatanService $catatanService)
    {
        $this->catatanService = $catatanService;
    }


    function showCatatlist(): void
    {
        while (true) {
            $this->catatanService->showCatatanlist();
            echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;
            echo "~~~~~~Menu~~~~~~~" . PHP_EOL;
            echo "1. Tambah Catatan" . PHP_EOL;
            echo "2. Hapus Catatan" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = trim(InputHelper::input("Pilih"));
            if ($pilihan == "1") {
                $this->addCatatlist();
            } else if ($pilihan == "2") {
                $this->removeCatatanlist();
            } else if ($pilihan == "x") {
                break;
            } else {
                echo "Pilihan Tidak Mengerti" . PHP_EOL;
            }
        }

        echo "Terimakasih" . PHP_EOL;
    }
    function addCatatlist(): void
    {
        echo "Tambah Catatan" . PHP_EOL;

        $catat = trim(InputHelper::input("Tambah Catatan (x untuk batal) "));

        if ($catat == "x") {
            //batal
            echo "Batal Menambah Catatan" . PHP_EOL;
        } else {
            $this->catatanService->addCatatanList($catat);
        }
    }
    function removeCatatanlist(): void
    {
        echo "Hapus Catatan" . PHP_EOL;

        $pilihan = trim((int)InputHelper::input("Nomor (0 untuk Batalkan)"));

        if ($pilihan == "0") {
            echo "Batal Menghapus" . PHP_EOL;
        } else {
            $this->catatanService->removeCatatanlist($pilihan);
        }
    }
}
