<?php

	class GroupAnnouncement extends Course
	{
		private $title;
		private $description;
		private $announcementId;
		private $limit;
		
		public function setLimit($value)
		{
			$this->Util()->ValidateInteger($value);
			$this->limit = $value;
		}
		
		
		public function setAnnouncementId($value)
		{
			$this->Util()->ValidateInteger($value);
			$this->announcementId = $value;
		}
		
		public function setTitle($value)
		{
			$this->Util()->ValidateString($value, 50000, 0, 'title');
			$this->title = $value;
		}

		public function setDescription($value)
		{
			$this->Util()->ValidateString($value, 50000, 0, 'description');
			$this->description = $value;
		}
		
		public function setStudentLimit($value)
		{
			$this->Util()->ValidateInteger($value, 100, 1);
			$this->student_limit = $value;
		}
        
        // ACTUALIZADO RC
		public function Enumerate($courseId = 0)
		{	
            if($this->limit)
				$sql = "SELECT * FROM group_announcement WHERE courseId = '" . $courseId . "' ORDER BY date DESC LIMIT 5";
            else
                $sql = "SELECT * FROM group_announcement WHERE courseId = '" . $courseId . "' ORDER BY date DESC LIMIT 20";
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetResult();
			foreach($result as $key => $res)
				$result[$key]["description"] = $this->Util()->DecodeTiny($result[$key]["description"]);
			return $result;
		}
        
        // ACTUALIZADO RC
		public function Save()
		{
			if($this->getCourseId())
			{
                $course = new Course;
                $course->setCourseId($this->getCourseId());
                $infoCourse = $course->Info();
				$group = new Group;
				$group->setCourseId($this->getCourseId());
                $theGroup = $group->GroupCapacitador();
				$modulo = $this->Util()->acento($infoCourse["name"]);
                $titulo = $this->Util()->acento($this->title);
				$message[3]["subject"] = "Nuevo anuncio | " . $titulo;
				$message[3]["body"] = $this->Util()->DecodeTiny($this->description);
				$details_body = array();
                $details_subject = array();
                $attachment = "";
				$fileName = "";
                $sendmail = new Sendmail;
				foreach($theGroup as $key => $value)
				{
                    $nombremail = $this->Util()->acento($value["names"]);
                    $correo = strtolower($value['email']);
                    if($correo != '')
				        $sendmail->PrepareAttachment($message[3]["subject"], $message[3]["body"], $details_body, $details_subject, $correo, $nombremail, $attachment, $fileName); 		
                }
			}
			$this->Util()->DB()->setQuery("INSERT INTO group_announcement(courseId, courseModuleId, title, date, personalId, description)
				VALUES('" . $this->getCourseId() . "', 0, '" . $this->title . "', '" . date("Y-m-d H:i:s") . "', '" . $_SESSION["User"]["userId"] . "', '" . $this->description . "')");
			$result = $this->Util()->DB()->InsertData();
			$this->Util()->setError(90000, 'complete', "Has agregado un aviso");
			$this->Util()->PrintErrors();
		}
		
	// ACTUALIZADO RC
	public function Edit($Id)
	{
        if($this->getCourseId())
        {
            $course = new Course;
            $course->setCourseId($this->getCourseId());
            $infoCourse = $course->Info();
            $group = new Group;
            $group->setCourseId($this->getCourseId());
            $theGroup = $group->GroupCapacitador();
            $modulo = $this->Util()->acento($infoCourse["name"]);
            $titulo = $this->Util()->acento($this->title);
            $message[3]["subject"] = "Nuevo anuncio | " . $titulo;
            $message[3]["body"] = $this->Util()->DecodeTiny($this->description);
            $details_body = array();
            $details_subject = array();
            $attachment = "";
            $fileName = "";
            $sendmail = new Sendmail;
            foreach($theGroup as $key => $value)
            {
                $nombremail = $this->Util()->acento($value["names"]);
                $correo = strtolower($value['email']);
                if($correo != '')
                    $sendmail->PrepareAttachment($message[3]["subject"], $message[3]["body"], $details_body, $details_subject, $correo, $nombremail, $attachment, $fileName); 		
            }	
        }
        $sql = "UPDATE group_announcement SET title = '" . $this->title . "', description = '" . $this->description . "' WHERE announcementId = '" . $Id . "'";
        $this->Util()->DB()->setQuery($sql);
        $result = $this->Util()->DB()->UpdateData();
        return true;
	}

		
	public function Delete($id = null){
		
		 $sql = "DELETE FROM 
					announcement
				WHERE 
					announcementId = ".$this->announcementId;
							
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->DeleteData();
	
		$this->Util()->setError(10032, "complete");
		$this->Util()->PrintErrors();
		
		return true;
				
	}
    
    // ACTUALIZADO RC
    public function Info($Id = null)
    {
		$sql = "SELECT * FROM group_announcement WHERE announcementId = " . $Id;
		$this->Util()->DB()->setQuery($sql);
		$result = $this->Util()->DB()->GetRoW();
		return $result;
	}
	
	
		
}
		
?>