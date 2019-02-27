<?php
/**
 * Created by PhpStorm.
 * User: Pantelinac
 * Date: 2/27/2019
 * Time: 4:57 PM
 */

namespace app;


class Kupac {
	public $ime;
	public $prezime;
	public $telefon;
	public $novac;
	public $lista;
//$lista is
	public function __construct($ime,$prezime,$telefon,$novac,$lista)
	{
		$this->ime=$ime;
		$this->prezime=$prezime;
		$this->telefon=$telefon;
		$this->novac=$novac;
		$this->lista=$lista;
	}


}