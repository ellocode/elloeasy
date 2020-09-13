<?php
namespace App\Models;

class Model
{
    public static function getClassName() {
        return get_called_class();
    }
}
?>