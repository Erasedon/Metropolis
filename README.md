  # METROPOLIS PROJET FIL ROUGE 
 
 
  
APPEL D’OFFRE CINEMET 
   
# OBJECTIF 
Réalisation d’un site complet VOD 
CADRE 
Le  Métropolis  de  Charleville-Mézières  souhaite  réaliser  un  nouveau 
site internet dans le domaine de la VOD (Video On Demand). 
Votre chef de projet (Romain P), vous demande de réaliser l’intégralité 
du projet car celui-ci est en vacances de l’autre côté du monde. 
Vous êtes donc libre de faire et proposer ce que vous souhaitez tout 
en respectant bien évidemment les demandes du porteur de projet. 

# LIVRABLE ATTENDU 

Réaliser un site internet respectant les attentes du  porteur de projet 
en un temps minimum.  
Chaque compétence validée sur ce projet n’aura pas à être validé à 
nouveau sur un futur projet fil rouge ! Faite donc de votre mieux pour 
répondre aux attentes de votre chef de projet. 

# LIVRABLE DETAILLÉ 

Listing du livrable à respecter : 
▪ Le Métropolis souhaite un site dont le contenu est accessible 
pour le plus grand nombre (facile d’utilisation et intuitif). 
▪ L’intégralité du site doit être responsive. 
▪ La palette graphique est libre 
 
  
Maquette de la page d’accueil : 

 
 
 
▪ Page accessible à toutes les personnes 
▪ Background fixe style Netflix 
▪ Navbar avec juste 2 boutons (connexion et inscription) 
▪ Contenu de base (voir Netflix ou Disney+ page d’accueil) 
 
 
Maquette de la page d’accueil une fois connecté : 
 
Front :
▪ Navbar avec redirection sur les différentes pages du site 
▪ Carroussel de film 
▪ Affichage des films par catégorie 
▪ Les  informations  de  base  du  film  doivent  être  visible  quand  on 
passe sur un film ( modal, hover, ... ) 
Back 
▪ Chaque film est le résultat d’une requête SQL 
▪ Possibilité d’ajouter une page qui affiche tous les films à partir de 
la catégorie rentrée en bdd. 
▪ Faire  une  barre  de  recherche  qui  permet  de  chercher  un  film 
directement 
 
Maquette de la page d’un film 
 
Front 
▪ Classique voir ci-dessus 
Back 
▪ Cette  page  est  unique  et  commune  à  tous  les  films.  Elle  est 
générée dynamiquement à partir de l’id du film  souhaité  par 
l’utilisateur.  (Si je change directement l’id du film dans la barre 
de lien, j’accède à un autre film). 
▪ Exemple :  
o  monsite.com/film.php?id_film=50 donnera le film avatar 
o  monsite.com/film. php?id_film=49 donnera le film matrix 
