<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampon ni Aries</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <script>
        window.onload = function userfunction() {
            let number = Math.floor(Math.random() * 4); // Generates a random number between 0 and 3
            let name = "Bini Maoy"; // Initialize the variable `name`
            if (number === 1) {
                name = "Bini log";
            } else if (number === 2) {
                name = "Bini Lad";
            } else if (number === 3) {
                name = "Bini Malou";
            }
            let person = prompt("Please enter your name lodicakes", name);
            if (person != null) {
                document.getElementById("moreinfo").innerHTML =
                "Greetings, " + person + " We’re the Group 5, a team of six extraordinary web developers, each a master in their field, dedicated to pushing the boundaries of digital creation. From crafting pixel-perfect designs to engineering robust systems, our collective expertise transforms visions into interactive realities.";
                document.getElementById("intro").innerHTML = "Sup, " + person + "! Meet Out Team";
            }
        }
        function moreinfofunction() {
            document.getElementById("moreinfo").innerHTML = "Naghintay kaba wala na, it's a prank";
            document.getElementById('cong').src='images/its a prank.jfif';
            document.getElementById('cong').style.height = "85px";
            document.getElementById('cong').style.width = "150px";
        }
    </script>
</head>
<body>
    <section id="team-section" class="team-section">
        <h1 id="intro">Meet Our Team</h1>
        <div class="team-container">
            <div class="team-member">
                <img src="images/marcelino.gif" alt="Marcelino">
                <h3>Geminaries Marcelino</h3>
                <p>Project Manager</p>
                <!-- <a href="marcelino-page.html">View Profile</a> -->
                <a href="#marcelino-profile">View Profile</a>
            </div>
            <div class="team-member">
                <img src="images/cedeno.jpg" alt="Cedeno">
                <h3>Mark bryan Cedeno</h3>
                <p>Lead Developer</p>
                <!-- <a href="cedeno-page.html">View Profile</a> -->
                <a href="#cedeno-profile">View Profile</a>
            </div>
            <div class="team-member">
                <img src="images/rivas.jpg" alt="Rivas">
                <h3>Jose Emmanuel Rivas</h3>
                <p>System Analyst</p>
                <!-- <a href="rivas-page.html">View Profile</a> -->
                <a href="#rivas-profile">View Profile</a>
            </div>
            <div class="team-member">
                <img src="images/bunyi.jpg" alt="Bunyi">
                <h3>John Michael Bunyi</h3>
                <p>Web Designer</p>
                <!-- <a href="bunyi-page.html">View Profile</a> -->
                <a href="#bunyi-profile">View Profile</a>
            </div>
            <div class="team-member">
                <img src="images/falcon.jpg" alt="Falcon">
                <h3>Frederick Falcon</h3>
                <p>UI/UX Designer</p>
                <!-- <a href="falcon-page.html">View Profile</a> -->
                <a href="#falcon-profile">View Profile</a>
            </div>
            <div class="team-member">
                <img src="images/alfaro.jpg" alt="Alfaro">
                <h3>Edwil Mark Alfaro</h3>
                <p>Database Developer</p>
                <!-- <a href="alfaro-page.html">View Profile</a> -->
                <a href="#alfaro-profile">View Profile</a>
            </div>
        </div>
        <div class="team-intro">
                <h1>Meet the Powerhouse of Web Innovation: Group 5</h1>
                <p id="moreinfo">
                    We’re Group 5, a team of six extraordinary web developers, each a master in their field, dedicated to pushing the boundaries of digital creation. From crafting pixel-perfect designs to engineering robust systems, our collective expertise transforms visions into interactive realities.
                </p>
                <img id="cong" src="images/quotation.jfif">
                <div>
                    <button class="more-info" type="button" onclick="setTimeout(moreinfofunction, 3000)">Click for more team info</button>
                </div>
        </div>
    </section>
    <!-- Profiles Section -->
    <section class="profiles">
        <div id="marcelino-profile" class="profile">
            <div class="profile-header">
                <img src="images/marcelino.gif" alt="Geminaries Marcelino">
                <h2>Geminaries Marcelino</h2>
                <p>Project Manager</p>
            </div>
            <div class="profile-content">
                <p>Bading.</p>
                <p>22 years old</p>
                <p>Rhapsody Residences, Muntinlupa City</p>
                <p>Hobbies: Watching anime and playing guitar</p>
                <a href="mailto:marcelino.gem23@gmail.com" class="icon-button"><img src="images/gmail.jfif"></a>
                <div>
                    <a href="#team-section" class="back-button">Back to Team</a>
                </div>
            </div>
        </div>
        <div id="cedeno-profile" class="profile">
            <div class="profile-header">
                <img src="images/cedeno.jpg" alt="Mark Bryan Cedeno">
                <h2>Mark Bryan Cedeno</h2>
                <p>Lead Developer</p>
            </div>
            <div class="profile-content">
                <p>Daddy Chill.</p>
                <p>24 years old</p>
                <p>Purok 4 Extension Alabang, Muntinlupa City</p>
                <p>Hobbies: Playing games, reading and watching yujitube</p>
                <a href="mailto: cedenomarkbryan04@gmail.com" class="icon-button"><img src="images/gmail.jfif"></a>
                <div>
                    <a href="#team-section" class="back-button">Back to Team</a>
                </div>
            </div>
        </div>
        <div id="rivas-profile" class="profile">
            <div class="profile-header">
                <img src="images/rivas.jpg" alt="Jose Emmanuel Rivas">
                <h2>Jose Emmanuel Rivas</h2>
                <p>System Analyst</p>
            </div>
            <div class="profile-content">
                <p>Sir Hubert 2.0.</p>
                <p>20 years old</p>
                <p>Talon IV, Las piñas City</p>
                <p>Hobbies: Playing guitar, tekken and mukbangers </p>
                <a href="mailto: rivasjoseemmanuel055@gmail.com" class="icon-button"><img src="images/gmail.jfif"></a>
                <div>
                    <a href="#team-section" class="back-button">Back to Team</a>
                </div>
            </div>
        </div>
        <div id="bunyi-profile" class="profile">
            <div class="profile-header">
                <img src="images/bunyi.jpg" alt="John Michael Bunyi">
                <h2>John Michael Bunyi</h2>
                <p>Web Designer</p>
            </div>
            <div class="profile-content">
                <p>Aports ng lahat.</p>
                <p>21 years old</p> 
                <p>3 Cupang, Muntinlupa City</p>
                <p>Hobbies: Playing basketball, riding bike, and foodtrip</p>
                <a href="mailto: johnmichaelbunyi2@gmail.com" class="icon-button"><img src="images/gmail.jfif"></a>
                <div>
                    <a href="#team-section" class="back-button">Back to Team</a>
                </div>
            </div>
        </div>
        <div id="falcon-profile" class="profile">
            <div class="profile-header">
                <img src="images/falcon.jpg" alt="Frederick Falcon">
                <h2>Frederick Falcon</h2>
                <p>UI/UX Designer</p>
            </div>
            <div class="profile-content">
                <p>Altab Master.</p>
                <p>25 years old</p>
                <p>Purok 3 Harmony Ville Cupang, Muntinlupa City</p>
                <p>Hobbies: Watching Viva Mix</p>
                <a href="mailto: frederickfalcon2@gmail.com" class="icon-button"><img src="images/gmail.jfif"></a>
                <div>
                    <a href="#team-section" class="back-button">Back to Team</a>
                </div>
            </div>
        </div>
        <div id="alfaro-profile" class="profile">
            <div class="profile-header">
                <img src="images/alfaro.jpg" alt="Edwil Mark Alfaro">
                <h2>Edwil Mark Alfaro</h2>
                <p>Database Developer</p>
            </div>
            <div class="profile-content">
                <p>Evolution 1.</p>
                <p>22 years old</p>
                <p>BLK 1 Purok 1 Dolleton St. Bayanan Muntinlupa City</p>
                <p>Hobbies: Playing Basketball</p>
                <a href="mailto: alfaroedwil23@gmail.com" class="icon-button"><img src="images/gmail.jfif"></a>
                <div>
                    <a href="#team-section" class="back-button">Back to Team</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>