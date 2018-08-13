<?php
class Employee
{
	public $empname;
	public function __construct($name)
	{
		echo "This is constructor<br>";
		echo $this->empname=$name."<br>";
	}
	public function __destruct()
	{
		echo "This is destructor";
	}
	public function setName($name)
	{
		echo $this->empname=$name."<br>";
	}
	public function getName()
	{
		return($this->empname);
	}
}
$objemp=new Employee('ABC');
$objemp->setName('PQR');
$objemp->getName();

?>