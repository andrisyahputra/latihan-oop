<?php

namespace Service {

    use Entity\Catatanlist;
    use Repository\CatatanRepository;

    interface CatatanService
    {
        function showCatatanlist(): void;
        function addCatatanList(string $catat): void;
        function removeCatatanlist(int $number): void;
    }

    class CatatanServiceImpl implements CatatanService
    {

        private CatatanRepository $catatanRepository;

        public function __construct(CatatanRepository $catatanRepository)
        {
            $this->catatanRepository = $catatanRepository;
        }

        function showCatatanlist(): void
        {

            echo "Catatan Saya" . PHP_EOL;
            $catatlist = $this->catatanRepository->findAll();
            foreach ($catatlist as $key => $value) {
                echo "$key. " . $value->getCatat() . PHP_EOL;
            }
        }
        function addCatatanList(string $catat): void
        {
            $catatanlist = new Catatanlist($catat);
            $this->catatanRepository->save($catatanlist);
            echo "Sukses menambahkan catatan" . PHP_EOL;
        }
        function removeCatatanlist(int $number): void
        {
            if ($this->catatanRepository->remove($number)) {
                echo "BERHASIL DI HAPUS" . PHP_EOL;
            } else {
                echo "GAGAL DI HAPUS" . PHP_EOL;
            }
        }
    }
}
