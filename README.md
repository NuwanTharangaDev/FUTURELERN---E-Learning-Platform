# FUTURELERN – E-Learning Platform

FUTURELERN is a web-based E-Learning Platform designed to provide students with an interactive and user-friendly environment for online learning. The platform provides access to courses, tutorials, free learning resources, an e-library, events, discounts, and expert information.

The project follows a structured architecture with separate **Frontend, Backend, and Database** components.

## 🚀 Features

* 🏠 Modern and responsive home page
* 📚 Online courses and tutorials
* 🆓 Free learning resources
* 📖 E-Library
* 🎓 Expert and teacher sections
* 📅 Educational events
* 💰 Discount and promotional sections
* 👨‍🏫 Become-a-teacher section
* 🔐 User registration and login
* 🔒 Password hashing for user authentication
* 🗄️ MySQL database integration
* 🔌 PHP backend for authentication and database communication
* 📱 Responsive web interface

## 🛠️ Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript
* Font Awesome
* Google Fonts

### Backend

* PHP

### Database

* MySQL

### Development Environment

* XAMPP / Apache
* MySQL
* Visual Studio Code

## 📁 Project Structure

```text
FUTURELERN/
│
├── Backend/
│   ├── auth/
│   ├── config/
│   │   └── db.connect.php
│   ├── login.php
│   └── register.php
│
├── Database/
│   └── futurelearn.sql
│
├── Frontend/
│   ├── assets/
│   ├── buy_sections/
│   ├── css/
│   ├── js/
│   ├── pages/
│   ├── index.html
│   ├── login.html
│   └── register.html
│
├── index.html
└── README.md
```

## ⚙️ Installation and Setup

### 1. Install XAMPP

Download and install XAMPP to run Apache and MySQL locally.

Start:

```text
Apache
MySQL
```

### 2. Clone the Repository

```bash
git clone https://github.com/your-username/futurelearn-e-learning-platform.git
```

Move into the project directory:

```bash
cd futurelearn-e-learning-platform
```

### 3. Copy the Project

Copy the project folder into:

```text
C:\xampp\htdocs\
```

The final path should look similar to:

```text
C:\xampp\htdocs\FUTURELERN\
```

### 4. Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Create a MySQL database for the project.

Then import:

```text
Database/futurelearn.sql
```

### 5. Configure Database Connection

Open:

```text
Backend/config/db.connect.php
```

Update the database credentials according to your XAMPP/MySQL configuration.

Example:

```php
$host = "localhost";
$username = "root";
$password = "";
$database = "futurelearn";
```

### 6. Run the Project

Open your browser and visit:

```text
http://localhost/FUTURELERN/Frontend/
```

You can then explore the E-Learning Platform.

## 🔐 Authentication

The platform includes:

* User registration
* User login
* Password hashing
* Database-based authentication

The authentication functionality is handled through the PHP backend and MySQL database.

## 🗄️ Database

The project uses MySQL to store application data.

The database SQL file is available at:

```text
Database/futurelearn.sql
```

Import this file into phpMyAdmin before using the backend authentication features.

## 🎯 Project Objectives

The main objectives of FUTURELERN are:

* To provide an accessible online learning platform.
* To organize educational resources in one place.
* To demonstrate frontend web development.
* To implement PHP-based backend functionality.
* To integrate a MySQL database.
* To implement user registration and authentication.
* To develop a practical full-stack web application.

## 📸 Screenshots

Add your project screenshots here after uploading them to the repository.

Example:

```markdown
![Home Page](screenshots/home.png)

![Courses Page](screenshots/courses.png)

![Login Page](screenshots/login.png)
```

## 🔮 Future Improvements

Possible future enhancements include:

* Student dashboard
* Course enrollment system
* Online payments
* Course progress tracking
* Teacher dashboard
* Admin dashboard
* Online quizzes and assessments
* Certificate generation
* Course search and filtering
* User profile management
* Email notifications

## 👨‍💻 Developer

Developed as an educational web development project to demonstrate **frontend development, PHP backend development, authentication, and MySQL database integration**.

## 📄 License

This project is developed for educational and academic purposes.
