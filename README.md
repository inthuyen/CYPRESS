# CYPRESS Demo Site
This site simulates the  CIty oF Toronto's CYPRESS website which is used to report maintenance issues throughout the city.

## Live Demo
 [CYPRESS](https://www.cs.ryerson.ca/~inagules/CYPRESS/)

<sub>Note: PHP & mySQL is not working due to the website being hosted on university servers.</sub>

## Deployment
### Docker Setup
1. Download and setup [Docker](https://www.docker.com/products/docker-desktop/) from the official source.
2. Open a command line shell in the parent directory.
3. Run the command `docker compose up --build -d`
4. Edit the port settings in the docker-compose.yml file to choose an available port.
### MySQL Database Setup
5. Log into phpMyAdmin using "mysql" as the server, "root" as the username, and "yourpassword" as the default password. The password for phpMyAdmin can be changed in the docker-compose.yml file.
6. Import the DATABASE.sql file into phpMyAdmin to create the database and tables.
### Exiting the Program
7. Run the command `docker compose down` to stop all processes.