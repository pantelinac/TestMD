<?php
/**
 * Created by PhpStorm.
 * User: Pantelinac
 * Date: 2/27/2019
 * Time: 3:38 PM
 */

namespace app;
require_once 'ProdavnicaInterface.php';

class Supermarket implements \ProdavnicaInterface {

	public $proizvodi;


	public function __construct()
	{
		$this->proizvodi['hrana']=[
			'kolicina'=>1000,
			'cena'=>50
		];

		$this->proizvodi['pice']=[
			'kolicina'=>1000,
			'cena'=>45
		];

		$this->proizvodi['igracke']=[
			'kolicina'=>1000,
			'cena'=>55
		];

		$this->proizvodi['parkingKarte']=[
			'kolicina'=>1000,
			'cena'=>40,
			'seriski'=>"karta".rand(5, 10000)
		];

	}

	public function tip() {
		return 'Supermarket';
	}

}