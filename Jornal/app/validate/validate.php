<?php

namespace App\validate;

class Validate
{

	private static $error = false;    
    /**
     * Method validate
     *
     * @param \Closure $callback [explicite description]
     * @param $returnType $returnType [explicite description]
     *
     * @return object
     */
    public static function validate(\Closure $callback, $returnType = null):object|array
    {

        if (is_callable($callback))
        {
            $callback();

            // return self::dataSanitized($returnType);
        }

    }

        
    /**
     * Method required
     *
     * @param ...$fields $fields [explicite description]
     *
     * @return object
     */
    public static function required(...$fields)
    {


        foreach ($fields as $field)
        {

            if(empty($_POST[$field]))
            {

                Flash::setFlash($field,"Esse campo é obrigatorio");
                static::$error = true;

            }

        }

        return new static;


    }
    
    /**
     * Method email
     *
     * ...$fields $fields [explicite description]
     *
     * @return object
     */
    public static function email(...$fields)
    {

        foreach ($fields as $field)
        {

            if(!filter_input(INPUT_POST,$field,FILTER_VALIDATE_EMAIL))
            {

                Flash::setFlash($field,"O email informado não é válido.");
                static::$error = true;

            }

        }


        return new static;


    }
    
    /**
     * Method unique
     *
     * @param $field $field [explicite description]
     * @param $model $model [explicite description]
     *
     * @return object
     */
    public static function unique($field,$model)
    {
        
        $modelToValidate = new $model();


        $register = $modelToValidate->find($field,$_POST[$field]);


        if ($register)
        {
            Flash::setFlash($field,"O email informado já está cadastrado no nosso sistema.");
            static::$error = true;
        }

        return new static;

    }

    
    /**
     * Method failed
     *
     * @return bool
     */
    public static function failed():bool
    {

        return static::$error;

    }
    
    /**
     * Method notValidation
     *
     * @return void
     */
    public static function notValidation()
    {
        return new static;
    }
}
