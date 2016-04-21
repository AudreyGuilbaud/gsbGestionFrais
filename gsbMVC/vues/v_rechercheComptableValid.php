<div id="selectionVisiteur">
    <div class="petitTitre2">
        Rechercher une fiche par visiteur et/ou par mois
    </div>
    <div id="calque" class="encadreFin calque">             
        <form action="index.php?uc=validerFiches&action=afficherFiches&visiteur" method="post">
            <div class="selection">
                Sélectionnez un visiteur
                <p>
                    <label for="lstVisiteur" accesskey="n">Visiteur : </label>
                    <select class="selectVisiteur" id="lstVisiteur" name="lstVisiteur">
                        <?php
                        foreach ($lesVisiteurs as $unVisiteur) {
                            $id = $unVisiteur['id'];
                            $prenom = $unVisiteur['prenom'];
                            $nom = $unVisiteur['nom'];
                            ?>

                            <option value="<?php echo $id ?>"><?php echo $prenom . " " . $nom ?> </option>

                        <?php } ?>
                        <option selected value=""> </option>
                    </select>
                </p>
            </div>
            <div class="etou">
                ET/OU  
            </div>
            <div class="selection">
                Sélectionnez un mois
                <p>
                    <label for="lstMoisComptable" accesskey="n">Mois : </label>
                    <select class="selectMois" id="lstMoisComptable" name="lstMoisComptable">
                        <option selected value=""> </option>
                        <option value="01"> janvier </option>
                        <option value="02"> février </option>
                        <option value="03"> mars </option>
                        <option value="04"> avril </option>
                        <option value="05"> mai </option>
                        <option value="06"> juin </option>
                        <option value="07"> juillet </option>
                        <option value="08"> août </option>
                        <option value="09"> septembre </option>
                        <option value="10"> octobre </option>
                        <option value="11"> novembre </option>
                        <option value="12"> décembre </option>
                    </select>
                    &nbsp;&nbsp;
                    <label for="txtAnneeComptable" accesskey="n">Année (YYYY) : </label>
                    <input class="txtAnnee" size="4" name="txtAnneeComptable"/>
                </p>
            </div>
            <input id="ok" type="submit" value="Rechercher" class="bouton rechercher"/>              
        </form>
    </div>
</div>
