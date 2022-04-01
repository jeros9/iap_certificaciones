<?php

class Cedulas extends Main
{
	private $cedulaId;
	private $personalId;
	private $userId;
	private $subjectId;
    private $mejores_practicas;
    private $areas_oportunidad;
    private $criterios_no_cumplidos;
    private $recomendaciones;
    private $juicio_evaluacion;
    private $observaciones;
    private $fecha;
	
	public function setCedulaId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->cedulaId = $value;
	}
	
	public function getCedulaId()
	{
		return $this->cedulaId;
    }
    
	public function setPersonalId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->personalId = $value;
	}
	
	public function getPersonalId()
	{
		return $this->personalId;
	}
    
	public function setUserId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->userId = $value;
	}
	
	public function getUserId()
	{
		return $this->userId;
	}
    
	public function setSubjectId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->subjectId = $value;
	}
	
	public function getSubjectId()
	{
		return $this->subjectId;
	}
	
	public function setMejoresPracticas($value)
	{
		//$this->Util()->ValidateString($value, $max_chars=250, $minChars = 1, "Mejores Practicas");
		$this->mejores_practicas = addslashes($value);
	}
	
	public function setAreasOportunidad($value)
	{
		$this->areas_oportunidad = addslashes($value);
	}
	
	public function setCriteriosNoCumplidos($value)
	{
		$this->criterios_no_cumplidos = addslashes($value);
	}
	
	public function setRecomendaciones($value)
	{
		$this->recomendaciones = addslashes($value);
	}
	
	public function setJuicioEvaluacion($value)
	{
		$this->juicio_evaluacion = addslashes($value);
	}
	
	public function setObservaciones($value)
	{
		$this->observaciones = addslashes($value);
	}
	
	public function setFecha($value)
	{
		$this->fecha = $value;
	}
	
	public function Save(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = "INSERT INTO 
					`cedulas` 
					(
						personalId,
						userId,
                        subjectId,
                        mejores_practicas,
                        areas_oportunidad,
                        criterios_no_cumplidos,
                        recomendaciones,
                        juicio_evaluacion,
                        observaciones,
                        fecha 
					)
					 VALUES 
					 (
					 	'".$this->personalId."',
						'".$this->userId."',
						'".$this->subjectId."',
						'".$this->mejores_practicas."',
						'".$this->areas_oportunidad."',
						'".$this->criterios_no_cumplidos."',
						'".$this->recomendaciones."',
						'".$this->juicio_evaluacion."',
						'".$this->observaciones."',
						CURDATE()
					)";	
					
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		
		$this->Util()->setError(10073, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
    }


    public function hasCedula($personalId, $userId, $subjectId)
    {
        $sql = "SELECT 
					count(*) 
				FROM 
					cedulas 
				WHERE 
					personalId = ".$personalId." AND userId = ".$userId." AND subjectId = ".$subjectId."";
		$this->Util()->DB()->setQuery($sql);
        $countP = $this->Util()->DB()->GetSingle();
        if($countP >= 1)
            return true;
        else
            return false; 
    }

    public function findCedulaId($personalId, $userId, $subjectId)
    {
        $sql = "SELECT 
					cedulaId 
				FROM 
					cedulas 
				WHERE 
					personalId = ".$personalId." AND userId = ".$userId." AND subjectId = ".$subjectId."";
		$this->Util()->DB()->setQuery($sql);
        return $this->Util()->DB()->GetSingle();
    }

    public function GetInfo()
	{ 
		$sql = "SELECT c.cedulaId,
						c.mejores_practicas, 
                        c.areas_oportunidad, 
                        c.criterios_no_cumplidos, 
                        c.recomendaciones, 
                        c.juicio_evaluacion, 
                        c.observaciones, 
                        DATE_FORMAT(c.fecha, '%d-%m-%Y') AS fecha,
                        CONCAT(p.name, ' ', p.lastname_paterno, ' ', p.lastname_materno) AS evaluador,
                        CONCAT(u.names, ' ', u.lastNamePaterno, ' ', u.lastNameMaterno) AS candidato,
                        s.name AS estandar,
                        u.firma,
						p.firma AS firma_personal,
						p.clave_conocer
                    FROM cedulas c 
                        INNER JOIN personal p
                            ON p.personalId = c.personalId
                        INNER JOIN user u
                            ON u.userId = c.userId
                        INNER JOIN subject s
                            ON s.subjectId = c.subjectId
                    WHERE c.cedulaId = '".$this->cedulaId."'";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
		return $row;
	}
    
    public function Update()
	{	
		if($this->Util()->PrintErrors())
			return false;
			
		$sql = "UPDATE
					cedulas 
					SET
                        mejores_practicas = '" . $this->mejores_practicas . "',
                        areas_oportunidad = '" . $this->areas_oportunidad . "',
                        criterios_no_cumplidos = '" . $this->criterios_no_cumplidos . "',
                        recomendaciones = '" . $this->recomendaciones . "',
                        juicio_evaluacion = '" . $this->juicio_evaluacion . "',
						observaciones = '" . $this->observaciones . "',
						fecha = '" . $this->fecha . "'
					WHERE 
					cedulaId = " . $this->cedulaId;
		echo $sql;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		$this->Util()->setError(10073, "complete");
		$this->Util()->PrintErrors();
		return true;
    }
}


?>