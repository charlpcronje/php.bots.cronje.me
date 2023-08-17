<?php 
/*
Molded by core 
2019-06-12 00:40:44
*/





class keyStoreCollection extends \core\extension\database\Model  {



            public function __construct($name = null) {
                $name = str_replace("Collection","","keyStoreCollection");
                             parent::__construct("keyStore");
            }
        


}


