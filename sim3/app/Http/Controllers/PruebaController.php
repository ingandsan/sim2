<?php namespace sim\Http\Controllers;

class PruebaController extends Controller{
	public function index ()
	{
	return "hola desde controller";
	}
    
    public function nombre ($nombre)
	{
	return "hola mi nombre es ".$nombre;
	}
}
