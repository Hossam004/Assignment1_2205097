<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library of Alexandria</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body onload="showSlides()">
    <header>
    
    
    
    <?php if (isset($user)): ?>
        
        <p class="user"> <img src="./photos/logo.webp" alt="Library of Alexandria"  height="30" width="30" > </img> <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php" class="button1">Log out</a></p>
    
        <?php else: ?>

        <div>
            <a href="login.php" class="button1" >Log in</a> 
            <a href="signup.html" class="button2">sign up</a>
        </div>
         
        <?php endif; ?>

        <h1>Welcome to the Library of Alexandria</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="resources.html">Additional Resources</a></li>
            </ul>
        </nav>
         
        
        
        <div class="language-selector">
        <label for="Language">Language:</label>

        <select name="Language" id="Language" >
          <option value="English">English</option>
          <option value="Arabic">Arabic</option>
        </select>
        </div>  

        
        


    </header>
     
     
    <script>
        document.getElementById('Language').addEventListener('change', function() {
            var selectedLanguage = this.value;
            if (selectedLanguage === 'Arabic') {
                window.location.href = 'index_arabic.php'; 
            }
        });
    </script>



    <main>
        <section>
            <h2>About the Library</h2>
            <ul>
            
            <div>    
            <li><strong>Introduction</strong></li>
            <p>
            The New Library of Alexandria, or the General Authority of the Library of Alexandria, is a revival of the Old Library of Alexandria, the largest library of its time, in a huge project carried out by Egypt in partnership with the United Nations, where the library was built again in a location close to the old library in the Shatby area of the city. The modern library was opened on October 16, 2002 with an international presence. The library is affiliated with the President of the Republic.   
            </p>             
            <br>
            <hr/>
            </div>
            
            <br>
             
            <div>
            <li><strong> History </strong></li>
            <p>
                Bibliotheca Alexandrina, research institution in Alexandria, Egypt, that took its inspiration from the Library of Alexandria of Classical times.

                The idea of reviving the ancient library was first proposed in 1972 by Mostafa El-Abbadi, a professor at Alexandria University. The Egyptian government decided to sponsor the project, and it received international publicity and support through UNESCO. A site was selected adjacent to Alexandria University and near the location of the ancient library.
                
                Construction of the $200 million structure was completed in 2001, and the library’s design drew worldwide praise. Essentially, the library is a massive cylinder emerging from the ground at a shallow angle only about 130 feet (40 metres) from the Mediterranean Sea. The disk-shaped roof suggests the sun rising over the Mediterranean, and the roof pattern of aluminum and glass panels resembles a microchip. One outer wall of the structure is made up of some 6,400 granite panels bearing characters from all the known alphabets.   
            </p>
            <img src="./photos/Alexandria-Library-Egypt-Tours-Portal.jpg" alt="Library of Alexandria"  height="400" width="700" class="photo1"> </img>
            <br>
            <hr/>
            </div>
             
            <br>

            <div>    
            <li><strong> Books </strong></li>
            <p>
            The library has a large collection of books estimated at 2 million books (citation needed) at the beginning of 2013 selected in Arabic, English and French, as well as a selection of books in other European languages such as German, Italian, Spanish and other rare languages such as Creole, Haitian and Zulu. The current collection includes sources from donors from All over the world on various topics.   
            </p>             
            <br>
            <li><strong> Internet Archive Center </strong></li>
            <br>
            <ol>
            <li>A snapshot of the global information network from 1996 to date (for all sites every two months).</li>
            <li>Over 10 billion pages – more texts than there are in the Library of Congress.</li>
            <li>1000 archived movies.</li>
            <li>2000 hours of Egyptian and American television broadcast.</li>
            <li>100 terabytes of information stored on 200 computers.</li>
            <li>Possibility of scanning local books.</li>   
            </ol>
            <br>
            <img src="./photos/450px-Alexandrina_Library_in_Alexandria,_Egypt._03.jpg" alt="Library of Alexandria"  height="300" width="500" > </img>
            <img src="./photos/BA_planetarium_and_plaza.jpg" alt="Library of Alexandria"  height="300" width="350" > </img>
            <img src="./photos/BA_outer_view.jpg" alt="Library of Alexandria"  height="300" width="500" > </img>
            <br>
            <hr/>
            </div>

            <br>

            <div>    
            <li><strong> Museums </strong></li>
            <p>
            The Library of Alexandria includes four museums:
            <ol>   
            <li>Archaeological Museum </li>
            <li>Museum of Manuscripts and Rare Books </li>
            <li>Sadat Museum </li>
            <li>Museum of the History of Science </li>
            </ol>           
            <br>
            <li><strong>Some pictures inside museums</strong></li>
            <br>
            
            <section>
                <div class="slideshow">
                    <img src="./Photos/202208251411116229_.jpg" alt="Museum"  height="300" width="400" class="photo1">
                </div>
                <div class="slideshow" style="display:none;">
                    <img src="./Photos/2022082515012354545_.jpeg" alt="Museum"  height="300" width="400" class="photo1">
                </div>
                <div class="slideshow" style="display:none;">
                    <img src="./Photos/2022082515075097050_.jpeg" alt="Museum"  height="300" width="400" class="photo1">
                </div>             
                <div class="slideshow" style="display:none;">
                    <img src="./Photos/2164792-مقتنيات-متحف-السادات.webp" alt="Museum"  height="300" width="400" class="photo1">
                </div>
            </section>

            <br>
            for for more pictures click on this <a href="resources.html"> link </a>
             
            </p>

            <hr/>
            </div>

            <br>

            <div>    
            <li><strong>Seven specialized libraries</strong></li>
            <p>
                Audio-visual materials library: The multimedia library includes different types of audio-visual media. The audio-visual materials cover various topics: educational, religious, cultural, political, recording, cinematic, in addition to self-teaching methods for different languages, computer programs and other self-education means in various fields, in addition to recordings of all conferences, musical and artistic concerts and exhibitions that take place in Alexandria Library.
                Library for the Blind (Taha Hussein Library): Taha Hussein Library represents a new concept that opens new horizons for the blind and visually impaired, and enables them to access the resources of the Library of Alexandria as well as Internet resources.
                The primary objectives of this library are to promote national and international cooperation and encourage research and development in this field, enabling the blind and visually impaired to access information, thus trying to bring them into a new era of knowledge and information technology. The library aims to create a new generation of blind and visually impaired people so that they can face the new electronic age and become able to keep up with information technology.
                Children's Library: It is a library intended for children between the ages of 6-12 years. It continues to encourage children to read and research, and it also aims to prepare children for main use in the future with all its services and possibilities.
                Youth Library: It is a specialized library for young people between the ages of 12 to 16 years, and it needs to qualify and train young people to read so that each of them becomes necessary to use all the services available in the main library when they reach the age of 16 years.[1]
                Library of Microfilm Materials: The Microfilm Confirmation Hall opened the opportunity for researchers to confirm a number of different manuscripts and documents, in addition to newspapers issued since the date of their publication, in addition to a group of private books in microfilm form.
                Bloody Books and Special Collections: Course Books Course The collection of books owned by the Library of Alexandria that were printed before 1920, in addition to a number of donated books and copies of rare books and limited editions.
                The manuscript viewing hall also includes a collection of manuscripts owned by the Library of Alexandria, including Arabic, Turkish, and Persian.
                
                Electronic message library: More than seven thousand maps covering all parts of the world, especially Egypt, Arab services, and those overlooking the Mediterranean Sea. The third edition covers different types of reading, such as individualizing cities, world maps, topographic maps, geographical maps, contour maps, road maps and transportation lines, thematic maps, navigational, geographical, and satellite maps. The foundation also includes more than 500 atlases and a number of regional globes.
                One of the most important holdings of the Public Library is an original copy of the collected map that was drafted by the Iraqi Scientific Academy in 1951 AD, of the maps of the book “The Image of the Earth” by Sharif Al-Idrisi, which Al-Idrisi had drawn for King Roger II of Cecilia in 1154 AD. As well as an original copy of a manuscript topographical map of the Arabian Gulf and Mesopotamia dating back to the seventeenth century.
                
                
                The exterior of the library is designed to allow natural sunlight to enter the interior and artificial lighting costs are taken into consideration
                The Listening Library is located on the lower fourth level (B4) in the main library halls.
            </p>             
            <br>
            <hr/>
            </div>

            <br> 

            </ul>
        </section>

        <section>
            <h2>Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.0750291062736!2d31.211077775212747!3d30.034705274928463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847502b58d44b%3A0xc7de9ca732369f3f!2zQmlibGlvdGhlY2EgQWxleGFuZHJpbmEg2YXZg9iq2KjYqSDYp9mE2KXYs9mD2YbYr9ix2YrYqQ!5e0!3m2!1sen!2sus!4v1710625196129!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        
    </main>

    <footer>
    
 
    
    <p>About Us:
           <br>
           Name : Hossam Ahmed Aldesouky Ahmed / ID : 2205097
           <br>
           &copy; copyright 2024  
        </p>
        
        


    </footer>
    
    <script src="script.js"></script>
</body>

</html>
