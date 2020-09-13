<?php
namespace Setup\Classes;

class BreadCrumb{

   use \Setup\Traits\Helpers;

    #Cria os breadcrumbs do site
    public function addBreadcrumb()
    {
        $countUrl=count($this->parseUrl());
        $ArrayLink[0]='';
        echo "<a href=".WWWROOT.">home</a> > ";
        for($I=0; $I < $countUrl; $I++){
            $ArrayLink[0].=$this->parseUrl()[$I].'/';
            echo "<a href=".WWWROOT.$ArrayLink[0].">".$this->parseUrl()[$I]."</a>";
            if($I < $countUrl - 1){
                echo " > ";
            }
        }
    }
}
?>