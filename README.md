# tinyCMS

![APERCU](https://raw.githubusercontent.com/bZez/tinyCMS/master/tinycms.gif)

Basé sur les cours OpenClassrooms [Evoluez vers une architecture PHP professionnelle](http://openclassrooms.com/courses/evoluez-vers-une-architecture-php-professionnelle) & OC-microCMS

## Présentation

tinyCMS est une application Web minimaliste de type [CMS](http://fr.wikipedia.org/wiki/Syst%C3%A8me_de_gestion_de_contenu).
En cours de développement pour la selection Simplon.co #2 @ Epinal
En espérant être selectionné !!!!

## Architecture 

Voici les principales caractéristiques de l'architecture :

* séparation des responsabilités selon le principe Modèle-Vue-Contrôleur ;
* intégration du micro-framework [Silex](http://silex.sensiolabs.org/) ;
* modélisation objet du domaine et de l'accès aux données ;
* utilisation des espaces de noms et chargement automatique des classes grâce à [Composer](https://getcomposer.org/) ;
* intégration du moteur de templates [Twig](http://twig.sensiolabs.org/) pour faciliter l'écriture des vues ;
* présentation moderne et adaptée au terminal utilisé (*responsive design*) grâce au framework Web [Bootstrap](http://getbootstrap.com/) ;
* gstion avancée de la sécurité et des formulaires grâce aux composants du framework [Symfony](http://symfony.com) ;
* back-office d'administration ;
* tests fonctionnels automatisés utilisant [PHPUnit](https://phpunit.de/) ;
* journalisation avec [Monolog](https://github.com/Seldaek/monolog) et gestion des erreurs ;
* API utilisant le format JSON.

## Contributions

L'application tinyCMS est publiée sous la licence [MIT](http://choosealicense.com/licenses/mit/). Les contributions à son amélioration via les *issues* ou les *pull requests* sont les bienvenues !

## Remerciements

[Baptiste PESQUET](https://github.com/bpesquet/): pour le tutorial OpenClassroom.
[Openclassroom](http://openclassroom.com/)
