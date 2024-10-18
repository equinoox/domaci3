<?php 
if(isset($_POST['submit']) && $_POST['submit'] == "zakazi"){
    $predmet = $_POST['predmet'];
    $katedra = $_POST['katedra'];
    $sala = $_POST['sala'];
    $datum = $_POST['datum'];

    //Metoda za upisivanje u bazu
    $prijava = new Prijava(null, $predmet, $katedra, $sala, $datum);
    
    $r = $prijava->addPrijava($conn); //CREATE Operacija

    header('Location: home.php');
}
?>
