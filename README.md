# PHP Server Setup using Docker

This repository provides a Docker-based setup for running a PHP server environment.

## Prerequisites

Before you begin, ensure you have Docker and Docker Compose installed on your system:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Getting Started

### Clone the repository

Clone this repository on you local using git clone command.
```bash
git clone <repository-url>
cd <repository-directory>
```

### Write you code

For this repo, all the code related to your project should be place under `./server` folder.

### Run the docker server

To run the docker server just do

```bash
make services
```

#### Note: Don't forget to close the server at the end.

### Close the docker server

To close the server just do

```bash
make services.stop
```
