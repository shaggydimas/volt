<?php 
class LowerThanFilter {
        private $id;

        function __construct($id) {
                $this->id = $id;
        }

        function matchingItems($i) {
                return $i['spec_id'] == $this->id;
        }
}

function mapFunc($arr) {
	return $arr['id'];
}
 ?>
