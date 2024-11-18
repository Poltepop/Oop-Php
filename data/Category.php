<?php
    namespace Data;

    class Category{
        private string $name;
        private bool $expensive;

        public function getName()
        {
                return $this->name .PHP_EOL;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        
        public function getExpensive()
        {
                
                if($this->expensive == true ){
                    echo "TRUE";
                }else{
                    echo "FALSE";
                }
        }

        public function setExpensive($expensive)
        {
                $this->expensive = $expensive;

                return $this;
        }
    }

?>