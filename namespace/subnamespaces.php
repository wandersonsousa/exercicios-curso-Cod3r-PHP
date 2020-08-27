<?php
namespace App;


?>



<div class="titulo">Sub-Namespaces</div>


<?php
const C = 123;
echo __NAMESPACE__ . '<br>';

namespace App\Principal;
const C = 456;
echo __NAMESPACE__ . '<br>';


namespace App\Principal\Especifico;
const C = 789;
echo __NAMESPACE__ . '<br>';
echo \App\C;