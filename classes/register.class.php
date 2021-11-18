<?php

class Register extends Main
{
	private $id;
    private $names;
    private $first_lastname;
    private $second_lastname;
    private $email;
    private $phone;
    private $municipalityId;
    private $created_at;
    private $assistance;
	
	public function setNames($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 100, $minChars = 0, "Nombre");
		$this->names = $value;
	}
	
	public function setFirstLastname($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 100, $minChars = 0, "Apellido Paterno");
		$this->first_lastname = $value;
	}
	
	public function setSecondLastname($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 100, $minChars = 0, "Apellido Materno");
		$this->second_lastname = $value;
	}

    public function setEmail($value)
	{
		$this->Util()->ValidateMail($value);
		$this->email = $value;
	}

    public function setPhone($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 100, $minChars = 0, "Telefono");
		$this->phone = $value;
	}

    public function setMunicipalityId($value)
	{
		$this->municipalityId = intval($value);
	}
	
	public function getNames()
	{
		return $this->names;
	}	
	
	public function getFirstLastname()
	{
		return $this->first_lastname;
	}	
	
	public function getSecondLastname()
	{
		return $this->second_lastname;
	}	
	
	public function getEmail()
	{
		return $this->email;
	}	
	
	public function getPhone()
	{
		return $this->phone;
	}	
	
	public function getMunicipalityId()
	{
		return $this->municipalityId;
	}	

    public function Save()
    {
		if($this->Util()->PrintErrors())
			return false;
		
		$query = "INSERT INTO register(names, first_lastname, second_lastname, email, phone, municipalityId, created_at, assistance)
				    VALUES('" . $this->getNames() . "', '" . $this->getFirstLastname() . "', '" . $this->getSecondLastname() . "', '" . $this->getEmail() . "', '" . $this->getPhone() . "', '" . $this->getMunicipalityId() . "', NOW(), 0)";
		$this->Util()->DB()->setQuery($query);
        $this->Util()->DB()->ExecuteQuery();
		$complete = "Te has registrado correctamente";
	    $this->Util()->setError(10028, "complete", $complete);
		$this->Util()->PrintErrors();
		return true;
	}
	
}

?>