<?php

require_once APP_PATH."models/Mercadoria.php";
require_once APP_PATH."models/TipoMercadoria.php";
require_once APP_PATH."models/TipoNegocio.php";

class tipomercadoriaController
{

	public function novo()
	{
		$controller = "tipomercadoria";
		$conteudo = __FUNCTION__;

		require_once (VIEW."index.php");
	}

	
	public function salvar()
	{
		$dados = $_POST;
		
		if($dados['id'] == 0)
		{
			$objetoTipoMercadoria = new TipoMercadoria();
		}
		else
		{
			$objetoTipoMercadoria = TipoMercadoria::FindById($dados['id']);
		}
		
		$objetoTipoMercadoria->setDescricao($dados['descricao-tipomercadoria-input']);
		
		if($objetoTipoMercadoria->salvar())
		{
			header("Location: ".BASE_URI."tipomercadoria/lista");
			die();
		}
		else
		{
			echo "falha ao salvar";
		}
		
	}

	public function lista()
	{
		$controller = "tipomercadoria";
		$conteudo = __FUNCTION__;

		$tiposMercadoria = TipoMercadoria::getList();

		require_once (VIEW."index.php");
	}

	public function editar()
	{
		$dados = $_POST;
		
		$tipomercadoria = TipoMercadoria::FindById($dados['id']);

		
		$controller = "tipomercadoria";
		$conteudo = __FUNCTION__;

		$tiposNegocio 	 = TipoNegocio::getList();
		$tiposMercadoria = TipoMercadoria::getList();
		require_once (VIEW."index.php");
	}
	
}








