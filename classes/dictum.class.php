<?php

class Dictum extends Main
{
    private $dictumId;
    private $result;
    private $subjectId;
    private $folio;
    private $lot;
    private $sample;
    private $personalId_1;
    private $personalId_2;
    private $content;
    private $date;
    private $active;

    public function setDictumId($value)
	{
		$this->dictumId = $value;
    }
    
    public function setResult($value)
	{
		$this->result = $value;
	}

    public function setSubjectId($value)
	{
		$this->subjectId = $value;
	}

    public function setFolio($value)
	{
		$this->folio = $value;
	}

    public function setLot($value)
	{
		$this->lot = $value;
	}

    public function setSample($value)
	{
		$this->sample = $value;
	}

    public function setPersonalId1($value)
	{
		$this->personalId_1 = $value;
	}

    public function setPersonalId2($value)
	{
		$this->personalId_2 = $value;
	}

    public function setContent($value)
	{
		$this->content = addslashes($value);
	}

    public function setDate($value)
	{
        $this->Util()->ValidateString($value, 255, 1, 'Fecha Inicial');
        $value = $this->Util()->FormatDateMySql($value);
        
        $explode = explode("-", $value);
        if(strlen($explode[0]) == 2)
        {
            $value = $this->Util()->FormatDateBack($value);
        }
		$this->date = $value;
	}

    public function setActive($value)
	{
		$this->active = $value;
	}

    public function Enumerate()
	{
		$sql = "SELECT d.*, s.name 
				    FROM dictum d
                    LEFT JOIN subject s 
                        ON s.subjectId = d.subjectId
                    WHERE d.active <> 0 
				    ORDER BY d.date DESC, d.folio ASC";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
    }
    

    public function Save()
    {
		if($this->Util()->PrintErrors()) { 
			return false; 
		}
		$sql = "INSERT INTO 
					dictum 
					(	
						result,					
						subjectId, 
						folio,
                        lot,
                        sample,
                        personalId_1,
                        personalId_2,
                        content,
                        date,
                        active
					)
				 VALUES 
					(						
						'" . $this->result . "',
						'" . $this->subjectId . "', 
						'" . $this->folio . "',
						'" . $this->lot . "',
						'" . $this->sample . "',
						'" . $this->personalId_1 . "',
						'" . $this->personalId_2 . "',
						'" . $this->content . "',
						'" . $this->date . "',
						'" . $this->active . "'
					)";		
		$this->Util()->DB()->setQuery($sql);
		$dictumId = $this->Util()->DB()->InsertData();
		$this->Util()->setError(40105, "complete");
		$this->Util()->PrintErrors();
		return true;		
    }
    
    public function GetInfo()
	{ 
		$sql = "SELECT d.*, 
                        s.name,
                        CONCAT_WS(' ', p1.name, p1.lastname_paterno, p1.lastname_materno) AS personal1,
                        p1.firma AS firma1,
                        CONCAT_WS(' ', p2.name, p2.lastname_paterno, p2.lastname_materno) AS personal2,
                        p2.firma AS firma2,
                        DATE_FORMAT(d.date, '%d-%m-%Y') AS date_dmy,
                        (SELECT CONCAT_WS(' ', name, lastname_paterno, lastname_materno) FROM personal WHERE perfil = 'Director') AS director,
                        (SELECT firma FROM personal WHERE perfil = 'Director') AS firma
				    FROM dictum d
                    LEFT JOIN subject s 
                        ON s.subjectId = d.subjectId
                    LEFT JOIN personal p1 
                        ON d.personalId_1 = p1.personalId
                    LEFT JOIN personal p2 
                        ON d.personalId_2 = p2.personalId
                    WHERE d.active <> 0 AND d.dictumId = " . $this->dictumId . "
				    ORDER BY d.date DESC, d.folio ASC";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
		return $row;
    }

    public function Delete()
    {
		
		if($this->Util()->PrintErrors()) { 
			return false; 
		}
		
		$sql = "UPDATE 
					dictum SET active =  0
				WHERE 
					dictumId = ".$this->dictumId;
					
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$this->Util()->setError(40106, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
    }
    

    public function Update()
    {	
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
			
		$sql = "UPDATE dictum 
                    SET date =  '" . $this->date . "', 
					    content =  '" . $this->content . "'
				    WHERE dictumId = " . $this->dictumId;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$this->Util()->setError(40107, "complete");
		$this->Util()->PrintErrors();
		return true;
	}
}