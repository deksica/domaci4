<?php

require './fajlovi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{

if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['grad']) && isset($_POST['dobar']) && isset($_POST['zelja']))
    {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $grad = $_POST['grad'];
        $dobar = $_POST['dobar'];
        $zelja = $_POST['zelja'];
    }

$slova_ime_check  = ctype_alpha($ime);
$slova_prezime_check = ctype_alpha($prezime);

if(!$slova_ime_check or !$slova_prezime_check or null == $dobar or empty($zelja) )
{
    header("location: ./index.html");
}
else{

    $new_user = ['ime'=> $ime, 'prezime' => $prezime, 'grad' => $grad, 'dobar' => $dobar, 'zelja'=> $zelja];
    $json_new_user = json_encode($new_user);

    insertIntoDB($json_new_user);

    header("location: ./zelja_poslata.html");
}
}
?>