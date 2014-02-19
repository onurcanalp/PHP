<?php
abstract class insan {

	protected $adsoyad;
	protected $cins;

	public function isimBelirle($x) {
		$this->adsoyad = $x;
	}

	public function isimGoster() {
		echo $this->adsoyad;
	}
	
	public abstract function cinsBelirle();

}

//insan sınıfından türettik
class kadin extends insan {

	protected $trip; //kadın a özel 
	
	public function cinsBelirle() {
	
		$this->cins = "Kadın";
		return $this->cins;
	
	}

}

//insan sınıfından türettik
class erkek extends insan {

	protected $sabir; //erkek e özel
	
	public function cinsBelirle() {
	
		$this->cins = "Erkek";
		return $this->cins;
	
	}

}

$x = new erkek();
$x->isimBelirle('Onur Canalp');
$x->isimGoster();
echo $x->cinsBelirle();
?>
