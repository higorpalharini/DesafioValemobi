<?php

class TipoMercadoria
{
	protected $idTipoMercadoria;
	protected $descricao;

	public function getIdTipoMercadoria()
	{
		return $this->idTipoMercadoria;
	}

	public function setIdTipoMercadoria($idTipoMercadoria)
	{
		$this->idTipoMercadoria = $idTipoMercadoria;
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
		$sql = "select * from tipoMercadoria order by descricao";
		$conexao = new Mysql();
		$result = $conexao->executeQuery($sql);
		$list = array();
		foreach($result as $register)
		{
			$objTmp = new TipoMercadoria();
			$objTmp->setIdTipoMercadoria($register['idTipoMercadoria']);
			$objTmp->setDescricao($register['descricao']);

			$list[] = $objTmp;
		}

		return $list;
	}

	public static function FindById($id)
	{
		$sql = 'select * from tipomercadoria where idTipoMercadoria = '.$id.' limit 1';
		$conexao = new Mysql();
		$result  = $conexao->executeQuery($sql);
		$objetoTipoMercadoria = false;
		foreach($result as $line)
		{
			$objetoTipoMercadoria = new TipoMercadoria();
			$objetoTipoMercadoria->setIdTipoMercadoria($line['idTipoMercadoria']);
			$objetoTipoMercadoria->setDescricao($line['descricao']);
		}

		return $objetoTipoMercadoria;
	}

	public function salvar()
	{
		if(is_null($this->getIdTipoMercadoria()))
		{
			$sql = "insert into tipomercadoria (";
			$sql .= 'descricao)';
			$sql .= " values (";
			$sql .= "'".$this->getDescricao()."'";
			$sql .= ")";
		}
		else
		{
			//update
			$sql = "update tipomercadoria set ";
			$sql .= "descricao = '".$this->getDescricao()."'";
			$sql .= ' where idTipoMercadoria = '.$this->getIdTipoMercadoria();
			
		}


		$connection = new Mysql();
		return $connection->executeQuery($sql,true);

	}

}




