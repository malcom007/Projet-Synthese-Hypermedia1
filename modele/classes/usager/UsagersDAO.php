<?php

class UsagersDAO extends PersonneDAO
{
    /**
     * creer un usager
     * @param $usager
     */

    public static function findByCell($cell)
    {
        $request = "SELECT * FROM personnes WHERE numCell = :x AND typeCompte =3";

        $db = Database::getInstance();
        try {

            if (is_null($db)) {
                throw new PDOException("Impossible d'effectuer une requete de recherche verifier la connexion");
            }
            $pstmt = $db->prepare($request);
            $pstmt->execute(array(':x' => $cell));

            if ($result = $pstmt->fetch(PDO::FETCH_OBJ)) {
                $usager = new Usagers();
                $usager->setPrenom($result->prenom);
                $usager->setNom($result->nom);
                $usager->setNumCell($result->numCell);
                $usager->setMail($result->mail);
                $usager->setPassword($result->password);
                $usager->setActived($result->actived);
                $usager->setDateActivation($result->dateActivation);
                $usager->setDateModification($result->dateModification);

                $pstmt->closeCursor();
                return $usager;

            }
            $pstmt->closeCursor();
            return NULL;

        } catch (PDOException $exception) {
            ?>
            <!-- Affichage du message d'erreur au console personne-->
            <script>console.log("Error createDAO:  <?= $exception->getMessage()?>")</script>
            <?php
        }


    }



    /**
     * modifier les imfos sur un usager
     * @param Usagers $usagerObjet
     */

}