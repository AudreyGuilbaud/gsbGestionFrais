﻿    <!-- Division pour le sommaire -->
<div id="menuhaut">
    <div id="nomVisit">

        <?php echo "Bienvenue " . $_SESSION['prenom'] . "  " . $_SESSION['nom'] . " !" ?>

    </div>  
    <ul class="menuHaut">			
        <li class="menuHaut">
            <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Modifier mes fiches</a>
        </li>
        <li class="menuHaut">
            <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Consulter mes fiches</a>
        </li>
        <li class="menuHaut">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>

</div>
