# Clean Weather

Prenez connaissance de la météo partout dans le monde au sein d'une expérience utilisateur agréable avec clean weather.

![Screenshoot](http://image.noelshack.com/fichiers/2017/19/1494581111-capture-d-ecran-2017-05-12-a-11-24-41.png)


## Installation

- Executer la commande `npm install` puis `gulp` dans le terminal à la racine
- Editer la ligne 4 et 6 de `src\.htaccess` en remplaçant les chemins de destination
- Lancer `dist\` à sa racine sur un serveur

## Technologies

- PHP
- Javascript
- HTML
- Sass
- Bootstrap
- Animsition
- Gulp
- OpenWeatherAPI
- ipfyAPI
- freegeoipAPI

## Fonctionnalités

- Affichage de la météo en parallax animé à partir de SVGs
- Modification graphique complète selon la météo (soleil, nuageux, pluvieux)
- Affichage des informations météorologiques de l'instant (Ville, température, description climatique, température min/max)
- Localisation de l'utilisateur via son ip
- Sauvegarde de sa localisation dans un cookie pendant 24 heures pour limiter les requêtes
- Stockage en cache des informations de l'API météo pour une heure
- Recherche d'une ville différente de sa localisation
- Plusieurs fallback si la localisation précise n'est pas trouvée
- Affichage de la météo sur 4 jours avec logos appropriés
- Routing
- Animation au changement de page
- Responsive