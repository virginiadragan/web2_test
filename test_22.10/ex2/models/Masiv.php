<?
class Masiv{
	public function addElemnt ($element) {
		$_SESSION['myNumbers'][] = $element;
	}
	public function getElement ($index) {
		if(!array_key_exists($index, $_SESSION['myNumbers'])){
			echo 'Element ' . $index . ' do not exist';
		}else {
			return $_SESSION['myNumbers'][$index];
		}
	}	
	public function getAllElements () {
		return $_SESSION['myNumbers'];
	}	
	public function deleteElement ($index) {
		if(array_key_exists($index, $_SESSION['myNumbers'])){
			unset($_SESSION['myNumbers'][$index]);
		}else {
			echo 'Element ' . $index . ' do not exist';
		}
	}		

}
?>