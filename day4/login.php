<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kongu Clubs Portal</title>
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
            max-width: 450px;
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
        
        .form-group input {
            width: 100%;
            padding: 14px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #003366;
            box-shadow: 0 0 0 3px rgba(0, 51, 102, 0.1);
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
        
        .signup-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }
        
        .signup-link a {
            color: #003366;
            text-decoration: none;
            font-weight: 600;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .benefits-box {
            background-color: #e6f2ff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            color: #004080;
            border-left: 4px solid #003366;
        }
        
        .benefits-box h3 {
            margin-bottom: 10px;
            color: #003366;
        }
        
        .benefits-box ul {
            padding-left: 20px;
        }
        
        .benefits-box li {
            margin-bottom: 5px;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            font-size: 0.95rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember-me input {
            width: auto;
        }
        
        .forgot-password a {
            color: #003366;
            text-decoration: none;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
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
        
        .demo-credentials {
            background-color: #fff8e6;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #856404;
            border: 1px solid #ffeaa7;
        }
        
        @media (max-width: 600px) {
            .form-container {
                padding: 30px 20px;
            }
            
            .form-title {
                font-size: 1.7rem;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
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
            
        }
        ?>
</head>
<body>
    <div class="header">
        <button class="back-btn" onclick="window.location.href='index.html'">← Back to Home</button>
        <h1>Kongu Engineering College</h1>
        <p>Clubs Events Portal - Student Login</p>
    </div>
    
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Student Login</h2>
            
            <div class="benefits-box">
                <h3>Benefits of Login:</h3>
                <ul>
                    <li>Register for events with one click</li>
                    <li>Track all your event registrations</li>
                    <li>Get personalized event recommendations</li>
                    <li>Receive event reminders</li>
                    <li>Access event materials and resources</li>
                </ul>
            </div>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">College Email or Roll Number</label>
                    <input type="text" id="email" name="email" required placeholder="username@kongu.edu or 25CSE001">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="forgot-password">
                        <a href="#" onclick="alert('Please contact admin to reset your password.')">Forgot Password?</a>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">Login to Account</button>
            </form>
            
            <div class="demo-credentials">
                <strong>Demo Login:</strong><br>
                Email: demo@kongu.edu<br>
                Password: demo123<br>
                (For testing purposes only)
            </div>
            
            <div class="signup-link">
                Don't have an account? <a href="signup.html">Sign up here</a>
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