<?php
class Database 
{
	private static $dbName = 'Hanabi' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';
	
    private static $cont  = null;
    private static $utf8  = 'utf8';
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	public static function connect()
	{
	   // One objConnect through whole application
       if ( null == self::$cont )
       {      
        try 
        {
                    // self::$utf8 ='utf8';
					self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName.";"."charset=utf8", self::$dbUsername, self::$dbUserPassword);  
                    // mysqli_set_charset(self::$cont, self::$utf8);
        }


        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
	}
	
	public static function disconnect()
	{
		self::$cont = null;
    }
}
?>