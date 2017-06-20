<?php

require_once APP_PATH."models/Mercadoria.php";
require_once APP_PATH."models/TipoMercadoria.php";
require_once APP_PATH."models/TipoNegocio.php";

class tiponegocioController
{

	public function novo()
	{
		$controller = "tiponegocio";
		$conteudo = __FUNCTION__;

		$tipoNegocio = TipoNegocio::getList();

		require_once (VIEW."index.php");
	}

	public function salvar()
	{
		$dados = $_POST;
		
		if($dados['id'] == 0)
		{
			$objetoTipoNegocio = new TipoNegocio();
		}
		else
		{
			$objetoTipoNegocio = TipoNegocio::FindById($dados['id']);
		}
		
		$objetoTipoNegocio->setDescricao($dados['descricao-tiponegocio-input']);
		
		if($objetoTipoNegocio->salvar())
		{
			header("Location: ".BASE_URI."tiponegocio/lista");
			die();
		}
		else
		{
			echo "falha ao salvar";
		}
		
	}

	public function lista()
	{
		$controller = "tiponegocio";
		$conteudo = __FUNCTION__;

		$tiposNegocio = TipoNegocio::getList();

		require_once (VIEW."index.php");
	}

	public function editar()
	{
		$dados = $_POST;
		
		$tiponegocio = tipoNegocio::FindById($dados['id']);

		
		$controller = "tiponegocio";
		$conteudo = __FUNCTION__;

		$tiposNegocio 	 = TipoNegocio::getList();
		
		require_once (VIEW."index.php");
	}
}







