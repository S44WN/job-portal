# Job Portal Project Report

## Overview

The Job Portal project is a web application built using Laravel, designed to connect job seekers with employers. It provides features such as job listings, job applications, and administrative management of job postings.

---

## Technologies Used

### 1. Backend

**Laravel Framework**: A PHP-based web application framework used for building the backend of the application.  
**Version**: Referenced in the project as `Laravel v{{ Illuminate\Foundation\Application::VERSION }}`.

**Features utilized:**

-   Routing
-   Middleware
-   Eloquent ORM
-   Blade templating engine
-   Authentication and authorization
-   Database migrations and seeders

### 2. Frontend

-   **HTML5**: Used for structuring the web pages.
-   **CSS3**: Custom styles are defined in `style.css` located in `css`.
-   **Bootstrap 5.1.3**: A CSS framework for responsive design and pre-styled components.
    -   File: `bootstrap.bundle.5.1.3.min.js`
-   **Font Awesome**: Used for icons.
    -   File: `https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css`
-   **Tailwind CSS**: Referenced in some views for utility-first styling.

**JavaScript:**

-   **jQuery**: Used for DOM manipulation and AJAX requests.
    -   File: `jquery-3.6.0.min.js`
-   **Custom JavaScript**: Defined in `custom.js`.

### 3. Database

**MySQL**: Used as the database for storing application data.

**Tables include:**

-   `users`: For user accounts.
-   `jobs`: For job postings.
-   `categories`: For job categories.
-   `job_applications`: For tracking job applications.

### 4. Rich Text Editor

**Summernote**: A WYSIWYG editor for rich text input.

**Files:**

-   `summernote.js`
-   `summernote-lite.js`
-   `summernote-bs4.js`

### 5. Fonts

**Inter Font**: Used for typography.

-   Demo file: `demo.html`

### 6. Version Control

-   **Git**: Used for version control.
-   **GitHub**: The project was downloaded from GitHub.

---

## Features

### 1. Frontend Features

#### Homepage

-   Displays a banner with a call-to-action button.
-   Search functionality for jobs based on keywords, location, and category.
-   Sections for popular categories, featured jobs, and latest jobs.
    -   File: `resources/views/front/home.blade.php`

#### Job Details Page

-   Displays detailed information about a job, including responsibilities, qualifications, and benefits.
-   Allows users to apply for or save jobs.
    -   File: `resources/views/front/jobDetail.blade.php`

#### Authentication

-   Login and registration for users.
-   Admin dashboard access for administrators.

---

### 2. Admin Features

#### Dashboard

-   Overview of job postings, users, and applications.

#### Job Management

-   Create, edit, and delete job postings.
    -   File: `resources/views/admin/jobs/edit.blade.php`

#### Job Applications

-   View and manage job applications.
    -   File: `resources/views/admin/job-applications/list.blade.php`

---

### 3. Database Seeding

-   Seeder files are used to populate the database with sample data.
    -   File: `database/seeders/DatabaseSeeder.php`

---

### 4. Rich Text Editing

-   Summernote is integrated for creating and editing job descriptions and other text fields.

---

## File Structure

### Key Directories

-   `views`: Contains Blade templates for the frontend and admin views.
-   `assets`: Contains CSS, JavaScript, fonts, and other static assets.
-   `database`: Contains migrations and seeders for database management.
-   `routes`: Contains route definitions for the application.
    -   File: `routes/web.php`

---

## Routes

### Public Routes

-   `/`: Homepage
-   `/jobs`: Job listings
-   `/jobs/detail/{id}`: Job details
-   `/forgot-password`: Forgot password page

### Admin Routes

-   `/admin/dashboard`: Admin dashboard
-   `/admin/jobs`: Manage jobs
-   `/admin/job-applications`: Manage job applications

---

## Customization

### 1. Changing Colors and Themes

-   Modify `style.css` to update the color scheme.

### 2. Adding New Features

-   Add new routes in `web.php`.
-   Create corresponding controllers and views in `Controllers` and `views`.

---

## Deployment

### Steps to Deploy

1. **Install Dependencies**
2. **Set Up Environment**
    - Copy `.env.example` to `.env` and configure database credentials.
3. **Run Migrations**
4. **Build Frontend Assets**
5. **Start the Server**

---

## Future Enhancements

-   Add user profiles for job seekers and employers.
-   Implement advanced search filters for job listings.
-   Add notifications for job applications.
-   Integrate payment gateways for premium job postings.

---

## Conclusion

This Laravel-based Job Portal is a robust and scalable application designed to connect job seekers with employers. With its modular structure and use of modern technologies, it is easy to maintain and extend.
