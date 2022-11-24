/* récupérer le nom de
l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
ainsi que sa capacité).
Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room” */
SELECT `nom` AS 'Biggest Room', `capacite` FROM `salles` WHERE `capacite` = (SELECT MAX(`capacite`) FROM `salles`)