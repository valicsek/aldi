![](images/index-page-preview.PNG)

- Excellent English language skills
- University degree or training with a focus on IT
- Several years of IT experience
- Knowledge in the area of professional software development, software design patterns, OOD, UML, clean code, test-driven development
- Knowledge of the following technologies: PHP 8, Composer, Twig, PostgreSQL, Redis, ElasticSearch, RabbitMQ, Git, Docker
- Unit Testing via Jest and Vue3 Test utils
- Familiar with the following technologies: PWA (IndexedDB, Service Worker, Push Notificaiton, Advanced Web APIs like Background Sync...), TypeScript
- Integration with HTTP APIs
- Experience with shop systems such as Spryker, Oxid, Magento or Hybris is an advantage
- Agile mindset, good communication skills

# aldi-php-symfony-docker

This is a complete stack for running Symfony 6.2 into Docker containers using docker-compose tool.

It is composed by 3 containers:

- nginx, acting as the webserver.
- php, the PHP-FPM container with the 8.2 version of PHP.
- db which is the MySQL database container with a MySQL 8.0 image.

Tools used:
- Doctrine ORM 2.14
- PHP 8.2
- Composer 1.11.99.5
- MySQL 8.0.33
- Docker
- (Redis, ElasticSearch, RabbitMQ not implemented for this demo)
## Run

docker compose up in .docker


## Generate Database schema

php vendor/bin/doctrine orm:schema-tool:create
