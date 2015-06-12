<?php

class Iteracao implements Iterator
{
	private $atributos = array();

	public function __construct(array $atributos)
	{
		if(is_array($atributos))
		{
			$this->atributos = $atributos;
		}
	}

	public function rewind()
	{
		echo "rewinding<br/>";
		reset($this->atributos);
	}

	public function current()
	{
		$atributo = current($this->atributos);
		echo "current: $atributo<br/>";
		return $atributo;
	}

	public function key()
	{
		$atributo = key($this->atributos);
		echo "key: $atributo<br/>";
		return $atributo;
	}

	public function next()
	{
		$atributo = next($this->atributos);
		echo "next: $atributo<br/>";
		return $atributo;
	}

	public function valid()
	{
		$atributo = $this->current() !== false;
		echo "valid: $atributo<br/>";
		return $atributo;
	}
}

$valores = array(1,2,3,4,5,6);
$obj = new Iteracao($valores);

foreach($obj as $chave => $valor)
{
	echo "Chave: ",$chave," => Valor: ",$valor,"<br/><br/>";
}