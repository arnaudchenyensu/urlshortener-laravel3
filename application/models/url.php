<?php

class Url extends Eloquent
{
    public static $timestamps = false;

    public static $rules = array('url' => 'required|url');

    public static function validate($input) {
        $validation = Validator::make($input, static::$rules);
        if($validation->fails())
            return($validation);
        return true;
    }

    public static function getUniqueUrl() {
        $shortened = null;
        while($shortened==null) {
            $shortened = base_convert(rand(10000,99999), 10, 36);
            if(static::where_url('$shortened')->first())
                $shortened=null;
        }
        return $shortened;
    }

}