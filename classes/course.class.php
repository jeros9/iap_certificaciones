<?php

class Course extends Subject
{
	private $ponenteText;
	private $nombre;
	private $precio;
	private $idfire;
	private $id;
	private $dias;
	private $horario;
	private $aparece;
	private $listar;
	private $tarifa;
	private $tarifaDr;
	private $hora;
	private $activo;
	private $modalidad;
	private $curricula;
	private $subtotal;
	private $tipoCuatri;
	private $name;
	private $numero;
	private $peso;
	private $periodId;
	private $initialDateTraining;
	private $finalDateTraining;


	public function setNumero($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Nombre ');
		$this->numero = $value;
	}

	public function setSubjectId($value)
	{
		// $this->Util()->ValidateString($value, 255, 0, 'Nombre ');
		$this->subjectId = $value;
	}

	public function setName($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Nombre ');
		$this->name = $value;
	}

	public function setPeso($value)
	{
		$this->peso = $value;
	}


	public function setTipoCuatri($value)
	{
		$this->tipoCuatri = $value;
	}

	public function setSubtotal($value)
	{
		$this->subtotal = $value;
	}

	public function setActivo($value)
	{
		$this->activo = $value;
	}

	public function setModalidad($value)
	{
		$this->modalidad = $value;
	}

	public function setCurricula($value)
	{
		$this->curricula = $value;
	}

	public function setId($value)
	{
		$this->id = $value;
	}

	public function setAparece($value)
	{
		// $this->Util()->ValidateString($value, 255, 0, 'Nombre');
		$this->aparece = $value;
	}

	public function setListar($value)
	{
		// $this->Util()->ValidateString($value, 255, 0, 'Nombre');
		$this->listar = $value;
	}

	public function setNombre($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Nombre');
		$this->nombre = $value;
	}

	public function setTarifa($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Tarifa');
		$this->tarifa = $value;
	}


	public function setTarifaDr($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Tarifa');
		$this->tarifaDr = $value;
	}

	public function setHora($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Hora');
		$this->hora = $value;
	}

	public function setDias($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Dias');
		$this->dias = $value;
	}

	public function setHorario($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Horario');
		$this->horario = $value;
	}

	public function setPrecio($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Precio');
		$this->precio = $value;
	}

