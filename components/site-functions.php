<?php 

	function say_hello_to($argument) {
	    return "Tere {$argument}";
	} 
?>
<?php 
	function redirect_to($new_address) {
		return header("Location: " . $new_address);
	}
?>