<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Staatliches&display=swap'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="styles/styles_a.css">
</head>

<body>
    <header>
        <nav class="list">
            <ul>
                <li><a href="{{ url('/')}}" style="text-decoration: none;">Home</a></li>
                <li><a href="{{ url('/about')}}"style="text-decoration: none;">About</a></li>
                <li><a href="{{ url('/contactus')}}"style="text-decoration: none;">Contact Us</a></li>
            </ul>
        </nav>
    </header>

        <div class="section-header">
            <h2 class="header header_home">About Us</h2>
        </div>

            <div class="container">
                <div class="box">
                    <div class="info-image">
                        <img src="assets/img/about/richard.jpg" alt="Richard D. Bilan">
                    </div>
                    
                    <h2> RICHARD D. BILAN JR. </h2>
                        <ul class="info-list">
                            <li><strong>Education:</strong> <br>3rd Year BS Information Technology <br> College of Science <br> Bicol University</li>
                            <li><strong>About Me:</strong> <br>I am an IT student with a strong curiosity about the tech field. While I am still exploring my future career path, I'm focused on finishing my studies and excited to learn more about technology.</li>
                        </ul>
                </div>

                <div class="box">
                    <div class="info-image">
                        <img src="assets/img/about/meh.jpg" alt="Mae Anne Bongat">
                    </div>
                        
                    <h2> MAE ANNE B. BONGAT</h2>
                        <ul class="info-list">
                            <li><strong>Education:</strong><br>3rd Year BS Information Technology <br> College of Science <br> Bicol University</li>
                            <li><strong>About Me:</strong> <br>A student eager to learn more about the IT industry. Although still uncertain about which path to take, I am committed to completing everything needed to graduate.</li>
                        </ul>
                </div>
            
                <div class="box">
                    <div class="info-image">
                        <img src="assets/img/about/thei.jpg" alt="Althea M. Casimiro">
                    </div>
                        
                    <h2> ALTHEA M. CASIMIRO</h2>
                        <ul class="info-list">
                            <li><strong>Education:</strong><br>3rd Year BS Information Technology <br> College of Science <br> Bicol University</li>
                            <li><strong>About Me:</strong> <br>I'm an IT student who is passionate about finishing my studies in this course but I also love engaging in creative activities that I find interesting and enjoyable during my free time.</li>
                    </ul>
                </div>
            </div>
</body>
</html>