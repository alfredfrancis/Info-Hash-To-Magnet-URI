
<?php
include_once "alfa.curl.class.php";
class Hash2mui
{
	var $hash;
	var $mui;
	
	public function __construct()
	{
		$this->curl=new AlfacURL();
	}

	public function grab_mui($hash)
	{
		$url="http://kickass.so/usearch/$hash/";
		$curl=new AlfacURL();
		$result=$curl->get($url);
		$xml = new DOMDocument();
		@$xml->loadHTML($result);
		foreach($xml->getElementsByTagName('a') as $lnk) 
		{
			if($lnk->getAttribute('title')=='Magnet link')
			{
				$ui=$lnk->getAttribute('href');
			}
		}
		return $ui;

	}
}

?>


