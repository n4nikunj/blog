<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Helper
{
    public static function getName($id)
    {
        $result =  DB::table('users')
			->where(['id'=>$id])
			->get();
			echo $result[0]->name;
    }
}