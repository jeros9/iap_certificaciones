<?php
	class Order extends Main
	{
		private $typeOrderId;			//identificador del puesto dentro de la base de datos
		private $orderName;			//nombre del puesto
		
		public function setTypeOrderId($value)
		{
			$this->Util()->ValidateInteger($value);
			$this->typeOrderId = (int)$value;
		}
		
		public function setOrderName($value)
		{
			$this->Util()->ValidateString($value, 60, 1, "orderName");
			$this->orderName = $value;
		}
		
		public function getTypeOrderId()
		{
			return $this->typeOrderId;
		}

		public function getOrderName()
		{
			return $this->OrderName;
		}
		
		
		public function Enumerate()
		{
            $sql = "SELECT * FROM pc_typeorder ORDER BY orderName";
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util()->DB()->GetResult();
            return $result;
		}
		
		public function Info()
		{
			$sql = "SELECT * FROM pc_typeorder WHERE typeOrderId = " . $this->typeOrderId;
			$this->Util()->DB()->setQuery($sql);
			$result = $this->Util->EncodeRow($this->Util()->DB()->GetRow());
			return $result;
		}
		
	}
?>