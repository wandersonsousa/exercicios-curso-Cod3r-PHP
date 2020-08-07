<div class="titulo">Integração CSS</div>

<h1>

    <?="Olá"?>
    <?="<small>"?>
    <?=", mundo !"?>
    <?="</small>"?>

</h1>

<?= "<div>Outra forma de me 'expressar' !</div>"?>


<br>

<div>
    <button> <?="Legal"?> </button>
</div>

<?php   
    $backgroundColor = '#3498db';
?>

<style>
    button {
        padding: 5px 20px;
        background-color:<?=$backgroundColor?>;
        border-radius:<?= 1 * 5 ?>px;
        border:none;
        color:#fff;
        font-weight:bold;
        -webkit-box-shadow: 10px 10px 13px -8px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 13px -8px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 13px -8px rgba(0,0,0,0.75);
    }
</style>