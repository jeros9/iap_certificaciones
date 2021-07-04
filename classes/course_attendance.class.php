<?php

	class CourseAttendance extends Course
	{
        private $attendanceId;
        private $courseId;
        private $personalId;
        private $userId;
        private $attendanceDay;
        private $attendanceHour;
        private $typeAttendance;
        private $created_at;

		public function setAttendanceId($value)
		{
			$this->attendanceId = $value;
        }
        
		public function setCourseId($value)
		{
			$this->courseId = $value;	
		}
        
		public function setPersonalId($value)
		{
			$this->personalId = $value;	
		}
        
		public function setUserId($value)
		{
			$this->userId = $value;	
		}
        
		public function setAttendanceDay($value)
		{
			$this->attendanceDay = $value;	
		}
        
		public function setAttendanceHour($value)
		{
			$this->attendanceHour = $value;	
		}
        
		public function setTypeAttendance($value)
		{
			$this->typeAttendance = $value;	
		}
        
		public function setCreatedAt($value)
		{
			$this->created_at = $value;	
		}

		public function getAttendanceId()
		{
			return $this->attendanceId;
        }
        
        public function getCourseId()
		{
			return $this->courseId;	
		}
        
        public function getPersonalId()
		{
			return $this->personalId;	
		}
        
        public function getUserId()
		{
			return $this->userId;	
		}
        
        public function getAttendanceDay()
		{
			return $this->attendanceDay;	
		}
        
        public function getAttendanceHour()
		{
			return $this->attendanceHour;	
		}
        
        public function getTypeAttendance()
		{
			return $this->typeAttendance;	
		}
        
        public function getCreatedAT()
		{
			return $this->createdAt;	
		}

        public function Save()
        {
            $sql = "INSERT INTO pc_attendance_list(courseId, personalId, userId, attendanceDay, attendanceHour, typeAttendance, created_at) VALUES(" . $this->courseId . ", " . $this->personalId . ", " . $this->userId . ", '" . $this->attendanceDay . "', CURTIME(), '" . $this->typeAttendance . "', CURDATE())";
            $this->Util()->DB()->setQuery($sql);
            $this->Util()->DB()->InsertData();
            return true;
        }

		public function EnumerateCapacitador()
		{
			$sql = "SELECT DISTINCT(pcal.personalId) AS personalId, p.name, p.lastname_paterno, p.lastname_materno
                        FROM pc_attendance_list pcal
                            INNER JOIN personal p 
                                ON pcal.personalId = p.personalId 
                        WHERE pcal.courseId = " . $this->courseId;
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetResult();
			return $result;
		}
				
	}	
?>