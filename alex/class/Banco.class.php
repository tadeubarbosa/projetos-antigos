<?php

	class Banco {
		public static $conn;

		public static function conexao() {
			if(is_null(self::$conn)){ self::$conn = new mysqli(HOST_NAME,HOST_USER,HOST_PASS,HOST_DB); }
			return self::$conn;
		}
	}