<?php
    require './data/mock.php';
    require './data/users.php';
    require 'functions.php';
?>

<section>
    <h2>#kiemtao <a href="" class="addmessage"><span>+</span><em>ajouter&nbsp;un&nbsp;message</em></a></h2>
    <ul id="messages-list">
        <?php 
            foreach ( $messages as $value){
            $id = $value['user'];
        ?>
        <li class="message">
            <h3 title="Passions : animaux, réincarnation, teflon"><?=get_user_by_id($value['user'], $users)?></h3>
            <p><?=$value['body']?></p>
            <h4 class="date"><?=$value['date']?></h4>
        </li>
        <?php } ?>
<!--
        <li class="message">
            <h3 title="Passions : animaux, réincarnation, teflon">Jacques</h3>
            <p>Salut !!!!</p>
            <h4 class="date">04/04/2022</h4>
        </li>
        <li class="message">
            <h3 title="Passions : animaux, réincarnation, teflon">Gerard</h3>
            <p>Je ne suis pas disponible</p>
            <h4 class="date">04/04/2022</h4>
        </li>-->
    </ul> 
</section>



