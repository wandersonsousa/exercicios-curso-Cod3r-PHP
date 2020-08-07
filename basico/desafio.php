<div class="title">Desafio</div>
<?php
    function printaSomaEmHTML($a, $b){
        echo "<li>$a + $b = " . ($a+$b) . "</li>";
    }
?>
<ul>
    <?php
        printaSomaEmHTML(1, 1);
        printaSomaEmHTML(4, 4);
        printaSomaEmHTML(8, 8);
    ?>
</ul>