<?php 
/*
Molded by core
2018-04-11 14:53:02
*/





class keyDataStoreCollection extends \core\extension\database\Model  {



            public function __construct($name = null) {
                $name = str_replace("Collection","","keyDataStoreCollection");
                             parent::__construct("keyDataStore");
            }
        


}


