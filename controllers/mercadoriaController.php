<?php

require_once APP_PATH."models/Mercadoria.php";
require_once APP_PATH."models/TipoMercadoria.php";
require_once APP_PATH."models/TipoNegocio.php";

class mercadoriaController
{

	public function novo()
	{
		$controller = "mercadoria";
		$conteudo = __FUNCTION__;

		$tiposNegocio 	 = TipoNegocio::getList();
		$tiposMercadoria = TipoMercadoria::getList();
		require_once (VIEW."index.php");
	}

	public function salvar()
	{
		$dados = $_POST;
		print_r($dados);
		if($dados['id'] == 0)
		{
			$objetoMercadoria = new Mercadoria();
		}
		else
		{
			$objetoMercadoria = Mercadoria::FindById($dados['id']);
		}
		
		$objetoMercadoria->setCodigoMercadoria($dados['codigo-mercadoria-input']);
		$objetoMercadoria->setNomeMercadoria($dados['nome-mercadoria-input']);
		$objetoMercadoria->setQuantidade($dados['quantidade-mercadoria-input']);
		$objetoMercadoria->setPreco($dados['preco-mercadoria-input']);
		$objetoMercadoria->setIdTipoMercadoria($dados['tipo-mercadoria-select']);
		$objetoMercadoria->setIdTipoNegocio($dados['tipo-negocio-select']);

		if($objetoMercadoria->salvar())
		{
			header("Location: ".BASE_URI."mercadoria/lista");
			die();
		}
		else
		{
			echo "falha ao salvar";
		}
		
	}

	public function lista()
	{
		$controller = "mercadoria";
		$conteudo = __FUNCTION__;

		$tiposNegocio 	 = TipoNegocio::getList();
		$tiposMercadoria = TipoMercadoria::getList();
		$mercadorias 	 = Mercadoria::getList();

		require_once (VIEW."index.php");
	}

	public function editar()
	{
		$dados = $_POST;
		
		$mercadoria = Mercadoria::FindById($dados['id']);

		
		$controller = "mercadoria";
		$conteudo = __FUNCTION__;

		$tiposNegocio 	 = TipoNegocio::getList();
		$tiposMercadoria = TipoMercadoria::getList();
		require_once (VIEW."index.php");
	}
}








