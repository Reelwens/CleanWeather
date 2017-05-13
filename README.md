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

- Parallax animé des conditions météorologiques du lieu recherché (soleil, nuage, pluie)
- Informations météorologiques détaillées du moment présent au lieu recherché
- Localisation de l'utilisateur via son ip
- Plusieurs fallback si la localisation précise n'est pas trouvée
- Sauvegarde de sa localisation dans un cookie temporaire
- Stockage en cache des données de l'API météo
- Option de recherche d'une ville différente de sa localisation
- Affichage de la météo sur 4 jours sur une seconde page
- Routing
- Responsive