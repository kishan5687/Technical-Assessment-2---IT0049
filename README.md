# IT0049 - Web System Technologies
## Technical Formative Assessment 2: From Arrays to a Real Database

### Group Information
* **Student Name:** Raina Quejada
* **Section:** TW35

---

### Project Overview
This laboratory activity extends the Point-of-Sale (POS) application from Technical Formative Assessment 1 by migrating data layer management from temporary in-memory static PHP arrays to a persistent local **MySQL Database**. 

The implementation strictly demonstrates the use of the **Model layer** within the MVC pattern, utilizing CodeIgniter 4's built-in **Query Builder** via the native `findAll()` method to pull rows dynamically without writing raw, unescaped SQL.

### Database Architecture & Schema Applied
The database contains two core tables matching the provided schema specifications:
1. **`customers`**: Holds transactional account records (`id`, `full_name`, `email`, `phone`, `created_at`).
2. **`users`**: Manages backend system personnel privileges (`id`, `username`, `full_name`, `created_at`).

---

### Local Installation & Setup Directions

#### 1. Database Initialization
1. Launch the **XAMPP Control Panel** and execute **Apache** and **MySQL**.
2. Navigate to `http://localhost/phpmyadmin/` and create a database named `pos_system`.
3. Select the `pos_system` database, head to the **SQL** tab, and import/run the matching raw schema commands located inside the project repository root file named `database_export.sql`.

#### 2. App Execution Setup
1. Move into your workspace directory using your terminal:
   ```bash
   cd "TECHNICAL ASSESSMENT 2"
   ```
2. Confirm your local configurations match inside the active `.env` file:
   ```env
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   database.default.database = pos_system
   database.default.username = root
   database.default.password = 
   ```
3. Run the framework server profile:
   ```bash
   C:\xampp\php\php spark serve
   ```
4. Access via browser at: [http://localhost:8080/](http://localhost:8080/)
