mbl
===

A Symfony project created on May 10, 2017, 3:59 pm.



à ne pas oublier pour l'install client

créer un symlink assets 1fois (démarche à détailler...)










ETAPES POUR CHARGER LA BASE DE DONNEE

étape 1  taper cette commande dans votre terminal dans le dossier de l'application:

        composer update

étape 2 

puis taper cette commande à la suite dans votre terminal:

        php app/console doctrine:fixtures:load


étape 3 vérifier que votre base de donnée est bien chargée!





à NE PAS OUBLIER POUR LA MISE EN PRODUCTION DU SITE

la fonctionnalité de traduction du site est chargée dans le cache de l'application,
il faut impérativement vider le cache de production manuellement lors de la mise en service du site pour que cette dernière fonctionne!
