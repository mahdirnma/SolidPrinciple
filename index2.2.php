<?php
interface employeeInterface{
    public function pay();
}
class Doctor implements employeeInterface{
    public $day;
    public function __construct($day)
    {
        $this->day=$day;
    }

    public function pay()
    {
        return $this->day*150;
    }
}
class Nurse implements employeeInterface{
    public $hour;
    public function __construct($hour)
    {
        $this->hour=$hour;
    }

    public function pay()
    {
        return $this->hour*10;
    }
}
class EmploymentPayment{
    public function payment(employeeInterface $employee){
        return $employee->pay();
    }
}
$doctor=new Doctor(10);
$employment=new EmploymentPayment();
echo $employment->payment($doctor);
echo "<br>";
$nurse=new Nurse(8);
echo $employment->payment($nurse);
