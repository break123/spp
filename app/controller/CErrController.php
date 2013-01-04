<?php
class CErrController extends CController
{

	public function errHandler($e)
	{	
		echo "<b>Exception from errorHandler:</b><br/>";
		echo "<b>message: </b>".$e->getMessage().", <b>code: </b>".$e->getCode()."<br/>";
		echo "<b>file: </b>".$e->getFile().", <b>line: </b>".$e->getLine()."<br/>";
		echo "<b>backtrace: </b>"."<br>";
		echo str_replace("\n","\n<br/>", $e->getTraceAsString());
		
	}
	
}