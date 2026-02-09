<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Kongu Clubs Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            background: linear-gradient(135deg, #f0f5ff 0%, #e6f2ff 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            background: linear-gradient(135deg, #003366 0%, #004080 100%);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .back-btn {
            position: absolute;
            left: 20px;
            top: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            background-color: white;
            color: #003366;
        }
        
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }
        
        .form-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            border-top: 5px solid #003366;
        }
        
        .form-title {
            color: #003366;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .form-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: #ffcc00;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #003366;
            font-weight: 600;
            font-size: 1rem;
        }
        
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #003366;
            box-shadow: 0 0 0 3px rgba(0, 51, 102, 0.1);
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .submit-btn {
            background-color: #003366;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }
        
        .submit-btn:hover {
            background-color: #004080;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }
        
        .login-link a {
            color: #003366;
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .form-note {
            background-color: #e6f2ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            color: #004080;
            font-size: 0.95rem;
            border-left: 4px solid #003366;
        }
        
        .footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 25px 20px;
        }
        
        .footer-content p {
            margin-bottom: 10px;
            color: #e6f2ff;
        }
        
        .copyright {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #b3d9ff;
        }
        
        .password-requirements {
            font-size: 0.85rem;
            color: #666;
            margin-top: 5px;
        }
        
        @media (max-width: 600px) {
            .form-container {
                padding: 30px 20px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .form-title {
                font-size: 1.7rem;
            }
        }
    </style>
    <?php
        $host= 'localhost';
        $username= 'root';  
        $password= '';
        $db= 'kec_clubs';
        $conn = mysqli_connect($host, $username, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            if(isset($_POST['signup'])){
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $rollNumber = $_POST['rollNumber'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $department = $_POST['department'];
                $year = $_POST['year'];

                $sql = "INSERT INTO students (FirstName, LastName, RollNumber, Email, Mobile, Department, Year) VALUES ('$firstName', '$lastName', '$rollNumber', '$email', '$mobile', '$department', '$year')";

                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Registration successful!');</script>";
                } else {
                    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
                }
            }
        }
    ?>
</head>
<body>
    <div class="header">
        <button class="back-btn" onclick="window.location.href='index.html'">← Back to Home</button>
        <h1>Kongu Engineering College</h1>
        <p>Clubs Events Portal - Student Registration</p>
    </div>
    
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Create Your Account</h2>
            
            <div class="form-note">
                <strong>Note:</strong> Register once to access all club events. Your information will be saved for future event registrations.
            </div>
            
            <form id="signupForm" method="POST" action="signup.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="rollNumber">Roll Number *</label>
                    <input type="text" id="rollNumber" name="rollNumber" required placeholder="e.g., 25CSE001">
                </div>
                
                <div class="form-group">
                    <label for="email">College Email *</label>
                    <input type="email" id="email" name="email" required placeholder="username@kongu.edu">
                </div>
                
                <div class="form-group">
                    <label for="mobile">Mobile Number *</label>
                    <input type="tel" id="mobile" name="mobile" required placeholder="9876543210">
                </div>
                
                <div class="form-group">
                    <label for="department">Department *</label>
                    <select id="department" name="department" required>
                        <option value="">Select Department</option>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="IT">Information Technology</option>
                        <option value="ECE">Electronics and Communication Engineering</option>
                        <option value="EEE">Electrical and Electronics Engineering</option>
                        <option value="MECH">Mechanical Engineering</option>
                        <option value="CIVIL">Civil Engineering</option>
                        <option value="AUTO">Automobile Engineering</option>
                        <option value="CHEM">Chemical Engineering</option>
                        <option value="FT">Food Technology</option>
                        <option value="EI">Electronics and Instrumentation Engineering</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="year">Year of Study *</label>
                    <select id="year" name="year" required>
                        <option value="">Select Year</option>
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                        <option value="4">Fourth Year</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="password">Create Password *</label>
                    <input type="password" id="password" name="password" required>
                    <div class="password-requirements">
                        Must be at least 8 characters with uppercase, lowercase, and number
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password *</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                </div>
                
                <div class="form-group">
                    <label for="interests">Club Interests (Optional)</label>
                    <select id="interests" name="interests" multiple style="height: 100px;">
                        <option value="music">Cultural & Music Club</option>
                        <option value="freelance">Freelancers Club</option>
                        <option value="maths">Mathematics Club</option>
                        <option value="gender">Gender Equality Club</option>
                        <option value="eprc">English Proficiency Club</option>
                        <option value="innovation">Innovation & Entrepreneurship Club</option>
                        <option value="selfdev">Self Development Club</option>
                        <option value="rotaract">Rotaract Club</option>
                        <option value="redribbon">Red Ribbon Club</option>
                        <option value="coding">Coding Forum</option>
                        <option value="creative">Ravi Varma Creative Club</option>
                        <option value="photography">Photography & Design Club</option>
                        <option value="yoga">Yoga and Meditation Club</option>
                        <option value="women">Women Development Cell</option>
                        <option value="mobile">Mobile App Development Cell</option>
                        <option value="robotics">Robotics Club</option>
                    </select>
                    <div class="password-requirements">Hold Ctrl (or Cmd on Mac) to select multiple clubs</div>
                </div>
                
                <button type="submit" name="signup" value="signup" class="submit-btn">Create Account</button>
            </form>
            
            <div class="login-link">
                Already have an account? <a href="login.html">Login here</a>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer-content">
            <p>Kongu Engineering College | Perundurai, Erode - 638060, Tamil Nadu</p>
            <p>Email: info@kongu.edu | Phone: 04294 - 226555</p>
            <p class="copyright">© 2026 Kongu Clubs Events Portal. All clubs events in one place.</p>
        </div>
    </div>
</body>
</html>