<?php

class Invitation extends Main
{
	private $invitationId;
	private $municipalityId;
	private $presidentName;
	private $politicalGroup;
	private $agreement;
	private $invitationFile;
	private $receiverName;
	private $receiverCharge;
	private $receiverPhone;
	private $receiverEmail;
	private $confirmedName;
	private $onfirmedPhone;
	private $confirmedEmail;
	private $confirmedFile;
	
	public function setInvitationId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->invitationId = $value;
	}
	
	public function getInvitationId()
	{
		return $this->invitationId;
	}
	
	public function setMunicipalityId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->municipalityId = $value;
	}
	
	public function getMunicipalityId()
	{
		return $this->municipalityId;
	}

	public function setPresidentName($value)
	{
		$this->Util()->ValidateString($value, $max_chars=150, $minChars = 1, "Presidente Electo");
		$this->presidentName = $value;
	}

	public function getPresidentName()
	{
		return $this->presidentName;
	}

	public function setPoliticalGroup($value)
	{
		$this->Util()->ValidateString($value, $max_chars=100, $minChars = 1, "Partido Político");
		$this->politicalGroup = $value;
	}

	public function getPoliticalGroup()
	{
		return $this->politicalGroup;
	}

	public function setAgreement($value)
	{
		$this->agreement = $value;
	}

	public function getAgreement()
	{
		return $this->agreement;
	}

	public function setReceiverName($value)
	{
		$this->Util()->ValidateString($value, $max_chars=150, $minChars = 1, "Nombre de quien recibe");
		$this->receiverName = $value;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setReceiverCharge($value)
	{
		$this->Util()->ValidateString($value, $max_chars=200, $minChars = 1, "Cargo de quien recibe");
		$this->receiverCharge = $value;
	}

	public function getReceiverCharge()
	{
		return $this->receiverCharge;
	}

	public function setReceiverPhone($value)
	{
		$this->Util()->ValidateString($value, $max_chars=10, $minChars = 1, "Telefono de quien recibe");
		$this->receiverPhone = $value;
	}

	public function getReceiverPhone()
	{
		return $this->receiverPhone;
	}

	public function setReceiverEmail($value)
	{
		$this->Util()->ValidateMail($value);
		$this->receiverEmail = $value;
	}

	public function getReceiverEmail()
	{
		return $this->receiverEmail;
	}

	public function setConfirmedName($value)
	{
		$this->Util()->ValidateString($value, $max_chars=150, $minChars = 1, "Nombre de quien recibe");
		$this->confirmedName = $value;
	}

	public function getConfirmedName()
	{
		return $this->confirmedName;
	}

	public function setConfirmedPhone($value)
	{
		$this->Util()->ValidateString($value, $max_chars=10, $minChars = 1, "Telefono de quien recibe");
		$this->confirmedPhone = $value;
	}

	public function getConfirmedPhone()
	{
		return $this->confirmedPhone;
	}

	public function setConfirmedEmail($value)
	{
		$this->Util()->ValidateMail($value);
		$this->confirmedEmail = $value;
	}

	public function getConfirmedEmail()
	{
		return $this->confirmedEmail;
	}


	public function Enumerate()
	{
		$sql = "SELECT * FROM ae_invitations ORDER BY presidentName ASC";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}
	
	public function Save(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = "INSERT INTO 
					`major` 
					(
						name,
						description 
					)
					 VALUES 
					 (
					 	'".$this->name."',
						'".$this->description."'
					)";	
					
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		
		$this->Util()->setError(10073, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
	}
	
	public function Edit(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = "UPDATE 
					`major` 
				SET
					 name = '".$this->name."',
					 description = '".$this->description."'
				WHERE
					majorId = ".$this->majorId;	
					
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		
		$this->Util()->setError(10075, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
	}
	
	public function Delete(){
		
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = "DELETE FROM 
					`major`
				WHERE 
					majorId = ".$this->majorId;		
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		
				
		$this->Util()->setError(10074, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
	}

	
	public function Info()
	{
		$this->Util()->DB()->setQuery("SELECT * FROM major WHERE majorId = '".$this->majorId."'");
		$row = $this->Util()->DB()->GetRow();
		
		$row["decodedDescription"] = $this->Util()->DecodeString($row["description"]);
		return $row;
	}	
	
	public function GetNameById(){
			
		$sql = 'SELECT 
					name 
				FROM 
					major 
				WHERE 
					majorId = '.$this->majorId;
		
		$this->Util()->DB()->setQuery($sql);
		
		return $this->Util()->DB()->GetSingle();
		
	}
	
}
?>