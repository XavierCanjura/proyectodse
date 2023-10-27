<?php
    class Validator{

        //FUNCION QUE LIMPIA LOS CAMPOS DE ESPACIOS EN BLANCO
		public function validateForm($fields){
			foreach($fields as $index => $value)
			{
				$value = trim($value);
				$fields[$index] = $value;
			}
			return $fields;
		}

		//FUNCION PARA VALIDAR ID'S
		public function validateId($value)
		{
			if(filter_var($value, FILTER_VALIDATE_INT, array('options'=> array('min_range' => 1))))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
        
        //FUNCION PARA VALIDAR FECHA EN FORMATO aaaa-mm-dd
		public function validateFecha($value)
		{
			if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$value))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		//FUNCION PARA VALIDAR CORREOS ELECTRONICOS
		public function validateEmail($email)
		{
			if(filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		//FUNCION PARA VALIDAR SOLO LETRAS
		public function validateAlphabetic($value, $minimum, $maximum)
		{
			if(preg_match("/^[a-zA-ZñÑáÁéÉíÍóÓúÚ\s]{".$minimum.",".$maximum."}$/", $value))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		//FUNCION PARA VALIDAR ALFANUMERICO
		public function validateAlphanumeric($value, $minimum, $maximum)
		{
			if(preg_match("/^[a-zA-Z0-9ñÑáÁéÉíÍóÓúÚ\s\.]{".$minimum.",".$maximum."}$/", $value))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		//FUNCION PARA VALIDAR SOLO NUMEROS
		public function validateNumeric($value)
		{
			if(preg_match("/^(\d*\.)?\d+$/", $value))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		//FUNCION PARA VALIDAR NUMEROS DE TELEFONOS
		public function validatePhone($value)
		{
			if(strlen($value) == 8)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

        //FUNCION PARA VALIDADR CONTRASENIAS
		public function validatePassword($value)
		{
			if(strlen($value) > 5)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
    }
?>