<?php

class Membre
{
	private $prenom;

	public function __construct($arg)
	{
		$this->setPrenom($arg);
	}

	public function setPrenom($arg)
	{
		$this->prenom = $arg;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}
}

$membre = new Membre('Marc');
var_dump($membre);