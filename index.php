<!DOCTYPE html>
<html lang = "en">
	<head>
        <title>Portfolio</title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<meta http-equiv="Cache-control" content="public">
		<link rel = "shortcut icon" href = "design/icon/favicon.ico" type = "image/x-icon">
        <!--<link rel = "stylesheet" type = "text/css" href = "design/index.css" />-->
        <link rel = "stylesheet" type = "text/css" href = "design/index.min.css" />
        <script src = "https://kit.fontawesome.com/8b6b1fa9e8.js" crossorigin="anonymous"></script>
        <script src = "src/jquery-3.5.1.min.js"></script>
        <script src = "src/jquery-ui.min.js"></script>
        <!--<script src = "src/index.js"></script>-->
        <script src = "src/index.min.js"></script>
    </head>
    <body>
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div class = "navbar">
            <button onclick = "goTo('home');"><i class="fa-solid fa-house"></i> Home</button>
            <button onclick = "goTo('about');"><i class="fa-solid fa-circle-info"></i> About</button>
            <button onclick = "goTo('project');"><i class="fa-solid fa-folder-open"></i> Projects</button>
            <button onclick = "goTo('contact');"><i class="fa-solid fa-address-card"></i> Contact</button>
        </div>
        <div class = "icon">
            <mark>Too</mark>
            <img src = "design/icon/black-in-white-512.png" />
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
            <button onclick = "goTo('twitter');"><i class="fa-brands fa-twitter"></i></button>
            <button onclick = "goTo('facebook');"><i class="fa-brands fa-facebook"></i></button>
            <button onclick = "goTo('contact');"><i class="fa-brands fa-google"></i></button>
            <button onclick = "goTo('contact');"><i class="fa-brands fa-skype"></i></button>
            <button onclick = "goTo('contact');"><i class="fa-solid fa-phone"></i></button>
        </div>
        <div class = "about" id = "about">
            <div class = "left">
                <br>
                <br>
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
        <div class = "project" id = "project">
            <br>
            <br>
            <br>
            <h1>Projects</h1>
            <div id = "click_titans" onmouseenter = "showDescription(this);" onmouseleave = "hideDescription(this);" class = "project-item">
                <div id = "click_titans-show" class = "project-show">
                    <div class = "project-icon c-red"><i class="fa-solid fa-gamepad"></i></div>
                    <div class = "project-title">Click Titans</div>
                </div>
                <div id = "click_titans-hidden" class = "project-hidden">
                    <div class = "project-description"><p>A simple clicking game resembles tap titans made using HTML, Native Js, JQuery and PHP.</p></div>
                    <div class = "project-button"><button onclick = "goTo('clicktitans');">Visit</button></div>
                </div>
            </div>
            <div id = "portal" onmouseenter = "showDescription(this);" onmouseleave = "hideDescription(this);" class = "project-item">
                <div id = "portal-show" class = "project-show">
                    <div class = "project-icon c-yellow"><i class="fa-solid fa-address-card"></i></div>
                    <div class = "project-title">GradePortal</div>
                </div>
                <div id = "portal-hidden" class = "project-hidden">
                    <div class = "project-description"><p>A Grading Portal App for Elementary and High School in St. Mark’s College.</p></div>
                    <div class = "project-button"><button onclick = "goTo('gradeportal');">Visit</button></div>
                </div>
            </div>
            <div id = "pos" onmouseenter = "showDescription(this);" onmouseleave = "hideDescription(this);" class = "project-item">
                <div id = "pos-show" class = "project-show">
                    <div class = "project-icon c-blue"><i class="fa-solid fa-receipt"></i></div>
                    <div class = "project-title">Onepos</div>
                </div>
                <div id = "pos-hidden" class = "project-hidden">
                    <div class = "project-description"><p>A POS app made using HTML, Native Js, JQuery and PHP.</p></div>
                    <div class = "project-button"><button onclick = "goTo('pos');">Visit</button></div>
                </div>
            </div>
        </div>
        <div class = "contact" id = "contact">
            <br>
            <br>
            <br>
            <h1>Contact Info</h1>
            <table>
                <tbody>
                    <tr>
                        <td><i class="fa-brands fa-twitter"></i></td>
                        <td>@TooOneFor</td>
                        <td><button onclick = "goTo('twitter');">Visit</button></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>Roland Christian Too Regacho</td>
                        <td><button onclick = "goTo('facebook');">Visit</button></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-google"></i></td>
                        <td id = "email">regacho800@gmail.com</td>
                        <td><button onclick = "copyElement('email');">Copy</button></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-skype"></i></td>
                        <td id = "skype">live:.cid.8691244394ae269b</td>
                        <td><button onclick = "copyElement('skype');">Copy</button></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-phone"></i></td>
                        <td id = "phone">+639215382233</td>
                        <td><button onclick = "copyElement('phone');">Copy</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>