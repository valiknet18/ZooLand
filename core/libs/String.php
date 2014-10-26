<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 26.10.14
 * Time: 13:45
 */

class String
{
    public $string;

    public function __construct($string)
    {
        if(gettype($string) == "string"){
            $this->string = $string;
        }
        else{
            throw new Exception();
        }

    }

    public function cutsString($length)
    {
        if(mb_strlen($this->string) < $length){
            return $this->string;
        }

        while($this->string[$length] != ' '){
            --$length;
        }

        return (mb_strcut($this->string,0,$length))."....";
    }
} 