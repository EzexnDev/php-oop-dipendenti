<?php

    class employes_fullTime extends employes
    {
        public $days_worked;
        public $pay_for_day;

        public function __construct($name, $last_name, $cf, $employer_code, $fee, $days_worked, $pay_for_day)
        {
            parent::__construct($name, $last_name, $cf, $employer_code, $fee);
            $this->days_worked = $days_worked;
            $this->pay_for_day = $pay_for_day;
        }

        public function profitCalcution()
        {
            return $days_worked * $pay_for_day;
        }
    }
