<?php

class Invitation extends Main
{
	private $invitationId;
	private $periodId;
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

	public function setPeriodId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->periodId = $value;
	}

	public function getPeriodId()
	{
		return $this->periodId;
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

	// Listar Invitaciones
	public function Enumerate()
	{
		$sql = "SELECT pc_invitations.*, municipio.nombre AS municipio 
					FROM pc_invitations
						INNER JOIN municipio 
							ON pc_invitations.municipalityId = municipio.municipioId 
					ORDER BY presidentName ASC";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}
	
	// Crear Invitacion
	public function Save()
	{
		if($this->Util()->PrintErrors()) 
			return false; 

		$sql = "SELECT count(*) FROM pc_invitations WHERE municipalityId = " . $this->municipalityId;
		$this->Util()->DB()->setQuery($sql);
		$totalInvitations = $this->Util()->DB()->GetSingle();
		
		if($totalInvitations == 0)
		{
			$sql = "INSERT INTO pc_invitations(periodId, municipalityId, presidentName, politicalGroup, agreement, dateInvitation) VALUES(" . $this->periodId . ", " . $this->municipalityId . ", '" . $this->presidentName . "', '" . $this->politicalGroup . "', '" . $this->agreement . "', CURDATE())";
			$this->Util()->DB()->setQuery($sql);
			$invitationId = $this->Util()->DB()->InsertData();

			if(isset($_FILES))
			{
				$ext = end(explode('.', basename($_FILES['invitationFile']['name'])));
				$filename = "invitacion_" . $invitationId . "." . $ext;
				$sql = "UPDATE pc_invitations SET invitationFile = '" . $filename . "', invitationStatus = 1 WHERE invitationId = " . $invitationId;
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->ExecuteQuery();
				$target_path = DOC_ROOT . "/proceso/invitaciones/" . $filename;
				move_uploaded_file($_FILES['invitationFile']['tmp_name'], $target_path);
			}	
			$this->Util()->setError(40108, "complete");
			$this->Util()->PrintErrors();
		}
		else
		{
			echo "fail[#]";
			echo "<font color='red'>Ya se ha creado una invitacion para ese Municipio..</font>";
			exit;
		}
		return true;		
	}

	// Obtener Informacion de la Invitacion
	public function Info()
	{
		$sql = "SELECT pc_invitations.*, pc_periods.name periodName, municipio.nombre AS municipalityName
					FROM pc_invitations
						INNER JOIN pc_periods
							ON pc_invitations.periodId = pc_periods.periodId 
						INNER JOIN municipio
							ON pc_invitations.municipalityId = municipio.municipioId 
					WHERE invitationId = " . $this->invitationId;
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
		return $row;
	}

	// Agregar Datos de Recepción
	public function Receive()
	{	
		if($this->Util()->PrintErrors()) 
			return false;
		$sql = "UPDATE pc_invitations SET
					receiverName = '" . $this->receiverName . "',
					receiverCharge = '" . $this->receiverCharge . "',
					receiverPhone = '" . $this->receiverPhone . "',
					receiverEmail = '" . $this->receiverEmail . "',
					receiverStatus = 1,
					dateReceiver = CURDATE()
				WHERE invitationId = " . $this->invitationId;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$this->Util()->setError(40109, "complete");
		$this->Util()->PrintErrors();
		return true;			
	}

	// Agregar Datos de Confirmación
	public function Confirm()
	{	
		if($this->Util()->PrintErrors()) 
			return false;
		if(isset($_FILES))
		{
			$ext = end(explode('.', basename($_FILES['confirmedFile']['name'])));
			$filename = "confirmacion_" . $this->invitationId . "." . $ext;
			$sql = "UPDATE pc_invitations SET confirmedFile = '" . $filename . "', confirmedStatus = 1 WHERE invitationId = " . $this->invitationId;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->ExecuteQuery();
			$target_path = DOC_ROOT . "/proceso/confirmaciones/" . $filename;
			move_uploaded_file($_FILES['confirmedFile']['tmp_name'], $target_path);
		}	
		$sql = "UPDATE pc_invitations SET
					confirmedName = '" . $this->confirmedName . "',
					confirmedPhone = '" . $this->confirmedPhone . "',
					confirmedEmail = '" . $this->confirmedEmail . "',
					confirmedStatus = 1,
					dateConfirmed = CURDATE()
				WHERE invitationId = " . $this->invitationId;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$this->Util()->setError(40110, "complete");
		$this->Util()->PrintErrors();
		return true;			
	}
	
	public function Edit()
	{	
		if($this->Util()->PrintErrors()) 
			return false;		
		$sql = "UPDATE pc_invitations SET 
					periodId = " . $this->periodId . ", 
					municipalityId = " . $this->municipalityId . ",
					presidentName = '" . $this->presidentName . "',
					politicalGroup = '" . $this->politicalGroup . "',
					agreement = '" . $this->agreement . "'
				WHERE invitationId = " . $this->invitationId;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		if(is_uploaded_file($_FILES['invitationFile']['tmp_name']))
		{
			$ext = end(explode('.', basename($_FILES['invitationFile']['name'])));
			$filename = "invitacion_" . $this->invitationId . "." . $ext;
			$sql = "UPDATE pc_invitations SET invitationFile = '" . $filename . "', invitationStatus = 1 WHERE invitationId = " . $this->invitationId;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->ExecuteQuery();
			$target_path = DOC_ROOT . "/proceso/invitaciones/" . $filename;
			move_uploaded_file($_FILES['invitationFile']['tmp_name'], $target_path);
		}	
		$this->Util()->setError(40111, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
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

	public function EnumerateCiudades()
	{
		$sql ="SELECT m.municipioId, m.nombre
				FROM pc_invitations pci
					INNER JOIN municipio m 
						ON pci.municipalityId = m.municipioId 
				WHERE pci.periodId = " . $this->periodId . " ORDER BY nombre";
	   	$this->Util()->DB()->setQuery($sql);
	   	$result = $this->Util()->DB()->GetResult();
		return $result;
	}
	

	public function OrderInfo()
	{
		$invitationInfo = $this->Info();
		$sql = "SELECT * FROM pc_typeorder ORDER BY orderName";
		$this->Util()->DB()->setQuery($sql);
		$typeOrders = $this->Util()->DB()->GetResult();
		foreach($typeOrders as $key => $value)
		{
			$sql = "SELECT COUNT(us.alumnoId) AS total,
						c.group,
						s.name
					FROM course c
						INNER JOIN subject s
							ON c.subjectId = s.subjectId
						INNER JOIN user_subject us
							ON c.courseId = us.courseId 
						INNER JOIN user u 
							ON us.alumnoId = u.userId 
						INNER JOIN pc_typeorder pcto
							ON u.typeOrderId = pcto.typeOrderId 
					WHERE c.periodId = " . $invitationInfo['periodId'] . " AND pcto.typeOrderId = " . $value['typeOrderId'];
			$this->Util()->DB()->setQuery($sql);
			$row = $this->Util()->DB()->GetRow();
			$typeOrders[$key]['totalOrder'] = $row['total'];
			$typeOrders[$key]['groupName'] = $row['group'];
			$typeOrders[$key]['subjectName'] = $row['name'];
		}
		return $typeOrders;
	}
}
?>