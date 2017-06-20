<?php

require_once APP_PATH."models/Mysql.php";

class Mercadoria 
{
	protected $idMercadoria;
	protected $codigoMercadoria;
	protected $nomeMercadoria;
	protected $quantidade;
	protected $preco;
	protected $idTipoMercadoria;
	protected $idTipoNegocio;
	protected $dateInsert;
	protected $dateDisable;

	public function getIdMercadoria()
	{
		return $this->idMercadoria;
	}

	public function setIdMercadoria($idMercadoria)
	{
		$this->idMercadoria = $idMercadoria; 
	}

	public function getCodigoMercadoria()
	{
		return $this->codigoMercadoria;
	}

	public function setCodigoMercadoria($codigoMercadoria)
	{
		$this->codigoMercadoria = $codigoMercadoria;
	}

	public function getNomeMercadoria()
	{
		return $this->nomeMercadoria;
	}

	public function setNomeMercadoria($nomeMercadoria)
	{
		$this->nomeMercadoria = $nomeMercadoria;
	}

	public function getQuantidade()
	{
		return $this->quantidade;
	}

	public function setQuantidade($quantidade)
	{
		$this->quantidade = $quantidade;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function setPreco($preco)
	{
		$this->preco = $preco;
	}

	public function getIdTipoMercadoria()
	{
		return $this->idTipoMercadoria;
	}

	public function setIdTipoMercadoria($idTipoMercadoria)
	{
		$this->idTipoMercadoria = $idTipoMercadoria;
	}

	public function getIdTipoNegocio()
	{
		return $this->idTipoNegocio;
	}

	public function setIdTipoNegocio($idTipoNegocio)
	{
		$this->idTipoNegocio = $idTipoNegocio;
	}

	public function getDateInsert()
	{
		return $this->dateInsert;
	}

	public function setDateInsert($dateInsert)
	{
		$this->dateInsert = $dateInsert;
	}

	public function getDateDisable()
	{
		return $this->dateDisable;
	}

	public function setDateDisable($dateDisable)
	{
		$this->dateDisable = $dateDisable;
	}

	public static function FindById($id)
	{
		$sql = 'select * from mercadoria where idMercadoria = '.$id.' limit 1';
		$conexao = new Mysql();
		$result  = $conexao->executeQuery($sql);
		$objetoMercadoria = false;
		foreach($result as $line)
		{
			$objetoMercadoria = new Mercadoria();
			$objetoMercadoria->setIdMercadoria($line['idMercadoria']);
			$objetoMercadoria->setCodigoMercadoria($line['codigoMercadoria']);
			$objetoMercadoria->setNomeMercadoria($line['nomeMercadoria']);
			$objetoMercadoria->setQuantidade($line['quantidade']);
			$objetoMercadoria->setPreco($line['preco']);
			$objetoMercadoria->setIdTipoMercadoria($line['idTipoMercadoria']);
			$objetoMercadoria->setIdTipoNegocio($line['idTipoNegocio']);
			$objetoMercadoria->setDateInsert($line['dateInsert']);
			$objetoMercadoria->setDateDisable($line['dateDisable']);
		}

		return $objetoMercadoria;
	}

	public function salvar()
	{
		if(is_null($this->getIdMercadoria()))
		{
			$sql = "insert into mercadoria (";
			$sql .= 'codigoMercadoria';
			$sql .= ', nomeMercadoria';
			$sql .= ', quantidade';
			$sql .= ', preco';
			$sql .= ', idTipoMercadoria';
			$sql .= ', idTipoNegocio';
			$sql .= ', dateDisable)';
			$sql .= " values (";
			$sql .= "'".$this->getCodigoMercadoria()."'";
			$sql .= ", '" .$this->getNomeMercadoria()."'";
			$sql .= ", " .$this->getQuantidade();
			$sql .= ", " .$this->getPreco();
			$sql .= ", " .$this->getIdTipoMercadoria();
			$sql .= ", " .$this->getIdTipoNegocio();
			if(is_null($this->getDateDisable()))
			{
				$sql .= ", null";
			}
			else
			{
				$sql .= ",'" .$this->getDateDisable()."'";
			}
			$sql .= ")";
		}
		else
		{
			//update
			$sql = "update mercadoria set ";
			$sql .= "codigoMercadoria = '".$this->getCodigoMercadoria()."', ";
			$sql .= "nomeMercadoria = '".$this->getNomeMercadoria()."', ";
			$sql .= "quantidade = ".$this->getQuantidade().", ";
			$sql .= "preco = ".$this->getPreco().", ";
			$sql .= "idTipoMercadoria = ".$this->getIdTipoMercadoria().", ";
			$sql .= "idTipoNegocio = ".$this->getIdTipoNegocio().", ";
			if(is_null($this->getDateDisable()))
			{
				$sql .= "dateDisable = null";
			}
			else
			{
				$sql .= "dateDisable = '".$this->getDateDisable()."'";
			}
			$sql .= ' where idMercadoria = '.$this->getIdMercadoria();
			
		}
		
		$connection = new Mysql();
		return $connection->executeQuery($sql,true);

	}


	public static function getList()
	{
		$sql = 'select * from mercadoria where dateDisable is null';
		$conexao = new Mysql();
		$result  = $conexao->executeQuery($sql);
		$objetoMercadoria = false;

		$list = array();
		foreach($result as $line)
		{
			$objetoMercadoria = new Mercadoria();
			$objetoMercadoria->setIdMercadoria($line['idMercadoria']);
			$objetoMercadoria->setCodigoMercadoria($line['codigoMercadoria']);
			$objetoMercadoria->setNomeMercadoria($line['nomeMercadoria']);
			$objetoMercadoria->setQuantidade($line['quantidade']);
			$objetoMercadoria->setPreco($line['preco']);
			$objetoMercadoria->setIdTipoMercadoria($line['idTipoMercadoria']);
			$objetoMercadoria->setIdTipoNegocio($line['idTipoNegocio']);
			$objetoMercadoria->setDateInsert($line['dateInsert']);
			$objetoMercadoria->setDateDisable($line['dateDisable']);

			$list[] = $objetoMercadoria;
		}

		return $list;
	}
}









