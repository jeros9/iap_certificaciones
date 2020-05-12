<?php

	class GroupTest extends GroupActivity
	{
		private $testId;
		public function setTestId($value)
		{
			$this->testId = $value;
		}

		public function getTestId()
		{
			return $this->testId;
		}
		
		private $question;

		public function setQuestion($value)
		{
			$this->Util()->ValidateString($value, 5000, 1, 'Pregunta');
			$this->question = $value;
		}

		public function getQuestion()
		{
			return $this->question;
		}
		
		private $opcionA;

		public function setOpcionA($value)
		{
			$this->Util()->ValidateString($value, 1000, 1, 'Opcion A');
			$this->opcionA = $value;
		}

		public function getOpcionA()
		{
			return $this->opcionA;
		}

		private $opcionB;

		public function setOpcionB($value)
		{
			$this->Util()->ValidateString($value, 1000, 1, 'Opcion B');
			$this->opcionB = $value;
		}

		public function getOpcionB()
		{
			return $this->opcionB;
		}
		
		private $opcionC;

		public function setOpcionC($value)
		{
			$this->Util()->ValidateString($value, 1000, 0, 'Opcion C');
			$this->opcionC = $value;
		}

		public function getOpcionC()
		{
			return $this->opcionC;
		}

		private $opcionD;

		public function setOpcionD($value)
		{
			$this->Util()->ValidateString($value, 1000, 0, 'Opcion D');
			$this->opcionD = $value;
		}

		public function getOpcionD()
		{
			return $this->opcionD;
		}

		private $opcionE;

		public function setOpcionE($value)
		{
			$this->Util()->ValidateString($value, 1000, 0, 'Opcion E');
			$this->opcionE = $value;
		}

		public function getOpcionE()
		{
			return $this->opcionE;
		}

		private $answer;

		public function setAnswer($value)
		{
			$this->Util()->ValidateString($value, 1000, 0, 'Respuesta');
			$this->answer = $value;
		}

		public function getAnswer()
		{
			return $this->answer;
		}
        
        // ACTUALIZADO RC
		public function Enumerate($tipo = null)
		{
			$sql = "SELECT * FROM group_activity_test
				        WHERE activityId = '" . $this->getActivityId() . "'
				        ORDER BY testId ASC";
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetResult();
			foreach($result as $key => $res)
			{
				$result[$key]["opcionAShort"] = substr($res["opcionA"], 0, 20);
				$result[$key]["opcionBShort"] = substr($res["opcionB"], 0, 20);
				$result[$key]["opcionCShort"] = substr($res["opcionC"], 0, 20);
				$result[$key]["opcionDShort"] = substr($res["opcionD"], 0, 20);
				$result[$key]["opcionEShort"] = substr($res["opcionE"], 0, 20);
				$result[$key]["ponderation"]  = $this->PonderationPerQuestion();
			}
			return $result;
		}
		
		// ACTUALIZADO RC
		function Randomize($questions, $max)
		{
			$keys = array_rand($questions, $max);
			foreach($keys as $key)
				$returnArray[] = $questions[$key];
			return $returnArray;
		}

		// ACTUALIZADO RC
		public function Access($maxTries)
		{
			$sql = "SELECT try FROM group_activity_score WHERE activityId = " . $this->getActivityId() . " AND userId = " . $this->getUserId();
			$this->Util()->DB()->setQuery($sql);
			$try = $this->Util()->DB()->GetSingle();
			if($try < $maxTries)
				return 1;
			return 0;
		}

		// ACTUALIZADO RC
		public function TestScore()
		{
			$this->Util()->DB()->setQuery("SELECT ponderation FROM group_activity_score WHERE activityId = " . $this->getActivityId() . " AND userId = " . $this->getUserId());
			$score = $this->Util()->DB()->GetSingle();
			return $score;
		}
        
        // ACTUALIZADO RC
		public function Info($id = null)
		{
			$sql = "SELECT * FROM group_activity_test WHERE testId = '" . $this->getTestId() . "'";
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetRow();
			if($result)
				$result = $this->Util->EncodeRow($result);
			return $result;	
		}

        // ACTUALIZADO RC
		public function PonderationPerQuestion()
		{
			$sql = "SELECT noQuestions FROM group_activity WHERE activityId = '" . $this->getActivityId() . "'";
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetSingle();
			if($result == 0)
				$result = 1;
			$ponderation = 100 / $result;
			return $ponderation;	
		}

		public function Edit()
		{
			//creamos la cadena de seleccion
			$sql = "UPDATE 
						activity_test 
					SET
						question = '".$this->question."',
						opcionA = '".$this->opcionA."',
						opcionB = '".$this->opcionB."',
						opcionC = '".$this->opcionC."',
						opcionD = '".$this->opcionD."',
						opcionE = '".$this->opcionE."',
						answer = '".$this->answer."'
					WHERE
							testId='" . $this->getTestId() . "'";
			//configuramos la consulta con la cadena de actualizacion
			$this->Util()->DB()->setQuery($sql);
			//ejecutamos la consulta y obtenemos el resultado
			$result = $this->Util()->DB()->UpdateData();

			$this->Util()->setError(90010, 'complete', "Se ha actualizado la pregunta.");
			$this->Util()->PrintErrors();
			return $result;			
		}
		
		// ACTUALIZADO RC
		function SendTest($answers)
		{
			$questionScore = $this->PonderationPerQuestion();
			$score = 0;
			if(is_array($answers))
			{
				foreach($answers as $key => $option)
				{
					$sql = "SELECT answer FROM group_activity_test WHERE testId = " . $key;
					$this->Util()->DB()->setQuery($sql);
					$result = $this->Util()->DB()->GetSingle();
					
					if(!$result)
						$result = "opcionA";
					
					if($option == $result)
						$score += $questionScore;
				}
			}
			
			$this->Util()->DB()->setQuery("SELECT COUNT(*) FROM group_activity_score WHERE activityId = " . $this->getActivityId() . " AND userId = " . $this->getUserId());
			$count = $this->Util()->DB()->GetSingle();

			if($count == 0)
			{
				$this->Util()->DB()->setQuery("INSERT INTO group_activity_score (userId, activityId, try, ponderation) VALUES(" . $this->getUserId() . ", " . $this->getActivityId() . ", 1, " . $score . ")");
				$result = $this->Util()->DB()->InsertData();					
			}
			else
			{
				$this->Util()->DB()->setQuery("UPDATE group_activity_score SET ponderation = " . $score . ", try = try + 1 WHERE userId = " . $this->getUserId() . " AND activityId = " . $this->getActivityId() . " LIMIT 1");
				$result = $this->Util()->DB()->UpdateData();					
			}
			unset($_SESSION["timeLimit"]);

			$sendmail = new Sendmail();
			$message[3]["subject"] = "Examen finalizado Correctamente";
			$message[3]["body"] = "Has realizado el examen correctamente <br/> Calificacion obtenida: " . $score;
			$details_body = array();
			$details_subject = array();
			$attachment = "";
			$fileName = "";
			$nombremail = $infoStudent['names'];
            $correo = strtolower($infoStudent['email']);
			if($correo != '')
				$sendmail->PrepareAttachment($message[3]["subject"], $message[3]["body"], $details_body, $details_subject, $correo, $nombremail, $attachment, $fileName);
				
			$this->Util()->setError(90000, 'complete', "Has respondido el examen Satisfactoriamente. Tu resultado esta abajo.");
			$this->Util()->PrintErrors();
		}
		
	}
	
		
?>