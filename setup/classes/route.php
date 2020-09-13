<?php
namespace Setup\classes;

class Route
{

    use \Setup\Traits\Helpers;

    public function __construct()
    {
    }
    protected function getStandardsRoutes(array $standardsRoutes = [])
    {
        $value = $this->parseUrl()[0];
        if (!array_key_exists($value, $standardsRoutes)) {
            return "NotFoundController";
        }

        if (file_exists(DIRROOT . "app/Controllers/{$standardsRoutes[$value]}.php")) {
            return $standardsRoutes[$value];
        } else {
            return "NotFoundController";
        }
    }

}
