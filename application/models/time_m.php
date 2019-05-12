<?php
class Time_M extends MY_Model {
	public function __construct(){
		parent::__construct();
	}
	public function check_time($date, $time){
		$count = 0;
		$where = "date='$date' AND time='$time'";
		$this->db->where($where);
		$res_blessing = $this->db->get('blessings')->row();
		if($res_blessing){
			$count = $count + 1;
		}
		$where = "date='$date' AND time='$time'";
		$this->db->where($where);
		$res_burial = $this->db->get('burials')->row();
		if($res_burial){
			$count = $count + 1;
		}
		$where = "date='$date' AND time='$time'";
		$this->db->where($where);
		$res_marriage = $this->db->get('marriage')->row();
		if($res_marriage){
			$count = $count + 1;
		}
		$where = "date_of_baptism='$date' AND time='$time'";
		$this->db->where($where);
		$res_baptist = $this->db->get('baptist')->row();
		if($res_baptist){
			$count = $count + 1;
		}
		$where = "start_date='$date' AND event_time='$time'";
		$this->db->where($where);
		$res_special = $this->db->get('special')->row();
		if($res_special){
			$count = $count + 1;
		}
		$day = date('l', strtotime($date));
		if($day == 'Sunday'){
			$def_sunday = ['06:00', '07:30', '09:00', '11:00', '16:30', '18:00'];
			if(in_array($time, $def_sunday)){
				$count = $count + 1;	
			}
		}
		if($day == 'Monday'){
			if($time == '06:30'){
				$count = $count + 1;
			}
		}
		if($day == 'Tuesday'){
			if($time == '06:30'){
				$count = $count + 1;
			}
		}
		if($day == 'Wednesday'){
			$def_wed = ['06:30', '18:00'];
			if(in_array($time, $def_wed)){
				$count = $count + 1;
			}
		}
		if($day == 'Thursday'){
			if($time == '06:30'){
				$count = $count + 1;
			}
		}
		if($day == 'Friday'){
			if($time == '06:30'){
				$count = $count + 1;
			}
		}
		if($day == 'Saturday'){
			$def_sat = ['06:30', '18:30'];
			if(in_array($time, $def_sat)){
				$count = $count + 1;
			}
		}
		return $count;
	}
	public function check_baptist_availability($date, $time){
		$where = "date_of_baptism = '$date' AND time = '$time'";
		$this->db->where($where);
		return $this->db->get('baptist')->result();
	}
}
?>