<?php

	class CourseInform extends Course
	{
        private $informId;
        private $courseId;
        private $personalId;
        private $file;
        private $created_at;

		public function setInformId($value)
		{
			$this->informId = $value;
        }
        
		public function setCourseId($value)
		{
			$this->courseId = $value;	
		}
        
		public function setPersonalId($value)
		{
			$this->personalId = $value;	
		}
        
		public function setFile($value)
		{
			$this->file = $value;	
		}
        
		public function setCreatedAt($value)
		{
			$this->created_at = $value;	
		}

		public function getInformId()
		{
			return $this->informId;
        }
        
        public function getCourseId()
		{
			return $this->courseId;	
		}
        
        public function getPersonalId()
		{
			return $this->personalId;	
		}
        
        public function getFile()
		{
			return $this->file;	
		}
        
        public function getCreatedAT()
		{
			return $this->createdAt;	
		}

        // ACTUALIZADO RC
		public function Save()
		{
			if($this->Util()->PrintErrors())
				return false;
			
			$sql = "INSERT INTO pc_course_inform(courseId, personalId, created_at) VALUES(" . $this->courseId . ", " . $this->personalId . ", '" . $this->created_at . "')";
			$this->Util()->DB()->setQuery($sql);
			$id = $this->Util()->DB()->InsertData();
			$target_path = DOC_ROOT . "/capacitador_informs/";

			$ext = end(explode('.', basename($_FILES['informe']['name'])));			
			$target_path = $target_path . "informe_" . $id . "." . $ext; 
			$relative_path = "informe_" . $id . "." . $ext; 
			
			if(move_uploaded_file($_FILES['informe']['tmp_name'], $target_path)) {
				$sql = "UPDATE pc_course_inform SET file = '" . $relative_path . "' WHERE informId = " . $id;
				$this->Util()->DB()->setQuery($sql);
				$this->Util()->DB()->UpdateData();
			}
			$this->Util()->setError(90000, 'complete', "Se ha agregado el informe del curso");
			$this->Util()->PrintErrors();
		}

		public function Info()
		{
			$sql = "SELECT * FROM pc_course_inform WHERE informId = " . $this->informId;
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetRow();
			if($result)
				$result = $this->Util->EncodeRow($result);
			return $result;	
        }

        
		public function Inform()
		{
			$sql = "SELECT * FROM pc_course_inform WHERE personalId = " . $this->personalId . " AND courseId = " . $this->courseId;
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetRow();
			if($result)
				$result = $this->Util->EncodeRow($result);
			return $result;	
        }

		public function Enumerate()
		{
			$sql = "SELECT p.name, p.lastname_paterno, p.lastname_materno, pcci.file 
						FROM pc_course_inform pcci
							INNER JOIN personal p 
								ON pcci.personalId = p.personalId 
						WHERE courseId = " . $this->courseId;
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetResult();
			return $result;
		}

		public function Delete()
		{
			if($this->Util()->PrintErrors())
				return false;
			
			$sql = "DELETE FROM pc_course_inform WHERE informId = " . $this->informId;
			$this->Util()->DB()->setQuery($sql);
			$this->Util()->DB()->DeleteData();
			$this->Util()->setError(90000, 'complete', "Se ha eliminado el informe");
			$this->Util()->PrintErrors();
			return $result;
		}
				
	}	
?>