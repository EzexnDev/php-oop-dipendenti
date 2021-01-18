<?php

    class hour_employes extends employes
    {
        public $hour_work;
        public $hour_fee;

        public function __construct($name, $last_name, $cf, $employer_code, $fee, $hour_work, $hour_fee)
        {
            parent::__construct($name, $last_name, $cf, $employer_code, $fee);
            $this->hour_work = $hour_work;
            $this->hour_fee = $hour_fee;
        }

        public function profitCalculation()
        {
            return $hour_work * $hour_fee;
        }
    }
