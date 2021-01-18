<?php

    class employes extends people
    {
        public $employer_code;
        public $fee;

        public function __construct($name, $last_name, $cf, $employer_code, $fee)
        {
            parent::__construct($name, $last_name, $cf);
            $this->employer_code = $employer_code;
            $this->fee = $fee;
        }

        public function profitCalculation()
        {
        }
    }
