# pctracker-playsaurus

## Introduction

Playsaurus screening code.

## Usage

### PCTracker Server

1. Git clone && change directory
2. Copy '.env.example' to '.env'
3. Edit '.env' variables
4. Install composer packages && adjust file permissions
5. Create sqlite database file && run migrations
6. Start container
```bash
$ cd server
$ cp .env.example .env
$ docker run --rm -v "$(pwd)":/opt -w /opt laravelsail/php82-composer:latest bash -c "composer install"
$ sudo chown -R $USER: vendor/
$ touch database/database.sqlite
$ ./vendor/bin/sail up -d
$ ./vendor/bin/sail artisan migrate
```

### PCTracker Client

1. Git clone && change directory
2. Copy '.env.example' to '.env'
3. Start container
```bash
$ cd client
$ cp .env.example .env
$ docker compose up -d
```
