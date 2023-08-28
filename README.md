# Blog App

Welcome to the README for the Blog Web App project! This web application allows users to create accounts, perform authorized actions, leave comments on posts, and enables administrators to manage posts efficiently.

## Technologies Used

- **Framework:** Laravel
- **Backend:** PHP, MySQL
- **Frontend:** HTML, CSS (styled with Tailwind CSS)

## Project Features

- **User Authentication:** Users can create accounts, register, log in, and log out. Authenticated users have access to additional features.

- **Authorization:** Different user roles (user and admin) determine the level of access to certain functionalities.

- **Commenting System:** Users can leave comments on posts. Comments contribute to dynamic discussions around the content.

- **Admin Privileges:** Admin users have special privileges, including adding, editing, and deleting posts.

## Installation and Setup

1. Clone the repository:<br>
   [git clone](https://github.com/SaifullahAkhtar-001/Blog-App.git)
   
2. Navigate to the project directory:<br>
    ```
   cd Blog-App
    ```
4. Install dependencies:<br>
    ```
   composer install
    ```

6. Copy the `.env.example` file to `.env` and configure your database settings.

7. Generate the application key:<br>
    ```
   php artisan key:generate
    ```

9. Run migrations and seed the database:<br>
    ```
   php artisan migrate --seed
    ```

11. Start the development server:<br>
    ```
    php artisan serve
    ```
13. Visit `http://localhost:8000` in your browser to access the application.

## Usage

1. Register for an account or log in using existing credentials.

2. Explore the blog posts and leave comments on your favorite posts.

3. Admin users can log in and manage posts by adding, editing, or deleting them.

## Screenshots
 <br>Main Page<br>
     ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/6b05e543-f7cd-4b80-8dea-88dd7c408185)<br>
     ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/652b6c3e-8ee5-4d52-8e08-6ad51f2ad505)<br>
     ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/afeb87e4-6369-4bd8-9245-ee3f16e8876a)<br>
<br>Post Page<br>
    ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/f34d9e1b-d698-4e31-8c29-5368d55c945b)<br>
<br>LogIn<br>
    ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/a407a38f-9c5d-4901-b75d-845d7111df71)<br>
<br>Register<br>
    ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/63709a98-2b4c-44d3-bc02-8f41972fc05b)<br>
<br>Dashboard<br>
    ![image](https://github.com/SaifullahAkhtar-001/Blog-App/assets/118631470/24cc34aa-7f44-47ce-b113-c559fd638951)<br>

## Contributions

Contributions to this project are welcome. If you find any issues or have ideas for improvements, feel free to submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

---

Thank you for your interest in the Blog Web App project. Feel free to explore the code, contribute, or use it as a foundation for your own projects. If you have any questions, please don't hesitate to reach out.
  
Full Stack Developer  
Contact: [Saifullah Akhtar](saifullah.akhtar13@gmail.com)



