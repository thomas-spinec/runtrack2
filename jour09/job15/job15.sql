/* récupérer le nom des
salles dans la table salles et le nom de leur étage dans la table etage. `*/
SELECT `salles` . `nom`, `etage` . `nom` FROM `salles` INNER JOIN `etage` ON `salles` . `id_etage` = `etage` . `id`