<p>Mtyyy</p>
<form action="<?php echo site_url('Aliment/insert')?>" method="post">
        <label for="">idcategorie</label>
        <input type="number" name="idcategorie">
        libelle
        <input type="text" name="libelle" id="">
        prix
        <input type="number" name="prix" id="">
        <input type="submit" value="Vlaider">
</form>

<table style="border:1px solid black">
    <tr>
        <td>categorie</td>
        <td>Aliment</td>
        <td>prix</td>
        <td>photo</td>
    </tr>
    <?php foreach ($liste_aliment as $key ) { ?>
        <tr>
            <td>  <?php echo $key['nom'];  ?> </td>
            <td>  <?php echo $key['nomaliment'];  ?> </td>
            <td>  <?php echo $key['prixaliment'];  ?> </td>
            <td>  <?php echo $key['photo'];  ?> </td>
        </tr>
    <?php } ?>
</table>

<br><br><br>
<form action="<?php echo site_url('Carte/insertcarte')?>" method="post">
        code 
        <input type="text" name="code">
        <input type="number" name = "valeur">
        <input type="submit" value="Vlaider">
</form>

<form action="<?php echo site_url('Carte/insertioncodeutilisateur')?>" method="post">
        code inserto
        <input type="text" name="code">
        <input type="number" name = "idutilisateur">
        <input type="submit" value="Vlaider">
</form>
validationcodeadmin
<form action="<?php echo site_url('Carte/validationcodeadmin')?>" method="post">
        code inserto
        <input type="text" name="code">
        <input type="number" name = "idutilisateur">
        <input type="submit" value="Vlaider">
</form>
