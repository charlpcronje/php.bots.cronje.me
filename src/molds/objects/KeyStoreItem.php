<?php 
/*
Molded by core 
2018-06-08 03:35:40
*/





class KeyStoreItem implements \IteratorAggregate {



            public function getIterator() {
                return new \ArrayIterator($this);
            }
        
            public function __get($property) {
                return $this->$property;
            }
        
            public function __set($property,$value = null) {
                $this->$property = $value;
            }
        


}


