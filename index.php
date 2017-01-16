<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>class php</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
class StrUtils {
	private $str = "";
	public function __construct($newString){
		$this->str = $newString;
	}
	public function bold(){
		$this->str = "<strong>".$this->str."</strong>";
		
	}
	public function italic(){
		$this->str = "<em>".$this->str."</em>";
	}
	public function underline(){
		$this->str = "<span class='souligne'>".$this->str."</span>";
	}
	public function capitalize (){
		$this->str = "<span class='maj'>".$this->str."</span>";
	}
	public function uglify (){
		$this->bold();
		$this->italic();
		$this->underline();
		$this->capitalize();
	}
	public function toString(){
		return $this->str;		
	}
	

};
$maString1 = new StrUtils("hello world bold");
$maString1->bold();
echo $maString1->toString()."\n";

$maString2 = new StrUtils("hello world italic");
$maString2->italic();
echo $maString2->toString()."\n";

$maString3 = new StrUtils("hello world underlined");
$maString3->underline();
echo $maString3->toString()."\n";

$maString4 = new StrUtils("hello world capitalize");
$maString4->capitalize();
echo $maString4->toString()."\n";

$maString5 = new StrUtils("hello world uglify");
$maString5->uglify();
echo $maString5->toString()."\n";

?>	
</body>
</html>