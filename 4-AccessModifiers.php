<?php

// class Customer
// {
// 	public $name;

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

//----------------------------------------

// class Customer
// {
// 	public $name;

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// $customer = new Customer();
// $customer->name = 'Dilshan';
// echo $customer->getName();

//----------------------------------------

// class Customer
// {
// 	private $name;

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// $customer = new Customer();
// $customer->name = 'Dilshan';

//---------------------------------------


// class Customer
// {
// 	private $name;

// 	public function setName($name)
// 	{
// 		$this->name = $name;
// 	}

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// $customer = new Customer();

// $customer->setName('MAXMIND');
// echo $customer->getName();

//-------------------------------------

class Customer
{
	private $name;

	public function setName($name)
	{
		$name = trim($name);

		if ($name == '') {
			return false;
		}
		$this->name = $name;

                return true;

	}

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();

$customer->setName(' Dilshan ');
echo $customer->getName();