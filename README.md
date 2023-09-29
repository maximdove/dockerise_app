# README.md

---

## PHP MySQL CRUD Dockerized

This repository provides a Docker Compose setup to lift the PHP MySQL CRUD application using separate containers for the web server and the database.

### Structure:

- **Dockerfile-db**: Sets up a MySQL container and initializes the database using a given script.
- **Dockerfile-web**: Sets up a PHP 8.0 with Apache container and copies the necessary PHP files into the image.
- **docker-compose.yml**: Docker Compose file that defines and orchestrates both the web and database services.
- **.ENV**: An environment file that contains confidential or local variables.

### Task Requirements:

1. Use docker-compose to set up the application.
2. Web server and database should run in separate containers.
3. Use a bridge type network.
4. Apache port should not be the default 80.
5. Ports in the compose file are parameterized.
6. Database content should persist even after the docker-compose stack is removed.
7. Use a .ENV file for confidential or local variables.

### Setup Instructions:

1. **Clone the repository**:
    ```bash
    git clone [repository-url]
    ```

2. **Navigate to the project directory**:
    ```bash
    cd [project-directory]
    ```

3. **Update the .ENV file**:
    - Set your desired database root password, database name, and Apache port.
    
4. **Run the Docker Compose**:
    ```bash
    docker-compose up --build
    ```

5. **Access the Application**:
    - Open your browser and navigate to `http://localhost:[APACHE_PORT]` where `[APACHE_PORT]` is the value you set in the `.ENV` file.

6. **Shutdown and Cleanup**:
    ```bash
    docker-compose down
    ```

   This will stop the containers, but the database volume will persist to retain the data.

### Notes:

- The database is initialized using a script located at `/docker-entrypoint-initdb.d/init.sql` within the `db` container. This ensures that our database structure is set up on first run.
  
- The web server is running on a custom port, as defined in the `.ENV` file. Adjust the `APACHE_PORT` value as needed.

- All confidential or environment-specific variables (like the database password) are stored in the `.ENV` file. This keeps sensitive information out of the main configuration files and allows for easy customization.

---

By following the above instructions, you should be able to get the PHP MySQL CRUD application up and running in separate Docker containers with ease!

### Here are the screenshots of a working dockerized app:

![Alt text](<docs/iScreen Shoter - Safari - 230929175229.png>)

![Alt text](<docs/iScreen Shoter - Warp - 230929180131.png>)

![Alt text](<docs/iScreen Shoter - Docker Desktop - 230929175916.png>)

![Alt text](<docs/iScreen Shoter - Docker Desktop - 230929175930.png>)

![Alt text](<docs/iScreen Shoter - Docker Desktop - 230929175945.png>)

