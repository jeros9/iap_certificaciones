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

	public function Progress()
	{
		// INFO PERIOD
		$sql = "SELECT * FROM pc_periods WHERE periodId = " . $this->periodId;
		$this->Util()->DB()->setQuery($sql);
		$periodInfo = $this->Util()->DB()->GetRow();
		$result['info'] = $periodInfo;
		// GROUP
		$sql = "SELECT c.courseId, c.initialDate, c.finalDate, c.group AS groupName, s.name AS subjectName 
					FROM course c
						LEFT JOIN subject s
							ON c.subjectId = s.subjectId
					WHERE c.periodId = " . $this->periodId;
		$this->Util()->DB()->setQuery($sql);
		$groups = $this->Util()->DB()->GetResult();
		$result['groups'] = $groups;
		// INVITATIONS
		$sql = "SELECT pci.invitationId, pci.presidentName, pci.politicalGroup, pci.agreement, pci.invitationFile, pci.receiverName, pci.receiverCharge, pci.receiverPhone, pci.receiverEmail, pci.confirmedName, pci.confirmedPhone, pci.confirmedEmail, pci.confirmedFile, pci.invitationStatus, pci.receiverStatus, pci.confirmedStatus, m.municipioId AS municipalityId, m.nombre AS municipality
					FROM pc_invitations pci
						INNER JOIN municipio m 
							ON pci.municipalityId = m.municipioId
					WHERE pci.periodId = " . $this->periodId . "
					ORDER BY m.nombre";
		$this->Util()->DB()->setQuery($sql);
		$invitations = $this->Util()->DB()->GetResult();
		$result['invitations'] = $invitations;
		// PARTICIPANTS
		$result['participants'] = [];
		foreach($groups as $key => $value)
		{
			foreach($invitations as $inv)
			{
				$sql = "SELECT u.userId, 
							u.names, 
							u.lastNamePaterno, 
							u.lastNameMaterno, 
							us.acuseDerecho, 
							us.evalDocenteCompleta, 
							IFNULL(up.personalId, 'no') AS hasEvaluator, 
							IFNULL(p.planId, 'no') AS hasPlan, 
							IFNULL((SELECT repositorioId FROM repositorio WHERE c.subjectId = repositorio.subjectId AND us.alumnoId = repositorio.userId AND repositorio.tipoDocumentoId = 4), 'no') AS hasProducts,
							IFNULL((SELECT repositorioId FROM repositorio WHERE c.subjectId = repositorio.subjectId AND us.alumnoId = repositorio.userId AND repositorio.tipoDocumentoId = 5), 'no') AS hasCertificate
						FROM user_subject us 
							INNER JOIN user u
								ON us.alumnoId = u.userId
							INNER JOIN course c  
								ON us.courseId = c.courseId 
							LEFT JOIN usuario_personal up 
								ON c.subjectId = up.subjectId AND us.alumnoId = up.usuarioId
							LEFT JOIN planes p 
								ON c.subjectId = p.subjectId AND us.alumnoId = p.userId
						WHERE us.courseId = " . $value['courseId'] . " AND u.ciudad = " . $inv['municipalityId'];
				$this->Util()->DB()->setQuery($sql);
				$participants = $this->Util()->DB()->GetResult();
				$result['participants'][$value['courseId']][$inv['municipalityId']] = $participants;
			}
		}
		return $result;
	}
}
?>