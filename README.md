# Questions / Réponses

Quelles sont les fonctionnalités principales du Symfony CLI ?
> Un serveur local pour exécuter votre projet sur votre poste ; Un outil pour vérifier les problèmes de sécurité

Expliquer ce qu'est le fichier .env
> Le fichier .env permet de stocker des variables d'environnement qui sont nécessaires au fonctionnement du projet comme par exemple des clés et tokens pour des apis.

Expliquer pourquoi il faut changer le connecteur à la base de données
> Afin de pouvoir récupérer/mettre en base les données.

Première réflexion : quelles routes qui vont devoir être créées dans l’application en fonction des différentes vues ?
> /user/{user}
> /link/{id}
> /link
> /

Qu'est-ce que le **ParamConverter** ? À quoi sert le Doctrine **ParamConverter** ?
> À pouvoir passer des paramètres dans l'url et les récupérer pour les utiliser, notamment dans le rendering.

Qu'est-ce qu'un formulaire Symfony ?
> Un formulaire est un composant qui permet de gérer et de traiter les données entrées par l'utilisateur sur notre beau site internet.

Définir les termes: providers
> les providers sont des classes qui fournissent des informations d'identification à l'application

Firewall
> Les firewalls en Symfony sont des mécanismes de sécurité qui définissent des règles pour contrôler l'accès aux parties de votre application web

Access Control
>L'Access Control en Symfony est un mécanisme permettant de spécifier des règles de contrôle d'accès à certaines parties de votre application

Roles
> Les rôles en Symfony sont des étiquettes attribuées aux utilisateurs pour définir leurs permissions dans l'application

Voters
>Les voters sont des classes qui déterminent si un utilisateur possède ou non une autorisation spécifique en fonction de certains critères.

Passport
> Passport est un composant de Symfony utilisé pour gérer l'authentification et l'autorisation dans les applications web. Il fournit une interface simplifiée pour gérer les processus d'authentification, y compris la gestion des utilisateurs, des jetons, des providers, etc.

Badge
> En Symfony, un badge fait généralement référence à un insigne qui est accordé à un utilisateur en fonction de certaines conditions ou réalisations dans l'application. Les badges peuvent être utilisés pour reconnaître et récompenser les utilisateurs pour leurs contributions, leur activité ou leur engagement dans l'application.

Argon2i
> un password hasher

Bcrypt, Plaintext
> des algos de hash

BasicHttp
> a standardized HTTP authentication framework

À quoi sert un service dans Symfony ?
> Pour envoyer un email, résoudre une route, ou même accéder à la base de donnée, des objets qui remplissent des petites tâches, mais bien découpées

Avez-vous déjà utilisé un service?
> oui, entityManager

À quoi sert le validateur ?
> Validation is a very common task in web applications. Data entered in forms needs to be validated. Data also needs to be validated before it is written into a database or passed to a web service.

Dans quel contexte peut-on valider des données ?
> Lors d'utilisations de forms par exemple.

