<?php
ini_set('memory_limit', '-1');
class Student extends User
{
	private $subjectId;
	private $name;
	private $apaterno;
	private $amaterno;
	private $nombre;
	private $noControl;
	private $estatus;
	private $tipobaja;
	private $motivo;
	private $cmId;
	private $usuariojjId;
	private $yoId;
	private $mensaje;
	private $statusjj;
	private $asunto;
	private $perfil;
	private $anterior;
	private $nuevo;
	private $repite;
	private $nacionality;
	private $lee;
	private $estudios;
	private $d_estudios;
	private $discapacidad;
	private $discapacidades;
	private $idiomas;
	private $trabaja;
	private $experienciaLaboral;
	private $certificacion;
	private $certificaciones;
	private $statusacademicDegree;
	private $tipoSolicitante;
	private $sectorId;
	private $autorizoj;
	private $autorizoFirma;
	private $typeOrderId;
	//new

	public function setPages($value)
	{
		$this->pages = $value;
	}


	public function setAutorizoj($value)
	{
		$this->autorizoj = $value;
	}

	public function setAutorizoFirma($value)
	{
		$this->autorizoFirma = $value;
	}

	public function setSectorId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->sectorId = $value;
	}

	public function setTipoSolitante($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->tipoSolicitante = $value;
	}

	public function setstatusacademicDegree($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Estatus");
		$this->statusacademicDegree = $value;
	}


	public function setNacionality($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Nacionalidad");
		$this->nacionality = mb_strtoupper($value);
	}

	public function setLee($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "¿Sabe leer?");
		$this->lee = $value;
	}

	public function setEstudios($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "¿Tiene estudios?");
		$this->estudios = $value;
	}
	public function setDEstudios($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "studios");
		$this->d_estudios = mb_strtoupper($value);
	}
	public function setDiscapacidad($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Tiene alguna discapacidad");
		$this->discapacidad = $value;
	}
	public function setDiscapacidades($value)
	{
		// $this->Util()->ValidateString($value, $max_chars=6000000000000000, $minChars = 1, "Discapacidades");
		$this->discapacidades = $value;
	}
	public function setIdiomas($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Idiomas");
		$this->idiomas = mb_strtoupper($value);
	}
	public function setTrabaja($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Trabaja");
		$this->trabaja = $value;
	}
	public function setExperienciaLaboral($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "experiencia Laboral");
		$this->experienciaLaboral = mb_strtoupper($value);
	}
	public function setCertificacion($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Certificacion");
		$this->certificacion = $value;
	}
	public function setCertificaciones($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 6000000000000000, $minChars = 1, "Certificaciones");
		$this->certificaciones = mb_strtoupper($value);
	}
	public function setAnterior($value)
	{
		$this->anterior = $value;
	}

	public function setNuevo($value)
	{
		$this->nuevo = $value;
	}

	public function setRepite($value)
	{
		$this->repite = $value;
	}

	public function setPerfil($value)
	{
		$this->perfil = $value;
	}


	public function setAsunto($value)
	{
		$this->asunto = $value;
	}

	public function setStatusjj($value)
	{
		$this->statusjj = $value;
	}

	public function setUsuariojjId($value)
	{
		$this->usuariojjId = $value;
	}

	public function setYoId($value)
	{
		$this->yoId = $value;
	}

	public function setMensaje($value)
	{
		$this->mensaje = $value;
	}

	public function setCMId($value)
	{
		$this->cmId = $value;
	}


	public function setSubjectId($value)
	{
		$this->subjectId = $value;
	}

	public function setTipoBaja($value)
	{
		$this->tipobaja = $value;
	}

	public function setMotivo($value)
	{
		$this->motivo = $value;
	}

	private $alumnoId;

	public function setAlumnoId($value)
	{
		$this->alumnoId = $value;
	}

	public function setName($value)
	{
		$this->name = $value;
	}

	public function setNombre($value)
	{
		$this->nombre = $value;
	}

	public function setApaterno($value)
	{
		$this->apaterno = $value;
	}

	public function setAmaterno($value)
	{
		$this->amaterno = $value;
	}

	public function setNocontrol($value)
	{
		$this->noControl = $value;
	}

	public function setEstatus($value)
	{
		$this->estatus = $value;
	}


	public function setTipoBeca($value)
	{
		$this->tipo_beca = $value;
	}

	public function setPorBeca($value)
	{
		$this->por_beca = $value;
	}

	public function setTypeOrderId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->typeOrderId = $value;
	}

	public function UpdateFoto()
	{
		$ext = end(explode('.', basename($_FILES['foto']['name'])));
		if (strtolower($ext) != "jpg" && strtolower($ext) != "jepg") {
			$this->Util()->setError(10028, "error", "La extension solo puede ser jpg");
			$this->Util()->PrintErrors();
			return;
		}
		$target_path = DOC_ROOT . "/alumnos/" . $_POST["userId"] . ".jpg";

		if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
			/*				$sql = "UPDATE
							resource
							SET
								path = '".$relative_path."'
							WHERE resourceId = '".$id."'";
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
		*/
			$this->Util()->setError(10028, "complete", "Has cambiado la foto satisfactoriamente.");
			$this->Util()->PrintErrors();
		}
	}

	public function desactivar()
	{

		$sql = "update user set activo='0' where userId='" . $this->getUserId() . "' ";
		$this->Util()->DB()->setQuery($sql);

		if (!$this->Util()->DB()->ExecuteQuery()) {

			// $sql="delete from user_subjet where alumnoId ='".$this->getUserId()."' "; //Agregado por JRosales 29/09/2014
			// $this->Util()->DB()->setQuery($sql);                                      //Agregado por JRosales 29/09/2014 
			// $this->Util()->DB()->DeleteData();                                        //Agregado por JRosales 29/09/2014

			// $this->Util()->setError(10030, "complete","El Alumno fue dado de Baja Correctamente");
			// $this->Util()->PrintErrors();


			$infoStudent = $this->GetInfo();
			//print_r($infoStudent); exit;
			$fecha_aplicacion = date("Y-m-d H:i:s");
			$hecho = $_SESSION['User']['userId'] . "p";
			$actividad = "Se ha dado de Baja un Alumno(" . $infoStudent['controlNumber'] . "-" . $infoStudent['names'] . " " . $infoStudent['lastNamePaterno'] . " " . $infoStudent['lastNameMaterno'] . ") desde el panel de Administración ";
			$visto = "1p," . $_SESSION['User']['userId'] . "p";
			$enlace = "/student";


			$sqlNot = "insert into notificacion(notificacionId,actividad,vista,hecho,fecha_aplicacion,tablas,enlace)
			   values(
			              '',
			            '" . $actividad . "', 
			            '" . $visto . "',
			            '" . $hecho . "',
			            '" . $fecha_aplicacion . "',
			            'reply',
						'" . $enlace . "'
			     
			         )";

			$this->Util()->DB()->setQuery($sqlNot);
			//ejecutamos la consulta y guardamos el resultado, que sera el ultimo positionId generado
			$this->Util()->DB()->InsertData();




			return true;
		} else {
			$this->Util()->setError(10030, "complete", "No ne pudo desactivar al Alumno intente mas tarde");
			$this->Util()->PrintErrors();
			return false;
		}
	}

	public function Activar()
	{
		$sql = "update user set activo='1' where userId='" . $this->getUserId() . "' ";
		$this->Util()->DB()->setQuery($sql);

		if (!$this->Util()->DB()->ExecuteQuery()) {

			$this->Util()->setError(10030, "complete", "El Alumno fue dado de Alta Correctamente");
			$this->Util()->PrintErrors();


			$infoStudent = $this->GetInfo();
			//print_r($infoStudent); exit;
			$fecha_aplicacion = date("Y-m-d H:i:s");
			$hecho = $_SESSION['User']['userId'] . "p";
			$actividad = "Se ha dado de Alta un Alumno(" . $infoStudent['controlNumber'] . "-" . $infoStudent['names'] . " " . $infoStudent['lastNamePaterno'] . " " . $infoStudent['lastNameMaterno'] . ") desde el panel de Administración ";
			$visto = "1p," . $_SESSION['User']['userId'] . "p";
			$enlace = "/student";


			$sqlNot = "insert into notificacion(notificacionId,actividad,vista,hecho,fecha_aplicacion,tablas,enlace)
			   values(
			              '',
			            '" . $actividad . "', 
			            '" . $visto . "',
			            '" . $hecho . "',
			            '" . $fecha_aplicacion . "',
			            'reply',
						'" . $enlace . "'
			     
			         )";

			$this->Util()->DB()->setQuery($sqlNot);
			//ejecutamos la consulta y guardamos el resultado, que sera el ultimo positionId generado
			$this->Util()->DB()->InsertData();






			return true;
		} else {
			$this->Util()->setError(10030, "complete", "No ne pudo Activar al Alumno intente mas tarde");
			$this->Util()->PrintErrors();
			return false;
		}
	}


	public function GetInfo()
	{

		$sql = "
		SELECT u.*,m.nombre as nombreciudad,c.nombre as ciudad2,e.nombre as nombreEstado FROM user as u 
		left join municipio as m on m.municipioId = u.ciudadt
		left join municipio as c on c.municipioId = u.ciudad
		left join estado as e on e.estadoId = u.estado
		WHERE userId = '" . $this->userId . "'";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();

		$count_ = substr_count($row["discapacidades"], '-');
		$f = explode("-", $row["discapacidades"]);
		for ($i = 0; $i <= $count_; $i++) {
			$row[$f[$i]] = true;
		}
		$dc = explode("-", $row["birthdate"]);
		$row["dia"] = $dc[0];
		$row["mes"] = $dc[1];
		$row["year"] = $dc[2];

		// echo "<pre>"; print_r($row);
		// exit;
		$row["names"] = $this->Util()->DecodeTiny($row["names"]);
		$row["lastNamePaterno"] = $this->Util()->DecodeTiny($row["lastNamePaterno"]);
		$row["lastNameMaterno"] = $this->Util()->DecodeTiny($row["lastNameMaterno"]);
		return $row;
	}

	public function EnumerateTotal()
	{

		$sql = "select * from user";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function EnumeratePaises()
	{

		$sql = "select * from pais";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function EnumerateEstados()
	{

		$sql = "select * from estado where paisId='" . $this->getCountry() . "'";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		foreach ($result as $key => $value) {
			$result[$key]['nombre'] = mb_convert_encoding($value['nombre'], 'UTF-8');
		}
		return $result;
	}

	public function EnumerateCiudades()
	{

		$sql = "select * from municipio where estadoId='" . $this->getState() . "' ORDER BY nombre";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function EnumerateStudent($sql)
	{

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $res) {
			$card = $res;
			$result2[$key] = $card;
		}

		return $result2;
	}

	public function Enumerate($orderSemester = '', $sqlSearch = '')
	{
		global $semester;
		global $group;

		$sql = "SELECT 
					* 
				FROM 
					user 
				WHERE 
					1" . $sqlSearch . "
				AND
					type = 'student'
				ORDER BY 
					" . $orderSemester . "
					lastNamePaterno ASC, 
					lastNameMaterno ASC,  
					`names` ASC";

		//print_r($sql);

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $res) {
			$card = $res;
			$result2[$key] = $card;
		}

		return $result2;
	}

	public function EnumerateCount($sqlSearch = '')
	{

		$this->Util()->DB()->setQuery(
			"
							SELECT 
								COUNT(*) 
							FROM 
								user 
							WHERE 
								1" . $sqlSearch . "
							AND
								type = 'student'
							"
		);
		$total = $this->Util()->DB()->GetSingle();

		return $total;
	}

	public function Save($option = "")
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$firma = uniqid();



		//Verificando que no se duplique el correo electronico
		$this->Util()->DB()->setQuery(
			"
							SELECT 
								COUNT(*) 
							FROM 
								user 
							WHERE 
								email = '" . $this->getEmail() . "'
							"
		);
		$total = $this->Util()->DB()->GetSingle();



		if ($total > 0) {
			$sql = "SELECT userId FROM user WHERE email = '" . $this->getEmail() . "'";
			$this->Util()->DB()->setQuery($sql);
			$studentId = $this->Util()->DB()->GetSingle();
			$sql = "SELECT count(*) FROM user_subject WHERE alumnoId  = " . $studentId . " AND courseId = " . $_POST["curricula"] . "";
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetSingle();

			if ($result >= 1) {
				$this->Util()->setError(10028, "error", "Este e-mail ya ha sido registrado previamente");
				$this->Util()->PrintErrors();
				return false;
			} else {
				include_once(DOC_ROOT . "/properties/messages.php");
				// UPDATE user information
				$sql = "UPDATE user SET workplaceCity = '" . $this->getCiudadT() . "', ciudadt = '" . $this->getCiudadT() . "', workplacePosition = '" . $this->getWorkplacePosition() . "', typeOrderId = " . $this->typeOrderId . " WHERE userId = " . $studentId;
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->ExecuteQuery();
				// INSERT user_subject
				$sql = "INSERT INTO user_subject(alumnoId, courseId, status) VALUES(" . $studentId . ", " . $_POST["curricula"] . ", 'activo')";
				$this->Util()->DB()->setQuery($sql);
				$lastId = $this->Util()->DB()->InsertData();
				// Envio de Correo
				$this->setUserId($studentId);
				$info = $this->GetInfo();
				$sendmail = new SendMail;
				$course = new Course();
				$course->setCourseId($_POST["curricula"]);
				$courseInfo = $course->Info();
				$nombre = $info['names'] . ' ' . $info['lastNamePaterno'] . ' ' . $info['lastNameMaterno'];
				$details_body = array(
					"email" 	=> $info["controlNumber"],
					"password" 	=> $info["password"],
					"major" 	=> utf8_decode($courseInfo["majorName"]),
					"course" 	=> utf8_decode($courseInfo["name"]),
					"candidato"	=> $nombre
				);
				$details_subject = array();
				$attachment = "";
				$fileName = "";
				$sendmail->PrepareAttachment($message[1]["subject"], $message[1]["body"], $details_body, $details_subject, $info["email"], $nombre, $attachment, $fileName);

				$this->Util()->setError(10028, "complete", "Registro Exitoso");
				$this->Util()->PrintErrors();
				return true;
			}
		}
		//Validando contraseña de minimo 6 caracteres
		// if(strlen($this->getPassword()) < 6)
		// {
		// $this->Util()->setError(10028, "error", "El password debe de contener al menos 6 caracteres.");
		// $this->Util()->PrintErrors();
		// return false;
		// }

		$sqlQuery = "INSERT INTO 
						user 
						(
							type,
							names, 
							lastNamePaterno, 
							lastNameMaterno,
							controlNumber,
							birthdate,							
							email, 
							phone, 
							password,
							street, 
							number, 
							colony, 
							ciudad, 
							estado, 
							pais, 
							postalCode, 
							sexo, 
							maritalStatus, 
							fax,
							mobile,
							workplace,
							workplaceOcupation,
							workplaceAddress,
							workplaceArea,
							workplacePosition,
							workplaceCity,
							paist,
							estadot,
							ciudadt,
							workplacePhone,
							workplaceEmail,
							academicDegree,
							profesion,
							school,
							masters,
							mastersSchool,
							highSchool,
							tipoSolicitanteId,
							firma,
							typeOrderId
						)
							VALUES
						(
							'student',
							'" . $this->getNames() . "', 
							'" . $this->getLastNamePaterno() . "', 
							'" . $this->getLastNameMaterno() . "',
							'" . $this->getControlNumber() . "',
							'" . $this->getBirthdate() . "',							
							'" . $this->getEmail() . "', 
							'" . $this->getPhone() . "', 
							'" . $this->getPassword() . "',
							'" . $this->getStreet() . "', 
							'" . $this->getNumer() . "', 
							'" . $this->getColony() . "', 
							'" . $this->getCiudadT() . "', 
							'" . $this->getState() . "', 
							'" . $this->getCountry() . "', 
							'" . $this->getPostalCode() . "', 
							'" . $this->getSexo() . "', 
							'" . $this->getMaritalStatus() . "', 
							'" . $this->getFax() . "', 
							'" . $this->getMobile() . "', 
							'" . $this->getWorkplace() . "', 
							'" . $this->getWorkplaceOcupation() . "', 
							'" . $this->getWorkplaceAddress() . "', 
							'" . $this->getWorkplaceArea() . "', 
							'" . $this->getWorkplacePosition() . "', 
							'" . $this->getCiudadT() . "', 
							'" . $this->getPaisT() . "', 
							'" . $this->getEstadoT() . "', 
							'" . $this->getCiudadT() . "',
							'" . $this->getWorkplacePhone() . "', 
							'" . $this->getWorkplaceEmail() . "', 
							'" . $this->getAcademicDegree() . "', 
							'" . $this->getProfesion() . "', 
							'" . $this->getSchool() . "', 
							'" . $this->getMasters() . "', 
							'" . $this->getMastersSchool() . "', 
							'" . $this->getHighSchool() . "',
							'" . $this->tipoSolicitante . "',
							'" . $firma . "',
							'" . $this->typeOrderId . "'
							
						)";

		$this->Util()->DB()->setQuery($sqlQuery);

		//include_once(DOC_ROOT."/properties/messages.php");
		//enviar correo
		/* $sendmail = new SendMail;
		$details_body = array(
			"email" => $this->getControlNumber(),
			"password" => $this->getPassword(),
			"major" => utf8_decode(''),
			"course" => utf8_decode(''),
		);
		$details_subject = array();
		$attachment = "";
		$fileName = "";
		$sendmail->PrepareAttachment($message[1]["subject"], $message[1]["body"], $details_body, $details_subject, $this->getEmail(), $this->getNames(), $attachment, $fileName); */


		if ($id = $this->Util()->DB()->InsertData()) {
			$fecha_aplicacion = date("Y-m-d H:i:s");
			$enlace = "/student";
			$this->setAlumnoId($id);
			if ($this->getRegister() == 0) {
				//$hecho=$this->getNames()." ".$this->getLastNamePaterno()." ".$this->getLastNameMaterno();
				$hecho = $id . "u";
				$actividad = "Se ha Registrado un nuevo Alumno";
				$visto = $id . "u,1p";
			} else {
				$hecho = $_SESSION['User']['userId'] . "p";
				$actividad = "Se ha registrado un Alumno(" . $this->getNames() . " " . $this->getLastNamePaterno() . " " . $this->getLastNameMaterno() . ") desde el panel de Administración ";
				$visto = "1p," . $_SESSION['User']['userId'] . "p";
			}


			$sqlNot = "insert into notificacion(notificacionId,actividad,vista,hecho,fecha_aplicacion,tablas,enlace)
			   values(
			              '',
			            '" . $actividad . "', 
			            '" . $visto . "',
			            '" . $hecho . "',
			            '" . $fecha_aplicacion . "',
			            'reply',
						'" . $enlace . "'
			     
			         )";

			$this->Util()->DB()->setQuery($sqlNot);
			//ejecutamos la consulta y guardamos el resultado, que sera el ultimo positionId generado
			$this->Util()->DB()->InsertData();
		}
		// $option = "";
		// $_POST["curricula"] = 1;
		if ($option == "createCurricula") {
			$course = new Course();

			$course->setCourseId($_POST["curricula"]);
			$courseInfo = $course->Info();
			if ($this->tipo_beca == "Ninguno")
				$this->por_beca = 0;
			$nombre = $this->getNames() . ' ' . $this->getLastNamePaterno() . ' ' . $this->getLastNameMaterno();
			$this->AddUserToCurricula($id, $_POST["curricula"], $nombre, $this->getEmail(), $this->getPassword(), $courseInfo["majorName"], $courseInfo["name"], $this->tipo_beca, $this->por_beca);

			if ($this->getRegister() == 0) {
				$complete1 = "Te has registrado exitosamente. Te hemos enviado un correo electronico con los datos de ingreso al sistema";
				$this->Util()->setError(10028, "complete", $complete1);
				$complete2 = "En caso de no estar en tu bandeja de entrada, verifica en correos no deseados";
				$this->Util()->setError(10028, "complete", $complete2);
				$complete4 = "Cualquier problema que llegaras a tener, escribenos a enlinea@iapchiapas.edu.mx";
				$this->Util()->setError(10028, "complete", $complete4);

				$complete3 = "Bienvenido";
				$this->Util()->setError(10028, "complete", $complete3);
			} else {
				$complete = "Has ingresado al Alumno exitosamente, Se ha enviado un correo electronico para continuar con su proceso de inscripción";
				$this->Util()->setError(10028, "complete", $complete);
			}
		}

		// echo "fail[#]";
		// print_r($_POST); 
		// exit;
		//print_r($_POST); EXIT;

		/*    */
		// $complete1 = "Te has registrado exitosamente. Te hemos enviado un correo electronico con los datos de ingreso al sistema";
		// $this->Util()->setError(10028, "complete", $complete1);
		$this->Util()->PrintErrors();

		return true;
	}

	public function SaveMultiple()
	{
		$firma = uniqid();
		$sqlQuery = "INSERT INTO 
						user 
						(
							type,
							names, 
							lastNamePaterno, 
							lastNameMaterno,
							controlNumber, 					
							email, 
							phone, 
							password, 
							ciudad, 
							estado, 
							pais,  
							paist,
							estadot,
							ciudadt, 
							tipoSolicitanteId,
							firma 
						)
							VALUES
						(
							'student',
							'" . $this->getNames() . "', 
							'" . $this->getLastNamePaterno() . "', 
							'" . $this->getLastNameMaterno() . "',
							'" . $this->getControlNumber() . "', 
							'" . $this->getEmail() . "', 
							'" . $this->getPhone() . "', 
							'" . $this->getPassword() . "', 
							'" . $this->getCiudadT() . "', 
							'" . $this->getEstadoT() . "', 
							'1',  
							'1', 
							'" . $this->getEstadoT() . "', 
							'" . $this->getCiudadT() . "',
							'" . $this->tipoSolicitante . "',
							'" . $firma . "' 
						)";

		$this->Util()->DB()->setQuery($sqlQuery);
		$studentId = $this->Util()->DB()->InsertData();
		$fecha_aplicacion = date("Y-m-d H:i:s");
		$enlace = "/student";
		$this->setAlumnoId($studentId);
		$hecho = $studentId . "u";
		$actividad = "Se ha Registrado un nuevo Alumno";
		$visto = $studentId . "u,1p";
		$sqlNot = "insert into notificacion(notificacionId,actividad,vista,hecho,fecha_aplicacion,tablas,enlace)
			   values('',  '" . $actividad . "',  '" . $visto . "', '" . $hecho . "', '" . $fecha_aplicacion . "', 'reply', '" . $enlace . "')";
		$this->Util()->DB()->setQuery($sqlNot);
		//ejecutamos la consulta y guardamos el resultado, que sera el ultimo positionId generado
		$this->Util()->DB()->InsertData();

		foreach ($_POST['curricula'] as $curricula) {
			// Envio de Correo
			$course = new Course(); 
			$course->setCourseId($curricula);
			$courseInfo = $course->Info();
			$nombre = $this->getNames() . ' ' . $this->getLastNamePaterno() . ' ' . $this->getLastNameMaterno();
			$this->AddUserToCurricula($studentId, $curricula, $nombre, $this->getEmail(), $this->getPassword(), $courseInfo["majorName"], $courseInfo["name"], 0, '');
		}		 
		return true;
	}


	function DeleteStudentCurricula()
	{
		$courseId = $this->getCourseId();
		$userId = $this->getUserId();

		$sql = "SELECT * FROM invoice where userId='" . $userId . "'  and courseId='" . $courseId . "'";
		//print_r($sql);
		$this->Util()->DB()->setQuery($sql);
		$invoices = $this->Util()->DB()->GetResult();
		$x = 0;
		if (count($invoices) > 0) {
			foreach ($invoices as $key => $res) {
				$sqlPayment = "SELECT * FROM payment WHERE invoiceId='" . $invoices[$key]['invoiceId'] . "' AND status = 'activo'";
				$this->Util()->DB()->setQuery($sqlPayment);
				$payments = $this->Util()->DB()->GetResult();
				if (count($payments) > 0) {
					$x++;
				}
			}
		}

		if ($x > 0) {
			$this->Util()->setError(10028, "complete", "No se puede Eliminar Alumno de Curricula porque ya existen Pagos Realizados");
			$this->Util()->PrintErrors();

			return false;
		}

		if ((count($invoices) > 0 && $x == 0) || count($invoices) == 0) {
			if (count($invoices) > 0) {
				$sql = "DELETE FROM invoice WHERE userId='" . $userId . "'  and courseId='" . $courseId . "' ";
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->ExecuteQuery();
			}
			$sql = "DELETE FROM user_subject where alumnoId='" . $userId . "' and courseId='" . $courseId . "' ";
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->ExecuteQuery();
			$this->Util()->setError(10028, "complete", "Alumno eliminado con exito de esta curricula");
			$this->Util()->PrintErrors();

			return true;
		}
	}



	function AddUserToCurriculaFromCatalog($userId, $courseId, $tipo_beca, $por_beca)
	{
		$course = new Course();

		$course->setCourseId($courseId);
		$courseInfo = $course->Info();

		$user = new User();
		$this->setUserId($userId);
		//print_r($userId); exit;
		$info = $this->GetInfo();
		//echo "<pre>".print_r($info)."</pre>";
		//echo "<pre>".print_r($courseInfo)."</pre>";
		//exit;
		if ($courseInfo['majorName'] == "ESPECIALIDAD" || $courseInfo['majorName'] == "MAESTRIA")
			$matricula = $this->generaMatricula($info['majorName'], $courseId);
		else
			$matricula = "";

		$nombre = $info['names'] . ' ' . $info['lastNamePaterno'] . ' ' . $info['lastNameMaterno'];
		$complete = $this->AddUserToCurricula($userId, $courseId, $nombre, $info["email"], $info["password"], $courseInfo["majorName"], $courseInfo["name"], $tipo_beca, $por_beca, $matricula);

		$this->Util()->setError(10028, "complete", $complete);
		$this->Util()->PrintErrors();
		return $complete;
	}

	public function generaMatricula($major, $courseId)
	{

		switch ($major) {
			case 'MAESTRIA':
				$year = date('Y');
				//print_r($year);
				$year = substr($year, -2);

				$this->Util()->DB()->setQuery("
				SELECT *, user_subject.status AS status FROM user_subject
				LEFT JOIN user ON user_subject.alumnoId = user.userId
				WHERE matricula like '5036%'
				ORDER BY lastNamePaterno ASC, lastNameMaterno ASC, names ASC");

				$maestrias = $this->Util()->DB()->GetResult();

				foreach ($maestrias as $fila) {
					$num = $fila['matricula'];
				}

				$num = substr($num, -3);    // devuelve "ef"
				$num = $num + 1;

				if (strlen($num) == 2) {
					$num = "0" . $num;
				}


				$matricula = "5036101" . $year . $num;

				return $matricula;

				break;

			case 'ESPECIALIDAD':
				$year = date('Y');
				$year = substr($year, -2);
				$this->Util()->DB()->setQuery("
				SELECT *, user_subject.status AS status FROM user_subject
				LEFT JOIN user ON user_subject.alumnoId = user.userId
				WHERE matricula like '5046%'
				ORDER BY lastNamePaterno ASC, lastNameMaterno ASC, names ASC");
				$maestrias = $this->Util()->DB()->GetResult();
				foreach ($maestrias as $fila) {
					$num = $fila['matricula'];
				}
				$num = substr($num, -3);    // devuelve "ef"
				$num = $num + 1;
				if (strlen($num) == 2) {
					$num = "0" . $num;
				}
				$matricula = "5046101" . $year . $num;
				return $matricula;
				break;
		}
	}

	public function AddUserToCurricula($id, $curricula, $nombre, $email, $password, $major, $course, $tipo_beca, $por_beca, $matricula = null)
	{
		include_once(DOC_ROOT . "/properties/messages.php");
		$this->setUserId($id);
		$info = $this->GetInfo();
		//enviar correo
		$sendmail = new SendMail;
		$details_body = array(
			"email" => $info["controlNumber"],
			"password" => $password,
			"major" => utf8_decode($major),
			"course" => utf8_decode($course),
			"candidato" => $nombre
		);
		$details_subject = array();
		$attachment = "";
		$fileName = "";
		$sendmail->PrepareAttachment($message[1]["subject"], $message[1]["body"], $details_body, $details_subject, $email, $nombre, $attachment, $fileName);

		$sql = "SELECT COUNT(*) FROM user_subject WHERE alumnoId = '" . $id . "' AND courseId = '" . $curricula . "'";
		$this->Util()->DB()->setQuery($sql);
		$count = $this->Util()->DB()->GetSingle();

		$sql = "SELECT subjectId FROM course WHERE courseId = '" . $curricula . "'";
		$this->Util()->DB()->setQuery($sql);
		$subjectId = $this->Util()->DB()->GetSingle();

		$sql = "SELECT payments FROM subject WHERE subjectId = '" . $subjectId . "'";
		$this->Util()->DB()->setQuery($sql);
		$payments = $this->Util()->DB()->GetSingle();

		if ($payments > 0) {
			$status = 'inactivo';
		} else {
			$status = 'activo';
		}

		if ($count > 0) {
			return $complete = "Este alumno ya esta registrado en esta curricula. Favor de Seleccionar otra Curricula";
		}

		$sqlQuery = "
			INSERT INTO  `user_subject` (
				`alumnoId` ,
				`status` ,
				`courseId`,
				`tipo_beca`,
				`por_beca`,
                `matricula`
				)
				VALUES 
				(
				'" . $id . "',  
				'" . $status . "',  
				'" . $curricula . "',  
				'" . $tipo_beca . "',  
				'" . $por_beca . "',
				'" . $matricula . "'
			)";
		$this->Util()->DB()->setQuery($sqlQuery);

		if ($this->Util()->DB()->InsertData()) {
			$complete = "Has registrado al alumno exitosamente, le hemos enviado un correo electronico para continuar con el proceso de inscripcion";
		} else {
			$complete = "no";
		}
		$this->setControlNumber();
		$this->setNames($info['names']);
		$this->setLastNamePaterno($info['lastNamePaterno']);
		$this->setLastNameMaterno($info['lastNameMaterno']);
		$this->setPassword(trim($info['password']));
		$this->setEmail($info['email']);
		$this->AddInvoices($id, $curricula);
		$files  = new Files;
		$file = $files->CedulaInscripcion($id, $curricula, $this, $major, $course);
		return $complete;
	}


	public function Update()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		// echo "<pre>"; print_r($this->getAcademicDegree());
		// exit;
		// password = '".$this->getPassword()."', 

		$sqlQuery = "UPDATE user				
						SET 
							names = '" . $this->getNames() . "', 
							lastNamePaterno = '" . $this->getLastNamePaterno() . "', 
							lastNameMaterno = '" . $this->getLastNameMaterno() . "', 
							birthdate = '" . $this->getBirthdate() . "', 
							email = '" . $this->getEmail() . "',   
							phone = '" . $this->getPhone() . "', 
							nacionality = '" . $this->nacionality . "', 
							curp = '" . $this->curp . "', 
							cityBorn = '" . $this->getCityBorn() . "', 
							lee = '" . $this->lee . "', 
							estudios = '" . $this->estudios . "', 
							d_estudios = '" . $this->d_estudios . "', 
							discapacidad = '" . $this->discapacidad . "', 
							discapacidades = '" . $this->discapacidades . "', 
							idiomas = '" . $this->idiomas . "', 
							trabaja = '" . $this->trabaja . "', 
							experienciaLaboral = '" . $this->experienciaLaboral . "', 
							certificacion = '" . $this->certificacion . "', 
							certificaciones = '" . $this->certificaciones . "', 
							street = '" . $this->getStreet() . "',   
							number = '" . $this->getNumer() . "',   
							colony = '" . $this->getColony() . "', 
							ciudad = '" . $this->getCity() . "', 
							estado = '" . $this->getState() . "', 
							pais =  '" . $this->getCountry() . "', 
							postalCode = '" . $this->getPostalCode() . "', 
							sexo = '" . $this->getSexo() . "', 
							maritalStatus = '" . $this->getMaritalStatus() . "', 
							fax = '" . $this->getFax() . "', 
							mobile = '" . $this->getMobile() . "', 
							workplace = '" . $this->getWorkplace() . "', 
							workplaceOcupation = '" . $this->getWorkplaceOcupation() . "', 
							workplaceAddress = '" . $this->getWorkplaceAddress() . "', 
							workplaceArea = '" . $this->getWorkplaceArea() . "', 
							workplacePosition = '" . $this->getWorkplacePosition() . "', 
							paist='" . $this->getPaisT() . "',
							estadot='" . $this->getEstadoT() . "',
							ciudadt='" . $this->getCiudadT() . "',
						    workplacePhone = '" . $this->getWorkplacePhone() . "', 
							workplaceEmail = '" . $this->getWorkplaceEmail() . "', 
							academicDegree = '" . $this->getAcademicDegree() . "',  
							statusacademicDegree = '" . $this->statusacademicDegree . "',  
							tiposolicitanteId = '" . $this->tipoSolicitante . "',  
							profesion = '" . $this->getProfesion() . "', 
							school = '" . $this->getSchool() . "', 
							sectorId = '" . $this->sectorId . "', 
							masters = '" . $this->getMasters() . "', 
							mastersSchool = '" . $this->getMastersSchool() . "', 
							highSchool = '" . $this->getHighSchool() . "',						
							actualizado = 'si',						
							autorizo = '" . $this->autorizoj . "'					
						WHERE 
							userId = " . $this->getUserId();
		// exit;
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();

		$this->Util()->setError(10030, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	public function UpdateAlumn()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sqlQuery = "UPDATE user				
						SET  
							names = '" . $this->getNames() . "', 
							lastNamePaterno = '" . $this->getLastNamePaterno() . "', 
							lastNameMaterno = '" . $this->getLastNameMaterno() . "', 
							birthdate = '" . $this->getBirthdate() . "', 
							email = '" . $this->getEmail() . "', 
							phone = '" . $this->getPhone() . "', 
							password = '" . $this->getPassword() . "', 
							street = '" . $this->getStreet() . "', 
							number = '" . $this->getNumer() . "', 
							colony = '" . $this->getColony() . "', 
							ciudad = '" . $this->getCity() . "', 
							estado = '" . $this->getState() . "', 
							pais =  '" . $this->getCountry() . "', 
							postalCode = '" . $this->getPostalCode() . "', 
							sexo = '" . $this->getSexo() . "', 
							maritalStatus = '" . $this->getMaritalStatus() . "', 
							fax = '" . $this->getFax() . "', 
							mobile = '" . $this->getMobile() . "', 
							workplace = '" . $this->getWorkplace() . "', 
							workplaceAddress = '" . $this->getWorkplaceAddress() . "', 
							workplaceArea = '" . $this->getWorkplaceArea() . "', 
							workplaceOcupation = '" . $this->getWorkplaceOcupation() . "', 

						    paist='" . $this->getPaisT() . "',
							estadot='" . $this->getEstadoT() . "',
							ciudadt='" . $this->getCiudadT() . "',
							workplacePhone = '" . $this->getWorkplacePhone() . "', 
							workplaceEmail = '" . $this->getWorkplaceEmail() . "', 
							profesion = '" . $this->getProfesion() . "', 
							academicDegree = '" . $this->getAcademicDegree() . "', 
							school = '" . $this->getSchool() . "', 
							masters = '" . $this->getMasters() . "', 
							mastersSchool = '" . $this->getMastersSchool() . "', 
							highSchool = '" . $this->getHighSchool() . "'						
						WHERE 
							userId = " . $this->getUserId();

		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();


		$this->setUserId($this->getUserId());
		$info = $this->GetInfo();

		// echo "<pre>"; print_r($info);
		// exit;
		//datos personales
		$this->setControlNumber();
		$this->setNames($info['names']);
		$this->setLastNamePaterno($info['lastNamePaterno']);
		$this->setLastNameMaterno($info['lastNameMaterno']);
		$this->setSexo($info['sexo']);
		$info['birthdate'] = explode("-", $info['birthdate']);
		$this->setBirthdate($info['birthdate'][2], $info['birthdate'][1], $info['birthdate'][0]);
		$this->setMaritalStatus($info['maritalStatus']);
		$this->setPassword(trim($info['password']));

		//domicilio
		//print_r($info);
		$this->setStreet($info['street']);
		$this->setNumber($info['number']);
		$this->setColony($info['colony']);
		$this->setCity($info['city']);
		$this->setState($info['state']);
		$this->setCountry($info['country']);
		$this->setPostalCode($info['postalCode']);

		//datos de contacto
		$this->setEmail($info['email']);
		$this->setPhone($info['phone']);
		$this->setFax($info['fax']);
		$this->setMobile($info['mobile']);

		//datos laborales
		$this->setWorkplace($info['workplace']);
		$this->setWorkplaceOcupation($info['workplaceOcupation']);
		$this->setWorkplaceAddress($info['workplaceAddress']);
		$this->setWorkplaceArea($info['workplaceArea']);
		$this->setWorkplacePosition($info['workplacePosition']);
		$this->setWorkplaceCity($info['nombreciudad']);
		$this->setWorkplacePhone($info['workplacePhone']);
		$this->setWorkplaceEmail($info['workplaceEmail']);

		//Estudios
		$this->setAcademicDegree($info['academicDegree']);
		$this->setSchool($info['school']);
		$this->setHighSchool($info['highSchool']);
		$this->setMasters($info['masters']);
		$this->setMastersSchool($info['mastersSchool']);
		$this->setProfesion($info['profesion']);



		$sql = "
			SELECT 
				* 
			FROM 
				user_subject
			WHERE 
				alumnoId = " . $this->getUserId() . " ";

		$this->Util()->DB()->setQuery($sql);
		$infoUS = $this->Util()->DB()->GetRow();


		$files  = new Files;

		$file = $files->CedulaInscripcion($this->getUserId(), $infoUS["courseId"], $this, $major, $course);

		$this->Util()->setError(10030, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	public function UpdateFicha()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sqlQuery = "UPDATE user				
						SET
							mainMajor = " . $this->getMainMajor() . ", 
							secondMajor = " . $this->getSecondMajor() . ", 
							thirdMajor = " . $this->getThirdMajor() . ", 
							mode = " . $this->getMode() . ",
							names = '" . $this->getNames() . "', 
							lastNamePaterno = '" . $this->getLastNamePaterno() . "', 
							lastNameMaterno = '" . $this->getLastNameMaterno() . "', 
							sexo = '" . $this->getSexo() . "',													
							birthdate = '" . $this->getBirthdate() . "', 
							
							cityBorn = '" . $this->getCityBorn() . "', 
							stateBorn = '" . $this->getStateBorn() . "', 
							countryBorn = '" . $this->getCountryBorn() . "',
							
							street = '" . $this->getStreet() . "', 
							number = '" . $this->getNumer() . "', 
							colony = '" . $this->getColony() . "', 
							city = '" . $this->getCity() . "', 
							state = '" . $this->getState() . "', 
							country =  '" . $this->getCountry() . "', 
							postalCode = '" . $this->getPostalCode() . "',
							phone = '" . $this->getPhone() . "', 
							curp = '" . $this->getCurp() . "',
													 
							tutorNames = '" . $this->getTutorNames() . "', 
							tutorLastNamePaterno = '" . $this->getTutorLastNamePaterno() . "', 
							tutorLastNameMaterno = '" . $this->getTutorLastNameMaterno() . "', 
							tutorAddress = '" . $this->getTutorAddress() . "', 
							tutorPhone = '" . $this->getTutorPhone() . "', 
							
							prevSchNames = '" . $this->getPrevSchNames() . "', 
							prevSchType = " . $this->getPrevSchType() . ", 
							prevSchKey = '" . $this->getPrevSchKey() . "', 
							prevSchMode = " . $this->getPrevSchMode() . ", 
							prevSchCity = '" . $this->getPrevSchCity() . "', 
							prevSchState = '" . $this->getPrevSchState() . "', 
							prevSchAverage = " . $this->getPrevSchAverage() . ", 
							prevSchCertified = " . $this->getPrevSchCertified() . ",
							
							average = '" . $this->getAverage() . "'					
						WHERE 
							userId = " . $this->getUserId();

		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();

		$this->Util()->setError(10030, "complete");
		$this->Util()->PrintErrors();

		return true;
	}


	public function DeleteLimpia()
	{



		$sqlQuery = "DELETE FROM user_subject
							WHERE alumnoId ='$this->alumnoId'";

		//echo $sqlQuery." </br>";
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();





		return true;
	}


	public function Delete()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sqlQuery = "DELETE FROM user
							WHERE userId = " . $this->getUserId();
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();

		$sqlQuery = "DELETE FROM invoice
							WHERE userId ='" . $this->getUserId() . "'  ";

		//echo $sqlQuery." </br>";
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();

		$sqlQuery = "DELETE FROM user_subject
							WHERE alumnoId ='" . $this->getUserId() . "'";

		//echo $sqlQuery." </br>";
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();



		$this->Util()->setError(10029, "complete");
		$this->Util()->PrintErrors();





		return true;
	}

	public function EnumerateByPage($currentPage, $rowsPerPage, $pageVar, $pageLink, &$arrPages, $orderSemester = '')
	{
		global $semester;
		global $group;

		$result = NULL;
		$result2 = NULL;

		$filtro = "";

		if ($this->nombre) {
			$filtro .= " and names like '%" . $this->nombre . "%'";
		}

		if ($this->apaterno) {
			$filtro .= " and lastNamePaterno like '%" . $this->apaterno . "%'";
		}

		if ($this->amaterno) {
			$filtro .= " and lastNameMaterno like '%" . $this->amaterno . "%'";
		}

		if ($this->noControl) {
			$filtro .= " and controlNumber = '" . $this->noControl . "'";
		}

		if ($this->estatus) {
			if ($this->estatus == 2) {
				$filtro .= " and activo = 0";
			} else {
				$filtro .= " and activo = '" . $this->estatus . "'";
			}
		}

		if ($_POST["evaluado"]) {
			if ($_POST["evaluado"] == "si")
				$filtro .= " and (select count(*) from usuario_personal as us where us.usuarioId = user.userId ) > 0";
			else
				$filtro .= " and (select count(*) from usuario_personal as us where us.usuarioId = user.userId ) <= 0";
		}

		$totalTableRows = $this->CountTotalRows($sqlSearch);

		$totalPages = ceil($totalTableRows / $rowsPerPage);

		if ($currentPage < 1)
			$currentPage = 1;
		if ($currentPage > $totalPages)
			$currentPage = $totalPages;

		$arrPages['rowBegin']	= ($currentPage * $rowsPerPage) - $rowsPerPage + 1;

		$rowOffset = $arrPages['rowBegin'] - 1;

		$sql = "
								SELECT 
									*,
									(select count(*) from usuario_personal as us where us.usuarioId = user.userId )as count	
								FROM 
									user
								WHERE 
									1 " . $sqlSearch . " " . $filtro . "
								AND
									type = 'student'	
									
								ORDER BY 
									" . $orderSemester . "
									lastNamePaterno ASC, 
									lastNameMaterno ASC,  
									`names` ASC 
								LIMIT 
									" . $rowOffset . ", " . $rowsPerPage;
		$this->Util()->DB()->setQuery($sql);
		$result2 = $this->Util()->DB()->GetResult();

		foreach ($result2 as $key => $res) {
			$card = $res;

			$sql = "
				SELECT 
					courseId 
				FROM 
					user_subject
				WHERE 
					alumnoId = " . $res["userId"] . "";

			$this->Util()->DB()->setQuery($sql);
			$courseId = $this->Util()->DB()->GetSIngle();

			$card["courseId"] = $courseId;

			$card["lastNameMaterno"] = $this->Util->DecodeTiny($card["lastNameMaterno"]);
			$card["lastNamePaterno"] = $this->Util->DecodeTiny($card["lastNamePaterno"]);
			$card["names"] = $this->Util->DecodeTiny($card["names"]);



			if (file_exists(DOC_ROOT . "/alumnos/" . $res["userId"] . ".jpg")) {
				$card["foto"] = '<a href="#open-' . $res["userId"] . '" id="foto-' . $res["userId"] . '">
					<img src="' . WEB_ROOT . '/alumnos/' . $res["userId"] . '.jpg" width="40" height="40" style=" height: auto; 
				width: auto; 
				max-width: 80px; 
				max-height: 80px;"/>
				</a>';
			} else {
				$card["foto"] = '';
			}

			$result[$key] = $card;
		}

		$countPageRows = count($result);

		$arrPages['countPageRows'] = $countPageRows;

		$arrPages['rowEnd']		= $arrPages['rowBegin'] + $countPageRows - 1;

		$arrPages['totalTableRows'] = $totalTableRows;

		$arrPages['rowsPerPages'] = $rowsPerPages;

		$arrPages['currentPage'] = $currentPage;

		$arrPages['totalPages']	= $totalPages;

		$arrPages['startPage'] = '';
		$arrPages['previusPage'] = '';
		if ($currentPage > 1) {
			$arrPages['previusPage'] = $pageLink . '/' . $pageVar . '/' . ($currentPage - 1);

			if ($currentPage > 2)
				$arrPages['startPage'] = $pageLink . '/' . $pageVar . '/' . '1';
		}

		$arrPages['nextPage'] = '';
		$arrPages['endPage'] = '';
		if ($currentPage < $arrPages['totalPages']) {
			$arrPages['nextPage'] = $pageLink . '/' . $pageVar . '/' . ($currentPage + 1);

			if ($currentPage < ($arrPages['totalPages'] - 1))
				$arrPages['endPage'] = $pageLink . '/' . $pageVar . '/' . $arrPages['totalPages'];
		}
		$arrPages['refreshPage'] = $pageLink . '/' . $pageVar . '/' . $currentPage;


		return $result;
	}




	public function enumerateOkNum()
	{

		$filtro = '';


		if ($_GET["id"]) {
			$filtro .= " and cs.courseId = " . $_GET["id"] . "";
		}

		if ($_POST["certificacionId"]) {
			$filtro .= " and sb.subjectId = " . $_POST["certificacionId"] . "";
		}

		if ($_POST["evaluacion"]) {
			$filtro .= " and us.aprobado = '" . $_POST["evaluacion"] . "'";
		}

		if ($_POST["evaluado"]) {
			if ($_POST["evaluado"] == "si")
				$filtro .= " and (select count(*) from usuario_personal as us1 where us1.usuarioId = u.userId ) > 0 ";
			else
				$filtro .= " and (select count(*) from usuario_personal as us1 where us1.usuarioId = u.userId ) <= 0";
		}

		if ($_POST["elementos"]) {
			$filtro .= " 
			  			and	(select count(*) from repositorio as r where r.userId = u.userId and r.subjectId = sb.subjectId) = " . $_POST["elementos"] . "
			  ";
		}

		if ($_POST["grupos"]) {

			$filtro .= " and cs.courseId = '" . $_POST["grupos"] . "'";
		}

		if ($_POST["nombre"]) {
			$filtro .= " and u.names like '%" . $_POST["nombre"] . "%'";
		}

		if ($_POST["apellidoP"]) {
			$filtro .= " and u.lastNamePaterno like '%" . $_POST["apellidoP"] . "%'";
		}
		if ($_POST["apellidoM"]) {
			$filtro .= " and u.lastNameMaterno like '%" . $_POST["apellidoM"] . "%'";
		}

		if ($_GET["admin"]) {


			$filtro .= " and up.personalId = '" . $_GET["admin"] . "'";
		}

		$sqlQuery = "
				SELECT 
					count(DISTINCT (
					u.userId
					))
				FROM 
					user as u
				left join user_subject as us on us.alumnoId = u.userId
				left join course as cs on cs.courseId = us.courseId
				left join subject as sb on sb.subjectId = cs.subjectId
				inner join usuario_personal as up on up.usuarioId = u.userId
				

				WHERE 
					1 " . $sqlSearch . " " . $filtro . "
				AND
					type = 'student'	 
				ORDER BY 
					" . $orderSemester . "
					lastNamePaterno ASC, 
					lastNameMaterno ASC,  
					`names` ASC 
				" . $sqlLim . "";
		$this->Util()->DB()->setQuery($sqlQuery);
		$total = $this->Util()->DB()->GetSIngle();


		$resPage = $this->Util->HandlePagesAjax($this->pages, $total, '');
		$sqlLim = "LIMIT " . $resPage['pages']['start'] . ", " . $resPage['pages']['items_per_page'];


		$sql = "
				SELECT 
					*,
					up.personalId,
					sb.subjectId,
					sb.name as certificacion,
					(select count(*) from repositorio as r where r.userId = u.userId and r.subjectId = sb.subjectId) as countRepositorio,
					(select count(*) from user_subject usub where usub.alumnoId = us.alumnoId) as numCertificaciones,
					(select count(*) from usuario_personal spusb where spusb.usuarioId = us.alumnoId ) as numEvaluadores,
					IFNULL(lt.lot,'N/A') as lot
				FROM 
					user as u
				left join user_subject as us on us.alumnoId = u.userId
				left join course as cs on cs.courseId = us.courseId
				left join subject as sb on sb.subjectId = cs.subjectId
				inner join usuario_personal as up on (up.usuarioId = u.userId and up.subjectId = sb.subjectId)
				left join lot_number as lt ON lt.subject_id = sb.subjectId AND course_id = cs.courseId AND lt.student_id = us.alumnoId
				WHERE 
					1 " . $sqlSearch . " " . $filtro . "
				AND
					type = 'student'	group by u.userId 
				ORDER BY 
					" . $orderSemester . "
					lastNamePaterno ASC, 
					lastNameMaterno ASC,  
					`names` ASC 
				" . $sqlLim . " ";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result7 = $this->Util()->DB()->GetResult();

		foreach ($result7 as $key => $aux) {

			$sql = "SELECT  activityId
								FROM course c 
        					LEFT JOIN subject AS s 
            				ON s.subjectId = c.subjectId 
        					LEFT JOIN activity AS a 
            				ON a.subjectId = s.subjectId 
    							WHERE c.courseId =  " . $aux["courseId"] . "";

			$this->Util()->DB()->setQuery($sql);
			$acI = $this->Util()->DB()->GetSIngle();
			$result7[$key]["activityId"] = $acI;
		}



		// echo "<pre>"; print_r($result7);
		// exit;

		$result['result'] = $result7;
		$result['pages'] = $resPage['pages'];
		$result['info'] = $resPage['info'];


		return $result;
	}



	public function enumerateOk()
	{

		$filtro = '';


		if ($_GET["id"]) {
			$filtro .= " and cs.courseId = " . $_GET["id"] . "";
		}

		if ($_POST["certificacionId"]) {
			$filtro .= " and sb.subjectId = " . $_POST["certificacionId"] . "";
		}

		if ($_POST["evaluacion"]) {
			$filtro .= " and us.aprobado = '" . $_POST["evaluacion"] . "'";
		}

		if ($_POST["evaluado"]) {
			if ($_POST["evaluado"] == "si")
				$filtro .= " and (select count(*) from usuario_personal as us1 where us1.usuarioId = u.userId ) > 0 ";
			else
				$filtro .= " and (select count(*) from usuario_personal as us1 where us1.usuarioId = u.userId ) <= 0";
		}

		if ($_POST["elementos"]) {
			$filtro .= " 
			  			and	(select count(*) from repositorio as r where r.userId = u.userId and r.subjectId = sb.subjectId) = " . $_POST["elementos"] . "
			  ";
		}

		if ($_POST["grupos"]) {

			$filtro .= " and cs.courseId = '" . $_POST["grupos"] . "'";
		}

		if ($_POST["nombre"]) {
			$filtro .= " and u.names like '%" . $_POST["nombre"] . "%'";
		}

		if ($_POST["apellidoP"]) {
			$filtro .= " and u.lastNamePaterno like '%" . $_POST["apellidoP"] . "%'";
		}
		if ($_POST["apellidoM"]) {
			$filtro .= " and u.lastNameMaterno like '%" . $_POST["apellidoM"] . "%'";
		}

		$sqlQuery = "
				SELECT 
					count(DISTINCT (
					u.userId
					))
				FROM 
					user as u
				left join user_subject as us on us.alumnoId = u.userId
				left join course as cs on cs.courseId = us.courseId
				left join subject as sb on sb.subjectId = cs.subjectId
				WHERE 
					1 " . $sqlSearch . " " . $filtro . "
				AND
					type = 'student'	 
				ORDER BY 
					" . $orderSemester . "
					lastNamePaterno ASC, 
					lastNameMaterno ASC,  
					`names` ASC 
				" . $sqlLim . "";

		$this->Util()->DB()->setQuery($sqlQuery);
		$total = $this->Util()->DB()->GetSIngle();


		$resPage = $this->Util->HandlePagesAjax($this->pages, $total, '');
		$sqlLim = "LIMIT " . $resPage['pages']['start'] . ", " . $resPage['pages']['items_per_page'];
		if ($_POST['condPhoto']  == 1 || $_POST['condPhoto'] == 2)
			$sqlLim = '';


		$sql = "
				SELECT 
					*,
					sb.subjectId,
					sb.name as certificacion,
					(
						(if((select count(*) from repositorio as r where r.userId = u.userId and r.subjectId = sb.subjectId and r.tipodocumentoId = 2) > 0, 1, 0)) +
						(if((select count(*) from repositorio as r where r.userId = u.userId and r.subjectId = sb.subjectId and r.tipodocumentoId = 4) > 0, 1, 0)) +
						(if((select count(*) from cedulas as ced where ced.userId = u.userId and ced.subjectId = sb.subjectId) > 0, 1, 0)) + 
						(if((select count(*) from planes as pla where pla.userId = u.userId and pla.subjectId = sb.subjectId) > 0, 1, 0))
					) as countRepositorio,
					(select count(*) from user_subject usub where usub.alumnoId = us.alumnoId) as numCertificaciones,
					(select count(*) from usuario_personal spusb where spusb.usuarioId = us.alumnoId ) as numEvaluadores
				FROM 
					user as u
				left join user_subject as us on us.alumnoId = u.userId
				left join course as cs on cs.courseId = us.courseId
				left join subject as sb on sb.subjectId = cs.subjectId
				WHERE 
					1 " . $sqlSearch . " " . $filtro . "
				AND
					type = 'student'	group by u.userId 
				ORDER BY 
					" . $orderSemester . "
					lastNamePaterno ASC, 
					lastNameMaterno ASC,  
					`names` ASC 
				" . $sqlLim . " ";

		$this->Util()->DB()->setQuery($sql);
		$result7 = $this->Util()->DB()->GetResult();

		foreach ($result7 as $key => $item) {
			$filename = strtoupper(trim($item['curp'])) . '.jpg';
			$has_photo = false;
			$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
			if (!$has_photo) {
				$filename = $item['controlNumber'] . '.jpg';
				$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
			}
			if (!$has_photo) {
				$filename = $item['controlNumber'] . '.JPG';
				$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
			}
			if (!$has_photo) {
				$filename = $item['controlNumber'] . '.JPG';
				$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
			}
			if (!$has_photo) {
				$filename = 'S/F';
			}
			$result7[$key]['photo_url'] = $filename;
			if ($_POST['condPhoto'] == 1 && !$has_photo)
				unset($result7[$key]);
			if ($_POST['condPhoto'] == 2 && $has_photo)
				unset($result7[$key]);
		}
		if ($_POST['condPhoto'] == 1 || $_POST['condPhoto'] == 2) {
			$total = count($result7);
			$resPage = $this->Util->HandlePagesAjax(0, $total, '', $total);
		}



		// echo "<pre>"; print_r($result7);
		// exit;

		$result['result'] = $result7;
		$result['pages'] = $resPage['pages'];
		$result['info'] = $resPage['info'];


		return $result;
	}


	public function CountTotalRows()
	{

		$filtro = "";

		if ($this->nombre) {
			$filtro .= " and names like '%" . $this->nombre . "%'";
		}

		if ($this->apaterno) {
			$filtro .= " and lastNamePaterno like '%" . $this->apaterno . "%'";
		}

		if ($this->amaterno) {
			$filtro .= " and lastNameMaterno like '%" . $this->amaterno . "%'";
		}

		if ($this->noControl) {
			$filtro .= " and controlNumber = '" . $this->noControl . "'";
		}

		if ($this->estatus) {
			if ($this->estatus == 2) {
				$filtro .= " and activo = 0";
			} else {
				$filtro .= " and activo = '" . $this->estatus . "'";
			}
		}



		$sql = 'SELECT COUNT(*) FROM user where type = "student" ' . $filtro . '';

		$this->Util()->DB()->setQuery($sql);
		return $this->Util()->DB()->GetSingle();
	}

	function SearchByGroup()
	{

		global $semester;
		global $group;

		$sql = "SELECT 
					* 
				FROM 
					user
				WHERE
					semesterId = " . $this->semesterId . "
				AND
					majorId = " . $this->majorId . "
				AND
					groupId = " . $this->groupId . "
				ORDER BY 
					lastNamePaterno ASC, lastNameMaterno ASC, names ASC";

		$this->Util()->DB()->setQuery($sql);
		$result2 = $this->Util()->DB()->GetResult();

		$result = array();
		foreach ($result2 as $key => $res) {
			$card = $res;

			$semester->setSemesterId($res['semesterId']);
			$card['semester'] = $semester->GetNameById();

			$group->setGroupId($res['groupId']);
			$card['group'] = $group->GetNameById();
			$result[$key] = $card;
		}

		return $result;
	}

	function GetStdIdByControlNo()
	{

		$sql = 'SELECT 
					userId 
				FROM 
					user 
				WHERE 
					controlNumber = "' . $this->controlNumber . '"';
		$this->Util()->DB()->setQuery($sql);
		$userId = $this->Util()->DB()->GetSingle();

		return $userId;
	}

	function _GetSemesterId()
	{

		$sql = 'SELECT 
					semesterId
				FROM 
					user 
				WHERE 
					userId = "' . $this->userId . '"';
		$this->Util()->DB()->setQuery($sql);
		$semesterId = $this->Util()->DB()->GetSingle();

		return $semesterId;
	}

	function info_subject($courseId)
	{
		$sql = "select * from user_subject where courseId='" . $courseId . "'  and  alumnoId='" . $this->getUserId() . "' ";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();
		return $row;
	}

	function GetSubByUsrSem()
	{

		$sql = 'SELECT
					*
				FROM
					user_subject
				WHERE
					alumnoId = ' . $this->userId . '
				AND
					semesterId = ' . $this->semesterId;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	function GetKardex()
	{

		$sql = 'SELECT
					*
				FROM
					kardex_calificacion
				WHERE
					userId = ' . $this->userId . '
				AND
					semesterId = ' . $this->semesterId;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	function GetSemBySub()
	{

		$sql = 'SELECT
					*
				FROM
					user_subject
				GROUP BY
					semesterId';
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	function GetNoControl()
	{

		$sql = 'SELECT
					controlNumber
				FROM
					user
				WHERE
					userId = ' . $this->userId;
		$this->Util()->DB()->setQuery($sql);
		$controlNumber = $this->Util()->DB()->GetSingle();

		return $controlNumber;
	}

	function GetScoreBySubject()
	{

		$sql = 'SELECT gu.testIdentifier, gu.gradescore, gu.datetest
				FROM gradereport_user AS gu, gradereport AS g, subject_group AS sg
				WHERE gu.gradereportId = g.gradereportId
				AND g.groupId = sg.subgpoId
				AND gu.alumnoId = ' . $this->userId . '
				AND sg.subjectId = ' . $this->subjectId . '
				ORDER BY gu.datetest ASC';

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		$gradescore = 0;
		foreach ($result as $res) {

			$testIdentifier = $res['testIdentifier'];

			if ($testIdentifier == 'PARCIAL') {
				$gradescore += $res['gradescore'];
				$obs = '';
			} elseif ($testIdentifier == 'GLOBAL') {
				$gradescore = $res['gradescore'];
				$obs = '';
			}

			//Falta definir mas tipos de calificaciones
		}

		if ($testIdentifier == 'PARCIAL')
			$average = $gradescore / 3;
		elseif ($testIdentifier == 'GLOBAL')
			$average = $gradescore;
		else
			$average = 0;

		$info['average'] = number_format($average, 2, '.', '');
		$info['obs'] = $obs;

		return $info;
	}

	function SaveKardexCalif()
	{

		$sql = 'INSERT INTO
						kardex_calificacion					
					(
						userId,
						semesterId,
						majorId,
						subjectId,
						calif,
						typeCalifId,
						periodoId
					)
				VALUES
					(
						"' . $this->userId . '",
						"' . $this->semesterId . '",
						"' . $this->majorId . '",
						"' . $this->subjectId . '",
						"' . $this->average . '",
						"' . $this->type . '",
						"' . $this->periodoId . '"							
					)';


		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$this->Util()->setError(10070, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	function GetKardexCalif()
	{

		$sql = 'SELECT 
					*
				FROM
					kardex_calificacion
				WHERE
					userId = "' . $this->userId . '"
					AND	semesterId = "' . $this->semesterId . '"
					AND majorId = "' . $this->majorId . '"';

		$this->Util()->DB()->setQuery($sql);
		$califs = $this->Util()->DB()->GetResult();

		return $califs;
	}

	function DeleteKardexCalif()
	{

		$sql = 'DELETE FROM 
					kardex_calificacion
				WHERE
					userId = "' . $this->userId . '"
					AND	semesterId = "' . $this->semesterId . '"
					AND majorId = "' . $this->majorId . '"';

		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();

		return true;
	}

	function SearchByName()
	{

		$sql = 'SELECT
					*
				FROM
					user
				WHERE
					CONCAT(lastNamePaterno," ",lastNameMaterno," ",names) LIKE "%' . $this->name . '%"
				LIMIT 15';

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	function SearchKardexByUserIdAndSemesterId()
	{

		$sql = 'SELECT
					majorId
				FROM 
					kardex_calificacion
				WHERE 
					userId = ' . $this->userId . '
				AND
					semesterId = ' . $this->semesterId . '
				LIMIT 1';

		$this->Util()->DB()->setQuery($sql);
		$majorId = $this->Util()->DB()->GetSingle();

		return $majorId;
	}

	function por_beca($id)
	{
		$sql = "select por_beca from user_subject where alumnoId='" . $id . "'";
		$this->Util()->DB()->setQuery($sql);
		return $this->Util()->DB()->GetSingle();
	}


	//agregar pagos de usuarios



	function encuentro_monto($courseId)
	{
		$this->Util()->DB()->setQuery("select subjectId from course where courseId='" . $courseId . "' ");
		$res = $this->Util()->DB()->GetRow();
		//echo $res['subjectId']; 
		$this->Util()->DB()->setQuery("select cost from subject where subjectId='" . $res['subjectId'] . "' ");
		$costo = $this->Util()->DB()->GetRow();
		//echo $costo['cost'];
		return $costo['cost'];
		//	echo $courseId;

	}


	function editarPor($alumnoId, $courseId, $por_beca, $tipo_beca)
	{
		if ($tipo_beca == "Ninguno")
			$por_beca = 0;

		$sqlQuery = "UPDATE user_subject set por_beca='" . $por_beca . "',tipo_beca='" . $tipo_beca . "'  where alumnoId='" . $alumnoId . "'  and courseId='" . $courseId . "'  ";

		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();


		$this->Util()->DB()->setQuery("SELECT * FROM invoice WHERE userId = '" . $alumnoId . "'");
		$id_invoices = $this->Util()->DB()->cons();
		foreach ($id_invoices as $fila) {
			$this->Util()->DB()->setQuery("SELECT * FROM payment WHERE invoiceId = '" . $fila[0] . "'");
			$info_payment = $this->Util()->DB()->cons();

			if (count($info_payment) == 0) {
				if ($por_beca != 0) {
					$v = (100 - $por_beca) / 100;
					$valor = round($this->encuentro_monto($fila["courseId"]) * $v, 2);
				} else {
					$valor = $this->encuentro_monto($fila["courseId"]);
				}
				$this->Util()->DB()->setQuery("update invoice set amount='" . $valor . "' where invoiceId='" . $fila[0] . "'");
				$this->Util()->DB()->ExecuteQuery();
			}
		}




		$this->Util()->setError(10030, "complete");
		$this->Util()->PrintErrors();
	}

	function AddInvoices($id, $curricula)
	{
		// echo "asdsss";
		// exit;
		$course = new Course;
		$course->SetCourseId($curricula);
		$por_beca = $this->por_beca($id);
		$myCourse = $course->Info($id);
		//print_r($myCourse);

		$initialExplode = explode("-", $myCourse["initialDate"]);
		$initialYear = $initialExplode[0];
		$initialMonth = $initialExplode[1];
		$initialDay = $initialExplode[2];
		for ($ii = 0; $ii < $myCourse["payments"]; $ii++) {
			if ($initialMonth > 12) {
				$initialMonth = 1;
				$initialYear++;
			}

			if ($initialDay > 28) {
				$initialDay = 28;
			}

			if ($por_beca != 0) {
				$v = (100 - $por_beca) / 100;
				$valor = round($myCourse["cost"] * $v, 2);
			} else {
				$valor = $myCourse["cost"];
			}

			$sql = "SELECT  * FROM  `invoice` where userId='" . $id . "' and courseId='" . $curricula . "'  and  dueDate='" . $initialYear . "-" . $initialMonth . "-" . $initialDay . "'  and amount='" . $valor . "'   ";

			$this->Util()->DB()->setQuery($sql);
			$info_invoice = $this->Util()->DB()->cons();


			if (count($info_invoice) == 0) {
				$sql = "
			INSERT INTO  `invoice` (
				`userId` ,
				`courseId` ,
				`dueDate` ,
				`amount`
				)
				VALUES (
				'" . $id . "' ,  '" . $curricula . "',  '" . $initialYear . "-" . $initialMonth . "-" . $initialDay . "',  '" . $valor . "')";

				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->InsertData();
			}
			$initialMonth++;
		}
	}

	function  StudentCoursesU($userId, $courseId)
	{
		$sql = "SELECT
					*, subject.name AS nombre, major.name AS majorName
				FROM
					user_subject
				LEFT JOIN course ON course.courseId = user_subject.courseId
				LEFT JOIN subject ON subject.subjectId = course.subjectId	
				LEFT JOIN major ON major.majorId = subject.tipo
				WHERE
					alumnoId ='" . $userId . "' and  course.courseId='" . $courseId . "'";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();
		return $result;
	}

	function StudentCourses($status = NULL, $active = NULL)
	{

		if ($status != NULL) {
			$status = " AND status = '" . $status . "'";
		}

		if ($active != NULL) {
			$active = " AND course.active = '" . $active . "'";
		}
		$sql = "SELECT
					user_subject.*, course.*, subject.*, major.*, repositorio.repositorioId, repositorio.nombre, repositorio.activo, repositorio.ruta, repositorio.userId, repositorio.tipodocumentoId, repositorio.subjectId, repositorio.courseId as repositorioCourseId, subject.name AS name, major.name AS majorName, repositorio.ruta AS certificacion_pdf
				FROM
					user_subject
				LEFT JOIN course ON course.courseId = user_subject.courseId
				LEFT JOIN subject ON subject.subjectId = course.subjectId	
				LEFT JOIN major ON major.majorId = subject.tipo
				LEFT JOIN repositorio ON (repositorio.userId = alumnoId AND repositorio.subjectId = course.subjectId AND repositorio.tipodocumentoId = 5)
				WHERE
					alumnoId = '" . $this->getUserId() . "'
					" . $status . "
					" . $active . " 
				ORDER BY status ASC";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $res) {
			$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM subject_module WHERE subjectId ='" . $res["subjectId"] . "'");

			$result[$key]["modules"] = $this->Util()->DB()->GetSingle();

			$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM user_subject WHERE courseId ='" . $res["courseId"] . "' AND status = 'inactivo'");
			$result[$key]["alumnInactive"] = $this->Util()->DB()->GetSingle();

			$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM user_subject WHERE courseId ='" . $res["courseId"] . "' AND status = 'activo'");

			$result[$key]["alumnActive"] = $this->Util()->DB()->GetSingle();

			//$this->Util()->DB()->setQuery("
			//	SELECT COUNT(*) FROM course_module WHERE courseId ='".$res["courseId"]."' AND active = 'si'");
			$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM course_module WHERE courseId ='" . $res["courseId"] . "'");

			$result[$key]["courseModule"] = $this->Util()->DB()->GetSingle();
		}
		// echo "<pre>"; print_r($result);
		// exit;
		return $result;
	}


	function GetAcumuladoCourseModuleActa($id, $alumnoId)
	{
		//actividades
		$activity = new Activity;
		$activity->setCourseModuleId($id);

		$activity->setUserId($alumnoId);
		$actividades = $activity->Enumerate();

		// echo '<pre>'; print_r ($actividades);
		// exit;
		$realScore = 0;
		$countAc = count($actividades);
		foreach ($actividades as $res) {
			$totalScore += $res["ponderation"];
		}
		// echo $totalScore;
		// exit;
		@$total = $totalScore / $countAc;

		return $total;
	}

	function GetAcumuladoCourseModule($id, $alumnoId = 0)
	{
		//actividades
		$activity = new Activity;
		$activity->setCourseModuleId($id);

		if ($alumnoId) {
			$activity->setUserId($alumnoId);
		}
		$actividades = $activity->Enumerate();

		$realScore = 0;

		foreach ($actividades as $res) {
			$totalScore += $res["realScore"];
		}
		return $totalScore;
	}




	function enviarMail()
	{


		$sendmail = new SendMail;

		$sql = "
			SELECT * FROM user
			WHERE email = '" . $this->getEmail() . "'";
		$this->Util()->DB()->setQuery($sql);
		$infoDu = $this->Util()->DB()->GetRow();
		//admin docente

		// echo "<pre>"; print_r($infoDu);
		// exit;
		$msj = "
		 Instituto de Administración Publica del Estado de Chiapas, A. C.
		<br>
		<br>
		Sus datos de acceso para nuestro Sistema de Educación en Línea son:<br>
		Usuario: " . $infoDu["controlNumber"] . "<br>
		Contraseña: " . $infoDu["password"] . "<br>
		<br>
		<br>
		Para una correcta navegación en nuestro Sistema, puede consultar el manual del alumno en:<br>
		http://www.iapchiapasenlinea.mx/manual_alumno.pdf<br>
		Cualquier duda, favor de contactarnos:<br>
		Teléfonos: (961) 125-15-08, 125-15-09, 125-15-10 Ext. 106 o 114<br>
		Correo: enlinea@iapchiapas.org.mx<br>
		Saludos.<br>
		IAP-Chiapas<br>
		<img src='" . WEB_ROOT . "/images/logo_correo.jpg'>

		<br>
		<br>
		<br>
		
		";

		$sendmail->PrepareAttachment("IAP Chiapas | Recuperacion de datos de usuario", utf8_decode($msj), "", "", $infoDu["email"], $infoDu["names"], $attachment, $fileName);

		$this->Util()->setError(10030, "complete", "Se ha enviado un correo con tus datos de acceso");
		$this->Util()->PrintErrors();

		return true;
	}

	function InfoPais($Id)
	{

		$sql = "SELECT * FROM pais WHERE paisId =" . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}


	function InfoEstado($Id)
	{

		$sql = "SELECT * FROM estado WHERE estadoId =" . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}

	function InfoMunicipio($Id)
	{

		$sql = "SELECT * FROM municipio WHERE municipioId =" . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}

	function InfoStudentCourses($status = NULL, $active = NULL, $courseId)
	{


		$sql = "SELECT
					*, subject.name AS name, major.name AS majorName
				FROM
					user_subject
				LEFT JOIN course ON course.courseId = user_subject.courseId
				LEFT JOIN subject ON subject.subjectId = course.subjectId	
				LEFT JOIN major ON major.majorId = subject.tipo
				WHERE
					alumnoId = '" . $this->getUserId() . "' and user_subject.courseId = " . $courseId . "";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();



		$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM subject_module WHERE subjectId ='" . $result["subjectId"] . "'");

		$result["modules"] = $this->Util()->DB()->GetSingle();

		$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM user_subject WHERE courseId ='" . $result["courseId"] . "' AND status = 'inactivo'");
		$result["alumnInactive"] = $this->Util()->DB()->GetSingle();

		$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM user_subject WHERE courseId ='" . $result["courseId"] . "' AND status = 'activo'");

		$result["alumnActive"] = $this->Util()->DB()->GetSingle();

		$this->Util()->DB()->setQuery("
				SELECT COUNT(*) FROM course_module WHERE courseId ='" . $result["courseId"] . "'");

		$result["courseModule"] = $this->Util()->DB()->GetSingle();



		return $result;
	}


	public function SaveSolicitud()
	{

		$sqlNot = "insert into 
				solicitud(
				fechaSolicitud,
				tiposolicitudId,
				estatus,
				userId
				)
			   values(
			            '" . date('Y-m-d') . "', 
			            '1',
			            'pendiente',
			            '" . $_SESSION['User']['userId'] . "'
			         )";

		$this->Util()->DB()->setQuery($sqlNot);
		$Id = $this->Util()->DB()->InsertData();

		$ext = end(explode('.', basename($_FILES['comprobante']['name'])));
		$filename  = "comprobante_" . $Id . "." . $ext;
		$target_path = DOC_ROOT . "/alumnos/comprobantes/comprobante_" . $Id . "." . $ext;

		move_uploaded_file($_FILES['comprobante']['tmp_name'], $target_path);

		$sqlQuery = "UPDATE solicitud set ruta ='" . $filename . "'  where solicitudId = '" . $Id . "'";
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();

		return true;
	}

	public function GetBaja()
	{

		$sql = "
				SELECT * FROM solicitud WHERE solicitudId = 3 order by solicitudId DESC ";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}

	public function muestraMenu($Id)
	{

		$sql = "
				SELECT * FROM menu_app WHERE menuId =  " . $Id . "";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	public function contenidoSeccion($Id)
	{
		$sql = "
				SELECT * FROM menu_app WHERE menuAppId =  " . $Id . "";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}


	public function saveContacto($Id)
	{
		$sendmail = new SendMail;

		$contenido = 'Datos de contacto: <br><br>  
		<table>
		<tr>
			<td>Nombre:</td>
			<td>' . $_POST['nombre'] . '</td>
		</tr>
		<tr>
			<td>Telefono:</td>
			<td>' . $_POST['telefono'] . '</td>
		</tr>
		<tr>
			<td>Correo:</td>
			<td>' . $_POST['correo'] . '</td>
		</tr>
		<tr>
			<td>Solicitud:</td>
			<td>' . $_POST['peticion'] . '</td>
		</tr>
		</table>
		
		' . $_POST['peticion'];
		// contacto@iapchiapas.org.mx
		$sendmail->enviarCorreo("Formulario de Contacto", $contenido, "", "", "contacto@iapchiapas.org.mx", "Administrador", $attachment, $fileName, $_POST['correo'], $_POST['nombre']);

		return true;
	}

	public function ProcesoReinscripcion($courseMId, $subjectId, $courseId, $semestreId)
	{

		if ($courseMId == 'x') {
			$infoS['semesterId'] = $semestreId;
		} else {
			$sql = "
				SELECT * FROM course_module  as c
				left join subject_module as s on c.subjectModuleId = s.subjectModuleId
				WHERE courseModuleId =  " . $courseMId . "";
			$this->Util()->DB()->setQuery($sql);
			$infoS = $this->Util()->DB()->GetRow();
		}



		$sqlQuery = "INSERT INTO 
						confirma_inscripcion 
						(
							reinscrito,
							nivel, 
							userId,
							subjectId,
							courseId,
							courseModuleId
						)
							VALUES
						(
							'si',
							'" . $infoS['semesterId'] . "', 
							'" . $_SESSION['User']['userId'] . "', 
							'" . $subjectId . "', 
							'" . $courseId . "',
							'" . $courseMId . "'
						)";

		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->InsertData();

		return true;
	}

	public function confirmaReinscripcion($carreraId, $semestreId)
	{
		$sql = "
				SELECT count(*) FROM confirma_inscripcion
				WHERE subjectId =  " . $carreraId . " and nivel = " . $semestreId . " and userId = " . $_SESSION["User"]["userId"] . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$infoS = $this->Util()->DB()->GetSingle();

		return $infoS;
	}


	public function testFire()
	{
		$sql = "SELECT  *
			FROM      
			alumnos";
		$this->Util()->Dbfire()->setQuery($sql);
		$row = $this->Util()->Dbfire()->GetResult();
		// exit;
		return $row;
	}


	public function infoCarrera()
	{
		$sql = "
				SELECT * FROM user
				WHERE userId = " . $_SESSION["User"]["userId"] . "";
		$this->Util()->DB()->setQuery($sql);
		$infoS = $this->Util()->DB()->GetRow();

		$sql = "select * from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' order by id desc ";
		$this->Util()->DB()->setQuery($sql);
		$row6 = $this->Util()->DB()->GetRow();

		return $row6;
	}
	public function verCalendarioPagos()
	{

		$sql = "
				SELECT * FROM user
				WHERE userId = " . $_SESSION["User"]["userId"] . "";
		$this->Util()->DB()->setQuery($sql);
		$infoS = $this->Util()->DB()->GetRow();

		$sql = "select * from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' order by id desc ";
		$this->Util()->DB()->setQuery($sql);
		$row6 = $this->Util()->DB()->GetRow();

		$sql = "select periodo from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' and clavenivel = '" . $row6['clavenivel'] . "' GROUP BY periodo  ";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetResult();


		foreach ($row as $key => $aux) {
			$sql = "select * from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' 
				and clavenivel = '" . $row6['clavenivel'] . "' 
				and  periodo = '" . $aux['periodo'] . "' 
				and (claveconcepto = 12 or claveconcepto = 21 or claveconcepto = 9)";
			$this->Util()->DB()->setQuery($sql);
			$rowp = $this->Util()->DB()->GetResult();
			foreach ($rowp as $key6 => $aux6) {

				$sql = "select * from alumnoshistorial where clave  = '" . $infoS['referenciaBancaria'] . "' 
				and clavenivel = '" . $row6['clavenivel'] . "' and  ciclo = '" . $row6['ciclo'] . "' and gradogrupo  = '" . $aux6['gradogrupo'] . "'";
				$this->Util()->DB()->setQuery($sql);
				$rowp8 = $this->Util()->DB()->GetRow();
				$rowp[$key6]['inicioPago'] = $rowp8['fechainiciopagos'];
				$rowp[$key6]['beca'] = $rowp8['becaporcentaje'];
				$rowp[$key6]['numPagos'] = $rowp8['numPagos'];

				if ($aux6['claveconcepto'] == 21) {

					for ($i = 1; $i <= $rowp8['numPagos']; $i++) {


						if ($i == 2) {
							$undiantes = strtotime('+' . ($aux6['pagacada']) . ' day', strtotime($rowp8['fechainiciopagos']));
							$rowp8['fechainiciopagos'] = date('Y-m-d', $undiantes);
						}
						if ($i == 3) {
							$undiantes = strtotime('+' . ($aux6['pagacada']) . ' day', strtotime($rowp8['fechainiciopagos']));
							$rowp8['fechainiciopagos'] = date('Y-m-d', $undiantes);
						}
						if ($i == 4) {
							$undiantes = strtotime('+' . ($aux6['pagacada']) . ' day', strtotime($rowp8['fechainiciopagos']));
							$rowp8['fechainiciopagos'] = date('Y-m-d', $undiantes);
						}

						$rowp[$i]['inicioPago'] = $rowp8['fechainiciopagos'];
						$rowp[$i]['descripcion'] = 'Materia';
						$rowp[$i]['numPagos'] = $rowp8['numPagos'];
						$rowp[$i]['beca'] = $rowp8['becaporcentaje'];
						@$rowp[$i]['total'] = $aux6['importe'];
					}
				} else {
					$rowp[0]['inicioPago'] = $rowp8['fechainiciopagos'];
					$rowp[0]['descripcion'] = $aux6['descripcion'];
					$rowp[0]['numPagos'] = $rowp8['numPagos'];
					$rowp[0]['beca'] = $rowp8['becaporcentaje'];
					$rowp[0]['total'] = $aux6['importe'];
				}
			}

			$row[$key]['pagos'] = $rowp;
		}

		return $row;
	}


	public function verCalendarioPagoscxc()
	{

		$sql = "
				SELECT * FROM user
				WHERE userId = " . $_SESSION["User"]["userId"] . "";
		$this->Util()->DB()->setQuery($sql);
		$infoS = $this->Util()->DB()->GetRow();

		$sql = "select * from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' order by id desc ";
		$this->Util()->DB()->setQuery($sql);
		$row6 = $this->Util()->DB()->GetRow();

		// $row6['ciclo'] = '2016-2017';

		$sql = "select periodo,ciclo,clavenivel,gradogrupo,nombrenivel from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' GROUP BY periodo ORDER BY id ASC   ";
		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetResult();

		// echo '<pre>'; print_r($row);
		// exit;
		// echo '';
		// exit;
		// EXIT;
		//12 es inscripcion
		//21 materia
		//9 resinscripcion
		$util = new Util;
		foreach ($row as $key => $aux) {
			$sql = "select  efectivo from pagos where clave  = '" . $infoS['referenciaBancaria'] . "' 
								and ciclo = '" . $aux['ciclo'] . "' 
								and  periodoesc = '" . $aux['periodo'] . "' 
								and clavenivel = '" . $aux['clavenivel'] . "'
								and (claveconcepto = 12 or claveconcepto = 21 or claveconcepto = 9) group by folio";
			$this->Util()->DB()->setQuery($sql);
			$rowabono = $this->Util()->DB()->GetResult();

			$efectivo = 0;
			foreach ($rowabono as $keya => $auxa) {
				$efectivo += $auxa['efectivo'];
			}

			$sql = "select * from pagosadicio where clavealumno  = '" . $infoS['referenciaBancaria'] . "' 
				and clavenivel = '" . $aux['clavenivel'] . "' 
				and  periodo = '" . $aux['periodo'] . "' 
				and (claveconcepto = 9 or claveconcepto = 12 or claveconcepto = 21) order by claveconcepto asc";
			$this->Util()->DB()->setQuery($sql);
			$rowp = $this->Util()->DB()->GetResult();
			$rowp = $util->orderMultiDimensionalArray($rowp, 'claveconcepto', false);
			foreach ($rowp as $key6 => $aux6) {


				$sql = "
					select 
						* 
					from 
						alumnoshistorial 
					where 
						clave  = '" . $infoS['referenciaBancaria'] . "' 
						and clavenivel = '" . $aux['clavenivel'] . "' 
						and  ciclo = '" . $aux['ciclo'] . "' 
						and gradogrupo  = '" . $aux6['gradogrupo'] . "'";
				$this->Util()->DB()->setQuery($sql);
				$rowp8 = $this->Util()->DB()->GetRow();
				$rowp[$key6]['inicioPago'] = $rowp8['fechainiciopagos'];
				$rowp[$key6]['beca'] = $rowp8['becaporcentaje'];
				$rowp[$key6]['numPagos'] = $rowp8['numPagos'];
				if ($aux6['claveconcepto'] == 21) {

					for ($i = 1; $i < 4; $i++) {
						if ($i == 2) {
							$undiantes = strtotime('+' . ($aux6['pagacada']) . ' day', strtotime($rowp8['fechainiciopagos']));
							$rowp8['fechainiciopagos'] = date('Y-m-d', $undiantes);
						}
						if ($i == 3) {
							$undiantes = strtotime('+' . ($aux6['pagacada']) . ' day', strtotime($rowp8['fechainiciopagos']));
							$rowp8['fechainiciopagos'] = date('Y-m-d', $undiantes);
						}
						if ($i == 4) {
							$undiantes = strtotime('+' . ($aux6['pagacada']) . ' day', strtotime($rowp8['fechainiciopagos']));
							$rowp8['fechainiciopagos'] = date('Y-m-d', $undiantes);
						}

						$abono  = 0;
						$descuento = (($aux6['importe'] * $rowp8['becaporcentaje']) / 100);
						if ($efectivo > 0) {
							$efectivo =  $efectivo - ($aux6['importe'] - $descuento);
							if ($efectivo >= 0) {
								$abono = ($aux6['importe'] - $descuento);
							} else {
								$abono = 0;
							}
						}




						if ($i >= 2) {

							$rowp[$i]['inicioPago'] = $rowp8['fechainiciopagos'];
							$rowp[$i]['numPagos'] = $rowp8['numPagos'];
							$rowp[$i]['beca'] = $rowp8['becaporcentaje'];
							@$rowp[$i]['abono'] = $abono;
							@$rowp[$i]['importe'] = $aux6['importe'];
							$rowp[$i]['descripcion'] = $aux6['descripcion'];
							$descuento = (($aux6['importe'] * $rowp8['becaporcentaje']) / 100);
							@$rowp[$i]['totalPagar'] = $aux6['importe'] - $descuento;
						} else {
							@$rowp[$i]['abono'] = $abono;
							$descuento = (($aux6['importe'] * $rowp8['becaporcentaje']) / 100);
							@$rowp[$i]['totalPagar'] = $aux6['importe'] - $descuento;
						}
					} //for
				} else {

					$abono  = 0;
					if ($efectivo > 0) {
						$efectivo = $efectivo - $aux6['importe'];
						if ($efectivo >= 0) {
							$abono = $aux6['importe'];
						} else {
							$abono = 0;
						}
					}

					$rowp[$key6]['abono'] =  $abono;
					@$rowp[$key6]['totalPagar'] = $aux6['importe'];
				}
			}

			$row[$key]['pagos'] = $rowp;
		}

		return $row;
	}

	public function extraeInfoFire($tipo)
	{

		// ECHO $tipo;

		if ($tipo == '2') {

			$sql = "select * from user ";
			$this->Util()->Db()->setQuery($sql);
			$lst = $this->Util()->Db()->GetResult();

			foreach ($lst as $key => $aux) {


				$sql = "select * from ALUMNOS where CLAVE = '" . $aux['referenciaBancaria'] . "'";
				$this->Util()->Dbfire()->setQuery($sql);
				$infoAl = $this->Util()->Dbfire()->GetResult();

				$sql = "UPDATE
							 user
					 SET
						porcentajeBeca = '" . $infoAl['PORCBECA'] . "'
					 WHERE 
						referenciaBancaria = '" . $aux['referenciaBancaria'] . "'";
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
		} else {
			$sql = "select max(id) from pagosadicio";
			$this->Util()->Db()->setQuery($sql);
			$maxIdPago = $this->Util()->Db()->GetSIngle();

			$sql = "select max(id) from alumnoshistorial";
			$this->Util()->Db()->setQuery($sql);
			$maxIdH = $this->Util()->Db()->GetSIngle();

			$sql = "select * from pagosadicio where ID > " . $maxIdPago . " order by ID asc";
			$this->Util()->Dbfire()->setQuery($sql);
			$row6 = $this->Util()->Dbfire()->GetResult();

			$sql = "select * from alumnoshistorial where ID > " . $maxIdH . " order by ID asc";
			$this->Util()->Dbfire()->setQuery($sql);
			$lstHistory = $this->Util()->Dbfire()->GetResult();




			foreach ($row6 as $key => $aux) {

				$sqlNot = "insert into pagosadicio(
					  id,
					  ciclo,
					  periodo,
					  clavenivel,
					  nombrenivel,
					  gradogrupo,
					  clavealumno,
					  claveconcepto,
					  descripcion,
					  periodicidad,
					  importe,
					  iva,
					  formato,
					  formapago,
					  aplicabeca,
					  unidad,
					  pagaren,
					  pagacada,
					  pases,
					  accesos,
					  categoria,
					  usuario,
					  fechacreacion,
					  usuariomodificacion,
					  fechamodificacion
					)
				   values(
							'" . $aux['ID'] . "', 
							'" . $aux['CICLO'] . "', 
							'" . $aux['PERIODO'] . "',
							'" . $aux['CLAVENIVEL'] . "',
							'" . $aux['NOMBRENIVEL'] . "',
							'" . $aux['GRADOGRUPO'] . "',
							'" . $aux['CLAVEALUMNO'] . "',
							'" . $aux['CLAVECONCEPTO'] . "',
							'" . $aux['DESCRIPCION'] . "',
							'" . $aux['PERIODICIDAD'] . "',
							'" . $aux['IMPORTE'] . "',
							'" . $aux['IVA'] . "',
							'" . $aux['FORMATO'] . "',
							'" . $aux['FORMAPAGO'] . "',
							'" . $aux['APLICABECA'] . "',
							'" . $aux['UNIDAD'] . "',
							'" . $aux['PAGAREN'] . "',
							'" . $aux['PAGACADA'] . "',
							'" . $aux['PASES'] . "',
							'" . $aux['ACCESOS'] . "',
							'" . $aux['CATEGORIA'] . "',
							'" . $aux['USUARIO'] . "',
							'" . $aux['FECHACREACION'] . "',
							'" . $aux['USUARIOMODIFICACION'] . "',
							'" . $aux['FECHAMODIFICACION'] . "'
						 )";
				$this->Util()->DB()->setQuery($sqlNot);
				$this->Util()->DB()->InsertData();
			}

			foreach ($lstHistory as $key => $aux) {

				$r = explode('/', $aux['FECHAINICIOPAGOS']);
				$fecha = $r[2] . $r[1] . $r[0];

				$sqlNot = "insert into alumnoshistorial(
					  id,
					  clave,
					  clavenivel,
					  nombrenivel,
					  gradogrupo,
					  ciclo,
					  becapesos,
					  becaporcentaje,
					  nombre,
					  apellidop,
					  apellidom,
					  periodo,
					  fechainiciopagos,
					  infocambio,
					  activado,
					  idplan,
					  idespecialidad,
					  usuario,
					  fechacreacion,
					  usuariomodificacion,
					  fechamodificacion,
					  status,
					  fechastatus,
					  observaciones
					  
					)
				   values(
							'" . $aux['ID'] . "', 
							'" . $aux['CLAVE'] . "', 
							'" . $aux['CLAVENIVEL'] . "',
							'" . $aux['NOMBRENIVEL'] . "',
							'" . $aux['GRADOGRUPO'] . "',
							'" . $aux['CICLO'] . "',
							'" . $aux['BECAPESOS'] . "',
							'" . $aux['BECAPORCENTAJE'] . "',
							'" . $aux['NOMBRE'] . "',
							'" . $aux['APELLIDOP'] . "',
							'" . $aux['APELLIDOM'] . "',
							'" . $aux['PERIODO'] . "',
							'" . $fecha . "',
							'" . $aux['INFOCAMBIO'] . "',
							'" . $aux['ACTIVADO'] . "',
							'" . $aux['IDPLAN'] . "',
							'" . $aux['IDESPECIALIDAD'] . "',
							'" . $aux['USUARIO'] . "',
							'" . $aux['FECHACREACION'] . "',
							'" . $aux['USUARIOMODIFICACION'] . "',
							'" . $aux['FECHAMODIFICACION'] . "',
							'" . $aux['STATUS'] . "',
							'" . $aux['FECHASTATUS'] . "',
							'" . $aux['OBSERVACIONES'] . "'
						 )";

				$this->Util()->DB()->setQuery($sqlNot);
				$this->Util()->DB()->InsertData();
			}

			$sql = "select max(id) from pagosadicio";
			$this->Util()->Db()->setQuery($sql);
			$maxIdPago = $this->Util()->Db()->GetSIngle();

			$sql = "select max(id) from alumnoshistorial";
			$this->Util()->Db()->setQuery($sql);
			$maxIdH = $this->Util()->Db()->GetSIngle();

			$sql = "UPDATE
							tablasincronizada
					SET
						ultimoRegistro = '" . $maxIdPago . "',
						fechaSincronizacion = '" . date('Y-m-d') . "'
					WHERE nombre = 'pagosadicio'";

			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();

			$sql = "UPDATE
							tablasincronizada
					SET
						ultimoRegistro = '" . $maxIdH . "',
						fechaSincronizacion = '" . date('Y-m-d') . "'
					WHERE nombre = 'alumnoshistorial'";

			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
		}



		return true;
	}


	public function actualizapago()
	{


		$sql = "select * from alumnoshistorial where ID >= 1649 and ID < 1749 ";
		$this->Util()->DB()->setQuery($sql);
		$rowp = $this->Util()->DB()->GetResult();



		foreach ($rowp as $key => $aux) {



			$sql = "select * from alumnoshistorial where ID = " . $aux['id'] . " ";
			$this->Util()->Dbfire()->setQuery($sql);
			$infoA = $this->Util()->Dbfire()->GetRow();

			$r = explode('/', $infoA['FECHAINICIOPAGOS']);

			$fecha = $r[2] . $r[1] . $r[0] . '<br>';

			$sql = "UPDATE
						alumnoshistorial
						SET
							fechainiciopagos = '" . $fecha . "'
						WHERE ID = '" . $aux['id'] . "'";

			// exit;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
		}



		return true;
	}


	public function saveBaja()
	{
		$sql = "UPDATE
				solicitud
				SET
					tipobaja = '" . $this->tipobaja . "',
					motivo = '" . $this->motivo . "'
				WHERE tiposolicitudId = 3 and estatus = 'en progreso' ";
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		return true;
	}

	public function miChat()
	{


		$sql = 'SELECT 
				*
				FROM chat as c
				left join user as u on u.userId = c.usuarioId
				WHERE c.yoId = ' . $_SESSION['User']["userId"] . ' or c.usuarioId = ' . $_SESSION['User']["userId"] . '
				group by c.usuarioId,c.yoId ORDER BY  chatId ASC ';

		$this->Util()->DB()->setQuery($sql);
		$data = $this->Util()->DB()->GetResult();
		foreach ($data as $key => $aux) {

			if ($aux["yoId"] == $_SESSION['User']["userId"]) {
				$sql = 'SELECT 
				*
				FROM user 
				WHERE userId = ' . $aux["usuarioId"] . '';
				$this->Util()->DB()->setQuery($sql);
				$infoU = $this->Util()->DB()->GetRow();
				$data[$key]["nombre"] = $infoU["names"];
			} else {
				$sql = 'SELECT 
				*
				FROM user 
				WHERE userId = ' . $aux["yoId"] . '';
				$this->Util()->DB()->setQuery($sql);
				$infoU = $this->Util()->DB()->GetRow();
				$data[$key]["nombre"] = $infoU["names"];
			}
		}


		return $data;
	} //Enumerate

	public function entablandoConversacion($Id)
	{

		$sql = 'SELECT * FROM chat WHERE chatId = ' . $Id . '';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		$sql = 'SELECT 
		* 
		FROM chat as c
		left join user as u on u.userId =   c.usuarioId 
		WHERE (c.usuarioId = ' . $info["usuarioId"] . ' or c.yoId = ' . $info["usuarioId"] . ') and (c.usuarioId = ' . $info["yoId"] . ' or c.yoId = ' . $info["yoId"] . ')';

		$this->Util()->DB()->setQuery($sql);
		$lstChat = $this->Util()->DB()->GetResult();

		// echo '<pre>'; print_r($lstChat);
		// exit;

		return $lstChat;
	} //

	public function SaveMensaje()
	{

		// $sql = 'SELECT * FROM chat WHERE chatId = '.$_POST["chatId"].'';
		// $this->Util()->DB()->setQuery($sql);
		// $infoChat = $this->Util()->DB()->GetRow();

		// if($infoChat["yoId"]<>$_SESSION['User']["userId"]){
		// $userId = $infoChat["yoId"];
		// }else{
		// $userId = $infoChat["usuarioId"];
		// }

		$sql = "
		INSERT INTO  chat (
				`fechaEnvio` ,
				`courseModuleId` ,
				`usuarioId`, 
				`yoId`, 
				`mensaje` 
				)
				VALUES (
				'" . date("Y-m-d") . "',
				'" . $_POST['c5Id'] . "',
				'" . $_POST['profId'] . "',
				'" . $_SESSION['User']["userId"] . "',
				'" . $_POST["mensaje"] . "'
				);";

		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();

		return true;
	}

	public function SaveReply()
	{

		if ($_SESSION['User']['type'] == 'student') {
			$quien = 'alumno';
		} else {
			$quien = 'personal';
		}


		$sql = "
		INSERT INTO  chat (
				`courseModuleId` ,
				`fechaEnvio` ,
				`estatus` ,
				`usuarioId`, 
				`yoId`, 
				`mensaje`, 
				`quienEnvia`, 
				`asunto` 
				)
				VALUES (
				'" . $this->cmId . "',
				'" . date('Y-m-d') . "',
				'" . $this->statusjj . "',
				'" . $this->usuariojjId . "',
				'" . $this->yoId . "',
				'" . $this->mensaje . "',
				'" . $quien . "',
				'" . $this->asunto . "'
				);";

		$this->Util()->DB()->setQuery($sql);
		$aId = $this->Util()->DB()->InsertData();

		// echo '<pre>'; print_r($_FILES); 
		// exit;
		foreach ($_FILES as $key => $var) {
			switch ($key) {
				case 'archivos':
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];
						$url = DOC_ROOT;
						$foto_name = "doc_" . $aId . "." . $extencion;
						if (move_uploaded_file($temporal, $url . "/doc_inbox/" . $foto_name)) {

							$sql = "UPDATE
							chat
							SET
								rutaAdjunto = '" . $foto_name . "'
							WHERE chatId = '" . $aId . "'";
							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->UpdateData();
						}
					}
			}
		}

		return true;
	}

	public function InfoEstudiate($Id)
	{

		$sql = "
				SELECT * FROM user WHERE userId =  " . $Id . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}



	public function GetPorcentajeBeca($clave)
	{

		$sql = "
				SELECT * FROM alumnoshistorial WHERE clave =  " . $clave . " order by id DESC";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}

	function cargarCiudades($Id)
	{


		$sql = "SELECT * FROM municipio WHERE estadoId = '" . $Id . "'";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	function onChangePicture($Id)
	{

		// echo '<pre>'; print_r($_FILES);
		// echo '<pre>'; print_r($_POST);
		// exit;
		$archivo = 'archivos';
		foreach ($_FILES as $key => $var) {
			switch ($key) {
				case $archivo:
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];
						$url = DOC_ROOT;
						$foto_name = $Id . "." . $extencion;
						if (move_uploaded_file($temporal, $url . "/alumnos/" . $foto_name)) {

							$minFoto = $foto_name;
							$this->resizeImagen($url . '/alumnos/', $foto_name, 340, 340, $minFoto, $extencion);

							$sql = 'UPDATE 		
								user SET 		
								rutaFoto = "' . $foto_name . '"			      		
								WHERE userId = ' . $Id . '';
							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->UpdateData();
						}
					}
					break;
			}
		}

		unset($_FILES);

		return true;
	}

	public function onSavePerfil($Id)
	{

		$sql = 'UPDATE 		
					user SET 		
					perfil = "' . strip_tags($this->perfil) . '"			      		
					WHERE userId = ' . $Id . '';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		return true;
	}

	public function onSavePass($Id)
	{

		$sql = "SELECT count(*) FROM user WHERE password = '" . $this->anterior . "' and userId='" . $_SESSION["User"]["userId"] . "'";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetSingle();

		if ($result <= 0) {
			echo 'fail[#]';
			echo '<font color="red">La contraseña anterior no es correcta</font>';
			exit;
		}

		if ($this->nuevo != $this->repite) {
			echo 'fail[#]';
			echo '<font color="red">Las contraseñas no coinciden</font>';
			exit;
		}

		if ($this->nuevo == '') {
			echo 'fail[#]';
			echo '<font color="red">La nueva contraseña no puede estar vacia</font>';
			exit;
		}

		$sqlQuery = "
			UPDATE 
				user 
			set 
				password='" . $this->nuevo . "'
			where userId='" . $_SESSION["User"]["userId"] . "'";

		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();

		return true;
	}


	function resizeImagen($ruta, $nombre, $alto, $ancho, $nombreN, $extension)
	{

		$rutaImagenOriginal = $ruta . $nombre;
		if ($extension == 'GIF' || $extension == 'gif') {
			$img_original = imagecreatefromgif($rutaImagenOriginal);
		}
		if ($extension == 'jpg' || $extension == 'JPG') {
			$img_original = imagecreatefromjpeg($rutaImagenOriginal);
		}
		if ($extension == 'png' || $extension == 'PNG') {
			$img_original = imagecreatefrompng($rutaImagenOriginal);
		}
		$max_ancho = $ancho;
		$max_alto = $alto;
		list($ancho, $alto) = getimagesize($rutaImagenOriginal);
		$x_ratio = $max_ancho / $ancho;
		$y_ratio = $max_alto / $alto;
		if (($ancho <= $max_ancho) && ($alto <= $max_alto)) { //Si ancho 
			$ancho_final = $ancho;
			$alto_final = $alto;
		} elseif (($x_ratio * $alto) < $max_alto) {
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
		} else {
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
		}
		$tmp = imagecreatetruecolor($ancho_final, $alto_final);
		imagecopyresampled($tmp, $img_original, 0, 0, 0, 0, $ancho_final, $alto_final, $ancho, $alto);
		imagedestroy($img_original);
		$calidad = 70;
		imagejpeg($tmp, $ruta . $nombreN, $calidad);
	}

	public function EnumerateSolicitantes()
	{
		$sql = "SELECT * FROM tiposolicitante WHERE 1";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return 	$result;
	}


	public function EnumerateSector()
	{
		$sql = "SELECT * FROM sector WHERE 1 order by nombre";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return 	$result;
	}



	public function enumerateMunicipio($Id, $filter = NULL)
	{
		$where = "";
		if (!empty($filter)) {
			$where = $filter;
		}
		$sql = "SELECT * FROM municipio WHERE estadoId = " . $Id . " {$where} ";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return 	$result;
	}


	public function onDeleteINE($id, $ti)
	{


		$sql = "SELECT 
					* 
				FROM 
					user
				WHERE
					userId = " . $id . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();



		if ($ti == 1) {
			@unlink(DOC_ROOT . '/alumnos/ine/' . $info['ineFrente']);
			$sql = 'UPDATE 		
				user SET 		
				ineFrente = ""			      		
				WHERE userId = ' . $id . '';
			$this->Util()->DB()->setQuery($sql);
		} else {
			@unlink(DOC_ROOT . '/alumnos/ine/' . $info['ineVuelta']);
			$sql = 'UPDATE 		
				user SET 		
				ineVuelta = ""			      		
				WHERE userId = ' . $id . '';
			$this->Util()->DB()->setQuery($sql);
		}

		$this->Util()->DB()->UpdateData();

		return true;
	}

	public function CertificacionStident($Id, $filtro = NULL)
	{
		if (is_null($filtro)) {
			$filtro = "";
		}
		if ($Id)
			$filtro .= " AND alumnoId = " . $Id;

		$sql = "SELECT 
					s.name as certificacion,
					u.alumnoId as userId,
					c.courseId,
					m.nombre as municipio,
					c.numero,
					at.activityId,
					c.group,
					s.subjectId,
					u.aprobado,
					(
						(IF((SELECT count(*) FROM repositorio AS r WHERE r.userId = u.alumnoId AND r.subjectId = s.subjectId AND r.tipodocumentoId = 2) > 0, 1, 0)) +
						(IF((SELECT count(*) FROM repositorio AS r WHERE r.userId = u.alumnoId AND r.subjectId = s.subjectId AND r.tipodocumentoId = 4) > 0, 1, 0)) +
						(IF((SELECT count(*) FROM cedulas AS ced WHERE ced.userId = u.alumnoId AND ced.subjectId = s.subjectId) > 0, 1, 0)) + 
						(IF((SELECT count(*) FROM planes AS pla WHERE pla.userId = u.alumnoId AND pla.subjectId = s.subjectId) > 0, 1, 0))
					) AS countRepositorio,
					c.initialDate
				FROM 
					user_subject AS u
						LEFT JOIN course AS c ON c.courseId = u.courseId 
						LEFT JOIN subject AS s ON s.subjectId = c.subjectId 
						LEFT JOIN user AS us ON us.userId = u.alumnoId 
						LEFT JOIN municipio AS m ON m.municipioId = us.ciudadt 
						LEFT JOIN course_module AS cm ON cm.courseId = c.courseId 
						LEFT JOIN activity AS at ON at.courseModuleId = cm.courseModuleId 
				WHERE 1 AND u.courseId > 0 " . $filtro;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $aux) {
			$sql = "SELECT 
						u.personalId,
						name,
						lastname_paterno,
						lastname_materno
					FROM usuario_personal AS u
						LEFT JOIN personal AS p 
							ON p.personalId= u.personalId
					WHERE u.subjectId = " . $aux["subjectId"] . " AND usuarioId = " . $Id;
			$this->Util()->DB()->setQuery($sql);
			$r = $this->Util()->DB()->GetRow();

			$sql = "SELECT 
						u.personalId,
						name,
						lastname_paterno,
						lastname_materno
					FROM 
						usuario_capacitador AS u
					LEFT JOIN personal AS p 
						ON p.personalId = u.personalId
					WHERE u.subjectId = " . $aux["subjectId"] . " AND usuarioId = " . $Id;
			$this->Util()->DB()->setQuery($sql);
			$cap = $this->Util()->DB()->GetRow();

			$sql = "SELECT 
						u.personalId,
						name,
						lastname_paterno,
						lastname_materno
					FROM 
						usuario_capacitador_original AS u
					LEFT JOIN personal AS p 
						ON p.personalId = u.personalId
					WHERE u.subjectId = " . $aux["subjectId"] . " AND usuarioId = " . $Id;
			$this->Util()->DB()->setQuery($sql);
			$capori = $this->Util()->DB()->GetRow();

			$sql = "SELECT *
						FROM personal_subject AS u
					LEFT JOIN personal AS p 
						ON p.personalId= u.personalId
					WHERE u.subjectId = " . $aux["subjectId"];
			$this->Util()->DB()->setQuery($sql);
			$res = $this->Util()->DB()->GetResult();

			$sql = "SELECT activityId
						FROM course c 
        					LEFT JOIN subject AS s 
            					ON s.subjectId = c.subjectId 
        					LEFT JOIN activity AS a 
            					ON a.subjectId = s.subjectId 
    						WHERE c.courseId = " . $aux["courseId"];
			$this->Util()->DB()->setQuery($sql);
			$acI = $this->Util()->DB()->GetSIngle();

			$sql = "SELECT c.courseId,
							c.group,
							s.name
						FROM course c
					INNER JOIN subject AS s 
						ON c.subjectId= s.subjectId
					WHERE c.subjectId = " . $aux["subjectId"] . " AND c.initialDate >= '" . $aux["initialDate"] . "'";
			$this->Util()->DB()->setQuery($sql);
			$availableGroups = $this->Util()->DB()->GetResult();

			$result[$key]["evaluadores"] = $res;
			$result[$key]["suEvaluador"] = $r;
			$result[$key]["suCapacitador"] = $cap;
			$result[$key]["suCapacitadorOriginal"] = $capori;
			$result[$key]["activityId"] = $acI;
			$result[$key]["availableGroups"] = $availableGroups;
		}
		return 	$result;
	}

	public function CertificacionStident2($Id)
	{


		$filtro = "";

		if ($Id) {
			$filtro .= " and alumnoId = " . $Id . "";
		}

		$sql = "
			SELECT 
				s.name as certificacion,
				u.alumnoId as userId,
				c.courseId,
				m.nombre as municipio,
				c.numero,
				at.activityId,
				c.group,
				s.subjectId
			FROM 
				user_subject as u
			left join course as c on c.courseId = u.courseId 
			left join subject as s on s.subjectId = c.subjectId 
			left join user as us on us.userId = u.alumnoId 
			left join municipio as m on m.municipioId = us.ciudadt 
			left join course_module as cm on cm.courseId = c.courseId 
			left join activity as at on at.courseModuleId = cm.courseModuleId 
			WHERE 1 " . $filtro . " group by s.subjectId";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return 	$result;
	}

	public function infoCertificacion($Id)
	{

		$sql = "
			SELECT 
				s.name as certificacion,
				c.initialDate,
				c.finalDate
			FROM 
				user_subject as u
			left join course as c on c.courseId = u.courseId 
			left join subject as s on s.subjectId = c.subjectId 
			left join user as us on us.userId = u.alumnoId 
			left join municipio as m on m.municipioId = us.ciudadt 
			left join course_module as cm on cm.courseId = c.courseId 
			left join activity as at on at.courseModuleId = cm.courseModuleId 
			WHERE c.courseId = " . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return 	$result;
	}

	public function extraeFirma($userId, $procesoId, $tablaId = null, $registroId = null)
	{

		switch ($procesoId) {

			case 1:
				$f = "";
				if ($registroId) {
					$f = " and registroFirmado = " . $registroId . "";
				}

				$sql = "
					SELECT 
						*
					FROM 
						firma
					WHERE userId = " . $userId . " and procesoId=" . $procesoId . " " . $f . "";

				$this->Util()->DB()->setQuery($sql);
				$result = $this->Util()->DB()->GetRow();
				if ($result["firma"] == null) {
					$sql = "
					SELECT 
						*
					FROM 
						firma
					WHERE userId = " . $userId . " and procesoId=2 and registroFirmado = " . $registroId . "";

					$this->Util()->DB()->setQuery($sql);
					$result = $this->Util()->DB()->GetRow();
				}

				break;

			case 2:
				$sql = "
					SELECT 
						*
					FROM 
						firma
					WHERE userId = " . $userId . " and procesoId=" . $procesoId . "";
				$this->Util()->DB()->setQuery($sql);
				$result = $this->Util()->DB()->GetRow();
				break;
		}



		return $result;
	}


	public function onSendFoto($userId)
	{

		$archivo = 'ine';
		foreach ($_FILES as $key => $var) {
			switch ($key) {
				case $archivo:
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];
						$url = DOC_ROOT;

						$foto_name = "foto_" . $userId . "." . $extencion;
						if (move_uploaded_file($temporal, $url . "/alumnos/" . $foto_name)) {
							$sql = 'UPDATE 		
								user SET 		
								rutaFoto = "' . $foto_name . '"			      		
								WHERE userId = ' . $userId . '';
							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->UpdateData();
						}
					}
					break;
			}
		}

		unset($_FILES);

		return true;
	}

	public function onDeleteFoto($id)
	{

		$sql = "SELECT 
					* 
				FROM 
					user
				WHERE
					userId = " . $id . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();




		@unlink(DOC_ROOT . '/alumnos/' . $info['rutaFoto']);
		$sql = 'UPDATE 		
			user SET 		
			rutaFoto = ""			      		
			WHERE userId = ' . $id . '';
		$this->Util()->DB()->setQuery($sql);


		$this->Util()->DB()->UpdateData();

		return true;
	}

	public function extraeUserCourse($pagess, $limit)
	{


		// $filtro = " limit 0,50"; 


		if ($limit)
			$filtro = " limit " . $pagess . "," . $limit . "";




		$sql = "
					SELECT 
						alumnoId,
						courseId,
						controlNumber,
						concat(names,lastNamePaterno,lastNamePaterno) as name
					FROM 
						user_subject as u
						left join user as us on us.userId = u.alumnoId
					WHERE acuseDerecho='si' " . $filtro . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		// exit;

		return $result;
	}


	public function extraeUserCourseEv($pagess, $limit)
	{


		// $filtro = " limit 0,50"; 


		if ($limit)
			$filtro = " limit " . $pagess . "," . $limit . "";




		$sql = "
					SELECT 
						u.alumnoId as id,
						activityId as cId,
						concat(names,lastNamePaterno,lastNamePaterno) as name
					FROM 
						user_subject as u
					left join user as us on us.userId = u.alumnoId
					left join course as c on c.courseId = u.courseId 
					left join course_module as cm on cm.courseId = c.courseId 
					left join activity as at on at.courseModuleId = cm.courseModuleId 
					WHERE acuseDerecho='si' " . $filtro . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		// exit;

		return $result;
	}

	public function gruposCertificacion($Id)
	{
		$sql = "SELECT * FROM  course as u WHERE subjectId = " . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function certificacionesEval($Id)
	{

		$sql = "
					SELECT 
						*
					FROM 
						personal_subject as p
					left join subject as s on s.subjectId = p.subjectId 
					WHERE personalId = " . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();


		return $result;
	}

	public function certificacionesCapacitador($id)
	{
		$sql = "SELECT subject.* FROM usuario_capacitador INNER JOIN subject ON subject.subjectId = usuario_capacitador.subjectId INNER JOIN user_subject ON user_subject.alumnoId = usuario_capacitador.usuarioId WHERE usuario_capacitador.personalId = {$id} GROUP BY subject.subjectId ORDER BY subject.name";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function certificacionesCapacitadorOriginal($id)
	{
		$sql = "SELECT subject.* FROM usuario_capacitador_original INNER JOIN subject ON subject.subjectId = usuario_capacitador_original.subjectId INNER JOIN user_subject ON user_subject.alumnoId = usuario_capacitador_original.usuarioId WHERE usuario_capacitador_original.personalId = {$id} GROUP BY subject.subjectId ORDER BY subject.name";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function GettDocumentos($Id)
	{

		$sql = "
					SELECT 
						*
					FROM 
						repositorio as r
					WHERE userId = " . $Id . "";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();


		return $result;
	}

	public function getStudentId()
	{
		$this->Util()->DB()->setQuery(
			"
							SELECT 
								userId 
							FROM 
								user 
							WHERE 
								email = '" . $this->getEmail() . "'
							"
		);
		return $this->Util()->DB()->GetSingle();
	}

	public function getFirma()
	{
		$this->Util()->DB()->setQuery(
			"
							SELECT 
								firma 
							FROM 
								user 
							WHERE 
								email = '" . $this->getEmail() . "'
							"
		);
		return $this->Util()->DB()->GetSingle();
	}

	function hasSurvey()
	{
		$this->Util()->DB()->setQuery("SELECT COUNT(*) FROM surveys WHERE userId = " . $this->userId . " AND subjectId = " . $this->subjectId);
		$total = $this->Util()->DB()->GetSingle();
		return ($total > 0 ? true : false);
	}

	function saveSurvey($answers, $comments)
	{
		try {
			$sql = "INSERT INTO surveys(userId, subjectId, date, comments) VALUES(" . $this->userId . ", " . $this->subjectId . ", CURDATE(), '" . $comments . "')";
			$this->Util()->DB()->setQuery($sql);
			$surveyId = $this->Util()->DB()->InsertData();
			$sql = "";
			for ($i = 1; $i < 9; $i++) {
				$affirmative = ($answers[$i][0] == 1 ? 1 : 0);
				$negative    = ($answers[$i][0] == 0 ? 1 : 0);
				$sql = "INSERT INTO survey_answers(surveyId, questionNumber, affirmative, negative, details) VALUES(" . $surveyId . ", " . $i . ", " . $affirmative . ", " . $negative . ", '" . $answers[$i][1] . "')";
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->InsertData();
			}
			return true;
		} catch (Exception $ex) {
			return false;
		}
	}

	function getDocumento($tipoDocumento)
	{
		$sql = "SELECT ruta FROM repositorio WHERE userId = " . $this->userId . " AND subjectId = " . $this->subjectId . " AND tipoDocumentoId = " . $tipoDocumento . " LIMIT 1";
		$this->Util()->DB()->setQuery($sql);
		$ruta = $this->Util()->DB()->GetSingle();
		return $ruta;
	}

	function getSurvey()
	{
		$sql = "SELECT *, DATE_FORMAT(date, '%d/%m/%Y') AS date_dmy FROM surveys WHERE userId = " . $this->userId . " AND subjectId = " . $this->subjectId;
		$this->Util()->DB()->setQuery($sql);
		$survey = $this->Util()->DB()->GetRow();

		$this->Util()->DB()->setQuery("SELECT * FROM survey_answers WHERE surveyId = " . $survey['surveyId'] . ' ORDER BY questionNumber ASC');
		$answers = $this->Util()->DB()->GetResult();

		$survey['answers'] = $answers;
		return $survey;
	}

	function StudentLive($status = NULL, $active = NULL)
	{

		if ($status != NULL)
			$status = " AND status = '" . $status . "'";

		if ($active != NULL)
			$active = " AND course.active = '" . $active . "'";
		$sql = "SELECT
					*, subject.name AS name, major.name AS majorName, repositorio.ruta AS certificacion_pdf, course_module.ytLive
				FROM
					user_subject
				LEFT JOIN course ON course.courseId = user_subject.courseId
				LEFT JOIN subject ON subject.subjectId = course.subjectId	
				LEFT JOIN major ON major.majorId = subject.tipo
				LEFT JOIN repositorio ON (repositorio.userId = alumnoId AND repositorio.subjectId = course.subjectId AND repositorio.tipodocumentoId = 5)
				INNER JOIN course_module ON course_module.courseId = course.courseId 
				WHERE course_module.ytLive <> '' AND alumnoId = '" . $this->getUserId() . "' " . $status . " " . $active . " 
				ORDER BY course_module.initialDate DESC LIMIT 1";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();
		return $result;
	}

	public function UpdateAutorizoFirma()
	{
		if ($this->Util()->PrintErrors()) {
			return false;
		}
		$sqlQuery = "UPDATE user SET autorizoFirma = '" . $this->autorizoFirma . "' WHERE userId = " . $this->getUserId();
		$this->Util()->DB()->setQuery($sqlQuery);
		$this->Util()->DB()->ExecuteQuery();
		$this->Util()->setError(10030, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	public function Attendance($userId, $courseId, $personalId, $attendanceDay, $typeAttendance)
	{
		$sql = "SELECT COUNT(attendanceId) FROM pc_attendance_list WHERE userId = " . $userId . " AND courseId = " . $courseId . " AND personalId = " . $personalId . " AND attendanceDay = '" . $attendanceDay . "' AND typeAttendance = '" . $typeAttendance . "'";
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		$attendance = true;
		if ($total == 0)
			$attendance = false;
		return $attendance;
	}

	public function AttendanceOriginal($userId, $courseId, $attendanceDay, $typeAttendance)
	{
		$sql = "SELECT COUNT(attendanceId) FROM pc_attendance_list WHERE userId = " . $userId . " AND courseId = " . $courseId . " AND attendanceDay = '" . $attendanceDay . "' AND typeAttendance = '" . $typeAttendance . "'";
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		$attendance = true;
		if ($total == 0)
			$attendance = false;
		return $attendance;
	}

	public function ActualizarEstadoMunicipio()
	{
		$sql = "UPDATE user SET 
		estadot='" . $this->getEstadoT() . "',
		ciudadt='" . $this->getCiudadT() . "' 
		WHERE userId = '" . $this->getUserId() . "' ";
		$this->Util()->DB()->setQuery($sql);
		$result = [];
		$result['actualizado'] = $this->Util()->DB()->UpdateData();
		if ($result['actualizado']) {
			$sql = "SELECT nombre FROM municipio WHERE municipioId = '" . $this->getCiudadT() . "' ";
			$this->Util()->DB()->setQuery($sql);
			$municipio = $this->Util()->DB()->GetSingle();
			$sql = "SELECT nombre FROM estado WHERE estadoId = '" . $this->getEstadoT() . "' ";
			$this->Util()->DB()->setQuery($sql);
			$estado = $this->Util()->DB()->GetSingle();
			$result['municipio'] = $municipio;
			$result['estado'] = $estado;
		}
		return $result;
	}

	public function actualizarPermisoMunicipio($permiso)
	{
		$sql = "UPDATE municipio SET permiso = '{$permiso}' WHERE municipioId = '{$this->getCiudadT()}'";
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
	}
}
