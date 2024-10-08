<?php

class Personal extends Main
{
	private $personalId;
	private $rolesId;
	private $roleId;
	private $positionId;
	private $name;
	private $description;
	private $username;
	private $passwd;
	private $curp;
	private $rfc;
	private $sexo;
	private $fechaNacimiento;
	private $fechaSep;
	private $fechaDgta;
	private $clavesPresupuestales;
	private $categoria;
	private $perfil;
	private $lastnamePaterno;
	private $lastnameMaterno;
	private $stateId;
	private $foto;
	private $correo;
	private $celular;
	private $semblanza;
	private $prof;
	private $ine;
	private $calle;
	private $nInterior;
	private $nExterior;
	private $colonia;
	private $estado;
	private $ciudad;
	private $firmaConstancia;
	private $documentoId;
	private $tipo;
	private $face;
	private $twitter;
	private $mostrar;
	private $numero;
	private $claveConocer;

	public function setMostrar($value)
	{
		// $this->Util()->ValidateString($value,  "Tipo");
		$this->mostrar = $value;
	}

	public function setNumero($value)
	{
		// $this->Util()->ValidateString($value,  "Tipo");
		$this->numero = $value;
	}

	public function setFace($value)
	{
		// $this->Util()->ValidateString($value,  "Tipo");
		$this->face = $value;
	}

	public function setTwitter($value)
	{
		// $this->Util()->ValidateString($value, "Tipo");
		$this->twitter = $value;
	}

