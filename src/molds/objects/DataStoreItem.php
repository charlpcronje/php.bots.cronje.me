<?php 
/*
Molded by core 
2018-04-08 10:34:10
*/





class DataStoreItem implements \IteratorAggregate {



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


