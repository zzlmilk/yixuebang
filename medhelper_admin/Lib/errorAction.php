<?php

class mainErrorAction {

    public function error_page() {
        
        $_ENV['smarty']->display('error');
    }

}

?>