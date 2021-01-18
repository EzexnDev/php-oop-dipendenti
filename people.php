<?php

    class people
    {
        public $name;
        public $last_name;
        public $cf;

        public function __construct($name, $last_name, $cf)
        {
            $this->name = $name;
            $this->last_name = $last_name;
            $this->cf = $cf;
        }

        public function toString()
        {
            foreach ($this as $key => $value) {
                echo "$key : $value";
                echo '<br>';
            }
        }
    }
