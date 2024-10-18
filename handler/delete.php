<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == "Obrisi"){
        // Metoda za brisanje po id-u
        $id = $_POST['id_predmeta'];
        Prijava::deletePrijava($id, $conn); //DELETE Operacija
        header('Location: home.php');
        exit();
    }
?>