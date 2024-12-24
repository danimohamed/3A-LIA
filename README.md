# SCHEDULE_MAKER

## Overview
**SCHEDULE_MAKER** is a web application designed to streamline and automate the scheduling process for educational institutions. Built using Laravel and the Backpack extension, this project allows administrators to efficiently manage schedules, rooms, teachers, and groups with ease and precision.

## Features
- **User Roles:** Multiple user roles including administrators, teachers, and students.
- **CRUD Operations:** Create, Read, Update, and Delete operations for teachers, rooms, groups, and schedules.
- **Conflict Detection:** Automatic detection of scheduling conflicts to avoid overlaps.
- **Real-Time Updates:** Immediate reflection of changes in the schedule.
- **Search and Filters:** Advanced search and filtering options to quickly locate schedules.
- **Export Functionality:** Export schedules as PDF or other formats for offline access.
- **User-Friendly Interface:** Drag-and-drop interface powered by Backpack for easy schedule management.

## Technologies Used
- **Framework:** Laravel  
- **Extension:** Backpack for Laravel  
- **Frontend:** Blade templating engine, HTML, CSS, JavaScript  
- **Database:** MySQL  
- **Additional Tools:** Composer, Artisan CLI

## Database Schema
1. **time_schedules**:
   - `id` (primary key)  
   - `teacher` (string)  
   - `room` (string)  
   - `group` (string)  
   - `day` (string)  
   - `period` (string)  
   - `timestamps`

2. **schedules**:
   - `id` (primary key)  
   - `teacher_name` (string)  
   - `room_name` (string)  
   - `group_name` (string)  
   - `day` (string)  
   - `period` (string)  
   - `timestamps`

3. **groups**:
   - `id` (primary key)  
   - `group_name` (string, unique)  
   - `timestamps`

4. **rooms**:
   - `id` (primary key)  
   - `room_name` (string)  
   - `timestamps`

5. **teachers**:
   - `id` (primary key)  
   - `teacher_name` (string)  
   - `timestamps`

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/schedule_maker.git
   ```
2. Navigate to the project directory:
   ```bash
   cd schedule_maker
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install
   ```
4. Set up the `.env` file:
   - Configure the database connection.
   - Set up application-specific environment variables.
5. Run database migrations:
   ```bash
   php artisan migrate
   ```
6. Seed the database (optional):
   ```bash
   php artisan db:seed
   ```
7. Serve the application:
   ```bash
   php artisan serve
   ```

## Usage
1. Log in to the admin panel.
2. Manage teachers, rooms, groups, and schedules using Backpack's intuitive interface.
3. View and resolve conflicts in real time.
4. Export schedules as needed.

## Screenshots
![SCHEDULE_MAKER Dashboard](dashboard-image-url)

## Contribution
Contributions are welcome! Please follow the steps below:
1. Fork the repository.
2. Create a new branch for your feature:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add feature description"
   ```
4. Push your changes:
   ```bash
   git push origin feature-name
   ```
5. Open a pull request.

## License
This project is licensed under the MIT License. See the `LICENSE` file for more details.

## Contact
For any inquiries, please contact:
- **Name:** Mohamed Dani  
- **Email:** mohameddani993@gmail.com  
- **Phone:** +212708018173

## Acknowledgments
Special thanks to everyone who provided feedback during the development of this project.

