<?php 

    include_once '../../config/Config.php';
    include_once '../../src/Cars.php';
                
    $cars  = new  Cars(new Config());
    $foto = $cars->searchFoto(11);

    if(!$foto):
                 
?>
                    
<div>
    <span class="col-xs-12 col-sm-2">
        <img alt="Project Image" src="img/default.png" class="img-responsive">
    </span>
</div>
                
<?php
             
     else:

    foreach($foto as $fotos): 
    $foto_princ = $fotos['local']; 
?>
                    
<div>
    <span class="col-xs-12 col-sm-2">
        <img alt="Project Image" src="<?php echo $foto_princ; ?>" class="img-responsive">
    </span>
</div>
                
<?php 
                
    endforeach; 
    endif;
?>