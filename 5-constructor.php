<?php

// class ClassName
// {
// 	function __construct()
// 	{
// 		// implementation
// 	}
// }

//-------------------------------

// class BankAccount
// {
// 	private $accountNumber;
// 	private $balance;

// 	public function __construct($accountNumber, $balance)
// 	{
// 		$this->accountNumber = $accountNumber;
// 		$this->balance = balance;
// 	}	
// }

//-------------------------------

// class BankAccount
// {
// 	function __construct( private $accountNumber, private $balance)
// 	{	
// 	}
// }

//------------------------------

class BankAccount
{
	function __construct(private $accountNumber, private $balance, $type)
	{	
 	}
}


