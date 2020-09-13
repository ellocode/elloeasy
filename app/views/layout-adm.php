<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ello Code">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php echo $this->addHead(); ?>
</head>

<body>
    <div class="Nav">
    </div>
    
    <div class="Header">
        <?php echo $this->addHeader(); ?>
    </div>
    
    <div class="Main">
        <?php echo $this->addMain(); ?>
    </div>
    
    <div class="Footer">
        2019 - TODOS OS DIREITOS RESERVADOS ELLO CODE <br>
        <?php echo $this->addFooter(); ?>
    </div>
</body>

</html>