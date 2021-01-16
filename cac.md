## Cahier des charges 
DinoVert est une agence immobilière située à Isla Nublar sur Sarthe. Elle souhaite proposer ses biens par le biais d’un site internet au dernier trimestre 2021. 

L’agence propose uniquement des biens à l’achat, ils sont classés selon les catégories suivantes : 
- Maison individuelle.
- Appartement.
- Enclos à dinosaure.

### Frontend 

Le site devra être simple, clair et aéré. La couleur principale du site est : #455d6a.

Le site devra proposer :

- Une page d’accueil avec les 3 derniers biens en vente. Il devra être affiché pour chaque bien, une photo, son prix, sa localisation, les m2. 
- Une page « biens à vendre » qui listera tous les derniers biens à vendre avec une sous-page par catégorie. Il devra être affiché pour chaque bien, une photo, son prix, sa localisation, les m2. 
- Nous devons pouvoir cliquer sur chaque bien pour accéder à sa fiche personnalisée. Elle contiendra les informations suivantes : 
- DES images
- Prix
- M2
- Nombre de pièces
- État de la maison 
- Année de construction 
- Localisation 
- Une longue description 
- Une page "qui sommes-nous" avec une présentation sommaire de l’entreprise
- Une page "Contact" avec un formulaire de contact. 
- Une page "Actualités", avec des articles. Chaque article devra afficher une image, un titre, une courte description, sa catégorie, ses tags. 
-  Nous devons pouvoir cliquer sur chaque actualité pour accéder à sa page. Elle contiendra les informations suivantes : 
- Image
- Titre
- Texte
- Tags 
- catégorie
- Une page mentions légale.
- Un formulaire de recherche pour les biens. 

## Backend

Le site pourra être piloté via une interface d’administration accessible uniquement par un utilisateur admin. Il n’y
aura qu’un seul rôle administrateur.

L’administrateur pourra :

- gérer les biens :
    - en ajouter
    - en supprimer
    - en éditer
- gérer les actualités :
    - en ajouter
    - en supprimer
    - en éditer

Le contenu principal de la page d’accueil pourra être modifié à l’aide d’un WYSIWYG. 

Les pages de contact, et mentions légales sont statiques et ne peuvent être modifiées. 

## Fonctionnalités autres 

- On doit pouvoir s’inscrire à une newsletter qui envoie un courriel à toute la liste à chaque nouveau bien ajouté. 
- Chaque ajout ou suppression doit être consigné dans des logs EN BASE DE DONNEES dans l’application.  

# PROJET A RENDRE 

- Schéma MERISE 
- Schéma USE CASE UML DE LA GESTION DE BIENS
- Maquette de la "home" header / contenu / footer + maquette mobile 
- Le front doit être intégralement responsive
- Les migrations 
- Seeders fonctionnels (TOTALEMENT) 
- Routes avec sécurisation
- Controller avec CRUD complet
    - Validateurs et requests personnalisées
- Views
    - Admin avec accès CRUD complet
    - Front que du Visuel
- Models Avec relations
- Authentification
- Middleware Auth
- Notifications et mails

user:admin@test.test, password:admin1234
