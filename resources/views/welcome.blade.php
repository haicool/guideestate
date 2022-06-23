<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guide Estate</title>

    <!--Font Awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!--Costum css file-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>

    <!--Header section start-->
    <header>
        <a href="#" class="logo"><span>Guide</span>Estate</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#featured">Featured</a>
            <a href="#properties">Properties</a>
            <a href="#agent">Agent</a>
            <a href="#contact">Contacts</a>
        </nav>
        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    </header>
    <!--Header section end-->

    <!--Home section start-->
    <section class="home" id="home">
        <form action="">
            <h3>Find Your Future Home</h3>

            <div class="buttons-container">
                <a href="#" class="btn">for rent</a>
                <a href="#" class="btn">for sell</a>
            </div>

            <div class="inputBox">
                <input type="search" name="" placeholder="neighborhood" id="">
                <input type="search" name="" placeholder="city" id="">
                <select name="" id="">
                    <option value="" disabled hidden selected>min price</option>
                    <option value="EGP 5000">EGP 5000</option>
                    <option value="EGP 10000">EGP 10000</option>
                    <option value="EGP 15000">EGP 15000</option>
                    <option value="EGP 20000">EGP 20000</option>
                    <option value="EGP 25000">EGP 25000</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>max price</option>
                    <option value="EGP 30000">EGP 30000</option>
                    <option value="EGP 35000">EGP 35000</option>
                    <option value="EGP 40000">EGP 40000</option>
                    <option value="EGP 45000">EGP 45000</option>
                    <option value="EGP 50000">EGP 50000</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>property status</option>
                    <option value="Ready To Move">Ready To Move</option>
                    <option value="Under Construction">Under Construction</option>
                    <option value="Furnished">Furnished</option>
                    <option value="Semi-Furnished">Semi-Furnished</option>
                    <option value="UnFurnished">UnFurnished</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>property type</option>
                    <option value="Apartmint">Apartmint</option>
                    <option value="Duplex">Duplex</option>
                    <option value="Town-House">Town-House</option>
                    <option value="Shop">Shop</option>
                    <option value="Land">Land</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>BHK</option>
                    <option value="1 BHK">1 BHK</option>
                    <option value="2 BHK">2 BHK</option>
                    <option value="3 BHK">3 BHK</option>
                    <option value="4 BHK">4 BHK</option>
                    <option value="5 BHK">5 BHK</option>

                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>Features</option>
                    <option value="Parking Space">Parking Space</option>
                    <option value="Green Space">Green Space</option>
                    <option value="Lake View">Lake View</option>
                    <option value="Swimming Pool">Swimming Pool</option>
                    <option value="Playground">Playground</option>
                    <option value="Security">Security</option>
                    <option value="All">All</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>Bedrooms</option>
                    <option value="1 Bedroom">1 Bedroom</option>
                    <option value="2 Bedroom">2 Bedroom</option>
                    <option value="3 Bedroom">3 Bedroom</option>
                    <option value="4 Bedroom">4 Bedroom</option>
                    <option value="5 Bedroom">5 Bedroom</option>
                </select>

                <select name="" id="">
                    <option value="" disabled hidden selected>Bathrooms</option>
                    <option value="1 Bathroom">1 Bathroom</option>
                    <option value="2 Bathroom">2 Bathroom</option>
                    <option value="3 Bathroom">3 Bathroom</option>
                    <option value="4 Bathroom">4 Bathroom</option>
                    <option value="5 Bathroom">5 Bathroom</option>
                </select>
            </div>

            <input type="submit" value="search property" class="btn">
        </form>
    </section>
    <!--Home section end-->

    <!--Services section start-->
    <section class="services" id="services">
        <h1 class="heading"> our <span>services</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="{{ asset('assets/images/s-1.png') }}" alt="">
                <h3>buying home</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem temporibus commodi nulla. Rem temporibus
                     voluptatum facere amet eius officia iusto, non et.</p>
                     <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/s-2.png') }}" alt="">
                <h3>renting home</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem temporibus commodi nulla. Rem temporibus
                     voluptatum facere amet eius officia iusto, non et.</p>
                     <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="{{ asset('assets/images/s-3.png') }}" alt="">
                <h3>selling home</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem temporibus commodi nulla. Rem temporibus
                     voluptatum facere amet eius officia iusto, non et.</p>
                     <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!--Services section end-->

    <!--Featured section start-->
    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> properties </h1>

        <div class="box-container">

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-1.jpg') }}" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>1</h3></a>
                        <a href="#" class="fas fa-camera"><h3>4</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-2.jpg') }}" alt="">
                    <div class="info">
                        <h3>6 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>2</h3></a>
                        <a href="#" class="fas fa-camera"><h3>7</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-3.jpg') }}" alt="">
                    <div class="info">
                        <h3>1 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>1</h3></a>
                        <a href="#" class="fas fa-camera"><h3>6</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-4.jpg') }}" alt="">
                    <div class="info">
                        <h3>9 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>2</h3></a>
                        <a href="#" class="fas fa-camera"><h3>6</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-5.jpg') }}" alt="">
                    <div class="info">
                        <h3>10 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>3</h3></a>
                        <a href="#" class="fas fa-camera"><h3>8</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-6.jpg') }}" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>1</h3></a>
                        <a href="#" class="fas fa-camera"><h3>4</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-4.jpg') }}" alt="">
                    <div class="info">
                        <h3>9 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>2</h3></a>
                        <a href="#" class="fas fa-camera"><h3>6</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="{{ asset('assets/images/img-4.jpg') }}" alt="">
                    <div class="info">
                        <h3>9 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film"><h3>2</h3></a>
                        <a href="#" class="fas fa-camera"><h3>6</h3></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>5th ELtagamoo, new cairo, cairo - egypt</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!--Featured section end-->

    <!-- agents section starts  -->
    <section class="agents" id="agents">

    <h1 class="heading"> professional <span>agents</span> </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="{{ asset('assets/images/pic-1.png') }}" alt="">
            <h3>tamer ahmed</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="{{ asset('assets/images/pic-2.png') }}" alt="">
            <h3>dina mohamed</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="{{ asset('assets/images/pic-3.png') }}" alt="">
            <h3>ahmed kamel</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="{{ asset('assets/images/pic-4.png') }}" alt="">
            <h3>nancy</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

    </section>
    <!-- agents section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="icons-container">

        <div class="icons">
            <img src="{{ asset('assets/images/icon-1.png') }}" alt="">
            <h3>phone number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

        <div class="icons">
            <img src="{{ asset('assets/images/icon-2.png') }}" alt="">
            <h3>email address</h3>
            <p>guideestate@gmail.com</p>
            <p>guide.info@gmail.com</p>
        </div>

         <div class="icons">
            <img src="{{ asset('assets/images/icon-3.png') }}" alt="">
            <h3>office address</h3>
            <p>5th ELtagamoo, New cairo, Cairo-Egypt</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="number" placeholder="number">
            </div>
            <div class="inputBox">
                <input type="email" placeholder="email">
                <input type="text" placeholder="subject">
            </div>
            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10968.047431502846!2d31.430408727002078!3d30.01624091587261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145822cffcd270e7%3A0x98b73d687889fd8!2sNew%20Cairo%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1653077434300!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>

    </section>
    <!-- contact section ends -->

    <!-- footer section starts  -->
    <section class="footer">

    <div class="footer-container">

        <div class="box-container">

            <div class="box">
                <h3>branch location</h3>
                <a href="#">New cairo</a>
                <a href="#">elmohandssin</a>
                <a href="#">Maadi</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">services</a>
                <a href="#">featured</a>
                <a href="#">properties</a>
                <a href="#">agents</a>
                <a href="#">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my favorite</a>
                <a href="#">my list</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <div class="credit">created by <span> mr. ahmed kamel </span> | all rights reserved! </div>

    </div>

    </section>
    <!-- footer section ends -->






    <!--javascript link-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
