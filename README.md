# ☕ Web for Cafe

A web application for managing a cafe, featuring an admin panel for CRUD operations, user authentication, and a database connection. Developed using PHP with an object-oriented approach.

---

## 📋 Features

- 🛠️ **CRUD Operations**: Manage cafe data through the admin panel.
- 🔐 **User Authentication**: Login and register functionality with session handling.
- 🗃️ **Database Integration**: Connects to a database for data storage and retrieval.
- 🧑‍💻 **Object-Oriented Design**: Structured code using OOP principles.

---

## 🚀 Installation

1. **Clone the repository:**
    ```
    git clone https://github.com/martinrosik/Web-for-cafe
    ```
2. **Navigate to the project folder:**
    ```
    cd Web-for-cafe
    ```
3. **Configure the Database:**

- Create a database and import the provided .sql file.
- Update the database credentials in the config file (Connect.php).
    
4. **Start a Local Server**:
    ```
    php -S localhost:8000
    ```

---
    
## 🖥️ Usage
  - **Admin Panel:** Log in as an admin to perform CRUD operations.
    - In admin panel you can adding or deleting registered users from database.
  - **User Registration & Login:** Register as a new user or log in to access features.
    - Sadly there are no features for loggined user.
---

### 📂 File Structure
- 📁 /config: Database configuration.
- 📁 /controllers: Contains classes for CRUD operations.
- 📁 /views: UI templates for the application.
- 📁 /models: Database models for each entity.

---

## 🤝 Contributing
- Feel free to fork the repository and submit pull requests. Contributions are welcome!
