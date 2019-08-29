<?php

class Planes extends Main
{
	private $planId;
	private $personalId;
	private $userId;
	private $subjectId;
    private $capacitacion;
    private $lugar_desarrollo;
    private $fecha_desarrollo;
    private $horario_desarrollo;
    private $lugar_resultados;
    private $fecha_resultados;
    private $horario_resultados;
    private $fecha;
    private $requerimientos;
	
	public function setPlanId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->planId = $value;
	}
	
	public function getPlanId()
	{
		return $this->planId;
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
	
	public function setCapacitacion($value)
	{
		//$this->Util()->ValidateString($value, $max_chars=250, $minChars = 1, "Mejores Practicas");
		$this->capacitacion = $value;
	}
	
	public function setLugarDesarrollo($value)
	{
		$this->lugar_desarrollo = $value;
	}
	
	public function setFechaDesarrollo($value)
	{
		$this->fecha_desarrollo = date("Y-m-d", strtotime($value));
	}
	
	public function setHorarioDesarrollo($value)
	{
		$this->horario_desarrollo = $value;
	}
	
	public function setLugarResultados($value)
	{
		$this->lugar_resultados = $value;
	}
	
	public function setFechaResultados($value)
	{
		$this->fecha_resultados = date("Y-m-d", strtotime($value));
	}
	
	public function setHorarioResultados($value)
	{
		$this->horario_resultados = $value;
	}
	
	public function setFecha($value)
	{
		$this->fecha = $value;
    }
    
    public function setRequerimientos($value)
    {
        $this->requerimientos = json_decode($value);
    }
	
	public function Save(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = "INSERT INTO 
					`planes` 
					(
						personalId,
						userId,
                        subjectId,
                        capacitacion,
                        fecha_desarrollo,
                        horario_desarrollo,
                        fecha_resultados,
                        horario_resultados,
                        fecha 
					)
					 VALUES 
					 (
					 	'".$this->personalId."',
						'".$this->userId."',
						'".$this->subjectId."',
						'".$this->capacitacion."',
						'".$this->fecha_desarrollo."',
						'".$this->horario_desarrollo."',
						'".$this->fecha_resultados."',
						'".$this->horario_resultados."',
						NOW()
					)";	
					
		$this->Util()->DB()->setQuery($sql);
        $planId = $this->Util()->DB()->InsertData();
        
        if(count($this->requerimientos) > 0)
        {
            //$planId = $this->findPlanId($this->personalId, $this->userId, $this->subjectId);
            foreach($this->requerimientos as $requerimiento => $propiedad)
            {
                $sql = "INSERT INTO 
					`planes_requerimientos` 
					(
                        planId,
						cantidad,
						requerimiento
					)
					 VALUES 
					 (
                        '".$planId."',
					 	'".$propiedad->cantidad."',
						'".$propiedad->descripcion."'
					)";	
					
                $this->Util()->DB()->setQuery($sql);
                $this->Util()->DB()->ExecuteQuery();
            }
        }
		
		$this->Util()->setError(10073, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
    }


    public function hasPlan($personalId, $userId, $subjectId)
    {
        $sql = "SELECT 
					count(*) 
				FROM 
					planes 
				WHERE 
					personalId = ".$personalId." AND userId = ".$userId." AND subjectId = ".$subjectId."";
		$this->Util()->DB()->setQuery($sql);
        $countP = $this->Util()->DB()->GetSingle();
        if($countP >= 1)
            return true;
        else
            return false; 
    }


    public function findPlanId($personalId, $userId, $subjectId)
    {
        $sql = "SELECT 
					planId 
				FROM 
					planes 
				WHERE 
					personalId = ".$personalId." AND userId = ".$userId." AND subjectId = ".$subjectId."";
		$this->Util()->DB()->setQuery($sql);
        return $this->Util()->DB()->GetSingle();
    }

    public function GetInfo()
	{ 
		$sql = "SELECT pl.capacitacion,
                        pl.lugar_desarrollo,
                        DATE_FORMAT(pl.fecha_desarrollo, '%d-%m-%Y') AS fecha_desarrollo,
                        pl.horario_desarrollo,
                        pl.lugar_resultados,
                        DATE_FORMAT(pl.fecha_resultados, '%d-%m-%Y') AS fecha_resultados,
                        pl.horario_resultados, 
                        DATE_FORMAT(pl.fecha, '%d-%m-%Y') AS fecha,
                        CONCAT(p.name, ' ', p.lastname_paterno, ' ', p.lastname_materno) AS evaluador,
                        CONCAT(u.names, ' ', u.lastNamePaterno, ' ', u.lastNameMaterno) AS candidato,
                        s.name AS estandar,
                        u.firma,
						p.firma AS firma_personal,
						pl.subjectId,
						pl.fecha_desarrollo AS fecha_desarrollo_ymd,
						pl.fecha_resultados AS fecha_resultados_ymd,
						pl.planId,
						s.file_pdf, 
						s.peso,
						p.clave_conocer
                    FROM planes pl 
                        INNER JOIN personal p
                            ON p.personalId = pl.personalId
                        INNER JOIN user u
                            ON u.userId = pl.userId
                        INNER JOIN subject s
                            ON s.subjectId = pl.subjectId
                    WHERE pl.planId = '".$this->planId."'";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
		return $row;
    }
    
    public function GetInfoRequerimientos()
    {
        $sql = "SELECT cantidad, requerimiento FROM planes_requerimientos WHERE planId = " . $this->planId;
        $this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}
	
	public function isEditable()
	{
		$sql = "SELECT TIMESTAMPDIFF(HOUR, fecha, NOW()) AS period from planes where planId = " . $this->planId;
		$this->Util()->DB()->setQuery($sql);
		$hours = intval($this->Util()->DB()->GetSingle());
		return ($hours >= 24 ? false : true);
	}

	public function Update(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = "UPDATE
					`planes` 
					SET
                        capacitacion = '".$this->capacitacion."',
                        fecha_desarrollo = '".$this->fecha_desarrollo."',
                        horario_desarrollo = '".$this->horario_desarrollo."',
                        fecha_resultados = '".$this->fecha_resultados."',
                        horario_resultados = '".$this->horario_resultados."'
					WHERE 
					planId = " . $this->planId;	
					
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		
		$sql = "DELETE FROM planes_requerimientos WHERE planId = '".$this->planId."'";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->DeleteData();
        
        if(count($this->requerimientos) > 0)
        {
            //$planId = $this->findPlanId($this->personalId, $this->userId, $this->subjectId);
            foreach($this->requerimientos as $requerimiento => $propiedad)
            {
                $sql = "INSERT INTO 
					`planes_requerimientos` 
					(
                        planId,
						cantidad,
						requerimiento
					)
					 VALUES 
					 (
                        '".$this->planId."',
					 	'".$propiedad->cantidad."',
						'".$propiedad->descripcion."'
					)";	
					
                $this->Util()->DB()->setQuery($sql);
                $this->Util()->DB()->ExecuteQuery();
            }
        }
		
		$this->Util()->setError(10073, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
    }
	
}


?>