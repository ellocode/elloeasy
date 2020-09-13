<?php
namespace Setup\Classes;

use Setup\Classes\BreadCrumb;

class Render{

    #Propriedades
    private $Dir;
    private $FileName;
    private $Title;
    private $Description;
    private $Keywords;
    private $Layout;

    public function getDir() { return $this->Dir; }
    public function setDir($Dir) { $this->Dir = $Dir; } 
    public function getFileName() { return $this->FileName; }
    public function setFileName($FileName=null) { $this->FileName = $FileName; }
    public function getTitle() { return $this->Title; }
    public function setTitle($Title) { $this->Title = $Title; }
    public function getDescription() { return $this->Description; }
    public function setDescription($Description) { $this->Description = $Description; }
    public function getKeywords() { return $this->Keywords; }
    public function setKeywords($Keywords) { $this->Keywords = $Keywords; }
    public function getLayout() { return $this->Layout; }
    public function setLayout($Layout=null) { $this->Layout = $Layout; } 

    public function addBreadCrumb()
    {
        $breadCrumb=new BreadCrumb();
        $breadCrumb->addBreadcrumb();
    }

    public function renderLayout()
    {
        if($this->Layout==null){
            
            if(file_exists(DIRROOT."app/views/{$this->getDir()}/{$this->FileName}.php")){
               
                include_once(DIRROOT."app/views/{$this->getDir()}/{$this->FileName}.php");
            } 
        }else{
            if($this->Layout=="admin"){
                include_once(DIRROOT."app/views/layout-adm.php");
           }else{
                include_once(DIRROOT."app/views/layout-site.php");
             }
        }
       
    }

    public function addHead()
    {
        if(file_exists(DIRROOT."app/views/{$this->getDir()}/head.php")){
            include(DIRROOT."app/views/{$this->getDir()}/head.php");
        }
    }
    
    #Adiciona características específicas no header
    public function addHeader()
    {
        if(file_exists(DIRROOT."app/views/{$this->getDir()}/header.php")){
            include(DIRROOT."app/views/{$this->getDir()}/header.php");
        }
    }
    
    #Adiciona características específicas no main
    public function addMain()
    {
        if(file_exists(DIRROOT."app/views/{$this->getDir()}/main.php")){
            include(DIRROOT."app/views/{$this->getDir()}/main.php");
        }
    }
    
    #Adiciona características específicas no footer
    public function addFooter()
    {
        if(file_exists(DIRROOT."app/views/{$this->getDir()}/footer.php")){
            include(DIRROOT."app/views/{$this->getDir()}/footer.php");
        }
    }
}
?>