<?php
/**
 * Created by PhpStorm.
 * User: Pantelinac
 * Date: 2/27/2019
 * Time: 5:14 PM
 */
namespace app;

class Prodavnica
{
    public $tip;
    public $proizvodi;

    public function __construct(\ProdavnicaInterface $prodavnica)
    {
        $this->proizvodi=$prodavnica->proizvodi;
        $this->tip = $prodavnica->tip();
    }
}
