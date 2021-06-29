<?php

class Period extends Main
{
	private $periodId;
	private $name;
	private $description;
	
	public function setPeriodId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->periodId = $value;
	}
	
	public function getPeriodId()
	{
		return $this->periodId;
	}

	public function setName($value)
	{
		$this->Util()->ValidateString($value, $max_chars=100, $minChars = 1, "Nombre");
		$this->name = $value;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setDescription($value)
	{
		$this->Util()->ValidateString($value, $max_chars=250, $minChars = 1, "Descripcion");
		$this->description = $value;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function Enumerate()
	{
		$sql = "SELECT * FROM pc_periods ORDER BY name ASC";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}	
}
?>