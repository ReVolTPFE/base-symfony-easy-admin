# Base-Symfony-Easy-Admin

## Description

This repository is a template repository which will be used for personal Symfony with EasyAdmin projects.

## Requirements

- Git
- Docker

## Frameworks, libraries and tools used in the project

- Symfony
- EasyAdmin
- Webpack Encore
- Tailwind
- Stimulus
- UX Turbo
- ApexChart.js
- Composer
- Node with npm

## Installation

- Clone this repository with the following command:
	```bash
	git clone https://github.com/ReVolTPFE/base-symfony-easy-admin.git
	```

- Move into the repository folder with: `cd base-symfony-easy-admin`

- Start the Docker environment:
	```bash
	docker compose up --build
	```

- Get into the Symfony container:
	```bash
	docker exec -it symfony-s7 bash
	```

- Install dependencies and build the assets:
	```bash
	composer install

	npm install
	npm run build

	# sc is an alias for symfony console int the container
	sc assets:install
	```

- Create a `.env.local` file at the root path of the project and add the following variables inside. Edit the variable `APP_SECRET`:
	```
	APP_ENV=dev
	APP_DEBUG=1
	APP_SECRET=my-secret-key

	#DATABASE_URL="mysql://root:root@db:3306/db?serverVersion=11.6.2-MariaDB&charset=utf8mb4"
	```

- Go on the phpMyAdmin interface on your browser (http://localhost:8000, credentials: `root`, `root`) and create a database named `db` with the encoding `utf8mb4_general_ci`:

- Add the migrations into the database by typing the following command (`sc` is an alias for `php bin/console` or `symfony console`):
	```bash
	# d:m:m means doctrine:migrations:migrate
	sc d:m:m
	```

- Finally, load fixtures in the databse by typing the following command (`sc` is an alias for `php bin/console` or `symfony console`):
	```bash
	# d:f:l means doctrine:fixtures:load
	sc d:f:l
	```

Installation done. You are now able to use the website.
Connect as a super admin with the credentials `superadmin@example.com`, `azerty` on the login page accessible on: http://localhost:8080/login

## Other informations

- Homepage on path `/` is empty.
- The login page is available on path `/login`.
- The logout page is available on path `/logout`.
- The Back-Office main page is available on path `/admin` once logged in.
<br>

- Symfony: http://localhost:8080
- PhpMyAdmin: http://localhost:8000 (user: root, password: root)
- MailDev: http://localhost:8081
- MariaDB: no web URL
