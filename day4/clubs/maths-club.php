<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srinivasa Ramanujan Mathematics Club Events - Kongu Engineering College</title>
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
        
        .club-header {
            padding: 30px 20px;
            background-color: white;
            margin: 20px auto;
            width: 95%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        
        .club-title {
            color: #003366;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .club-description {
            color: #666;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .events-section {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            color: #003366;
            margin: 30px 0 20px;
            font-size: 1.8rem;
            border-bottom: 3px solid #ffcc00;
            padding-bottom: 10px;
            text-align: center;
        }
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }
        
        .event-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 5px solid #003366;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .event-title {
            color: #003366;
            font-size: 1.4rem;
            margin-bottom: 15px;
        }
        
        .event-date {
            background-color: #e6f2ff;
            color: #004080;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .event-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .event-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }
        
        .event-details p {
            margin-bottom: 8px;
        }
        
        .club-info {
             background: #fff;
             padding: 20px;
             margin: 30px auto;
             max-width: 900px;
             text-align: center;
             border-radius: 8px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
            text-align: center;
        }
        
        .info-item h4 {
            color: #003366;
            margin-bottom: 10px;
        }
        
        .footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
        }
        
        .home-link {
            display: inline-block;
            background-color: white;
            color: #003366;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        
        .home-link:hover {
            background-color: #ffcc00;
            transform: translateY(-3px);
        }
            .success-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .success-btn:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .leave-btn {
            display: inline-block;
            background-color: #dc3545;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-left: 10px;
        }

        .leave-btn:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }    </style>
</head>
<body>
    <div class="header">
        <button class="back-btn" onclick="window.history.back()">&larr; Back to Clubs</button>
        <img src = "../kec.jpg" width = "50%" height ="250px">
    </div>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="m-1.jpg" alt="Maths Club Event 1" class="d-block w-100" height="400px" width ="25%">
            </div>
            <div class="carousel-item">
                <img src="m-2.jpg" alt="Maths Club Event 2" class="d-block w-100" height = "400px" width ="25%">
            </div>
            <div class="carousel-item">
                <img src="m-3.jpg" alt="Maths Club Event 3" class="d-block w-100" height="400px" width ="25%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="club-header">
        <h1 class="club-title">Srinivasa Ramanujan Mathematics Club</h1>
        <p class="club-description">The Srinivasa Ramanujan Mathematics Club of Kongu Engineering College encourages mathematical thinking, nurtures problem-solving skills, and inspires students to explore the beauty of mathematics. The club provides a vibrant platform for students to express their interest in mathematics through activities such as quizzes, problem-solving contests, seminars, workshops, and guest lectures. Throughout the year, the club organizes various academic and interactive events that promote logical reasoning, innovation, and a deeper understanding of mathematical concepts among students.</p>
    </div>

    <div class="club-info">
            <h2 class="section-title">Club Information</h2>
            
            <div class="info-grid">
                <div class="info-item">
                    <h4>Faculty Coordinator</h4>
                    <p>Dr. R. Kumar - 9867538XXX</p>
                    <p>Department of Mathematics </p>
                    <p>Email: rkumar.maths@kongu.edu</p>
                </div>
                
                <div class="info-item">
                    <h4>Student Coordinator</h4>
                    <p>Arjun Sharma (President) - 9087543XXX</p>
                    <p>Computer Science and Engineering</p>
                    <p>Email: arjunsharma.23cse@kongu.edu</p>
                </div>
                <div class = "info-item">
                    <h4>Student Coordinator</h4>
                    <p>Priya Patel (Secretary) - 6789345XXX</p>
                    <p>Electronics and Communication Engineering</p>
                    <p>priyapatel.23ece@kongu.edu</p>
                </div>
               
                
               
            </div>
        </div>
    
    <div class="events-section">
        <h2 class="section-title">Upcoming Events</h2>
        
        <div class="events-grid">
            <div class="event-card">
                <h3 class="event-title">Inter Collegiate Competition 2026</h3>
                <div class="event-date">October 15, 2026 | 4:00 PM - 8:00 PM</div>
                <p class="event-description">Annual inter-department mathematics competition showcasing the best mathematical talents of KEC. Open to all students with teams.</p>
                <div class="event-details">
                    <p><strong>Venue:</strong> Open Air Auditorium</p>
                    <p><strong>Registration Fee:</strong> ₹500 per team</p>
                    <p><strong>Last Date to Register:</strong> October 10, 2026</p>
                    <p><strong>Contact:</strong> Prof. R. Kumar (9876543210)</p>
                    <button class="success-btn register-btn" type="button">Register Now</button>
