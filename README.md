# Justice Portal
 
Justice Portal is a web-based platform designed to streamline interactions between administrators, lawyers, and clients. This system simplifies lawyer-client communication, ensures efficient booking, and provides secure account management features for all users.

---

### Features  

**Admin Features**  
1. **Add Lawyers**  
   - Admins can add new lawyer profiles to the system.  

2. **View Users** 
   - Admins can view a list of all registered lawyers and clients also can block any clients.  

3. **Change Password**  
   - Admins can securely update their account password.

---

**Lawyer Features**  
   - Viewable by Admin and Clients. (Lawyers don't log in directly in this version.)

---

**Client Features**  
1. **Lawyer Profile Browsing**  
   - Clients can log in and view detailed profiles of lawyers.  

2. **Book a Lawyer**  
   - Clients can book a lawyer for consultation or legal services.  

3. **Booking List**  
   - Clients can view a list of all their bookings with details.  

4. **Edit Profile**  
   - Clients can update their profile information.  

5. **Change Password**  
   - Clients can securely update their account password.

---

## Installation Instructions  

1. **Clone the Repository**  
   ```bash
   git clone <repository_url>
   cd justice-portal
   ```

2. **Configure Database**  
   - Create a database in your preferred DBMS.  
   - Import the provided SQL file (`lawyermanagementsystem.sql`) into your database.  

3. **Update Configuration Files**  
   - Update database connection settings in `config.php` with your database credentials:  
     ```php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "justice_portal";
     ```

4. **Start the Server**  
   - Use a local server like XAMPP, WAMP, or Laragon.  
   - Place the project folder in the `htdocs` directory.  
   - Access the site at: `http://localhost/justice-portal`.

---

## Technologies  

   - **Frontend**: HTML, CSS, Tailwind CSS, JavaScript  
   - **Backend**: PHP  
   - **Database**: MySQL  

---

## Usage Instructions  

1. **Admin Login**  
   - Navigate to the admin login page (`/admin`).  
   - Use your credentials to log in and manage the platform.  

2. **Client Registration and Login**  
   - Clients can register and log in from the homepage.  

3. **Booking Lawyers**  
   - After logging in, navigate to the lawyer profiles section, view details, and click "Book Now."  

---

## Security Features  

   - Passwords are encrypted for secure storage.  
   - User sessions are implemented to ensure account security.  

---



