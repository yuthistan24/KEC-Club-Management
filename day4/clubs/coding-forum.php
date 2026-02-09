<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Music Club Events - Kongu Engineering College</title>
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
        <img src="../kec.jpg" alt="Kongu Engineering College" class="college-logo" width="50%" height="250px">
    </div>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="code1.jpg" alt="Music Club Event 1" class="d-block w-100" height="400px" width ="25%">
            </div>
            <div class="carousel-item">
                <img src="code2.jpg" alt="Music Club Event 2" class="d-block w-100" height = "400px" width ="25%">
            </div>
            <div class="carousel-item">
                <img src="code3.jpg" alt="Music Club Event 3" class="d-block w-100" height="400px" width ="25%">
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
        <h1 class="club-title">Coding Forum / Coding Club</h1>
        <p class="club-description">The Coding Forum at Kongu Engineering College is the premier technical club that focuses on programming, software development, competitive coding, and emerging technologies. The club serves as a platform for students to enhance their coding skills, participate in hackathons, and stay updated with the latest technological trends. It's officially known as the Computer Science and Engineering Association (CSEA) and is one of the most active technical clubs on campus.</p>
    </div>


    <div class="club-info">
            <h2 class="section-title">Club Information</h2>
            
            <div class="info-grid">
                <div class="info-item">
                    <h4>Faculty Coordinator</h4>
                    <p>Dr. S. Karthik</p>
                    <p>Associate Professor, Department of CSE </p>
                    <p>Contact: 94430XXXXX</p>
                    <p>Email: skarthik.cse@kongu.edu</p>
                </div>
                
                <div class="info-item">
                    <h4>Student Coordinator</h4>
                    <p>Arjun Senthil (President) - 9087543XXX</p>
                    <p>Computer Science and Engineering</p>
                    <p>Email: arjunsenthil.23cse@kongu.edu</p>
                </div>
                <div class = "info-item">
                    <h4>Student Coordinator</h4>
                    <p>Priya Sharma (Secretary) - 6789345XXX</p>
                    <p>Electronics and Communication Engineering</p>
                    <p> priyasharma.23it@kongu.edu</p>
                </div>
               
                
               
            </div>
        </div>
    
    <div class="events-section">
        <h2 class="section-title">Upcoming Events</h2>
        
        <div class="events-grid">
            <div class="event-card">
                <h3 class="event-title"> Kongu Hackathon 2026</h3>
                <div class="event-date">February 15-16, 2026 | 9:00 AM to 9:00 PM</div>
                <p class="event-description">Annual inter-department code competition showcasing the best coding talents of KEC. Open to all students.</p>
                <div class="event-details">
                    <p><strong>Venue:</strong>CSE Block - Computer Labs 1-4</p>
                    <p><strong>Registration Fee:</strong> Rs 200 per team</p>
                    <p><strong>Last Date to Register:</strong>  February 10, 2026</p>
                    <p><strong>Contact:</strong> Dr. S. Karthik (94430XXXXX)</p>
                    <button class="success-btn register-btn" type="button">Register Now</button>
<button class="leave-btn" type="button">Leave</button>
                </div>
            </div>
            
            <div class="event-card">
                <h3 class="event-title">Code Warriors - Competitive Programming Contest </h3>
                <div class="event-date"> March 8, 2026 | 10:00 AM - 1:00 PM
</div>
                <p class="event-description">Learn coding, API, and database connectivity from professional developers. Suitable for beginners and intermediates .</p>
                <div class="event-details">
                    <p><strong>Venue:</strong> Online (HackerRank Platform)
</p>
                    <p><strong>Registration Fee:</strong> Free for all KEC students</p>
                    <p><strong>Instruments Provided:</strong> No</p>
                    <p><strong>Contact:</strong> Music Club Secretary</p>
                    <button class="success-btn register-btn" type="button">Register Now</button>
<button class="leave-btn" type="button">Leave</button>
                </div>
            </div>
            
            <div class="event-card">
                <h3 class="event-title">Web Development Workshop Series</h3>
                <div class="event-date">January 20-27, 2026 | January 20-27, 2026</div>
                <p class="event-description">Grand workshop conducted by professionals, provides quality information on your current career. </p>
                    <p><strong>Venue:</strong> CSE Seminar Hall</p>
                    <p><strong>Entry:</strong> Free for all students</p>
                    <p><strong>Guest Performance:</strong> chris coyier(co-founder of codepen) </p>
                    <p><strong>Contact:</strong> Cultural Coordinator</p>
                    <button class="success-btn register-btn" type="button">Register Now</button>
<button class="leave-btn" type="button">Leave</button>
                </div>
            </div>
        </div>
        
        <h2 class="section-title">Past Events</h2>
        
        <div class="events-grid">
            <div class="event-card">
                <h3 class="event-title">Freshers' Welcome Jam</h3>
                <div class="event-date">August 10, 2026 | 5:00 PM - 7:00 PM</div>
                <p class="event-description">Informal coding session to welcome first year students and introduce them to the coding club activities.</p>
            </div>
            
            <div class="event-card">
                <h3 class="event-title">Code Night</h3>
                <div class="event-date">June 5, 2026 | 6:00 PM - 9:00 PM</div>
                <p class="event-description">Fun coding session with enthusiastic seniors</p>
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
                    if (leave) { leave.style.display = 'inline-block'; }
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
                    
                });
            });
        });
    </script></body>
</html>








