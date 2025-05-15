# 🧾 Student Registry App (PHP MVC)

A simple PHP-based web application to manage student records (Name & Matric Number) using the MVC (Model-View-Controller) pattern. It supports basic CRUD operations with server-side validation and security best practices.

---

## 📦 Features

- Add new students (name + matric number)
- View all students
- Update student records
- Delete students
- Server-side validation and sanitization
- Clean MVC structure using raw PHP
- Secure DB access using PDO with prepared statements

---

## 📁 Folder Structure

students-app/
├── config/ # Database connection
│ └── database.php
├── controllers/ # Controller logic
│ └── StudentController.php
├── models/ # Database interaction
│ └── Student.php
├── views/ # HTML interface
│ └── students_view.php
├── index.php # Front controller / router
└── README.md


---

## ⚙️ Requirements

- PHP 7.4+
- MySQL / MariaDB
- Apache or any web server with PHP enabled

---