<button class="leave-btn" type="button">Leave</button>
                </div>
            </div>
            
            <div class="event-card">
                <h3 class="event-title">Number Theory Workshop</h3>
                <div class="event-date">October 28, 2026 | 10:00 AM - 4:00 PM</div>
                <p class="event-description">Learn number theory concepts from professional mathematicians. Suitable for beginners and intermediate students.</p>
                <div class="event-details">
                    <p><strong>Venue:</strong> Mathematics Department Hall</p>
                    <p><strong>Registration Fee:</strong> ₹200 (includes lunch)</p>
                    <p><strong>Instruments Provided:</strong> Yes</p>
                    <p><strong>Contact:</strong> Prof. R. Kumar (9876543210)</p>
                    <button class="success-btn register-btn" type="button">Register Now</button>
<button class="leave-btn" type="button">Leave</button>
                </div>
            </div>
            
            <div class="event-card">
                <h3 class="event-title">Annual Integration Bee</h3>
                <div class="event-date">November 20, 2026 | 6:00 PM - 10:00 PM</div>
                <p class="event-description">The grand annual mathematics festival featuring performances by college teams, solo artists, and guest performances.</p>
                <div class="event-details">
                    <p><strong>Venue:</strong> Main Auditorium</p>
                    <p><strong>Entry:</strong> Free for all students</p>
                    <p><strong>Guest Performance:</strong> Local Mathematician</p>
                    <p><strong>Contact:</strong> Mathematics Coordinator</p>
                    <button class="success-btn register-btn" type="button">Register Now</button>
<button class="leave-btn" type="button">Leave</button>
                </div>
            </div>
        </div>
        
        <h2 class="section-title">Past Events</h2>
        
        <div class="events-grid">
            <div class="event-card">
                <h3 class="event-title">Freshers' Welcome Session</h3>
                <div class="event-date">August 10, 2026 | 5:00 PM - 7:00 PM</div>
                <p class="event-description">Informal mathematics session to welcome first year students and introduce them to the mathematics club activities.</p>
            </div>
            
            <div class="event-card">
                <h3 class="event-title">Mathematics Quiz Competition</h3>
                <div class="event-date">September 5, 2026 | 6:00 PM - 9:00 PM</div>
                <p class="event-description">Quiz competition covering various mathematical concepts and problem-solving techniques.</p>
            </div>
        </div>
        
        
    </div>
    
    <div class="footer">
        <p>Kongu Engineering College | Perundurai, Erode - 638060, Tamil Nadu</p>
        <p class="copyright">© 2026 Kongu Clubs Events Portal</p>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.register-btn').forEach((btn) => {
                btn.addEventListener('click', () => {
                    const card = btn.closest('.event-details');
                    if (!card) return;
                    btn.textContent = 'Registered';
                    btn.disabled = true;
                    btn.classList.add('registered');
                    const leave = card.querySelector('.leave-btn');
                    if (leave) { /* visible by default */ }
                });
            });

            document.querySelectorAll('.leave-btn').forEach((btn) => {
                btn.addEventListener('click', () => {
                    const card = btn.closest('.event-details');
                    if (!card) return;
                    const reg = card.querySelector('.register-btn');
                    if (reg) {
                        reg.textContent = 'Register Now';
                        reg.disabled = false;
                        reg.classList.remove('registered');
                    }
                    /* leave stays visible */
                });
            });
        });
    </script></body>
</html>







