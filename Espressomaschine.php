<?php class Espressomaschine
        {
            public $hersteller;
            private $kaffeevorrat;
            function __construct ($hersteller, $kaffeevorrat)
            {
                $this->hersteller = $hersteller;
                $this->kaffeevorrat = $kaffeevorrat;
            }

            public function getKaffeevorrat()
            {
                return $this->kaffeevorrat;
            }

            public function kaffeeKochen($tassen)
            {
                $this->kaffeevorrat = $this->kaffeevorrat-$tassen;
            }

            $gaggia = new Espressomaschine("Gaggia", 12);
            $gaggia->kaffeeKochen(4);
            echo "Kaffeemaschine: ". $gaggia->hersteller;
            echo "<br>";
            echo "Noch ". $gaggia->getKaffeevorrat() . " Tassen bis zum Auff&uuuml;llen.";
        }
        ?>
