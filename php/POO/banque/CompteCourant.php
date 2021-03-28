<!-- Exercice Banque :
Gestion des comptes courants des clients de la banque
Un compte courant est caractérisé par un numéro, un propriétaire(nom), un solde, un découvert autorisé de 500 euros.

? Créer une application qui permet de créer un compte courant et d'effectuer des opérations de type dépot et retrait ?
Ajouter une fonction qui permet d'effectuer un virement vers un autre compte (concept de transmission par référence)
 -->


public function virement($autre_compte, $montant){
    // décrémenter le compte courant <source>
    EX : solde = 1000 €
    virement de 200€

    nouveau solde après virement = 800 €

    // incrémenter le compte courant destination
    Ex : solde 500
    nouveau solde après virement = 700€ 
}