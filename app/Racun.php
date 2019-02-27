<?php
/**
 * Created by PhpStorm.
 * User: Pantelinac
 * Date: 2/27/2019
 * Time: 5:10 PM
 */

namespace app;


class Racun {


	public $prodavnica;
	public $kupac;
	public $lista;

	public $racun;
	public $iznosRacuna;
	public $tip;

	public function __construct($prodavnica,$kupac)
	{
		$this->prodavnica=$prodavnica;
		$this->kupac=$kupac;
		$this->lista=$kupac->lista;

}

	public function kupi(){
		$this->naplata();
		return $this->racun;
	}

	private function naplata(){
		$m=0;
		foreach($this->lista as $lista){

			$this->prodavnica->proizvodi
			[$lista['tip']]['kolicina']-=$lista['kolicina'];

			$this->kupac->novac-=$this->prodavnica->proizvodi[$lista['tip']]['cena'] * $lista['kolicina'];
			$this->iznosRacuna+= $this->prodavnica->proizvodi[$lista['tip']]['cena'] * $lista['kolicina'];
			$this->racun[]=['tip'=>$lista['tip'],'kolicina'=>$lista['kolicina']];
			$m++;
		}

	}




//	//datum
//   $vreme= date('G:i:s m/d/Y', time());
//
//	//podaci o kupcu (ime prezime telefon)
//
//	//lista proizvoda (kolicina cena  serial)

}