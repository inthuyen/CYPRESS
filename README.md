# CYPRESS Demo Site
This site simulates the  CIty oF Toronto's CYPRESS website which is used to report maintenance issues throughout the city.

Live Demo: https://www.cs.ryerson.ca/~inagules/CYPRESS/

<sub>Note: PHP & mySQL is not working due to the website being hosted on university servers.
Edit the DATABASE.sql file and use XAMPP (Apache & PHPMyAdmin) to run the site.</sub>

## Deployment
1. Download and setup Docker from the official source.
2. Open a command line shell in the parent directory.
3. Run the command `docker compose up --build -d`
4. Edit the ports settings in the docker-compose.yml file to choose an available port.
