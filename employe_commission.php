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

        $this->project_name = $project_name;
        $this->project_fee = $project_fee;
    }

    public function profitCalculation()
    {
        return  $this->project_fee;
    }
}
