<div class="titulo">FOR</div>

<?php

for($i  = 0 ; $i < 10; $i++){
     "$i &nbsp";
};  

$array = [1,2,3,4,5];
print_r($array);

echo '<br>';
print_r(
    array_map(
        function($item){
            return $item * 2;
        }, $array
    )
);



