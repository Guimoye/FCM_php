<?php 

	class crud_usuario{

		public function agregar($datos){
			$obj        =   new conectar();
			$conexion   =   $obj->conexion();
			$sql        =   "INSERT INTO tabla (id, token, nombre, dni) 
                            VALUES (NULL, '$datos[0]', '$datos[1]', '$datos[2]');";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>