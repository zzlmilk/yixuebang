<?php

class LeftAction {
    
    public function left(){
        
         $_ENV['smarty']->setDirTemplates('');

        $_ENV['smarty']->setDir('default');
        
        $_ENV['smarty']->display('left');
    }
}

?>
