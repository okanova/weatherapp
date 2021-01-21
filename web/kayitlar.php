<?php $config = require_once '../config/app.php';

?>
<div style="width:960px; margin-left: auto;margin-right:auto;">

    <h1>İLETİŞİM KAYITLARI</h1>
    <ul style="list-style-type: none">
    <?php foreach(\App\Database::SelectAll('contacts') as $contact): if($contact->id == 1) continue; ?>
        <li style="border-bottom: 1px solid rgba(0,0,0,.3);margin-bottom: 2px;padding: 5px 10px;">
            <b>ADI:</b>    <?=$contact->name;?><br>
            <b>E-POSTASI:</b> <?=$contact->email;?><br>
            <b>MESAJI: </b> <?=$contact->message;?>
        </li>
    <?php endforeach; ?>
    </ul>
</div>

