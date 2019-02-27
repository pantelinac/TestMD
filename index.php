<?php
/**
 * Created by PhpStorm.
 * User: Pantelinac
 * Date: 2/27/2019
 * Time: 4:14 PM
 */

require "vendor/autoload.php";

$apoteka= new App\Apoteka();
$supermarket=new App\Supermarket();
$trafika=new App\Trafika();

$Prodavnica=new App\Prodavnica($apoteka);


$jovanovaLista=[
	['tip'=>'pice','kolicina'=>1],
	['tip'=>'lek','kolicina'=>2],
];

$jovan= new App\Kupac("Jovan",'Peric',"021/444-555",'5000',$jovanovaLista);



$racunTrafika1=new App\Racun($Prodavnica,$jovan);
$racunTrafika1->kupi();
print_r($racunTrafika1);






