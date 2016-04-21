<div class = "divPlein">
    <table>
        <caption class = "petitTitre2">Fiches de frais à mettre en paiement pour le mois :  <?php echo $MoisAnnee ?> </caption>
        <tr>
            <th class = "titreColonne">Visiteur</th>
            <th class = "titreColonne">Dernière modification</th>
            <th class = "titreColonne">Etat</th>
            <th>&nbsp;
            </th>
        </tr> <?php
        foreach ($lesFichesParMois as $uneFiche) {
            $dateModif = $uneFiche['dateModif'];
            $libEtat = $uneFiche['libEtat'];
            $nom = $uneFiche['nom'];
            $prenom = $uneFiche['prenom'];
            $leVisiteur= $uneFiche['visiteur'];
            ?>   	
            <tr>
                <td class="ligneFraisHFPetit"> <?php echo $prenom . " " . $nom ?></td>
                <td class="ligneFraisHFPetit"><?php echo dateAnglaisVersFrancais($dateModif) ?> </td>
                <td class="ligneFraisHF"><?php echo $libEtat ?></td>                    
                <td class="ligneFraisHFSuppr">
                    <a href="index.php?uc=suivreFiches&action=ficheSelectionnee&visiteur=<?php echo $leVisiteur ?>&mois=<?php echo $leMoisReq ?>" 
                       id="accesFiches" >Accéder</a></td> 
            </tr>
            <?php
        }
        ?>	  

    </table>
</div>