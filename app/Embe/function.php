<?php
	function stripUnicode($str){
		if(!$str) return false;
		$unicode = array(
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ',
		'd'=>'đ|Đ',
		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ',
		'i'=>'í|ì|ỉ|ĩ|ị|Ì|Í|Ị|Ỉ|Ĩ',
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ',
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ỳ|Ý|Ỵ|Ỷ|Ỹ'
		);
		foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
		return $str;
	}

	function removeExtraSpaces($str) {		
		$str = preg_replace('/\s\s+/', ' ', $str);
		return $str;
	}

	function changeTitle($str) {
		$str = trim($str);
		if(!$str) return false;
		$str = str_replace('"', '', $str);
		$str = str_replace("'", '', $str);
		$str = stripUnicode($str);
		$str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
		$str = removeExtraSpaces($str);
		$str = str_replace(' ', '-', $str);
		return $str;
	}

	function print_data($data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		exit();
	}

	function menu_recursive($data, $parent = 0, $str = "-", $select = 0) {
		foreach($data as $val) {
			$id = $val['id'];
			$name = $val['name'];
			if($val['parent_id'] == $parent) {
				if($select != 0 && $id == $select) {
					echo "<option value='$id' selected>$str $name</option>";
				} else {
					echo "<option value='$id'>$str $name</option>";
				}
				menu_recursive($data, $id, $str."-", $select);
			}
		}
	}

	function remove_comma($str) {
	    return preg_replace('/,/', '', $str);
    }

    function get_vn_time($mysqltime) {
        $timestamp = strtotime($mysqltime);
        return date("d-m-Y H:i:s", $timestamp);
    }
?>