	public function setFire($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'ID Fire');
		$this->idfire = $value;
	}

	public function setPonenteText($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Texto Ponente');
		$this->ponenteText = $value;
	}

	private $fechaDi2ploma;
	public function setFechaDiploma($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Fecha Diploma');
		$this->fechaDiploma = $value;
	}

	private $backDiploma;
	public function setBackDiploma($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Parte trasera del diploma');
		$this->backDiploma = $value;
	}

	private $folio;
	public function setFolio($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Folio');
		$this->folio = $value;
	}

	private $libro;
	public function setLibro($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Libro');
		$this->libro = $value;
	}

	private $group;

	public function setGroup($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Grupo');
		$this->group = $value;
	}

	public function getGroup()
	{
		return $this->group;
	}

	private $turn;

	public function setTurn($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Turno');
		$this->turn = $value;
	}

	public function getTurn()
	{
		return $this->turn;
	}

	private $scholarCicle;

	public function setScholarCicle($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Ciclo Escolar');
		$this->scholarCicle = $value;
	}

	public function getScholarCicle()
	{
		return $this->scholarCicle;
	}

	private $modality;

	public function setModality($value)
	{
		//$this->Util()->ValidateString($value, 255, 1, 'Modalidad');
		$this->modality = $value;
	}

	public function getModality()
	{
		return $this->modality;
	}

	private $initialDate;

	public function setInitialDate($value)
	{
		$this->Util()->ValidateString($value, 255, 1, 'Fecha Inicial');
		$value = $this->Util()->FormatDateMySql($value);

		$explode = explode("-", $value);
		if (strlen($explode[0]) == 2) {
			$value = $this->Util()->FormatDateBack($value);
		}

		$this->initialDate = $value;
	}

	public function getInitialDate()
	{
		return $this->initialDate;
	}

	private $finalDate;

	public function setFinalDate($value)
	{
		$this->Util()->ValidateString($value, 255, 0, 'Fecha Final');
		$value = $this->Util()->FormatDateMySql($value);

		$explode = explode("-", $value);
		if (strlen($explode[0]) == 2) {
			$value = $this->Util()->FormatDateBack($value);
		}

		$this->finalDate = $value;
	}

	public function getFinalDate()
	{
		return $this->finalDate;
	}

	private $daysToFinish;

	public function setDaysToFinish($value)
	{
		$this->Util()->ValidateInteger($value, 3000, 0);
		$this->daysToFinish = $value;
	}

	public function getDaysToFinish()
	{
		return $this->daysToFinish;
	}


	private $personalId;

	public function setPersonalId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->personalId = $value;
	}

	public function getPersonalId()
	{
		return $this->personalId;
	}

	private $teacherId;

	public function setTeacherId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->teacherId = $value;
	}

	public function getTeacherId()
	{
		return $this->teacherId;
	}

	private $tutorId;

	public function setTutorId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->tutorId = $value;
	}

	public function getTutorId()
	{
		return $this->tutorId;
	}

	private $extraId;

	public function setExtraId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->extraId = $value;
	}

	public function getExtraId()
	{
		return $this->extraId;
	}

	private $active;

	public function setActive($value)
	{
		$this->Util()->ValidateString($value, 10, 1, 'Activo');
		$this->active = $value;
	}

	public function getActive()
	{
		return $this->active;
	}

	private $courseId;
	public function setCourseId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->courseId = $value;
		//echo $this->courseId;
	}

	public function getCourseId()
	{
		return $this->courseId;
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

	public function setInitialDateTraining($value)
	{
		$this->Util()->ValidateString($value, 255, 1, 'Fecha Inicial de Capacitación');
		$value = $this->Util()->FormatDateMySql($value);
		$explode = explode("-", $value);
		if (strlen($explode[0]) == 2)
			$value = $this->Util()->FormatDateBack($value);
		$this->initialDateTraining = $value;
	}

	public function getInitialDateTraining()
	{
		return $this->initialDateTraining;
	}

	public function setFinalDateTraining($value)
	{
		$this->Util()->ValidateString($value, 255, 1, 'Fecha Inicial de Capacitación');
		$value = $this->Util()->FormatDateMySql($value);
		$explode = explode("-", $value);
		if (strlen($explode[0]) == 2)
			$value = $this->Util()->FormatDateBack($value);
		$this->finalDateTraining = $value;
	}

	public function getFinalDateTraining()
	{
		return $this->finalDateTraining;
	}


	public function EnumerateCount()
	{

		$filtro = "";

		// if($this->aparece){
		// $filtro .= " and course.apareceTabla ='si'";
		// }

		$sql =   "SELECT COUNT(*) FROM course";

		// exit;
		$this->Util()->DB()->setQuery($sql);
		return $this->Util()->DB()->GetSingle();
	}


	public function Infocoursem()
	{
		$sql = "SELECT *, major.name AS majorName, subject.name AS name  FROM course
				LEFT JOIN subject ON course.subjectId = subject.subjectId 
				LEFT JOIN major ON major.majorId = subject.tipo where course.courseId='" . $this->courseId . "' ";
		$this->Util()->DB()->setQuery($sql);
		$datos = $this->Util()->DB()->GetResult();

		foreach ($datos as $dato) {
			$majorName = $dato['majorName'];
		}
		return $majorName;
	}

	public function EnumerateCertificacions()
	{
		$sql = '
				SELECT *, major.name AS majorName, subject.name AS name  FROM subject
				LEFT JOIN major ON major.majorId = subject.tipo
				where 1 ' . $filtro . '
				ORDER BY 
				 subject.name
				
				';
		$this->Util()->DB()->setQuery($sql);

		$result = $this->Util()->DB()->GetResult();

		return 	$result;
	}

	public function EnumerateByPage($currentPage, $rowsPerPage, $pageVar, $pageLink, &$arrPages)
	{

		$filtro = "";

		// if($this->aparece){
		// $filtro .= " and course.apareceTabla ='si'";
		// }


		if ($this->activo) {
			$filtro .= " and course.active ='" . $this->activo . "'";
		}


		if ($this->modalidad) {
			$filtro .= " and course.modality ='" . $this->modalidad . "'";
		}

		if ($this->curricula) {
			$filtro .= " and majorId ='" . $this->curricula . "'";
		}

		//variable donde guardaremos los registros de la pagina actual y que se regresara para su visualizacion
		$result = NULL;

		// Verificar que este definido el metodo CountTotalRows en esta clase
		//$totalTableRows...total de registros que hay en la tabla, usado para calcular el numero de paginas
		$totalTableRows = $this->EnumerateCount();

		//***calculamos el numero total de paginas, si hay fracciones es porque los ultimos 
		//		registros no completan la pagina ($rowsPerPage) pero se calculan como una pagina mas con ceil()
		@$totalPages = ceil($totalTableRows / $rowsPerPage);
		// exit;

		//validamos el valor de la pagina...no puede ser menor a 1 ni mayor al total de las paginas
		if ($currentPage < 1)
			$currentPage = 1;
		if ($currentPage > $totalPages)
			$currentPage = $totalPages;

		// ***calculamos y guardamos el numero de registro inicial que se va a rcuperar
		$arrPages['rowBegin']	= ($currentPage * $rowsPerPage) - $rowsPerPage + 1;
		//calcular el desplazamiento de los registros a recuperar
		$rowOffset = $arrPages['rowBegin'] - 1;

		if ($rowOffset < 0) {

			$rowOffset = 0;
		}

		// $sql = '
		// SELECT *, major.name AS majorName, subject.name AS name  FROM course
		// LEFT JOIN subject ON course.subjectId = subject.subjectId 
		// LEFT JOIN major ON major.majorId = subject.tipo
		// where 1 '.$filtro.'
		// ORDER BY 
		// FIELD (major.name,"MAESTRIA","DOCTORADO","CURSO","ESPECIALIDAD") asc, subject.name, modality desc, initialDate desc,  active

		// LIMIT ' . $rowOffset . ', ' . $rowsPerPage;
		// exit;
		$sql = '
				SELECT *, major.name AS majorName, subject.name AS name  FROM subject
				LEFT JOIN major ON major.majorId = subject.tipo
				where 1 ' . $filtro . '
				ORDER BY 
				subjectId desc
				
				LIMIT ' . $rowOffset . ', ' . $rowsPerPage;
		$this->Util()->DB()->setQuery($sql);

		$result = $this->Util()->DB()->GetResult();
		// echo "<pre>"; print_r($result);
		// exit;

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

			$this->Util()->DB()->setQuery("
					SELECT COUNT(*) FROM course_module WHERE courseId ='" . $res["courseId"] . "' AND active = 'si'");
			$result[$key]["courseModuleActive"] = $this->Util()->DB()->GetSingle();

			$this->Util()->DB()->setQuery("
					SELECT COUNT(*) FROM course_module WHERE courseId ='" . $res["courseId"] . "'");

			$result[$key]["courseModule"] = $this->Util()->DB()->GetSingle();
		}

		//print_r($result);
		//$countPageRows...total de registros recuperados en la pagina actual, 
		$countPageRows = count($result);
		//***guardamos el numero de registros recuperados en la pagina actual
		$arrPages['countPageRows'] = $countPageRows;
		//***calculamos y guardamos el numero de registro final que se va a recuperar
		$arrPages['rowEnd']		= $arrPages['rowBegin'] + $countPageRows - 1;
		//***guardamos el numero total de registros que hay en la tabla
		$arrPages['totalTableRows'] = $totalTableRows;
		//***guardamos los registros por pagina a mostrar
		$arrPages['rowsPerPages'] = $rowsPerPages;
		//***guardamos la pagina actual que estamos mostrando
		$arrPages['currentPage'] = $currentPage;
		//***guardamos el total de paginas
		$arrPages['totalPages']	= $totalPages;

		//***por default los enlaces inicio y anterior estan vacios
		$arrPages['startPage'] = '';
		$arrPages['previusPage'] = '';
		if ($currentPage > 1) {
			//***si la pagina actual es mayor a 1, se activa el enlace anterior
			$arrPages['previusPage'] = $pageLink . '/' . $pageVar . '/' . ($currentPage - 1);
			//***si la pagina actual es mayor a 2, se activa el enlace inicio
			if ($currentPage > 2)
				$arrPages['startPage'] = $pageLink . '/' . $pageVar . '/' . '1';
		}
		//***por default los enlaces siguiente y fin estan vacios
		$arrPages['nextPage'] = '';
		$arrPages['endPage'] = '';
		if ($currentPage < $arrPages['totalPages']) {
			//***si la pagina actual es menor al total de paginas, se activa el enlace siguiente
			$arrPages['nextPage'] = $pageLink . '/' . $pageVar . '/' . ($currentPage + 1);
			//***si la pagina actual es menor al (total de paginas - 1), se activa el enlace fin
			if ($currentPage < ($arrPages['totalPages'] - 1))
				$arrPages['endPage'] = $pageLink . '/' . $pageVar . '/' . $arrPages['totalPages'];
		}
		//enlace hacia la misma pagina para poder actualizar los valores de los datos
		$arrPages['refreshPage'] = $pageLink . '/' . $pageVar . '/' . $currentPage;
		//regresamos los registros recuperados de la pagina actual
		return $result;
	}

	public function EnumerateCourse()
	{

		// echo "<pre>"; print_r($_POST);
		// exit;
		$filtro = "";

		if ($this->aparece) {
			$filtro .= " and course.apareceTabla ='si'";
		}

		if ($_POST["curricula"]) {

			$filtro .= " and subject.subjectId =" . $_POST["curricula"] . "";
		}



		$sql = 'SELECT *, 
						major.name AS majorName, 
						subject.name AS name,
						pcp.name AS periodName,
						(SELECT gft.testId FROM group_final_test gft WHERE gft.courseId = course.courseId) AS testId
					FROM course
					LEFT JOIN subject 
						ON course.subjectId = subject.subjectId 
					LEFT JOIN major 
						ON major.majorId = subject.tipo
					LEFT JOIN pc_periods pcp 
						ON course.periodId = pcp.periodId 
					WHERE 1 ' . $filtro . '
					ORDER BY subject.tipo,  subject.name,  course.modality, initialDate';
		// exit;
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

			$this->Util()->DB()->setQuery("
					SELECT COUNT(*) FROM course_module WHERE courseId ='" . $res["courseId"] . "' AND active = 'si'");
			$result[$key]["courseModuleActive"] = $this->Util()->DB()->GetSingle();

			$this->Util()->DB()->setQuery("
					SELECT COUNT(*) FROM course_module WHERE courseId ='" . $res["courseId"] . "'");

			$result[$key]["courseModule"] = $this->Util()->DB()->GetSingle();
		}


		return $result;
	}

	public function Open()
	{
		if ($this->Util()->PrintErrors()) {
			// si hay errores regresa false
			return false;
		}

		$sql = "INSERT INTO
						subject
						( 	
						 	name,
						 	tipo,
							peso
						)
					VALUES (
							'" . $this->name . "',
							'" . $_POST["subjectId"] . "',
							'" . $this->peso . "'
							)";
		$this->Util()->DB()->setQuery($sql);
		$subjectId = $this->Util()->DB()->InsertData();

		if (!empty($_FILES["estandar"]["name"])) {
			if (move_uploaded_file($_FILES['estandar']['tmp_name'], DOC_ROOT . '/files/estandares/' . $subjectId . '.pdf')) {
				$sql = "UPDATE subject SET file_pdf = '" . $subjectId . ".pdf' WHERE subjectId = " . $subjectId;
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
		}

		$sql = "INSERT INTO
						subject_module
						( 	
						 	subjectId
						)
					VALUES (
							'" . $_POST["subjectId"] . "'
							)";
		$this->Util()->DB()->setQuery($sql);
		$subId = $this->Util()->DB()->InsertData();


		// $sql = "INSERT INTO
		// course
		// ( 	
		// subjectId,
		// initialDate,
		// finalDate,
		// daysToFinish,
		// `group`,
		// turn,
		// scholarCicle,
		// active,
		// modality,
		// libro,
		// folio,
		// access,
		// dias,
		// horario,
		// apareceTabla,
		// listar,
		// tipo,
		// numero
		// )
		// VALUES (
		// '" . $subjectId . "',
		// '" . $this->initialDate . "',
		// '" . $this->finalDate . "',
		// '" . $this->daysToFinish . "',
		// '" . $this->group . "',
		// '" . $this->turn . "',
		// '" . $this->scholarCicle . "',
		// '" . $this->active . "',
		// '" . $this->modality . "',
		// '" . $this->libro . "',
		// '" . $this->folio . "',
		// '".$this->personalId."|".$this->teacherId."|".$this->tutorId."|".$this->extraId."',
		// '".$this->dias."',
		// '".$this->horario."',
		// '".$this->aparece."',
		// '".$this->listar."',
		// '".$this->tipoCuatri."',
		// '".$this->numero."'
		// )";

		// $this->Util()->DB()->setQuery($sql);
		// $result = $this->Util()->DB()->InsertData();
		// $sql = "INSERT INTO
		// course_module
		// ( 	
		// courseId,
		// subjectModuleId,
		// initialDate,
		// finalDate
		// )
		// VALUES (
		// '" . $result . "',
		// '" . $subId . "',
		// '" . $this->initialDate . "',
		// '" . $this->finalDate . "'
		// )";
		// $this->Util()->DB()->setQuery($sql);
		// $this->Util()->DB()->InsertData();




		if ($subId > 0) {
			//si el resultado es mayor a cero, se inserto el nuevo registro con exito...se regresara true
			$result = true;
			$this->Util()->setError(90000, 'complete', "Se ha abierto un nuevo curso");
		} else {
			//si el resultado es cero, no se pudo insertar el nuevo registro...se regresara false
			$result = false;
			$this->Util()->setError(90010, 'error');
		}
		$this->Util()->PrintErrors();
		return $result;
	}


	public function OpenGrupo()
	{
		if ($this->Util()->PrintErrors()) {
			return false;
		}


		if ($this->courseId) {

			$sql = "UPDATE 
						course
					SET
						 
						subjectId='" 	. $this->subjectId . "',
						initialDate='" 	. $this->initialDate . "',
						finalDate='" 	. $this->finalDate . "',
						initialDateTraining='" 	. $this->initialDateTraining . "',
						finalDateTraining='" 	. $this->finalDateTraining . "',
						daysToFinish='" 	. $this->daysToFinish . "',
						active='" 	. $this->active . "',
						`group`='" 	. $this->group . "',
						turn='" 	. $this->turn . "',
						scholarCicle='" 	. $this->scholarCicle . "',
						folio='" 	. $this->folio . "',
						libro='" 	. $this->libro . "',
						backDiploma='" 	. $this->backDiploma . "',
						modality='" 	. $this->modality . "',
						ponenteText='" 	. $this->ponenteText . "',
						fechaDiploma='" 	. $this->fechaDiploma . "',
						dias='" . $this->dias . "',
						horario='" . $this->horario . "',
						tipo='" . $this->tipoCuatri . "',
						apareceTabla='" . $this->aparece . "',
						listar='" . $this->listar . "',
						numero='" . $this->numero . "',
						periodId='" . $this->periodId . "',
						access='" . $this->personalId . "|" . $this->teacherId . "|" . $this->tutorId . "|" . $this->extraId . "'
						WHERE courseId='" . utf8_decode($this->courseId) . "'";

			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
			$subId = 1;
		} else {
			$sql = "INSERT INTO
						course
						( 	
						 	subjectId,
							initialDate,
							finalDate,
							initialDateTraining,
							finalDateTraining,
							daysToFinish,
							`group`,
							turn,
							scholarCicle,
							active,
							modality,
							libro,
							folio,
							access,
							dias,
							horario,
							apareceTabla,
							listar,
							tipo,
							numero,
							periodId
						)
					VALUES (
							'" . $this->subjectId . "',
							'" . $this->initialDate . "',
							'" . $this->finalDate . "',
							'" . $this->initialDateTraining . "',
							'" . $this->finalDateTraining . "',
							'" . $this->daysToFinish . "',
							'" . $this->group . "',
							'" . $this->turn . "',
							'" . $this->scholarCicle . "',
							'" . $this->active . "',
							'" . $this->modality . "',
							'" . $this->libro . "',
							'" . $this->folio . "',
							'" . $this->personalId . "|" . $this->teacherId . "|" . $this->tutorId . "|" . $this->extraId . "',
							'" . $this->dias . "',
							'" . $this->horario . "',
							'" . $this->aparece . "',
							'" . $this->listar . "',
							'" . $this->tipoCuatri . "',
							'" . $this->numero . "',
							'" . $this->periodId . "'
							)";

			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->InsertData();
			$sql = "INSERT INTO
							course_module
							( 	
								courseId,
								subjectModuleId,
								initialDate,
								finalDate
							)
						VALUES (
								'" . $result . "',
								'" . $subId . "',
								'" . $this->initialDate . "',
								'" . $this->finalDate . "'
								)";
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->InsertData();
		}


		if ($subId > 0) {
			$result = true;
			$this->Util()->setError(90000, 'complete', "Se ha abierto un nuevo curso");
		} else {
			$result = false;
			$this->Util()->setError(90010, 'error');
		}
		$this->Util()->PrintErrors();
		return true;
	}


	public function Update()
	{
		if ($this->Util()->PrintErrors()) {
			// si hay errores regresa false
			return false;
		}

		// $sql = '
		// SELECT subjectId FROM course
		// where courseId = '.$this->courseId.'';
		// $this->Util()->DB()->setQuery($sql);
		// $info = $this->Util()->DB()->GetRow();


		$sql = "UPDATE 
						subject
					SET
						name='" . $this->name . "',
						peso='" . $this->peso . "'
						WHERE subjectId='" . $_POST["courseId"] . "'";

		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		if (!empty($_FILES["estandar"]["name"])) {
			$subjectId = $_POST["courseId"];
			if (move_uploaded_file($_FILES['estandar']['tmp_name'], DOC_ROOT . '/files/estandares/' . $subjectId . '.pdf')) {
				$sql = "UPDATE subject SET file_pdf = '" . $subjectId . ".pdf' WHERE subjectId = " . $subjectId;
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
		}

		//

		// $sql = "UPDATE 
		// course
		// SET

		// initialDate='" 	. $this->initialDate . "',
		// finalDate='" 	. $this->finalDate . "',
		// daysToFinish='" 	. $this->daysToFinish . "',
		// active='" 	. $this->active . "',
		// `group`='" 	. $this->group . "',
		// turn='" 	. $this->turn . "',
		// scholarCicle='" 	. $this->scholarCicle . "',
		// folio='" 	. $this->folio . "',
		// libro='" 	. $this->libro . "',
		// backDiploma='" 	. $this->backDiploma . "',
		// modality='" 	. $this->modality . "',
		// ponenteText='" 	. $this->ponenteText . "',
		// fechaDiploma='" 	. $this->fechaDiploma . "',
		// dias='".$this->dias."',
		// horario='".$this->horario."',
		// tipo='".$this->tipoCuatri."',
		// apareceTabla='".$this->aparece."',
		// listar='".$this->listar."',
		// numero='".$this->numero."',
		// access='".$this->personalId."|".$this->teacherId."|".$this->tutorId."|".$this->extraId."'
		// WHERE courseId='" . utf8_decode($this->courseId) . "'";

		// $this->Util()->DB()->setQuery($sql);
		// $this->Util()->DB()->UpdateData();
		$result = 1;
		if ($result > 0) {
			//si el resultado es mayor a cero, se actualizo el registro con exito
			$result = true;
			// $this->Util()->setError(90002,'complete', 'El curso se ha actualizado correctamente');
		} else {
			//si el resultado es cero, no se pudo modificar el registro...se regresa false
			// $result = false;
			// $this->Util()->setError(90011,'error', "No se pudo modificar el curso");
		}
		// $this->Util()->PrintErrors();
		return $result;
	}

	public function Delete()
	{
		if ($this->Util()->PrintErrors()) {
			// si hay errores regresa false
			return false;
		}
		//si no hay errores
		//creamos la cadena de eliminacion
		$sql = "DELETE FROM 
						course 
					WHERE 
						courseId='" . $this->courseId . "'";
		//configuramos la consulta con la cadena de eliminacion
		$this->Util()->DB()->setQuery($sql);
		//ejecutamos la consulta y regresamos el resultado, que sera el numero de columnas afectadas
		$result = $this->Util()->DB()->DeleteData();
		if ($result > 0) {
			//si el resultado es mayor a cero, se actualizo el registro con exito
			$result = true;
			$this->Util()->setError(90001, 'complete', "Se ha eliminado el curso correctamente");
		} else {
			//si el resultado es cero, no se pudo modificar el registro...se regresa false
			$result = false;
			$this->Util()->setError(90012, 'error');
		}
		$this->Util()->PrintErrors();
		return $result;
	}



	public function Info_modality()
	{
		//creamos la cadena de seleccion
		$sql = "SELECT 
						*, major.name AS majorName, subject.name AS name 
					FROM
						course
					LEFT JOIN subject ON subject.subjectId = course.subjectId
					LEFT JOIN major ON major.majorId = subject.tipo
					WHERE
						courseId='" . $this->courseId . "'   &&  modality='" . $this->modality . "'  ";
		//configuramos la consulta con la cadena de actualizacion

		//$sql="select ";

		$this->Util()->DB()->setQuery($sql);
		//ejecutamos la consulta y obtenemos el resultado
		$result = $this->Util()->DB()->GetRow();
		if ($result) {
			//				$result = $this->Util->EncodeRow($result);
		}

		$result["access"] = explode("|", $result["access"]);

		$user = new User;
		$user->setUserId($result["access"][0]);
		$info = $user->Info();
		$result["encargado"] = $info;
		return $result;
	}



	public function Info()
	{
		//creamos la cadena de seleccion
		$sql = "SELECT 
						*, 
						major.name AS majorName, 
						subject.name AS name,
						course.tipo as tipoCuatri,
						(DATEDIFF(course.finalDateTraining, course.initialDateTraining) + 1) AS courseDays,
						((DATEDIFF(course.finalDateTraining, course.initialDateTraining) + 1)*2) AS totalAttendance
					FROM
						course
					LEFT JOIN subject ON subject.subjectId = course.subjectId
					LEFT JOIN major ON major.majorId = subject.tipo
					WHERE
						courseId='" . $this->courseId . "'";
		//configuramos la consulta con la cadena de actualizacion

		//$sql="select ";

		$this->Util()->DB()->setQuery($sql);
		//ejecutamos la consulta y obtenemos el resultado
		$result = $this->Util()->DB()->GetRow();

		// echo "<pre>"; print_r($result);
		// exit;
		if ($result) {
			//				$result = $this->Util->EncodeRow($result);
		}

		$result["access"] = explode("|", $result["access"]);

		$user = new User;
		$user->setUserId($result["access"][0]);
		$info = $user->Info();
		$result["encargado"] = $info;
		return $result;
	}

	public function EnumerateAll()
	{

		$this->Util()->DB()->setQuery("
				SELECT *, major.name AS majorName, subject.name AS name FROM course
				LEFT JOIN subject ON course.subjectId = subject.subjectId 
				LEFT JOIN major ON major.majorId = subject.tipo
				ORDER BY subject.tipo");
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function EnumerateActive()
	{
		//TODO porque tenia IN(0) no logro recordar -> Para mostrar solo los cursos en donde si se pueden inscribir
		//				WHERE course.active = 'si' AND courseId IN (0)

		$this->Util()->DB()->setQuery("
				SELECT *, major.name AS majorName, subject.name AS name FROM course
				LEFT JOIN subject ON course.subjectId = subject.subjectId 
				LEFT JOIN major ON major.majorId = subject.tipo
				WHERE course.active = 'si' AND listar = 'si'
				ORDER BY subject.tipo, subject.name, course.group");
		//echo $this->Util()->DB()->query;
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $res) {
			$result[$key]["initialDateStamp"] = strtotime($result[$key]["initialDate"]);
			$result[$key]["finalDateStamp"] = strtotime($result[$key]["finalDate"]);

			$toFinishSeconds = $result[$key]["daysToFinish"] * 3600 * 24;

			$result[$key]["daysToFinishStamp"] = strtotime($result[$key]["initialDate"]) + $toFinishSeconds;
		}
		return $result;
	}

	function EnumerateAlumn($courseId, $status)
	{
		$this->Util()->DB()->setQuery("
				SELECT * FROM user_subject
				LEFT JOIN user ON user_subject.alumnoId = user.userId 
				WHERE user_subject.courseId = '" . $courseId . "'
					AND user_subject.status = '" . $status . "'
				ORDER BY user.lastNamePaterno ASC, user.lastNameMaterno ASC, names ASC");
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	function FreeCourseModules()
	{
		$info = $this->Info();
		$this->Util()->DB()->setQuery("
				SELECT * FROM subject_module
				WHERE subject_module.subjectId = '" . $info["subjectId"] . "'
				ORDER BY semesterId ASC, name ASC");
		$result = $this->Util()->DB()->GetResult();
		foreach ($result as $key => $value) {
			$this->Util()->DB()->setQuery("
				SELECT * FROM course_module
				WHERE subjectModuleId = '" . $value["subjectModuleId"] . "' AND courseId = '" . $this->courseId . "'");
			$row = $this->Util()->DB()->GetRow();

			if ($row) {
				unset($result[$key]);
			}
		}
		return $result;
	}

	function AddedCourseModules()
	{
		$info = $this->Info();
		$this->Util()->DB()->setQuery("
				SELECT * FROM course_module
				LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
				WHERE courseId = '" . $info["courseId"] . "'
				ORDER BY semesterId ASC, name ASC");
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	function AddedCourseModules_modality()
	{
		$info = $this->Info_modality();
		$this->Util()->DB()->setQuery("
				SELECT * FROM course_module
				LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
				WHERE courseId = '" . $info["courseId"] . "'
				ORDER BY semesterId ASC, name ASC");
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}


	function cuatriSolicitudes()
	{

		$info = $this->Info();

		$sql = "
				SELECT semesterId FROM course_module
				LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
				WHERE courseId = '" . $info["courseId"] . "'
				group BY semesterId ASC";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $aux) {
			$materias = 0;
			$sql = "
					SELECT 
						sum(cms.calificacion) as cl,
						count(cms.calificacion) as c
					FROM course_module
					LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
					LEFT JOIN course_module_score as cms ON cms.courseModuleId = course_module.courseModuleId
					WHERE 
						subject_module.semesterId = " . $aux['semesterId'] . " and 
						userId = " . $_SESSION["User"]["userId"] . " and 
						calificacionValida = 'si'";

			$this->Util()->DB()->setQuery($sql);
			$materias = $this->Util()->DB()->GetRow();

			$result[$key]['promedio'] = $materias['cl'] / $materias['c'];
		}


		return $result;
	}

	function StudentCourseModulesInbox()
	{
		$info = $this->Info();

		$sql = "
				SELECT * FROM course_module
				LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
				WHERE courseId = '" . $info["courseId"] . "'
				ORDER BY semesterId ASC, initialDate ASC";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		//print_r($result);exit;
		foreach ($result as $key => $res) {

			//verifica si el alumno ya completo la encuesta
			$sql = "
					SELECT count(*)
					FROM eval_alumno_docente
					WHERE courseModuleId = '" . $res['courseModuleId'] . "' and alumnoId = " . $_SESSION["User"]["userId"] . "";
			$this->Util()->DB()->setQuery($sql);
			$countEval = $this->Util()->DB()->GetSingle();

			$sql = "
					SELECT 
						*
					FROM 
						course_module_score as c
					LEFT JOIN course_module as cm on cm.courseModuleId = c.courseModuleId
					WHERE 
						c.courseModuleId = '" . $res['courseModuleId'] . "' 
						and c.userId = " . $_SESSION["User"]["userId"] . " 
						and c.courseId = " . $info["courseId"] . "
						and cm.calificacionValida = 'si' ";

			$this->Util()->DB()->setQuery($sql);
			$infoCc = $this->Util()->DB()->GetRow();

			// $infoCc['calificacion'] = 8;
			// echo $info['majorName'];
			// exit;

			if ($infoCc['calificacion'] == '') {
				$infoCc['calificacion'] = 'En proceso';
			} else if ($infoCc['calificacion'] < 7 and $info['majorName'] == 'MAESTRIA') {
				$infoCc['calificacion'] = '<font color="red">' . $infoCc['calificacion'] . '</font>';
			} else if ($infoCc['calificacion'] < 8 and $info['majorName'] == 'DOCTORADO') {
				$infoCc['calificacion'] = '<font color="red">' . $infoCc['calificacion'] . '</font>';
			} else if ($infoCc['calificacion'] <= 6) {
				$infoCc['calificacion'] = '<font color="red">' . $infoCc['calificacion'] . '</font>';
			}



			$result[$key]["finalDate"] = $result[$key]["finalDate"] . " 23:59:59";
			$result[$key]["initialDateStamp"] = strtotime($result[$key]["initialDate"]);
			$result[$key]["finalDateStamp"] = strtotime($result[$key]["finalDate"]);

			$toFinishSeconds = $result[$key]["daysToFinish"] * 3600 * 24;

			$result[$key]["daysToFinishStamp"] = strtotime($result[$key]["initialDate"]) + $toFinishSeconds;
			//echo $result[$key]["finalDateStamp"]."+".$toFinishSeconds."=".$result[$key]["daysToFinishStamp"]."<br/>" ;
			$student = new Student;
			$result[$key]["totalScore"] = $student->GetAcumuladoCourseModule($res["courseModuleId"]);
			$result[$key]["calificacionFinal"] = $infoCc['calificacion'];
			$result[$key]["countEval"] = $countEval;

			$timestamp = time();

			if ($timestamp < $result[$key]["initialDateStamp"]) {
				$statusCCi = 'No iniciado';
			} else {
				if ($result[$key]["finalDateStamp"] > 0 and $timestamp > $result[$key]["finalDateStamp"]) {
					$statusCCi = 'Finalizado';
				} else if ($res['active'] == "no") {
					$statusCCi = 'Finalizado';
				} else if ($result[$key]["finalDateStamp"] <= 0 and $initialDateStamp < $result[$key]["daysToFinishStamp"] and $timestamp > $result[$key]["daysToFinishStamp"]) {
					$statusCCi = 'Finalizado';
				} else {
					$statusCCi = 'Activo';
				}
			}

			$result[$key]["statusCCi"] = $statusCCi;
		}

		return $result;
	}


	// StudentCourseModulesCuatri


	function StudentCourseModules()
	{
		$info = $this->Info();

		$sql = "
				SELECT * FROM course_module
				LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
				WHERE courseId = '" . $info["courseId"] . "'
				ORDER BY semesterId ASC, initialDate ASC";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		//print_r($result);exit;
		foreach ($result as $key => $res) {

			//verifica si el alumno ya completo la encuesta
			$sql = "
					SELECT count(*)
					FROM eval_alumno_docente
					WHERE courseModuleId = '" . $res['courseModuleId'] . "' and alumnoId = " . $_SESSION["User"]["userId"] . "";
			$this->Util()->DB()->setQuery($sql);
			$countEval = $this->Util()->DB()->GetSingle();

			$sql = "
					SELECT 
						*
					FROM 
						course_module_score as c
					LEFT JOIN course_module as cm on cm.courseModuleId = c.courseModuleId
					WHERE 
						c.courseModuleId = '" . $res['courseModuleId'] . "' 
						and c.userId = " . $_SESSION["User"]["userId"] . " 
						and c.courseId = " . $info["courseId"] . "
						and cm.calificacionValida = 'si' ";

			$this->Util()->DB()->setQuery($sql);
			$infoCc = $this->Util()->DB()->GetRow();

			// $infoCc['calificacion'] = 8;
			// echo $info['majorName'];
			// exit;

			if ($infoCc['calificacion'] == '') {
				$infoCc['calificacion'] = 'En proceso';
			} else if ($infoCc['calificacion'] < 7 and $info['majorName'] == 'MAESTRIA') {
				$infoCc['calificacion'] = '<font color="red">' . $infoCc['calificacion'] . '</font>';
			} else if ($infoCc['calificacion'] < 8 and $info['majorName'] == 'DOCTORADO') {
				$infoCc['calificacion'] = '<font color="red">' . $infoCc['calificacion'] . '</font>';
			} else if ($infoCc['calificacion'] <= 6) {
				$infoCc['calificacion'] = '<font color="red">' . $infoCc['calificacion'] . '</font>';
			}



			$result[$key]["finalDate"] = $result[$key]["finalDate"] . " 23:59:59";
			$result[$key]["initialDateStamp"] = strtotime($result[$key]["initialDate"]);
			$result[$key]["finalDateStamp"] = strtotime($result[$key]["finalDate"]);

			$toFinishSeconds = $result[$key]["daysToFinish"] * 3600 * 24;

			$result[$key]["daysToFinishStamp"] = strtotime($result[$key]["initialDate"]) + $toFinishSeconds;
			//echo $result[$key]["finalDateStamp"]."+".$toFinishSeconds."=".$result[$key]["daysToFinishStamp"]."<br/>" ;
			$student = new Student;
			$result[$key]["totalScore"] = $student->GetAcumuladoCourseModule($res["courseModuleId"]);
			$result[$key]["calificacionFinal"] = $infoCc['calificacion'];
			$result[$key]["countEval"] = $countEval;
		}

		return $result;
	}

	function AllActiveCourseModules()
	{
		$info = $this->Info();
		$this->Util()->DB()->setQuery("
				SELECT * FROM course_module
				LEFT JOIN subject_module ON subject_module.subjectModuleId = course_module.subjectModuleId
				WHERE active = 'si'
				ORDER BY courseModuleId ASC");
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $res) {
			$result[$key]["initialDateStamp"] = strtotime($result[$key]["initialDate"]);
			$result[$key]["finalDateStamp"] = strtotime($result[$key]["finalDate"]);

			$toFinishSeconds = $result[$key]["daysToFinish"] * 3600 * 24;

			$result[$key]["daysToFinishStamp"] = strtotime($result[$key]["initialDate"]) + $toFinishSeconds;
		}
		//print_r($result);
		return $result;
	}

	function HowManyCuatrimesters_modality()
	{
		$info = $this->Info_modality();

		$this->Util()->DB()->setQuery("
				SELECT DISTINCT(semesterId) FROM subject_module
				WHERE subjectId = '" . $info["subjectId"] . "' ORDER BY semesterId ASC");
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	function HowManyCuatrimesters()
	{
		$info = $this->Info();

		$this->Util()->DB()->setQuery("
				SELECT DISTINCT(semesterId) FROM subject_module
				WHERE subjectId = '" . $info["subjectId"] . "' ORDER BY semesterId ASC");
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}



	function boletaAlumno()
	{

		$sql = "
				SELECT 
					* 
				FROM 
					course_module as c
				left join subject_module as s on s.subjectModuleId = c.subjectModuleId
				WHERE c.courseId = '" . $this->courseId . "' and calificacionValida = 'si'";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $aux) {
			$sql = "
				SELECT 
					calificacion 
				FROM 
					course_module_score
				WHERE courseModuleId = '" . $aux["courseModuleId"] . "' and userId = " . $this->userId . "";
			$this->Util()->DB()->setQuery($sql);
			$cal = $this->Util()->DB()->GetSingle();
			$result[$key]["cal"] = $cal;
		}
		return $result;
	}

	function saveConcepto5()
	{

		if ($this->nombre == '') {
			echo 'fail[#]';
			echo '<font color="red">Campo requerido: Nombre</font>';
			exit;
		}

		if ($this->precio == '') {
			echo 'fail[#]';
			echo '<font color="red">Campo requerido: Nombre</font>';
			exit;
		}

		if ($this->idfire == '') {
			echo 'fail[#]';
			echo '<font color="red">Campo requerido: Nombre</font>';
			exit;
		}

		if ($this->id) {

			$sql = " UPDATE 
						tiposolicitud
					SET
						nombre='" . $this->nombre . "', 
						precio='" . $this->precio . "',
						idfire='" . $this->idfire . "'
						WHERE tiposolicitudId ='" . $this->id . "'";

			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
		} else {
			$sql = "INSERT INTO
						tiposolicitud
						( 	
						 	nombre,
							precio,
							idfire
						)
					VALUES (
							'" . $this->nombre . "',
							'" . $this->precio . "',
							'" . $this->idfire . "'
							)";


			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->InsertData();
		}







		return true;
	}

	function editaCosto($Id)
	{

		$sql = " UPDATE 
						course
					SET
						tarifaMtro='" . $this->tarifa . "', 
						tarifaDr='" . $this->tarifaDr . "', 
						hora='" . $this->hora . "',
						subtotal='" . $this->subtotal . "'
						WHERE courseId ='" . $Id . "'";


		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		return true;
	}

	function getMateriaxCourse($Id)
	{
		$sql = "
				SELECT 
					c.*,
					sm.*,
					CONCAT_WS(' ',p.name,lastname_paterno,lastname_materno) as nombrePersonal
				FROM 
					course_module as c
				left join  subject_module as sm on sm.subjectModuleId = c.subjectModuleId 
				left join  course_module_personal as cm on cm.courseModuleId = c.courseModuleId 
				left join  personal as p on p.personalId = cm.personalId 
				WHERE courseId = '" . $Id . "' group by courseModuleId";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		// echo '<pre>'; print_r($cal );
		// exit;
		return $cal;
	}

	function savePeriodos()
	{
		// echo 'llega';
		// exit;
		foreach ($_POST as $key => $aux) {

			$a = explode('_', $key);
			if ($a[0] == "periodo") {
				$sql = "UPDATE 
								course_module
							SET
								periodo='" . $aux . "'
								WHERE courseModuleId='" . $a[1] . "'";
				// exit;
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
		}

		return true;
	}

	function reporteRegion()
	{

		$filtro = "";

		if ($_POST["tipo"]) {

			$filtro .= " and s.subjectId = " . $_POST["tipo"] . "";
		}

		if ($_POST["estatus"]) {
			$filtro .= " and mr.grupo = " . $_POST["estatus"] . "";
		}

		if ($_POST["region"]) {

			$filtro .= " and mr.region = " . $_POST["region"] . "";
		}



		$sql = "
				SELECT 
					
					m.nombre as municipio,
					us.*,
					s.name as certificacion,
					mr.grupo,
					mr.region
				FROM 
					user_subject as u
				left join  course as c on c.courseId = u.courseId 
				left join  user as us on us.userId = u.alumnoId 
				left join  municipio_region as mr on mr.municipioId = us.ciudadt 
				left join  municipio as m on m.municipioId = us.ciudadt 
				left join  subject as s on s.subjectId = c.subjectId 

				WHERE 1 " . $filtro . " group by us.userId,c.courseId order by c.courseId";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		return $cal;
	}



	function reporteB()
	{

		$filtro = "";
		$filtrog = "";

		if ($_POST["tipo"]) {

			$filtro .= " and us.ciudadt = " . $_POST["tipo"] . "";
			// $filtrog = "";
		}

		if ($_POST["grupos"]) {
			$filtro .= " and c.courseId = '" . $_POST["grupos"] . "'";
			$filtrog .=  " and c2.courseId = '" . $_POST["grupos"] . "'";
		}

		if ($_POST["region"]) {

			$filtro .= " and mr.region = " . $_POST["region"] . "";
			// $filtrog = "";
		}



		$sql = "
				SELECT 
					us.ciudadt as municipioId,
					m.nombre as municipio,
					us.*,
					s.name as certificacion,
					mr.grupo,
					mr.region,
					(SELECT 
						count(*)
					FROM 
						user_subject as u2
					left join  course as c2 on c2.courseId = u2.courseId 
					left join  user as us2 on us2.userId = u2.alumnoId 
					left join  municipio_region as mr2 on mr2.municipioId = us2.ciudadt 
					where us2.ciudadt = m.municipioId " . $filtrog . "
					) as cantidad
				FROM 
					user_subject as u
				left join  course as c on c.courseId = u.courseId 
				left join  user as us on us.userId = u.alumnoId 
				left join  municipio_region as mr on mr.municipioId = us.ciudadt 
				left join  municipio as m on m.municipioId = us.ciudadt 
				left join  subject as s on s.subjectId = c.subjectId 

				WHERE 1 " . $filtro . " group by m.municipioId order by (SELECT 
						count(*)
					FROM 
						user_subject as u2
					left join  course as c2 on c2.courseId = u2.courseId 
					left join  user as us2 on us2.userId = u2.alumnoId 
					left join  municipio_region as mr2 on mr2.municipioId = us2.ciudadt 
					where us2.ciudadt = m.municipioId " . $filtrog . "
					) desc";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		return $cal;
	}

	function enumerateCer()
	{
		$sql = "
				SELECT 
					s.name as nombre,
					s.subjectId
				FROM 
					course as c
				left join subject as s on s.subjectId = c.subjectId

				WHERE 1";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		return $cal;
	}

	function regiones()
	{
		$sql = "
				SELECT 
					region
				FROM 
					municipio_region
				WHERE 1 group by region order by region";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		return $cal;
	}

	public function detalleReporteB($Id)
	{

		$filtro = "";
		if ($_POST["grupos"]) {

			$filtro .= " and c.courseId = " . $_POST["grupos"] . "";
		}

		$sql = "
				SELECT 
					u.*,
					s.*
				FROM 
					user as u
				left join user_subject as us on u.userId = us.alumnoId
				left join course as c on c.courseId = us.courseId
				left join subject as s on s.subjectId = c.subjectId
				WHERE ciudadt = " . $Id . " " . $filtro . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		// echo "<pre>"; print_r($cal);
		// exit;

		return $cal;
	}

	function reporteEvaluadores()
	{

		$filtro = "";

		if ($_POST["certificaciones"]) {

			$filtro .= " AND up.subjectId = " . $_POST["certificaciones"] . "";
		}



		$sql = "
				SELECT
					u.names,
					u.lastNamePaterno,
					u.lastNameMaterno,
					s.name as certificacion,
					c.group,
					CONCAT(p.name, ' ', p.lastname_paterno, ' ', p.lastname_materno) AS capacitador
				FROM usuario_personal AS up
					INNER JOIN user AS u
						ON u.userId = up.usuarioId
					INNER JOIN subject AS s 
						ON s.subjectId = up.subjectId
					LEFT JOIN usuario_capacitador uc
						ON (uc.usuarioId = up.usuarioId AND uc.subjectId = up.subjectId)
					LEFT JOIN personal AS p
						ON p.personalId = uc.personalId
					LEFT JOIN user_subject us 
						ON us.alumnoId = up.usuarioId
					LEFT JOIN course AS c
						ON c.courseId = us.courseId
				WHERE 1 AND up.personalId = " . $_POST['evaluador'] . $filtro . "
				GROUP BY u.userId";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$cal = $this->Util()->DB()->GetResult();

		return $cal;
	}

	function reporteMunicipios($courseId, $tipo)
	{
		$condicion = "";
		if ($tipo > 0)
			$condicion = " AND u.tipoSolicitanteId = " . $tipo;
		$sql = "SELECT
						mn.nombre,
						COUNT(u.userId) AS cantidad
					FROM 
						user AS u
					LEFT JOIN user_subject AS us ON us.alumnoId = u.userId
					LEFT JOIN course AS cs ON cs.courseId = us.courseId
					LEFT JOIN subject AS sb ON sb.subjectId = cs.subjectId
					LEFT JOIN municipio AS mn ON mn.municipioId = u.ciudadt
					WHERE 
						us.courseId = " . $courseId . "
					AND
						type = 'student' " . $condicion . "
					GROUP BY u.ciudadt 
					ORDER BY mn.nombre";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	function reporteMunicipiosPersonas($courseId, $tipo)
	{
		$condicion = "";
		if ($tipo > 0)
			$condicion = " AND u.tipoSolicitanteId = " . $tipo;
		$sql = "SELECT
						u.controlNumber,
						CONCAT_WS(' ', u.lastNamePaterno, u.lastNameMaterno, u.names) AS nombre,
						mn.nombre AS municipio
					FROM 
						user AS u
					LEFT JOIN user_subject AS us ON us.alumnoId = u.userId
					LEFT JOIN course AS cs ON cs.courseId = us.courseId
					LEFT JOIN subject AS sb ON sb.subjectId = cs.subjectId
					LEFT JOIN municipio AS mn ON mn.municipioId = u.ciudadt
					WHERE 
						us.courseId = " . $courseId . "
					AND
						type = 'student' " . $condicion . "
					ORDER BY u.lastNamePaterno, u.lastNameMaterno, u.names";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function getRedDates($user)
	{
		$sql = "SELECT * FROM usuario_personal INNER JOIN user_subject ON user_subject.alumnoId = usuario_personal.usuarioId INNER JOIN user ON user.userId = user_subject.alumnoId INNER JOIN course ON course.courseId = user_subject.courseId LEFT JOIN red_dates ON red_dates.course_id = {$_GET['id']} AND red_dates.student_id = user_subject.alumnoId WHERE usuario_personal.subjectId = {$_GET['subjectId']} AND usuario_personal.personalId = {$user['userId']} AND user_subject.courseId = {$_GET['id']}";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	//Validamos que exista la fecha de red conocer
	public function existRedDates($subjectId, $courseId, $studentId)
	{
		$sql = "SELECT * FROM red_dates WHERE red_dates.subject_id = {$subjectId} AND red_dates.course_id = {$courseId} AND red_dates.student_id = {$studentId}";
		$this->Util()->DB()->setQuery($sql);
		return $this->Util()->DB()->GetTotalRows();
	}
	public function addRedDates($subjectId, $courseId, $studentId, $plan_date, $evalution_date, $iec_date)
	{
		$sql = "INSERT INTO red_dates(subject_id, course_id, student_id, plan_date, evaluation_date, iec_date) VALUES({$subjectId},{$courseId},{$studentId},{$plan_date},{$evalution_date},{$iec_date})";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->InsertData();
		return $result;
	}

	public function editRedDates($subjectId, $courseId, $studentId, $plan_date, $evalution_date, $iec_date)
	{
		$sql = "UPDATE red_dates SET plan_date = {$plan_date}, evaluation_date = {$evalution_date}, iec_date = {$iec_date} WHERE subject_id = {$subjectId} AND course_id = {$courseId} AND student_id = {$studentId}";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->UpdateData();
		return $result;
	}

	public function getBriefcase($certification,$evaluator,$group = NULL)
	{
		$filtro = "";
		if(isset($group) && !empty($group)){
			$filtro = " AND course.courseId = '{$group}' ";
		}
		if ($_POST['certificaciones']) {
			//$filtro.=" AND subject.subjectId = '{$_POST['certificaciones']}'";
		}
		$sql = "SELECT user.names, 
					user.lastNamePaterno, 
					user.lastNameMaterno, 
					usuario_personal.personalId, 
					user_subject.alumnoId, 
					user_subject.aprobado,
					user.actualizado,
					user.controlNumber,
					course.courseId, 
					course.subjectId, 
					subject.name as certification, 
					course.group, 
					red_dates.plan_date, 
					red_dates.evaluation_date, 
					red_dates.iec_date,
					planes.fecha,
					planes.fecha_desarrollo,
					IFNULL(planes.planId, 'no') AS hasPlan,
					IFNULL(cedulas.cedulaId, 'no') AS hasCedula,
					IFNULL(cedulas.folio_proceso,'N/A') AS folio_proceso,
					IFNULL((SELECT repositorioId FROM repositorio WHERE course.subjectId = repositorio.subjectId AND user_subject.alumnoId = repositorio.userId AND repositorio.tipoDocumentoId = 2 ORDER BY repositorioId DESC LIMIT 1), 'no') AS hasIec,
					IFNULL((SELECT repositorioId FROM repositorio WHERE course.subjectId = repositorio.subjectId AND user_subject.alumnoId = repositorio.userId AND repositorio.tipoDocumentoId = 4 ORDER BY repositorioId DESC LIMIT 1), 'no') AS hasProducts,
					lot_number.lot
				FROM usuario_personal 
				INNER JOIN user_subject ON user_subject.alumnoId = usuario_personal.usuarioId 
				INNER JOIN user ON user.userId = user_subject.alumnoId 
				INNER JOIN course ON course.courseId = user_subject.courseId 
				INNER JOIN subject ON subject.subjectId = course.subjectId 
				LEFT JOIN red_dates ON red_dates.subject_id = subject.subjectId AND red_dates.course_id = course.courseId AND red_dates.student_id = user_subject.alumnoId
				LEFT JOIN planes ON planes.subjectId = subject.subjectId AND planes.personalId = usuario_personal.personalId AND planes.userId = user_subject.alumnoId
				LEFT JOIN cedulas ON course.subjectId = cedulas.subjectId AND user_subject.alumnoId = cedulas.userId
				LEFT JOIN lot_number ON lot_number.subject_id = subject.subjectId AND lot_number.course_id = course.courseId AND lot_number.student_id = user_subject.alumnoId
				WHERE usuario_personal.personalId = '{$evaluator}' AND subject.subjectId = '{$certification}' {$filtro} GROUP BY course.courseId, user.userId ORDER BY course.group, lot_number.lot, user.names, user.lastNamePaterno";
		// echo $sql;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}
	
	public function getLotNumber($subjectId, $courseId, $studentId)
	{
		$sql = "SELECT lot FROM lot_number WHERE subject_id = {$subjectId} AND course_id = {$courseId} AND student_id = {$studentId}";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();
		return $result;
	}

	public function addLotNumber($subjectId, $courseId, $studentId, $lot)
	{
		$sql = "INSERT INTO lot_number(subject_id, course_id, student_id, lot) VALUES({$subjectId},{$courseId},{$studentId},{$lot})";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->InsertData();
		return $result;
	}

	public function editLotNumber($subjectId, $courseId, $studentId, $lot)
	{
		$sql = "UPDATE lot_number SET lot = {$lot} WHERE subject_id = {$subjectId} AND course_id = {$courseId} AND student_id = {$studentId}";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->UpdateData();
		return $result;
	}
}
