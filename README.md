# Dino Vert 🦖
DinoVert est un projet en php avec le framework [Laravel](https://laravel.com/).

Il consiste en une gestion de vente d'enclos de dinosaure ainsi que de maison tout à fait normal. Avec aussi quelques posts pour qui contient les actualitées du site.

## Instalation
Pour utiliser ce projet en local, il vous faut [Composer](https://getcomposer.org/), ainsi que [NodeJS](https://nodejs.org/en/). De quoi faire tourner un serveur apache pour ma part, j'ai utilisé [Laragon](https://laragon.org/).

Une fois tout ces prérequis acquis vous pouvez cloner ce repository.

Avoir une BDD avec une table dinoVert. Si vous voulez changer les variables d'environnement je vous ai fournie le .env il y a un block lié aux informations de la BDD.

Pour une installation plus simple j'ai préparé des scripts dans le package.json.

Il vous suffit de lancer la commande :
``` npm run Instalation ```. 
Cela installera les packages de composer et nodejs et également les migrations pour la base ainsi que sont seeding.

## Interface d'Administration
Pour s'y connecter, il suffit d'aller sur le petit cœur dans le footer. Sinon aller sur la route(/login). L'administrateur est déjà créé ses identifiants sont :
- e-mail : admin@test.test
- password : admin1234
