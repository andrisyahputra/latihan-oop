<?php

namespace Repository {

    use Entity\Catatanlist;

    interface CatatanRepository
    {
        function save(Catatanlist $catatanlist): void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class CatatanRepositoryImpl implements CatatanRepository
    {
        private array $catatanlist =  [];
        function save(Catatanlist $catatanlist): void
        {

            $number = sizeof($this->catatanlist) + 1;

            $this->catatanlist[$number] = $catatanlist;
        }

        function remove(int $number): bool
        {
            if ($number > sizeof($this->catatanlist) || $number == 0) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->catatanlist); $i++) {
                $this->catatanlist[$i] = $this->catatanlist[$i + 1];
            }

            unset($this->catatanlist[sizeof($this->catatanlist)]);
            return true;
        }

        function findAll(): array
        {
            return $this->catatanlist;
        }
    }
}
