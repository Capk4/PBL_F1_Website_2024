<!DOCTYPE html>
<html lang='en'> <head>
        <title>Take Form</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="stail.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="paw.png">
    </head>
    <body> <main>
            <header>
                <nav class="navbar">
                    <div class="logo"><b>Perfect Pet<br>Finder</b></div>
                    <ul class="nav-links">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="pet.html">Portfolio</a></li>
                        <li><a href="form.html"><b>Take Form</b></a></li> 
                        <li><a href="acc.html"><img src="acclogo.png" id="logoacc"></a></li>
                    </ul>
                </nav>
            </header>

            <div class="Falign">
                <div>
                    <h1 class="Ftitle"><b>Fill Out Our Form Below</b></h1>
                    <p class="Flink"><a href="#form" id="Flink"> Take Your Form </a></p>
                    <p class="Fwhy">Why do I need to fill out this form?<br><br>We need you to fill out this form so that we can give you<br>the perfect pet based on your background or interests.</p>
                </div>
                <div>
                    <img src="https://img.freepik.com/free-photo/two-successful-businessmen-discussing-business_1163-5295.jpg" class="cat-image">
                </div>
            </div>

            <section id="form">
                <h1 align="center"><b>Perfect Pet Finder Form</b></h1>
                
                <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">

                    <label for="living_space">How <b>LARGE</b> is your <b>LIVING SPACE</b>?</label>
                    <span>
                        <input type="radio" class="Fclick" name="living_space" value="Small" required>
                        <p class="F1">Small (Example: Apartment)</p>
                    </span>
                    <span>
                        <input type="radio" class="Fclick" name="living_space" value="Medium" required>
                        <p class="F1">Medium (Example: Bungalow)</p>
                    </span>
                    <span>
                        <input type="radio" class="Fclick" name="living_space" value="Large" required>
                        <p class="F1">Large (Example: Mansion)</p>
                    </span>

                    <label for="activity_level">How <b>ACTIVE</b> do you want <b>YOUR PET</b> to be?</label>
                    <span>
                        <input type="radio" class="Fclick" name="activity_level" value="Low" required>
                        <p class="F2">Low</p>
                    </span>
                    <span>
                        <input type="radio" class="Fclick" name="activity_level" value="Medium" required>
                        <p class="F2">Medium</p>
                    </span>
                    <span>
                        <input type="radio" class="Fclick" name="activity_level" value="High" required>
                        <p class="F2">High</p>
                    </span>

                    <label for="allergies">Do <b>YOU</b> have <b>PET ALLERGIES</b>?</label>
                    <span>
                        <input type="radio" class="Fclick" name="allergies" value="Yes" required>
                        <p class="F3">Yes</p>
                    </span>
                    <span>
                        <input type="radio" class="Fclick" name="allergies" value="No" required>
                        <p class="F3">No</p>
                    </span>

                    <button type="submit"><b>Submit</b></button>
                </form>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2024 Muhd Asyraf & Ahmad Muhsin. All Rights Reserved.</p>
        </footer>
    </body>
</html>
