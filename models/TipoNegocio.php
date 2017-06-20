<?php

class TipoNegocio
{

	protected $idTipoNegocio;
	protected $descricao;

	public function getIdTipoNegocio()
	{
		return $this->idTipoNegocio;
	}

	public function setIdTipoNegocio($idTipoNegocio)
	{
		$this->idTipoNegocio = $idTipoNegocio; 
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public static function getList()
	{
		$sql = "select * from tipoNegocio order by descricao";
		$conexao = new Mysql();
		$result = $conexao->executeQuery($sql);
		$list = array();
		foreach($result as $register)
		{
			$objTmp = new TipoNegocio();
			$objTmp->setIdTipoNegocio($register['idTipoNegocio']);
			$objTmp->setDescricao($register['descricao']);

			$list[] = $objTmp;
		}

		return $list;
	}

	public static function FindById($id)
	{
		$sql = 'select * from tiponegocio where idTipoNegocio = '.$id.' limit 1';
		$conexao = new Mysql();
		$result  = $conexao->executeQuery($sql);
		$objetoTipoNegocio = false;
		foreach($result as $line)
		{
			$objetoTipoNegocio = new TipoNegocio();
			$objetoTipoNegocio->setIdTipoNegocio($line['idTipoNegocio']);
			$objetoTipoNegocio->setDescricao($line['descricao']);
		}

		return $objetoTipoNegocio;
	}

	public function salvar()
	{
		if(is_null($this->getIdTipoNegocio()))
		{
			$sql = "insert into tiponegocio (";
			$sql .= 'descricao)';
			$sql .= " values (";
			$sql .= "'".$this->getDescricao()."'";
			$sql .= ")";
		}
		else
		{
			//update
			$sql = "update tiponegocio set ";
			$sql .= "descricao = '".$this->getDescricao()."'";
			$sql .= ' where idTipoNegocio = '.$this->getIdTipoNegocio();
			
		}

		$connection = new Mysql();
		return $connection->executeQuery($sql,true);

	}
}









