<?php
$msg = '';
if (isset($_POST['where'])) {
    $msg .= 'Куда писать: '.$_POST['where'].PHP_EOL ;
};

if (isset($_POST['name'])) {
    $msg .= 'Имя: '.$_POST['name'].PHP_EOL ;
};

if (isset($_POST['msg'])) {
    $msg .= 'Сообщение: ' . $_POST['msg'] . PHP_EOL;
};

mail("loftchain@gmail.com", "Форма обратный связи loftchain.io", $msg);

return true;