<?php
class User
{
    private $users = [];

    public function addUser($property)
    {
        $this->users[] = $property;
    }

    public function showUsers()
    {
        return implode("|", $this->users);
    }
}
class FileStorage{
    private $fileName;
    function __construct($fileName){
        $this->fileName=$fileName;
    }
    public function save($text){
        $file=fopen($this->fileName,"w");
        fwrite($file,$text);
        fclose($file);
    }
}
$user=new User();
$user->addUser("ali");
$user->addUser("reza");
$user->addUser("mahdi");
$fileStorage=new FileStorage("list2.txt");
$fileStorage->save($user->showUsers());