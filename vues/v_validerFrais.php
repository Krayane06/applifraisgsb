<div id="contenu">
      <h2>Validation des fiches de frais</h2>

      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">

          <fieldset>
            <legend>Visiteur et mois à sélectionner
            </legend>
                      <label for="Visiteur" accesskey="n">Visiteur : </label>
        <select id="lstMois" name="lesVisiteurs">
            <?php
            foreach ($lesVisiteurs as $unVisiteur)
            {
                $prenomVisiteur = $unVisiteur['prenom'];
                $nomVisiteur =  $unVisiteur['nom'];

                if($mois == $moisASelectionner){
                ?>
                <option selected value="<?php echo $mois ?>"><?php echo  $prenomVisiteur." ".$nomVisiteur ?> </option>
                <?php 
                }
                else{ ?>
                <option value="<?php echo $mois ?>"><?php echo  $prenomVisiteur." ".$nomVisiteur ?> </option>
            <?php
            }?>
                <?php 
                }
            ?>






          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>

      </form>