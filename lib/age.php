<?php
class Age{
		public $date_of_birth;
	
function __construct($date){
	$this->date_of_birth = $date;
}

	function getUmur(){
		if(!empty($this->date_of_birth))
		{
		$interval = date_diff(date_create(),date_create($this->date_of_birth));
		
		return $interval->format("%y Tahun, %M Bulan, %D Hari");
		}else{
			return "<p>Data tidak ditemukan</p>"; 
		}
	}
}
?>