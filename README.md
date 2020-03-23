
# Docker, PHP, Composer, Autoload, TDD, Stub, Coverage

The following command lines have to be executed in the same root project folder.

## Requirements
- A browser.
- Internet access.
- Git installed.
- Docker installed.

We assume you are using Linux.

## Prepare

Clone this repository.

```
git clone https://github.com/federicozacayan/phpunit-docker.git .
```


## Run 'composer install' from Docker

```bash
sudo docker run --rm --interactive --tty   --volume $PWD:/app   composer install
```


## Run Unit Tests

```bash
sudo docker run -v "$PWD":/app --rm phpunit/phpunit --configuration="phpunit.xml"
```

## Run Unit Tests & Generate Coverage Report

```bash
sudo docker run -v "$PWD":/app --rm phpunit/phpunit --configuration="phpunit.xml" --coverage-html coverage --whitelist app
```

## Run Web Application

Create image 'ap'.

```bash
sudo docker build -t ap .
```

Create container 'mc'.

```bash
sudo docker run -d -p 88:80 -v "$PWD":/var/www/html --name=mc ap
```

Then test the web application on:

```
http://localhost:88/
```

Follow the instructions in Dockerfile comments in Dockerfile file.