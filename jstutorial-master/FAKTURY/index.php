<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Faktury</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">LOGO</a></div>
            <ul class="links">
                <li><button href="" id='home' onclick='funcHome()'>Home</button></li>
                <li><button href="" id='about' onclick='funcAbout()'>O nas</button></li>
                <li><a href="services">Serwis</a></li>
                <li><a href="contact">Kontakt</a></li>
            </ul>
            <a href="" class="action_btn">Login</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="" id='home' onclick='funcHome()'>Home</a></li>
            <li><a href="" id='about' onclick='funcAbout()'>O nas</a></li>
            <li><a href="services">Serwis</a></li>
            <li><a href="contact">Kontakt</a></li>
            <li><a href="" class="action_btn">Login</a></li>
        </div>
    </header>

    <main>
        <section id='welcome'>
            <h1>Welcome</h1>
            <p>
                Kreatywna Księgowość!
            </p>
        </section>

        <section id='about'>
            <h1>O nas</h1>
            <p>Informacje o nas</p>

        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>