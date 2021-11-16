<!DOCTYPE html>
<html lang = "en">
	<head>
        <title>Portfolio</title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<meta http-equiv="Cache-control" content="public">
		<link rel = "shortcut icon" href = "design/icon/favicon.ico" type = "image/x-icon">
        <link rel = "stylesheet" type = "text/css" href = "design/index.css" />
        <!--<link rel = "stylesheet" type = "text/css" href = "design/index.min.css" />-->
        <script src = "https://kit.fontawesome.com/8b6b1fa9e8.js" crossorigin="anonymous"></script>
        <script src = "src/jquery-3.5.1.min.js"></script>
        <script src = "src/jquery-ui.min.js"></script>
        <script src = "src/index.js"></script>
    </head>
    <body>
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div class = "navbar">
            <button onclick = "goTo('home');"><i class="fa-solid fa-house"></i> Home</button>
            <button onclick = "goTo('about');"><i class="fa-solid fa-circle-info"></i> About</button>
            <button><i class="fa-solid fa-folder-open"></i> Projects</button>
            <button><i class="fa-solid fa-address-card"></i> Contact</button>
        </div>
        <div class = "home" id = "home">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h3>Hi!</h3>
            <h1>I'm Roland</h1>
            <h2>Junior Web Developer</h2>
            <button><i class="fa-brands fa-twitter"></i></button>
            <button><i class="fa-brands fa-facebook"></i></button>
            <button><i class="fa-brands fa-google"></i></button>
            <button><i class="fa-brands fa-skype"></i></button>
            <button><i class="fa-solid fa-phone"></i></button>
        </div>
        <div class = "about" id = "about">
            <div class = "left">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An IT Graduate with exceptional strengths in handling stressful situations and has great critical problem solving ability. I also love developing small web applications to test my current skills in web development. I've already done a simple game that you can see in my portfolio.</p>
            </div>
            <div class = "right">
                <h2>Skills</h2>
                <table>
                    <tbody>
                        <tr>
                            <td><i class="fa-brands fa-html5"></i> HTML</td>
                            <td><i class="fa-brands fa-css3"></i> CSS</td>
                        </tr>
                        <tr>
                            <td><i class="fa-brands fa-js"></i></i> Javascript</td>
                            <td><i class="fa-brands fa-php"></i> PHP</td>
                        </tr>
                        <tr>
                            <td><i class="fa-brands fa-java"></i> Java</td>
                            <td><i class="fa-brands fa-python"></i> Python</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>