	public function setTipo($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "Tipo");
		$this->tipo = $value;
	}

	public function setFirmaConstancia($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "Firma Constancia");
		$this->firmaConstancia = $value;
	}

	public function setIne($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "INE");
		$this->ine = $value;
	}

	public function setCalle($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "Calle");
		$this->calle = $value;
	}

	public function setNInterior($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "N. Interior");
		$this->nInterior = $value;
	}

	public function setNExterior($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "N. Exterior");
		$this->nExterior = $value;
	}

	public function setColonia($value)
	{

		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "Colonia");
		$this->colonia = $value;
	}

	public function setEstado($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "Estado");
		$this->estado = $value;
	}

	public function setCiudad($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 255, $minChars = 0, "Ciudad");
		$this->ciudad = $value;
	}

	public function setFoto($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 0, "Foto");
		$this->foto = $value;
	}

	public function setCorreo($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 0, "Correo");
		$this->correo = $value;
	}

	public function setCelular($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 0, "Celular");
		$this->celular = $value;
	}

	public function setSemblanza($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 0, "Semblanza");
		$this->semblanza = $value;
	}

	public function setPersonalId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->personalId = $value;
	}

	public function setDocumentoId($value)
	{
		$this->Util()->ValidateInteger($value);
		$this->documentoId = $value;
	}

	public function setProf($value)
	{
		// $this->Util()->ValidateInteger($value);
		$this->prof = $value;
	}

	public function setRolesId($value)
	{
		//$this->Util()->ValidateOption($value, "Rol");			
		$this->rolesId = $value;
	}

	public function setRoleId($value)
	{
		$this->roleId = $value;
	}

	public function setPositionId($value)
	{
		$this->Util()->ValidateOption($value, "Puesto");
		$this->positionId = $value;
	}

	public function setName($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 1, "Nombre");
		$this->name = $value;
	}

	public function setLastnamePaterno($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 1, "Apellido Paterno");
		$this->lastnamePaterno = $value;
	}

	public function setLastnameMaterno($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 1, "Apellido Materno");
		$this->lastnameMaterno = $value;
	}

	public function setStateId($value)
	{
		$this->Util()->ValidateOption($value, "Estado");
		$this->stateId = $value;
	}

	public function setCurp($value)
	{
		$this->curp = $value;
	}

	public function setRfc($value)
	{
		$this->rfc = $value;
	}

	public function setSexo($value)
	{
		$this->Util()->ValidateOption($value, "Sexo");
		$this->sexo = $value;
	}

	public function setFechaNacimiento($value)
	{
		$this->fechaNacimiento = $value;
	}

	public function setFechaSep($value)
	{
		$this->fechaSep = $value;
	}

	public function setFechaDgta($value)
	{
		$this->fechaDgta = $value;
	}

	public function setClavesPresupuestales($value)
	{
		$this->clavesPresupuestales = $value;
	}

	public function setCategoria($value)
	{
		$this->categoria = $value;
	}

	public function setPerfil($value)
	{
		$this->perfil = $value;
	}

	public function setUserName($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 0, "Usuario");
		$this->username = $value;
	}

	public function setPasswd($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 60, $minChars = 0, "Contrasena");
		$this->passwd = $value;
	}

	public function setDescription($value)
	{
		$this->Util()->ValidateString($value, $max_chars = 1000000, $minChars = 0, "Descripcion");
		$this->description = $value;
	}

	public function setClaveConocer($value)
	{
		$this->claveConocer = mb_strtoupper($value);
	}

	public function getPersonalId()
	{
		return $this->personalId;
	}

	public function getRolesId()
	{
		return $this->rolesId;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	public function getPositionId()
	{
		return $this->positionId;
	}

	public function getName($value)
	{
		return $this->name;
	}

	public function getLastnamePaterno($value)
	{
		return $this->lastnamePaterno;
	}

	public function getLastnameMaterno($value)
	{
		return $this->lastnameMaterno;
	}

	public function getStateId()
	{
		return $this->stateId;
	}

	public function getUserName($value)
	{
		return $this->username;
	}

	public function getPasswd($value)
	{
		return $this->passwd;
	}

	public function getDescription($value)
	{
		return $this->description;
	}

	public function getCurp($value)
	{
		return $this->curp;
	}

	public function getRfc($value)
	{
		return $this->rfc;
	}

	public function getSexo($value)
	{
		return $this->sexo;
	}

	public function getFechaSep($value)
	{
		return $this->fechaSep;
	}

	public function getFechaDgta($value)
	{
		return $this->fechaDgta;
	}

	public function getClavesPresupuestales($value)
	{
		return $this->clavesPresupuestales;
	}

	public function getCategoria($value)
	{
		return $this->categoria;
	}

	public function getPerfil($value)
	{
		return $this->perfil;
	}

	public function Enumerate($orden = 'name ASC')
	{
		global $position;
		global $role;

		$filtro = "";

		if ($_POST["role"]) {
			$filtro .= " and ro.roleId = " . $_POST["role"] . "";
		}


		if ($_POST["nombre"]) {
			$filtro .= " and p.name  like '%" . $_POST["nombre"] . "%'";
		}


		$sql = "SELECT 
					*,
					concat_ws(' ',p.name,p.lastname_materno,p.lastname_paterno) as nombrePersona,
					p.name as nombrePersonal,
					ro.name as roleName,
					(select count(*) from usuario_personal as usub where usub.personalId = p.personalId) as numCandidatos,
					p.estatus,
					p.personalId
				FROM 
					personal as p
			 left join personal_role as r on r.personalId = p.personalId
			 left join role as ro on ro.roleId = r.roleId
				WHERE
					positionId <> 1
				" . $filtro . "	
				group by p.personalId
				ORDER BY 
					p.name ASC";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $row) {
			$result[$key]["wrappedDescription"] = $this->Util()->ShortString($result[$key]["description"], 50);
			$position->setPositionId($row['positionId']);
			$result[$key]['position'] = $position->GetClaveById();
			$role->setRoleId($row['roleId']);
			$result[$key]['role'] = $role->GetClaveById();
		}

		return $result;
	}

	public function EnumerateByPosition()
	{
		global $position;

		$sql = "SELECT 
					* 
				FROM 
					personal
				WHERE
					positionId = " . $this->positionId . "
				ORDER BY 
					lastname_paterno ASC, lastname_materno ASC, name ASC";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $row) {
			$result[$key]["wrappedDescription"] = $this->Util()->ShortString($result[$key]["description"], 50);
			$position->setPositionId($row['positionId']);
			$result[$key]['position'] = $position->GetNameById();
			$this->setPersonalId($row['personalId']);
			$result[$key]['name'] = $row['name'] . ' ' . $row['lastname_paterno'] . ' ' . $row['lastname_materno'];
		}

		return $result;
	}

	public function EnumerateRoles()
	{
		global $role;

		$sql = "SELECT 
					* 
				FROM 
					personal_role
				WHERE
					personalId = " . $this->personalId . " 
				";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $row) {
			$role->setRoleId($row['roleId']);
			$result[$key]['name'] = utf8_encode($role->GetRoleNameById());
		}

		return $result;
	}

	public function Info()
	{

		$sql = "SELECT 
					*,
					r.roleId
				FROM 
					personal as p 
				left join personal_role as r on p.personalId = r.personalId
				WHERE 
					p.personalId = '" . $this->personalId . "'";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		// echo "<pre>"; print_r($info);

		$row = $info;		// anexado hrsc
		if ($info)			// para evitar errores cuando no hay registros que coinciden con $this->personalId
			$row = $this->Util->EncodeRow($info);

		return $row;
	}



	public function InfoBasica()
	{

		$sql = "SELECT 
					* 
				FROM 
					estudioprofesor 
				WHERE 
					personalId = '" . $this->personalId . "'";

		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetResult();

		$sql = "SELECT 
					* 
				FROM 
					bancoprofesor 
				WHERE 
					personalId = '" . $this->personalId . "'";

		$this->Util()->DB()->setQuery($sql);
		$infoBanco = $this->Util()->DB()->GetResult();

		$sql = "SELECT 
					* 
				FROM 
					automovilprofesor 
				WHERE 
					personalId = '" . $this->personalId . "'";

		$this->Util()->DB()->setQuery($sql);
		$infoAuto = $this->Util()->DB()->GetResult();

		$data['estudios'] = $info;
		$data['infoBanco'] = $infoBanco;
		$data['infoAuto'] = $infoAuto;

		// echo '<pre>'; print_r($data);
		// exit;

		return $data;
	}

	public function Save()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}



		$sql = "SELECT 
					* 
				FROM 
					role 
				WHERE 
					roleId = '" . $_POST["positionId"] . "'";
		$this->Util()->DB()->setQuery($sql);
		$infoRow = $this->Util()->DB()->GetRow();

		if ($infoRow["name"] == "Evaluador" || $infoRow["name"] == "EVALUADOR") {
			$this->perfil = "Docente";
		}

		if ($_POST["personalId"]) {

			$sql = "SELECT 
					count(*) 
				FROM 
					personal 
				WHERE 
					username = '" . $this->username . "' and personalId <> " . $_POST["personalId"] . "";
			$this->Util()->DB()->setQuery($sql);
			$countP = $this->Util()->DB()->GetSingle();

			if ($countP >= 1) {
				echo "fail[#]";
				echo "<font color='red'>El usuario ya existe</font>";
				exit;
			}

			$sql = "UPDATE
					personal SET
					
				 	name =  '" . $this->name . "',
					lastname_paterno = '" . $this->lastnamePaterno . "',
					lastname_materno = '" . $this->lastnameMaterno . "',
			
					username =  '" . $this->username . "', 
					passwd =  '" . $this->passwd . "', 
					description = '" . $this->description . "',
					curp = '" . $this->curp . "',
					rfc = '" . $this->rfc . "',
					sexo = '" . $this->sexo . "',
					fecha_nacimiento = '" . $this->fechaNacimiento . "',
					fecha_sep = '" . $this->fechaSep . "',
					fecha_dgta = '" . $this->fechaDgta . "',
					claves_presupuestales = '" . $this->clavesPresupuestales . "',
					categoria = '" . $this->categoria . "',
					correo = '" . $this->correo . "',
					celular = '" . $this->celular . "',
					semblanza = '" . $this->semblanza . "',
					perfil = '" . $this->perfil . "',
					profesion = '" . $this->prof . "',
					firmaConstancia = '" . $this->firmaConstancia . "',
					mostrar = '" . $this->mostrar . "',
					numero = '" . $this->numero . "',
					clave_conocer='" . $this->claveConocer . "'
				WHERE 
					personalId = " . $_POST["personalId"];
			// exit;	

			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->ExecuteQuery();
			$personalId = $_POST["personalId"];
		} else {

			$sql = "SELECT 
					count(*) 
				FROM 
					personal 
				WHERE 
					username = '" . $this->username . "' ";
			$this->Util()->DB()->setQuery($sql);
			$countP = $this->Util()->DB()->GetSingle();

			if ($countP >= 1) {
				echo "fail[#]";
				echo "<font color='red'>El usuario ya existe</font>";
				exit;
			}
			$firma = uniqid();

			$sql = "INSERT INTO 
					personal 
					(						
					
						name,
						lastname_materno,
						lastname_paterno,
						stateId, 
						username,
						passwd,
						description,
						curp,
						rfc,
						sexo,
						fecha_nacimiento,
						fecha_sep,
						fecha_dgta,
						claves_presupuestales,
						categoria,
						perfil,
						profesion,
						mostrar,
						correo,
						numero,
						firma,
						clave_conocer
					)
				 VALUES 
					(						
						
						'" . $this->name . "',
						'" . $this->lastnameMaterno . "',
						'" . $this->lastnamePaterno . "',
						'" . $this->stateId . "',
						'" . $this->username . "',
						'" . $this->passwd . "', 
						'" . $this->description . "',
						'" . $this->curp . "',
						'" . $this->rfc . "',
						'" . $this->sexo . "',
						'" . $this->fechaNacimiento . "',
						'" . $this->fechaSep . "',
						'" . $this->fechaDgta . "',
						'" . $this->clavesPresupuestales . "',
						'" . $this->categoria . "',
						'" . $this->perfil . "',
						'" . $this->prof . "',
						'" . $this->mostrar . "',
						'" . $this->correo . "',
						'" . $this->numero . "',
						'" . $firma . "',
						'" . $this->claveConocer . "'
					)";


			// exit;
			$this->Util()->DB()->setQuery($sql);
			$personalId = $this->Util()->DB()->InsertData();
		}

		// echo "<pre>"; print_r($_POST);
		// echo "<pre>"; print_r($_FILES);
		// exit;
		$sql = 'DELETE FROM personal_role WHERE personalId = ' . $personalId;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		$sql7 = "INSERT INTO 
					personal_role 
					(						
						personalId, 
						roleId
					)
				 VALUES 
					(						
						" . $personalId . ",
						" . $_POST["positionId"] . "
					)";

		$this->Util()->DB()->setQuery($sql7);
		$this->Util()->DB()->InsertData();
		// exit;

		$url = DOC_ROOT;
		$archivo = "foto";
		foreach ($_FILES as $key => $var) {
			switch ($key) {
				case $archivo:
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];
						$foto_name = "foto_" . $personalId . "." . $extencion;
						if (move_uploaded_file($temporal, $url . "/images/docente/fotografia/" . $foto_name)) {
							$sql = "UPDATE personal SET
										foto = '" . $foto_name . "'
									WHERE
										personalId = " . $personalId;
							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->ExecuteQuery();
						}
					}
					break;
			}
		}



		// $listRoles = explode(',',$this->rolesId);

		// if($listRoles){

		// foreach($listRoles as $val){
		// if(!empty($val)){
		// $sql = "INSERT INTO 
		// personal_role 
		// (						
		// personalId, 
		// roleId
		// )
		// VALUES 
		// (						
		// ".$personalId.",
		// ".$val."
		// )";

		// $this->Util()->DB()->setQuery($sql);
		// $this->Util()->DB()->InsertData();
		// }
		// }//foreach
		// }

		$this->Util()->setError(10031, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	public function Update()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sql = "UPDATE
					personal SET positionId = " . $this->positionId . ",
				 	name =  '" . $this->name . "',
					lastname_paterno = '" . $this->lastnamePaterno . "',
					lastname_materno = '" . $this->lastnameMaterno . "',
					stateId = '" . $this->stateId . "', 
					username =  '" . $this->username . "', 
					passwd =  '" . $this->passwd . "', 
					description = '" . $this->description . "',
					curp = '" . $this->curp . "',
					rfc = '" . $this->rfc . "',
					sexo = '" . $this->sexo . "',
					fecha_nacimiento = '" . $this->fechaNacimiento . "',
					fecha_sep = '" . $this->fechaSep . "',
					fecha_dgta = '" . $this->fechaDgta . "',
					claves_presupuestales = '" . $this->clavesPresupuestales . "',
					categoria = '" . $this->categoria . "',
					correo = '" . $this->correo . "',
					celular = '" . $this->celular . "',
					semblanza = '" . $this->semblanza . "',
					perfil = '" . $this->perfil . "',
					profesion = '" . $this->prof . "',
					firmaConstancia = '" . $this->firmaConstancia . "',
					mostrar = '" . $this->mostrar . "',
					numero = '" . $this->numero . "'
				WHERE 
					personalId = " . $this->personalId;


		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		if ($this->foto != "") {
			$sql = "UPDATE personal SET
					foto = '" . $this->foto . "'
				WHERE
					personalId = " . $this->personalId;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->ExecuteQuery();
		}


		$listRoles = explode(',', $this->rolesId);

		if ($listRoles) {

			$sql = 'DELETE FROM personal_role WHERE personalId = ' . $this->personalId;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->ExecuteQuery();

			foreach ($listRoles as $val) {
				if (!empty($val)) {
					$sql = "INSERT INTO 
								personal_role 
								(						
									personalId, 
									roleId
								)
							 VALUES 
								(						
									" . $this->personalId . ",
									" . $val . "
								)";

					$this->Util()->DB()->setQuery($sql);
					$this->Util()->DB()->InsertData();
				}
			} //foreach
		}


		//actualizamos imagen de firma
		$url = DOC_ROOT;
		$archivo = "firma";
		foreach ($_FILES as $key => $var) {
			switch ($key) {
				case $archivo:
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];
						$foto_name = "firma_" . $this->personalId . "." . $extencion;
						if (move_uploaded_file($temporal, $url . "/images/docente/firmas/" . $foto_name)) {
							$sql = "UPDATE personal SET
										rutaFirma = '" . $foto_name . "'
									WHERE
										personalId = " . $this->personalId;
							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->ExecuteQuery();
						}
					}
					break;
			}
		}

		$this->Util()->setError(10033, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	public function Delete()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sql = "UPDATE personal SET
										estatus = 'eliminado'
									WHERE
										personalId = " . $this->personalId;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		// $sql = "DELETE FROM 
		// personal
		// WHERE 
		// personalId = ".$this->personalId;

		// $this->Util()->DB()->setQuery($sql);
		// $this->Util()->DB()->ExecuteQuery();

		// $sql = "DELETE FROM 
		// personal_role
		// WHERE 
		// personalId = ".$this->personalId;

		// $this->Util()->DB()->setQuery($sql);
		// $this->Util()->DB()->ExecuteQuery();

		$this->Util()->setError(10032, "complete");
		$this->Util()->PrintErrors();

		return true;
	}

	public function IsRoleSelected()
	{

		$sql = "SELECT 
					roleId 
				FROM 
					personal_role 
				WHERE 
					personalId = " . $this->personalId . "
					AND	roleId = " . $this->roleId;

		$this->Util()->DB()->setQuery($sql);
		$roleId = $this->Util()->DB()->GetSingle();

		return $roleId;
	}

	public function GetNameById()
	{

		$sql = 'SELECT 
					lastname_paterno, lastname_materno, name 
				FROM 
					personal 
				WHERE 
					personalId = ' . $this->personalId;

		$this->Util()->DB()->setQuery($sql);
		$row = $this->Util()->DB()->GetRow();

		$name = $row['name'] . ' ' . $row['lastname_paterno'] . ' ' . $row['lastname_materno'];

		return $name;
	}

	public function UpdateFoto($id)
	{
		$ext = end(explode('.', basename($_FILES['foto']['name'])));
		if (strtolower($ext) != "jpg" && strtolower($ext) != "jepg" && strtolower($ext) != "png") {
			return;
		}

		$target_path = DOC_ROOT . "/personal_foto/" . $id . "." . $ext;

		if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
		}

		$path = "personal_foto/" . $id . "." . $ext;

		return $path;
	}



	public function extraeFirmaActa()
	{

		$sql = "SELECT 
					* 
				FROM 
					personal 
				WHERE 
					firmaConstancia = 'si'";

		$this->Util()->DB()->setQuery($sql);
		$info9 = $this->Util()->DB()->GetRow();

		$sql = "SELECT 
					* 
				FROM 
					personal 
				WHERE 
					positionId = 3";

		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		$data['director'] = $info9['name'] . ' ' . $info9['lastname_paterno'] . ' ' . $info9['lastname_materno'];
		$data['controlEscolar'] = $info['profesion'] . ' ' . $info['name'] . ' ' . $info['lastname_paterno'] . ' ' . $info['lastname_materno'];

		return $data;
	}


	public function enumerateAbreviaciones()
	{

		$sql = "SELECT 
					* 
				FROM 
					abreviacion 
				WHERE 
					1 order by abreviacion ASC";

		$this->Util()->DB()->setQuery($sql);
		$info9 = $this->Util()->DB()->GetResult();

		return $info9;
	}


	public function updateAcceso()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sql = "UPDATE
					personal 
					SET 
				 	username =  '" . $this->username . "',
					passwd = '" . $this->passwd . "'
				WHERE 
					personalId = " . $this->personalId;


		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		return true;
	}

	public function updateDocente()
	{

		// if($this->Util()->PrintErrors()){ 
		// return false; 
		// }

		$sql = "UPDATE
					personal 
					SET 
				 	name =  '" . $this->name . "',
					lastname_paterno = '" . $this->lastnamePaterno . "',
					lastname_materno = '" . $this->lastnameMaterno . "',
					correo = '" . $this->correo . "',
					celular = '" . $this->celular . "',
					rfc = '" . $this->rfc . "', 
					curp = '" . $this->curp . "', 
					INE = '" . $this->ine . "',
					calle = '" . $this->calle . "',
					nInterior = '" . $this->nInterior . "',
					nExterior = '" . $this->nExterior . "',
					colonia = '" . $this->colonia . "',
					stateId = '" . $this->estado . "',
					ciudad = '" . $this->ciudad . "',
					fecha_nacimiento = '" . $this->fechaNacimiento . "',
					facebook = '" . $this->face . "',
					twitter = '" . $this->twitter . "'
				WHERE 
					personalId = " . $this->personalId;


		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		return true;
	}

	public function addDocente()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}



		$sql = "INSERT INTO 
					personal 
					(						
						name, 
						lastname_paterno,
						lastname_materno,
						correo, 
						rfc,
						fecha_nacimiento,
						username,
						passwd,
						perfil
					)
				 VALUES 
					(						
						'" . $this->name . "',
						'" . $this->lastnamePaterno . "',
						'" . $this->lastnameMaterno . "',
						'" . $this->correo . "',
						'" . $this->rfc . "',
						'" . $this->fechaNacimiento . "',
						'" . $this->username . "',
						'" . $this->passwd . "',
						'Docente'
					)";

		$this->Util()->DB()->setQuery($sql);
		$Id = $this->Util()->DB()->InsertData();


		$sql = "INSERT INTO 
					personal_role 
					(						
						personalId, 
						roleId
					)
				 VALUES 
					(						
						'" . $Id . "',
						'2'
					)";

		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();



		return true;
	}



	public function updateInfoEscolar()
	{

		if ($this->Util()->PrintErrors()) {
			return false;
		}



		for ($i = 0; $i <= 1; $i++) {

			$tipo = '';

			if ($i == 0) {
				$tipo = 'lic';
			} else if ($i == 1) {
				$tipo = 'master';
			} else {
				$tipo = 'doc';
			}

			if ($tipo == 'lic') {
				$msjError = 'Licenciatura';
			} else if ($tipo == 'doc') {
				$msjError = 'Doctorado';
			} else {
				$msjError = 'Maestria';
			}

			if ($_POST[$tipo . '_escuela'] == '') {
				echo 'fail[#]';
				echo '<font color=" red">Campo requerdo:Escuela ' . $msjError . '</font>';
				exit;
			}

			if ($_POST[$tipo . '_carrera'] == '') {
				echo 'fail[#]';
				echo '<font color=" red">Campo requerdo:Nombre de  ' . $msjError . '</font>';
				exit;
			}
		}

		for ($i = 0; $i <= 2; $i++) {

			if ($i == 0) {
				$tipo = 'lic';
			} else if ($i == 1) {
				$tipo = 'master';
			} else {
				$tipo = 'doc';
			}

			$carrera = $_POST[$tipo . '_carrera'];
			$escuela = $_POST[$tipo . '_escuela'];
			$titulo = $_POST[$tipo . '_titulo'];
			$acta = $_POST[$tipo . '_acta'];
			$cedula = $_POST[$tipo . '_cedula'];


			// echo $_POST['lic_carrera'];
			// exit;

			if ($titulo) {
				$titulo = 'si';
			} else {
				$titulo = 'no';
			}

			if ($acta) {
				$acta = 'si';
			} else {
				$acta = 'no';
			}

			if ($cedula) {
				$cedula = 'si';
			} else {
				$cedula = 'no';
			}

			$sql = "SELECT 
					count(*) 
				FROM 
					estudioprofesor 
				WHERE 
					personalId = " . $this->personalId . " and tipo = '" . $tipo . "'";
			$this->Util()->DB()->setQuery($sql);
			$count = $this->Util()->DB()->GetSingle();

			if ($count <= 0) {
				$sql = "INSERT INTO 
					estudioprofesor 
					(						
						tipo, 
						escuela,
						carrera,
						titulo,
						actaExamen, 
						cedula,
						personalId
					)
				 VALUES 
					(						
						'" . $tipo . "',
						'" . $escuela . "',
						'" . $carrera . "',
						'" . $titulo . "',
						'" . $acta . "',
						'" . $cedula . "',
						'" . $this->personalId . "'
					)";

				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->InsertData();
			} else {
				$sql = '
					UPDATE 
						estudioprofesor 
					SET 
						carrera = "' . $carrera . '", 
						escuela = "' . $escuela . '", 
						titulo = "' . $titulo . '",  
						actaExamen = "' . $acta . '", 
						cedula = "' . $cedula . '" 
					WHERE 
						personalId  = ' . $this->personalId . ' and tipo = "' . $tipo . '"';
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
		}


		return true;
	}



	public function updateInfoBancos()
	{




		$sql = "SELECT 
					count(*) 
				FROM 
					bancoprofesor 
				WHERE 
					personalId = " . $this->personalId . "";
		$this->Util()->DB()->setQuery($sql);
		$count = $this->Util()->DB()->GetSingle();

		// echo $count;
		// exit;
		if ($count <= 0) {
			$sql = "INSERT INTO 
					bancoprofesor 
					(						
						nombreBanco, 
						numCuenta, 
						claveInterbancaria,
						sucursal,
						numeroPlaza, 
						lugar,
						correo,
						personalId
					)
				 VALUES 
					(						
						'" . $_POST['banco'] . "',
						'" . $_POST['ncuenta'] . "',
						'" . $_POST['clabeInter'] . "',
						'" . $_POST['sucursal'] . "',
						'" . $_POST['nplaza'] . "',
						'" . $_POST['lugar'] . "',
						'" . $_POST['correoNoti'] . "',
						'" . $this->personalId . "'
					)";
			// exit;		
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->InsertData();
		} else {
			$sql = "
					UPDATE 
						bancoprofesor 
					SET 
						numCuenta = '" . $_POST['ncuenta'] . "',
						nombreBanco = '" . $_POST['banco'] . "',
						claveInterbancaria =  '" . $_POST['clabeInter'] . "', 
						sucursal ='" . $_POST['sucursal'] . "',  
						numeroPlaza = '" . $_POST['nplaza'] . "',
						correo = '" . $_POST['correoNoti'] . "',
						lugar = '" . $_POST['correoNoti'] . "' 
					WHERE 
						personalId  = " . $this->personalId . "";
			// exit;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
		}


		$sql = "UPDATE
					personal 
					SET 
				 	tipoContrato =  '" . $_POST['tipoContrato'] . "'
				WHERE 
					personalId = " . $this->personalId;

		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		return true;
	}

	public function compruebaFirma()
	{

		$sql = "SELECT 
					count(*) 
				FROM 
					personal
				WHERE
					firmaConstancia = 'si'";
		$this->Util()->DB()->setQuery($sql);
		$count = $this->Util()->DB()->GetSingle();

		return $count;
	}

	public function updateInfoAutomovil()
	{

		$sql = "SELECT 
					count(*) 
				FROM 
					automovilprofesor
				WHERE
					personalId = " . $this->personalId . "";
		$this->Util()->DB()->setQuery($sql);
		$count = $this->Util()->DB()->GetSingle();

		if ($count <= 0) {
			$sql = "INSERT INTO 
					automovilprofesor 
					(						
						modelo, 
						color, 
						placas,
						personalId
					)
				 VALUES 
					(						
						'" . $_POST['modeloAuto'] . "',
						'" . $_POST['colorAuto'] . "',
						'" . $_POST['placasAuto'] . "',
						'" . $this->personalId . "'
					)";

			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->InsertData();
		} else {
			$sql = "
					UPDATE 
						automovilprofesor 
					SET 
						modelo = '" . $_POST['modeloAuto'] . "',
						color = '" . $_POST['colorAuto'] . "',
						placas =  '" . $_POST['placasAuto'] . "'
					WHERE 
						personalId  = " . $this->personalId . "";
			// exit;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->UpdateData();
		}



		return true;
	}


	public function enumerateCatProductos()
	{
		$sql = "SELECT 
					*
				FROM 
					catalogodocumento
				WHERE
					estatus = 'activo'";
		$this->Util()->DB()->setQuery($sql);
		$res = $this->Util()->DB()->GetResult();

		foreach ($res as $key => $aux) {

			$sql = "SELECT 
					ruta
				FROM 
					documentosprofesor
				WHERE
					documentoId = " . $aux['catalogodocumentoId'] . " and personalId = " . $this->personalId . "";
			// exit;
			$this->Util()->DB()->setQuery($sql);
			$count = $this->Util()->DB()->GetRow();

			if ($count['ruta'] <> '') {
				$res[$key]['existArchivo'] = 'si';
				$res[$key]['ruta'] = $count['ruta'];
			} else {
				$res[$key]['existArchivo'] = 'no';
			}
		}

		// echo '<pre>'; print_r($count);
		// exit;

		return $res;
	}




	public function adjuntarDocDocente()
	{


		$sql = "SELECT 
					*
				FROM 
					documentosprofesor
				WHERE
					documentoId = " . $this->documentoId . " and personalId = " . $this->personalId . "";
		$this->Util()->DB()->setQuery($sql);
		$count = $this->Util()->DB()->GetSingle();

		if ($count['documentosprofesorId'] == null) {

			$sql = "INSERT INTO 
					documentosprofesor 
					(						
						documentoId, 
						personalId
					)
				 VALUES 
					(						
						" . $this->documentoId . ",
						'" . $this->personalId . "'
					)";

			$this->Util()->DB()->setQuery($sql);
			$lastId = $this->Util()->DB()->InsertData();
		} else {
			$lastId = $count['documentosprofesorId'];
		}

		// echo '<pre>'; print_r($_FILES);
		// exit;
		foreach ($_FILES as $key => $var) {

			switch ($key) {
				case 'comprobante':
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];

						$url = DOC_ROOT;
						$foto_name = "doc_" . $lastId . "." . $extencion;

						if (move_uploaded_file($temporal, $url . "/docentes/documentos/" . $foto_name)) {


							$sql = 'UPDATE 		
								documentosprofesor SET 		
								ruta = "' . $foto_name . '"			      		
								WHERE documentosprofesorId = ' . $lastId . '';

							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->UpdateData();
						}
					}
					break;
			}
		}




		return  true;
	}

	public function enumerateRepositorio()
	{
		$sql = "SELECT 
					*
				FROM 
					repositorio
				WHERE
					1";
		$this->Util()->DB()->setQuery($sql);
		$count = $this->Util()->DB()->GetResult();

		return $count;
	}

	public function EnumerateNew()
	{

		$filtro = "";

		if ($this->tipo) {
			$filtro .= " and perfil ='" . $this->tipo . "'";
		}

		if ($this->name) {
			$filtro .= " and concat_ws (' ', name,lastname_paterno,lastname_materno)  like '%" . $this->name . "%'";
		}



		$filtro .= " and estatus ='activo'";

		$sql = "SELECT 
					* 
				FROM 
					personal
				WHERE
					1
					" . $filtro . " order by lastname_paterno asc";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();



		return $result;
	}


	public function onDelete()
	{
		if ($this->Util()->PrintErrors()) {
			return false;
		}

		$sql = "UPDATE
					personal SET estatus = 'eliminado'
				WHERE 
					personalId = " . $this->personalId;


		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		return true;
	}

	public function onDeleteDocumento($Id)
	{
		if ($this->Util()->PrintErrors()) {
			return false;
		}



		$sql = 'delete from documentosprofesor where personalId = ' . $this->personalId . ' and documentoId = ' . $Id . '';
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		return true;
	}

	public function extraeUltimaMateria($Id)
	{
		$sql = "SELECT 
					* 
				FROM 
					course_module_personal as c
				left join course_module as cm on cm.courseModuleId = c.courseModuleId
				left join subject_module as sm on sm.subjectModuleId =  cm.subjectModuleId
				WHERE
					c.personalId = " . $Id . " order by courseModPId limit 0,1  ";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}

	public function adjuntarPlan($lastId, $cmId)
	{



		foreach ($_FILES as $key => $var) {

			switch ($key) {
				case 'comprobante':
					if ($var["name"] <> "") {
						$aux = explode(".", $var["name"]);
						$extencion = end($aux);
						$temporal = $var['tmp_name'];

						$url = DOC_ROOT;
						$foto_name = "plan_" . $cmId . "." . $extencion;

						if (move_uploaded_file($temporal, $url . "/materia/" . $foto_name)) {


							$sql = 'UPDATE 		
								course_module SET 		
								rutaPlan = "' . $foto_name . '"			      		
								WHERE courseModuleId = ' . $cmId . '';
							// exit;
							$this->Util()->DB()->setQuery($sql);
							$this->Util()->DB()->UpdateData();
						}
					}
					break;
			}
		}




		return  true;
	}


	public function onDeletePlan($cmId)
	{

		$sql = 'UPDATE 		
				course_module SET 		
				rutaPlan = ""			      		
				WHERE courseModuleId = ' . $cmId . '';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		@unlink(DOC_ROOT . '/materia/plan_' . $cmId);

		return true;
	}



	public function onDeleteCarta($cmId)
	{


		$sql = "SELECT 
					* 
				FROM 
					course_module
				WHERE
					courseModuleId = " . $cmId . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		// echo DOC_ROOT.'/docentes/carta/carta_'.$info['rutaCarta'];
		@unlink(DOC_ROOT . '/docentes/carta/' . $info['rutaCarta']);

		$sql = 'UPDATE 		
				course_module SET 		
				rutaCarta = ""			      		
				WHERE courseModuleId = ' . $cmId . '';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();




		return true;
	}



	public function onDeleteInforme($cmId)
	{
		$sql = "SELECT 
					* 
				FROM 
					course_module
				WHERE
					courseModuleId = " . $cmId . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		// echo DOC_ROOT.'/docentes/carta/carta_'.$info['rutaCarta'];
		@unlink(DOC_ROOT . '/docentes/informe/' . $info['rutaInforme']);

		$sql = 'UPDATE 		
				course_module SET 		
				rutaInforme = ""			      		
				WHERE courseModuleId = ' . $cmId . '';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
		return true;
	}


	public function onDeleteRubrica($cmId)
	{


		$sql = "SELECT 
					* 
				FROM 
					course_module
				WHERE
					courseModuleId = " . $cmId . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		// echo DOC_ROOT.'/docentes/carta/carta_'.$info['rutaCarta'];
		@unlink(DOC_ROOT . '/docentes/rubrica/' . $info['rutaRubrica']);

		$sql = 'UPDATE 		
				course_module SET 		
				rutaRubrica = ""			      		
				WHERE courseModuleId = ' . $cmId . '';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();




		return true;
	}

	public function onDeleteEncuadre($cmId)
	{


		$sql = "SELECT 
					* 
				FROM 
					course_module
				WHERE
					courseModuleId = " . $cmId . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();

		// echo DOC_ROOT.'/docentes/carta/carta_'.$info['rutaCarta'];
		@unlink(DOC_ROOT . '/docentes/encuadre/' . $info['rutaRubrica']);

		$sql = 'UPDATE 		
				course_module SET 		
				rutaEncuadre = ""			      		
				WHERE courseModuleId = ' . $cmId . '';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();




		return true;
	}

	public function EnumerateMsj()
	{

		$sql = "SELECT 
					* 
				FROM 
					mensaje
				WHERE
					1 ";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}


	public function enumeratePersonalAcademico()
	{


		$sql = "SELECT 
					* 
				FROM 
					personal
				WHERE
					mostrar ='si' order by numero asc";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		foreach ($result as $key => $aux) {

			if (file_exists(DOC_ROOT . "/" . $aux['foto'])) {
				$foto = WEB_ROOT . "/" . $aux['foto'];
			} else {
				$foto = WEB_ROOT . "/alumnos/no_foto.JPG";
			}
			$result[$key]['description'] = htmlspecialchars_decode($aux['description']);
			$result[$key]['foto'] = $foto;
		}



		return $result;
	}

	public function InfoMsjs($Id)
	{

		$sql = "SELECT 
					* 
				FROM 
					mensaje
				WHERE
					mensajeId  = " . $Id . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRow();

		return $result;
	}

	public function enumerateDocentesMsj($Id)
	{


		$sql = "SELECT 
					p.* 
				FROM 
					mensaje_personal as m
				left join personal as p on p.personalId = m.personalId
				WHERE
					mensajeId  = " . $Id . "";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	public function Activar()
	{

		$sql = 'UPDATE 		
				personal SET 		
				estatus = "activo"			      		
				WHERE personalId = ' . $this->personalId . '';
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();

		$this->Util()->setError(40104, "complete");
		$this->Util()->PrintErrors();

		return true;
	}


	public function saveGuardarCertificacion()
	{


		$sql = 'DELETE FROM personal_subject WHERE personalId = ' . $_POST["personalId"];
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();

		foreach ($_POST as $key => $aux) {

			$f = explode("_", $key);
			if ($f[0] == "chek") {


				$sql = "INSERT INTO 
					personal_subject
					(						
						personalId, 
						subjectId
					)
				 VALUES 
					(						
						" . $_POST["personalId"] . ",
						'" . $f[1] . "'
					)";

				$this->Util()->DB()->setQuery($sql);
				$lastId = $this->Util()->DB()->InsertData();
			}
		}

		return true;
	}


	public function saveCalificadorUsuario()
	{
		$sql = "DELETE FROM usuario_personal WHERE usuarioId = " . $_POST["id"] . " AND subjectId = " . $_POST["subjectId"];
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$sql = "INSERT INTO usuario_personal(personalId, usuarioId, subjectId) VALUES(" . $_POST["personalId"] . ", " . $_POST["id"] . ", " . $_POST["subjectId"] . ")";			
		$this->Util()->DB()->setQuery($sql);
		$lastId = $this->Util()->DB()->InsertData();
		return true;
	}


	public function saveCapacitadorUsuario()
	{
		$sql = "DELETE FROM usuario_capacitador WHERE  usuarioId = " . $_POST["id"] . " AND subjectId = " . $_POST["subjectId"];
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$sql = "INSERT INTO usuario_capacitador(personalId, usuarioId, subjectId) VALUES(" . $_POST["personalId"] . ", " . $_POST["id"] . ", " . $_POST["subjectId"] . ")";			
		$this->Util()->DB()->setQuery($sql);
		$lastId = $this->Util()->DB()->InsertData();
		return true;
	}

	public function saveCapacitadorOriginalUsuario()
	{
		$sql = "DELETE FROM usuario_capacitador_original WHERE  usuarioId = " . $_POST["id"] . " AND subjectId = " . $_POST["subjectId"];
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		$sql = "INSERT INTO usuario_capacitador_original(personalId, usuarioId, subjectId) VALUES(" . $_POST["personalId"] . ", " . $_POST["id"] . ", " . $_POST["subjectId"] . ")";			
		$this->Util()->DB()->setQuery($sql);
		$lastId = $this->Util()->DB()->InsertData();
		return true;
	}

	public function changeGroup()
	{
		$sql = "UPDATE user_subject SET courseId = " . $_POST["newCourseId"] . " WHERE courseId = " . $_POST["courseId"] . " AND alumnoId = " . $_POST["alumnoId"];
		// echo $sql;
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->ExecuteQuery();
		return true;
	}


	public function sendInfoEvaluador()
	{
		// echo "<pre>"; print_r($_POST);
		// exit;
		foreach ($_POST as $key => $aux) 
		{
			$f = explode("_", $key);
			// Evaluador
			if ($f[0] == "evaluador") 
			{
				$_POST["personalId"] = $aux;
				$_POST["id"] = $_POST["id"];
				$_POST["subjectId"] = $f[1];
				if ($aux <> '')
					$this->saveCalificadorUsuario();
			}
			// Alineador
			if ($f[0] == "capacitador") 
			{
				$_POST["personalId"] = $aux;
				$_POST["id"] = $_POST["id"];
				$_POST["subjectId"] = $f[1];
				if ($aux <> '')
					$this->saveCapacitadorUsuario();
			}
			// Capacitador
			if ($f[0] == "capacitadororiginal") 
			{
				$_POST["personalId"] = $aux;
				$_POST["id"] = $_POST["id"];
				$_POST["subjectId"] = $f[1];
				if ($aux <> '')
					$this->saveCapacitadorOriginalUsuario();
			}
			// Switch Group
			if ($f[0] == "group") 
			{
				$_POST["alumnoId"] = $_POST["id"];
				$_POST["newCourseId"] = $aux;
				$_POST["courseId"] = $f[1];
				if ($_POST["newCourseId"] != $_POST["courseId"])
					$this->changeGroup();
			}
		}
		return true;
	}

	public function addCertificacionOk()
	{


		$sql = "SELECT 
					count(*) 
				FROM 
					user_subject
				WHERE
					alumnoId  = " . $_POST["alumnoId"] . " and courseId = " . $_POST["grupos"] . "";

		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetSingle();

		if ($result >= 1) {
			echo "fail[#]";
			echo "<font color='red'>La certificacion ya se encuentra agregada</font>";
			exit;
		}


		$sql = "INSERT INTO 
					user_subject 
					(						
						alumnoId, 
						courseId,
						status
					)
				 VALUES 
					(						
						" . $_POST["alumnoId"] . ",
						" . $_POST["grupos"] . ",
						'activo'
					)";

		$this->Util()->DB()->setQuery($sql);
		$lastId = $this->Util()->DB()->InsertData();

		return true;
	}


	public function gruposEvaluador($subjectId, $personalId)
	{


		$sql = "SELECT 
					c.courseId,
					 c.group,
					 (
						SELECT COUNT(*) FROM usuario_personal
							INNER JOIN user_subject
								ON user_subject.alumnoId = usuario_personal.usuarioId 
							INNER JOIN course 
								ON course.courseId = user_subject.courseId
							WHERE usuario_personal.subjectId = ".$subjectId." 
								AND usuario_personal.personalId = ".$personalId." 
								AND course.group = c.group
								AND user_subject.courseId = c.courseId 
					 ) as cantidad, 
					 c.numero
				FROM 
					usuario_personal up
				left join user_subject u on u.alumnoId = up.usuarioId
				left join course c on c.courseId = u.courseId
				WHERE
					up.personalId  = " . $personalId . " and c.subjectId = " . $subjectId . " group by c.courseId";
		// exit;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();

		return $result;
	}

	// ACTUALIZADO RC
	public function gruposCapacitador($personalId = 0)
	{
		$personal = "";
		if ($personalId > 0)
			$personal = " AND uc.personalId = " . $personalId;
		$sql = "SELECT c.courseId, c.group,
					(SELECT COUNT(*) FROM user_subject u
							INNER JOIN course ON course.courseId = u.courseId 
							INNER JOIN subject ON course.subjectId = subject.subjectId
        					INNER JOIN usuario_capacitador uc ON (uc.usuarioId = u.alumnoId AND uc.subjectId = subject.subjectId) 
						WHERE uc.personalId  = " . $_SESSION["User"]["userId"] . " AND course.subjectId = " . $_GET["id"] . " AND course.courseId = c.courseId " . $personal  . "
					) AS cantidad
			   	FROM usuario_capacitador uc
					LEFT JOIN user_subject u ON u.alumnoId = uc.usuarioId
					LEFT JOIN course c ON c.courseId = u.courseId
			   WHERE uc.personalId  = " . $_SESSION["User"]["userId"] . " and c.subjectId = " . $_GET["id"] . " group by c.courseId";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function gruposCapacitadorOriginal($personalId = 0)
	{
		$personal = "";
		if ($personalId > 0)
			$personal = " AND uco.personalId = " . $personalId;
		$sql = "SELECT c.courseId, c.group,
					(SELECT COUNT(*) FROM user_subject u
							INNER JOIN course ON course.courseId = u.courseId 
							INNER JOIN subject ON course.subjectId = subject.subjectId
        					INNER JOIN usuario_capacitador_original uco ON (uco.usuarioId = u.alumnoId AND uco.subjectId = subject.subjectId) 
						WHERE uco.personalId  = " . $_SESSION["User"]["userId"] . " AND course.subjectId = " . $_GET["id"] . " AND course.courseId = c.courseId " . $personal  . "
					) AS cantidad
			   	FROM usuario_capacitador_original uco
					LEFT JOIN user_subject u ON u.alumnoId = uco.usuarioId
					LEFT JOIN course c ON c.courseId = u.courseId
			   WHERE uco.personalId  = " . $_SESSION["User"]["userId"] . " and c.subjectId = " . $_GET["id"] . " group by c.courseId";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function EnumerateSubject($subjectId, $orden = 'name ASC')
	{
		$sql = "SELECT 
					p.*,
					concat_ws(' ', p.name, p.lastname_paterno, p.lastname_materno) as nombrePersona
				FROM personal AS p
			 	INNER JOIN personal_subject AS ps ON p.personalId = ps.personalId
				WHERE
					p.perfil = 'Docente' AND 
					p.estatus = 'activo' AND 
					ps.subjectId = " . $subjectId . "
				ORDER BY p.name ASC";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}

	public function getEvaluators()
	{
		$sql = "SELECT personal.personalId, personal.name, personal.lastname_paterno, personal.lastname_materno FROM `personal` INNER JOIN personal_role ON personal_role.personalId = personal.personalId WHERE personal_role.roleId = 42 AND personal.estatus = 'activo' ORDER BY personal.name, personal.lastname_paterno";
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetResult();
		return $result;
	}
}
