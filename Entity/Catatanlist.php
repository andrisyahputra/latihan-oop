<?php

namespace Entity {
    class Catatanlist
    {
        private string $catat;

        public function __construct(string $catat = "")
        {
            $this->catat = $catat;
        }

        public function getCatat(): string
        {
            return $this->catat;
        }


        public function setCatat(string $catat): self
        {
            $this->catat = $catat;

            return $this;
        }
    }
}
