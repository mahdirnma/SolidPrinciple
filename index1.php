<?php
class User{
    public $users=[];
    public function addUser($property){
        $this->users[]=$property;
    }
    public function showUsers(){
        return implode("|",$this->users);
    }
    public function save($fileName){
        $file=fopen($fileName,"w");
        fwrite($file,$this->showUsers());
        fclose($file);
    }
}
$user=new User();
$user->addUser("ali");
$user->addUser("reza");
$user->addUser("mahdi");
$user->save("list.txt");