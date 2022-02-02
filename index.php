<?php

/*
Crie uma classe chamada "Venda" com os atributos privados "data", "produto", "quantidade", "valorTotal".
Crie um método capaz de exibir os dados da venda.
Crie uma instância da classe e passe os atributos atravez de um método construtor, em seguida, invoque o método responsável por exibir o conteúdo da venda devidamenmte formatado.

*/

class Venda {

	private $data;
	private $produto;
	private $quantidade;
	private float $valorTotal;


	public function __construct($data, $produto, $quantidade, $valorTotal)
	{
		$this->data = $data;
		$this->produto = $produto;
		$this->quantidade = $quantidade;
		$this->valorTotal = $valorTotal;
	}


	public function calculaVenda()
	{
		 return ($this->quantidade * $this->valorTotal) ;
	}

	public function exibeVenda()
	{

		echo "Dados da venda do dia: " . $this->data;
		echo PHP_EOL;
		echo "Nome do produto: " . $this->produto;
		echo PHP_EOL;
		echo "Unidades vendidas: " . $this->quantidade;
		echo PHP_EOL;
		echo "Total: R$" . $this->calculaVenda();
		echo PHP_EOL;

	}

}

//---------------------------------------------------------------------------------------

	$venda = new Venda("02-02-2022", "Cabo RJ45 3m", 2, 39.45);

	$venda->calculaVenda();
	$venda->exibeVenda();