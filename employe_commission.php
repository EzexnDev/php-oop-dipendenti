<?php

// include_once 'project.php';
// class project extends project
// {

//     public $project_name;
//     public $project_fee;
// }

trait Project
{
    public $project_name;
    public $project_fee;
}

class employe_commission extends employes
{
    use Project;

    public function __construct($name, $last_name, $cf, $employer_code, $fee, $project_name, $project_fee)
    {
        parent:: __construct($name, $last_name, $cf, $employer_code, $fee);

        if (!is_string($project_name)) {
            throw new Exception("Non e' una stringa ");
        }
        if (!is_int($project_fee)) {
            throw new Exception("Non e' un numero ");
        }

        $this->project_name = $project_name;
        $this->project_fee = $project_fee;
    }

    public function profitCalculation()
    {
        return  $this->project_fee;
    }
}
