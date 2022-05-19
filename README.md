# Installation du projet

* Installer docker
* Installer docker-compose
* Ouvrez la console dans le repertoire de votre projet et executé les commandes suivantes
    ```
    docker-compose build
    docker-compose up -d
    ```

* installer les dependances symfony / migration / lancement fixtures
    ```
    docker compose exec php sh
    composer install
    php bin/console doctrine:migrations:migrate
    exit
    ```
    Voir les commande doctrine: `php bin/console doctrine`

## Commande docker

Build le projet
`docker-compose build`

Lancer le serveur temporairement
`docker-compose up`

Lancer le serveur en arrière plan
`docker-compose up -d`

Arreter le serveur
`docker-compose down`

Arreter le serveur et supprimer les volumes
`docker-compose down -v`

# Adresse des serveurs

Front: http://localhost:3000/

Api: http://localhost:80/

Mailhog: http://localhost:8025/

PgAdmin: http://localhost:5050/

Adminer SQL: http://localhost:8080/

# lancer des commandes Symfony

Lancer l'invite de commande symfony
`docker compose exec php sh`

Une fois dans la console lancer les commades symfony normalement

créer une migration: ```php bin/console make:migration```

# Se connecter à l'adminer

1. Système: PostgreSQL
2. Serveur: pgsql
3. Utilisateur: filao_user
4. Mot de passe: filao_pass
5. Base de données: filao_db

# Utiliser Pgsql via cmd

Se connecter a pgsql via cmd
`docker exec -it pgsql_container psql -U filao_user filao_db`

Voir les tables
`\dt`

Pour pouvoir lancer des requettes sql
`\timing`
Après vous pouvez lancer vos requettes sql ex:
`SELECT * FROM USER`

Avoir l'adresse ip du serveur de bdd
`docker inspect pgsql_container | grep IPAddress`

# Lancer les fixtures
 ```
    docker compose exec php sh
    php bin/console doctrine:fixtures:load
    exit
```

