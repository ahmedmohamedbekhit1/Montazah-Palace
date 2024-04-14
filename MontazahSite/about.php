<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Montaza Palace</title>
    <link rel="stylesheet" href="CSS/style_form_ui.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="overlay" class="custom-overlay">
        <div id="dialog" class="custom-dialog"></div>
    </div>
    <?php include('header.php');?>

    <section>
        <div class="Topbar">
            <div class="textbar">
                <span>About Us</span><br>
                <span><u>Home - About Us </u></span>
            </div>
        </div>

    </section>

    <main>
        <section>
            <div class="section-content">
                <div class="section-text">
                    <h4>About Us</h4>
                    <h2>About El Montaza Palace</h2>
                    <p>Welcome to El Montaza Palace!</p>
                    <h2>Our Heritage</h2>
                    <p>El Montaza Palace stands as a testament to Egypt's rich cultural and historical legacy. Nestled
                        along the stunning Mediterranean coastline, our palace embodies a blend of majestic architecture
                        and lush gardens, creating a serene oasis that captivates visitors from around the world.</p>
                    <h2>A Royal Legacy</h2>
                    <p>Originally commissioned by King Fuad I in the 1930s, El Montaza Palace served as a royal retreat
                        for the Egyptian royal family. Over the years, it has hosted esteemed guests, dignitaries, and
                        witnessed significant historical events, making it a cherished symbol of Egypt's royal history.
                    </p>

                </div>
                <div class="section-image">
                    <img src="img/about.svg" alt="Image 1">
                </div>
            </div>
        </section>

        <section>
            <div class="section-content">
                <div class="section-text">
                    <h2>Our Vision</h2>
                    <p>At El Montaza Palace, we are dedicated to preserving our heritage while offering a unique and
                        unforgettable experience to our guests. Whether you're exploring the opulent interiors,
                        strolling through the sprawling gardens, or enjoying panoramic views of the Mediterranean Sea,
                        every moment at El Montaza Palace is filled with beauty and history.</p>
                    <h2>Experience Luxury and History</h2>
                    <p>Immerse yourself in the grandeur of the past while indulging in modern luxury at El Montaza
                        Palace. Our meticulously curated spaces, exceptional services, and attention to detail ensure
                        that your stay with us is nothing short of extraordinary</p>
                    <h2>Visit Us</h2>
                    <p>We invite you to experience the magic of El Montaza Palace firsthand. Explore our royal chambers,
                        wander through the enchanting gardens, and discover the allure of a bygone era brought to life.
                    </p>
                </div>
                <div class="section-image">
                    <img src="img/vsion.svg" alt="Image 2">
                </div>
            </div>
        </section>
        <section>
            <div class="section-content">
                <div class="section-text">
                    <h4>Our Team</h4>
                    <h2>Ahmed Mohamed Bekhit</h2>
                    <p>Passionate Cybersecurity student at National Alex University, focused on becoming a skilled
                        Frontend engineer. Proficient in Java and experienced in building software projects using Java,
                        Java OOP, and Java Swing. Additionally, I have beginner-level knowledge in Python, C, and C++.
                        Currently expanding my skills in cybersecurity and working towards securing digital assets.
                        Seeking opportunities to contribute to open-source projects and collaborate with like-minded
                        professionals. Always exploring new ways to enhance security and efficiency in software
                        development. Let's connect and build something secure together! </p>
                </div>
                <div class="section-image2">
                    <img src="img/My-profile.jpg" alt="Image 3">
                </div>
            </div>
        </section>
        <section>
            <div class="section-content">
                <div class="section-text">
                    <h2>Contact Us</h2>
                    <p>Ready to plan your visit or have inquiries about our services? Please don't hesitate to [contact
                        us/link to contact page]. Our team is here to assist you and make your experience at El Montaza
                        Palace truly memorable.</p>
                    <p>Thank you for choosing El Montaza Palace. We look forward to welcoming you to a world of timeless
                        elegance and charm.</p>
                    <div class="sub">

                        <input placeholder="Enter your email" id="SubscribeEmail" class="input" name="email"
                            type="email">
                        <button class="button" onclick="subscribing()">Subscribe</button>
                        <script>
                            function subscribing() {
                                let SubEmail = document.getElementById('SubscribeEmail').value;
                                if (SubEmail == '') {
                                    alert("Please enter a valid e-mail address");
                                } else {
                                    alert("Thank you for subcribing to our newsletter " + SubEmail);
                                }
                            }

                        </script>

                    </div>
                    
                </div>

                <div class="section-image">
                    <img src="img/contact.svg" alt="Image 3">
                    
                </div>


            </div>
        </section>

    </main>

    <?php include('footer.php');?>
</body>

</html>