<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == "izmeni"){
        $id = $_POST['id_predmeta'];
        $predmet = $_POST['predmet'];
        $katedra = $_POST['katedra'];
        $sala = $_POST['sala'];
        $datum = $_POST['datum'];
        
        $update_prijava = Prijava::updatePrijava($id, $predmet, $katedra, $sala, $datum, $conn); //UPDATE Operacija
    
        header('Location: home.php');
    }
?>