# PHP Server Setup using Docker

This repository provides a Docker-based setup for running a PHP server environment.

## Prerequisites

Before you begin, ensure you have Docker and Docker Compose installed on your system:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Getting Started

### Clone the repository

Fork this repository to your own repo.

### Write you code

For this repo, all the code related to your project should be place under `./server` folder.

### Run the docker server

Before running make sure to copy the content of `.env-example` in a new `.env` file.

For linux user

```
cp .env-example .env
```

Then just do

```
make services
```

#### Note: Don't forget to close the server at the end.

### Access the services

One the server is up and running you can access the respective services as:

#### View your PHP pages

You can see your php pages at [localhost:8000](localhost:8000)

#### View phpMyAdmin

Goto [localhost:8080](localhost:8080)

Use the `MYSQL_USER` and `MYSQL_PASSWORD` from your `.env` file to login.

### Close the docker server

To close the server just do

```
make services.stop
```
