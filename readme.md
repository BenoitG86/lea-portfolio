      CAHIER DES CHARGES
Site portfolio professionnel
Prépa 2 – Mode projet – Cahier des charges
Version 3.2 du 31/05/2024

# Introduction

Dans le cadre de la prépa 2 de l'école atypique, les apprenants sont tenus de réaliser un projet
de site internet portfolio professionnel.
Ce projet constituera l'évaluation finale de l'année. Celle-ci se basera sur les domaines du
programme, ainsi que sûr la méthode et la gestion du projet.
Objectifs du projet
Le projet a pour objectif de permettre aux apprenants de mettre en pratique les compétences
acquises en HTML, CSS, JS, Git, PHP et MySQL.
Le projet doit aussi encourager l'auto-évaluation et le développement de compétences en
gestion de projet web.

# Description du projet

Le site portfolio sera composé des éléments suivants :
- Une page d'accueil;
- Une page Réalisations / Projets;
- Une page Mon CV ;
- Une page Contact ;
- Une page Veille technologique;
- Une page blog avec des articles;

# Les contenus du site internet

## Page d'accueil

### Header :
◦ Une bannière avec une photo ou illustration, une description rapide de vous (une
phrase/titre), un bouton/lien vers la page contact.

◦ Ce header doit avoir une hauteur assez importante. Vous pouvez aller jusqu’à 100%
de la hauteur de l’écran.

◦ On appel cela un “Hero Header”. Vous pouvez chercher des exemples pour
comprendre l’attendu

- Section compétences techniques
- Section présentation
- Section expériences / diplômes.

## Page Réalisations / Projets :

Présentation des projets réalisés pendant la formation ;

Chaque réalisation devra comporter au moins :
- un titre
- une description
- un lien vers une image

## Page Mon CV :
- Doivent apparaître ici les différentes rubriques de votre CV mises en forme.
- Possibilité de télécharger une version PDF du CV.

Bien distinguer la page d'accueil qui présente de manière succincte et visuelle, et la page
CV qui ressemble à un CV visuellement et qui peut être consultées lorsqu'on veut avoir toutes les infos.

## Page Contact :
Formulaire de contact avec les champs suivants :
- Nom*
- E-mail*
- Téléphone*
- Message*

/* Champs obligatoires

## Page Veille Technologique (optionnel) :

Partage de veille technologique :
- Titre
- Description
- Lien vers la ressource
Les articles de veille technologique seront classés par ordre décroissant (les plus récents en
haut).

## Blog (optionnel)
Publication d'articles :
- Titre
- Date
- Une thématique
- Contenu

Les articles de blog seront classés par ordre décroissant (les plus récents en haut).

## L’interface du site internet

Layout / mise en page
- Le contenu de vos pages ne doit pas prendre toute la largeur de l’écran. Ce n’est pas très
bon pour l’expérience utilisateur. Utiliser un conteneur pour votre contenu.
Le conteneur est centré horizontalement dans la page.
Choisissez la taille en fonction du visuel que vous souhaitez mais il ne doit pas dépasser
1200px de large ;
Navigation
- Une barre de navigation qui renvoie vers les pages du site (Accueil, Contact, CV, *Réalisa-
tions, *Veille) ;
- La barre de navigation sera fixe. Elle restera en place lorsque vous scrollerai vers le bas ;
Footer
- Le footer contient une liste des pages de votre sites ;
- Il rappelle également vos informations de contact importante ;

## L’administration du site internet

- ### Administration des réalisations
Les réalisations devront être stockées en base de données et administrables (ajout, modification, suppression).

- ### Administration des articles du blog

Les articles de blog devront être stockés en base de données et administrables (ajout,
modification, suppression).

- ### Messages de contact

Les messages envoyés par le formulaire de contact devront être stockés en base de données.

- ### Compte utilisateur (optionnel)

Pour accéder à l’espace d’administration, il sera possible de mettre en place une gestion de
compte utilisateur.

- ### Administration des contenus du CV (optionnel)

Les différents types d’éléments représentant votre CV peuvent être stockés en base et
administrables.

## Contraintes techniques

### Architecture de dossier / fichiers cohérente
- Dossiers pour chaque type de fichier (images, pages, styles, …) :
- Vos dossiers et fichiers doivent être bien nommés (pas d’espace, …) ;

### Structure de vos fichiers HTML :
- Chaque page HTML doivent respecter les bonnes pratiques :
◦ Document HTML complet ;
◦ Toutes les balises meta importantes doivent être présentes;
◦ Indentation correcte ;
- Vous devez choisir vos éléments HTML en fonction de leur sémantique ;
- Vos pages doivent avoir un favicon ;
- Les règles d’accessibilité doivent être respectées ;

### CSS :
- Appliquer un reset css ;
- Appliquer `box-sizing: border-box` à tous vos éléments ;
- Utilisez `flexbox` dans votre projet pour positionner vos éléments ;

### Validation :
- Validez votre code HTML et CSS, avec les validateurs W3C ;

### GIT/Github :
- Votre projet doit être versionné sur un dépôt GIT local et sur un dépôt distant sur Github ;
- Créer votre dépôt Github et partagez le en message privé à Emmanuel et Jérémy
(Teams) ;
- Votre dépôt doit se nommer `prepa-lea-2024-portfolio-prenom-nom` ;
- Faire des sauvegardes régulières ;

### PHP :
- Le code doit être correctement indenté ;
- Les noms des variables doivent être descriptifs et refléter clairement leur usage ;
- Dans les fichiers, les blocs de code doivent être commentés ;

### MySQL :
- Les règles de nommages doivent être les mêmes pour tous les champs et dans les
différentes tables.
- Sélectionner les formats de champs adaptés à vos données.

# Planning

Le projet sera réalisé sur une durée d'un mois du 03 au 27 juin 2024.

Vous devrez donc répartir les différentes phase du projet dans le temps imparti.

### Phases du projet

1. Analyser : Étude des fonctionnalités (sous forme de prise de notes, de création de cartes
mentales, ...) ,
2. Concevoir : Création des interfaces, du plan de la base et de l’arborescence (sous forme
de schéma, de carte mentale, de diagramme, à la main ou sur ordinateur).
3. Développer : Codage des fonctionnalités, création de la base, intégration front-end et
back-end.
4. Tester : Tests des fonctionnalités, vérification du code.
5. Documenter : Mettre à jour le readme.md à la base du projet.
6. Communiquer : Préparation la présentation de votre projet au jury.

## Livrables attendus
- Dépôt Git
- Projet fonctionnel sur votre ordinateur (présentation au jury)
- Documentation du projet

# Évaluation
L’évaluation sera basée sur le projet et sa présentation au jury.

Organisation de la présentation au jury :
- Présentation du site et de ses fonctionnalités (15 minutes)
- Questions / réponses sur le projet (15 minutes)