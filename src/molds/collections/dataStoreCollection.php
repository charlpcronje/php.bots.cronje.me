<?php 
/*
Molded by core 
2018-04-08 10:34:10
*/





class dataStoreCollection extends \core\extension\database\Model  {



            public function __construct($name = null) {
                $name = str_replace("Collection","","dataStoreCollection");
                             parent::__construct("dataStore");
            }
        


}


