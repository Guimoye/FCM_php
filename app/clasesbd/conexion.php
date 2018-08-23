<?php

	class conectar{

		public function conexion(){
            $dbHost     =   'localhost';
            //$dbHost     =   '138.197.222.135';
            $dbName     =   'notifications';
            $dbUser     =   'root';
            $dbPass     =   '';
           // $dbPass     =   'Cman@201800';
			$conexion   =   mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

			return $conexion;
		}
	}

 ?>



<?php
/*
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
}
*/
?>