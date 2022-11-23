<?php

namespace App\helpers;

class Upload
{
    private static $name;
	private static $file;
	private static $type;
	private static $size;
	private static $tmp_name;
	private static $folder;
	private static $error;
	private static $success;

	public function __construct() {
		if (isset($_FILES['imagem'])) 
		{
			static::$folder 	= dirname(__DIR__,2) . DIRECTORY_SEPARATOR . "public" . DIRECTORY_SEPARATOR ."posts/";
			static::$file 		= $_FILES["imagem"]["name"];
			static::$type 		= $_FILES["imagem"]["type"]; 
			static::$size 		= $_FILES["imagem"]["size"];
			static::$tmp_name	= $_FILES["imagem"]["tmp_name"];
			static::$name 		= uniqid().".".pathinfo(static::$file,PATHINFO_EXTENSION);
			static::$error = null;
		}
	}

	public static function upload()
	{
		$verifyExtensions = ["png","jpg","jpeg","JPG","JPEG"];

		$validTypes = ["image/jpeg","image/png"];

		$extension = pathinfo(static::$file,PATHINFO_EXTENSION);
		if (!in_array($extension,$verifyExtensions)) {
			static::$error = "Extenssão não permitida!";
			return false;
		} elseif (!in_array(static::$type,$validTypes)) {
			static::$error = "Tipo de arquivo invalido!";
			return false;
		} elseif (static::$size > 3 * (1024*1024)){
			static::$error = "Arquivo muito grande!";
			return false;
		}else {
			if (!file_exists(static::$folder) && !is_dir(static::$folder)):
				mkdir(static::$folder,0777);
			endif;

			if (file_exists(static::$folder . static::$name)) {
				$name = pathinfo(static::$file,PATHINFO_FILENAME);
				static::$name = uniqid() . strrchr(static::$file,'.');
			}

			if (move_uploaded_file(static::$tmp_name,static::$folder.static::$name)) {
				return static::$name;
			} else {
				static::$error = "Erro ao realizar upload!";
				return false;
			}
		}
	}
	
	public static function getName()
	{
		return static::$name;
	}

	public static function removeFile(string $file) : bool
	{
		if(file_exists(static::$folder.$file)) {
			unlink(static::$folder.$file);
			return true;
		}
		return false;
	}

	public static function failUpload() : string | null
	{
		return static::$error;
	}
}