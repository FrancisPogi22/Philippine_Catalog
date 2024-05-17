<?php

include '../Backend/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/theme.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <title>FunPinas</title>
</head>

<body>
  <section id="header">
    <div class="wrapper">
      <div class="header-con">
        <a href="homepage.html" class="logo"><img src="../assets/img/Logo.png" alt="Logo" /></a>
        <ul class="navbar">
          <li>
            <a href="homepage">Home</a>
          </li>
          <li>
            <a href="about">About Us</a>
          </li>
          <li>
            <a href="heritage.html">Heritage</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
        <button id="mobileBtn"></button>
      </div>
    </div>
  </section>
  <section id="banner">
    <div class="wrapper">
      <div class="banner-con">
        <div class="banner-img-con">
          <img src="../assets/img/Banner_Image.png" alt="Logo" />
        </div>
        <div class="banner-details" data-aos="fade-right" data-aos-duration="2000">
          <h1>Welcome to the <span>Philippine</span> Heritage Showcase</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="#about-philippines" class="btn-primary">Explore More</a>
        </div>
      </div>
    </div>
  </section>
  <section id="about-philippines">
    <div class="wrapper">
      <div class="about-philippines-con">
        <img data-aos="fade-left" class="planting" src="../assets/img/Planting.png" alt="Image" />
        <img data-aos="fade-left" class="jeep" src="../assets/img/Jeep.png" alt="Image" />
        <h2 data-aos="fade-right">About <span>Philippines</span></h2>
        <div class="about-philippines-content">
          <div class="about-philippines-content-img">
            <img data-aos="fade-up" src="../assets/img/About_Philippines_1.png" alt="Image" />
            <img data-aos="fade-up" src="../assets/img/About_Philippines_2.png" alt="Image" />
            <img data-aos="fade-up" src="../assets/img/About_Philippines_3.png" alt="Image" />
          </div>
          <div class="about-philippines-content-description">
            <h3 data-aos="fade-down">
              Have <span>unforgettable</span> experiences
            </h3>
            <p data-aos="fade-up">
              Welcome to a place where every adventure is filled with smiles,
              laughter, and lots of love! Step into the Philippines and
              experience a warm embrace that's as genuine as the smiles that
              greet you. People here are really welcoming, making you feel
              like you belong. It's all about 'bayanihan,' a spirit of unity
              that brings people together, locals and visitors alike. You'll
              see many amazing places, and you can join colorful parties
              during celebrations of our cultural festivals everywhere.
              <br /><br />
              Welcome to a place where every adventure is filled with smiles,
              laughter, and lots of love!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="visual-tour">
    <div class="wrapper">
      <div class="visual-tour-con">
        <img data-aos="fade-right" data-aos-duration="500" class="farmer" src="../assets/img/Farmer.png" alt="Image" />
        <div class="visual-tour-content" data-aos="fade-right">
          <h2>The <span>Filipinos'</span> signature welcome</h2>
          <p>
            Take a visual tour of the Philippines with our collection of
            videos. Enjoy the rhythmic beats of traditional events and
            festivals, immerse yourself in the beauty of our tourist spots,
            and discover the stories of national heroes who shaped our
            nation's history. Explore the vibrant heritage of the Filipino
            people and let the adventure unfold before your eyes.
          </p>
        </div>
        <div class="visual-tour-video" data-aos="fade-left">
          <video src="../assets/video/Filipino Signature.mp4" controls></video>
        </div>
      </div>
    </div>
  </section>
  <section id="gallery">
    <div class="wrapper">
      <div class="gallery-con">
        <img data-aos="fade-left" class="monkey" src="../assets/img/Monkey.png" alt="Image" />
        <div class="gallery-header-con">
          <h2 data-aos="fade-right">Our <span>Gallery</span></h2>
          <ul class="gallery-navbar">
            <li class="active">
              <a href="" data-id="all">All</a>
            </li>
            <li>
              <a href="" data-id="tourist">Tourist Spots</a>
            </li>
            <li>
              <a href="" data-id="festival">Festival</a>
            </li>
            <li>
              <a href="" data-id="heroes">National Heroes</a>
            </li>
          </ul>
        </div>
        <div class="gallery-grid-con active" id="all">
          <div class="a" data-aos="fade-up" data-aos-duration="1000">
            <div class="image-con">
              <h4>Intramuros</h4>
              <img src="../assets/img/All_2.png" alt="Image" />
            </div>
          </div>
          <div class="b">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Siargao</h4>
              <img src="../assets/img/All_3.png" alt="Image" />
            </div>
          </div>
          <div class="c">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Banaue Rice Terraces</h4>
              <img src="../assets/img/All_4.png" alt="Image" />
            </div>
          </div>
          <div class="d">
            <div class="image-con" data-aos="fade-up" data-aos-duration="500">
              <h4>Chocolate Hills</h4>
              <img src="../assets/img/All_1.png" alt="Image" />
            </div>
          </div>
          <div class="e">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Ati-atihan Festival</h4>
              <img src="../assets/img/All_5.png" alt="Image" />
            </div>
          </div>
          <div class="f">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Jose Rizal</h4>
              <img src="../assets/img/All_6.png" alt="Image" />
            </div>
          </div>
        </div>
        <div class="gallery-grid-con" id="tourist">
          <div class="a" data-aos="fade-up" data-aos-duration="1000">
            <div class="image-con">
              <h4>Siargao</h4>
              <img src="../assets/img/T1.png" alt="Image" />
            </div>
          </div>
          <div class="b">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Siargao</h4>
              <img src="../assets/img/T2.png" alt="Image" />
            </div>
          </div>
          <div class="c">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Banaue Rice Terraces</h4>
              <img src="../assets/img/T3.png" alt="Image" />
            </div>
          </div>
          <div class="d">
            <div class="image-con" data-aos="fade-up" data-aos-duration="500">
              <h4>Banaue Rice Terraces</h4>
              <img src="../assets/img/T4.png" alt="Image" />
            </div>
          </div>
          <div class="e">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Intramuros</h4>
              <img src="../assets/img/T5.png" alt="Image" />
            </div>
          </div>
          <div class="f">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Chocolate Hills</h4>
              <img src="../assets/img/T6.png" alt="Image" />
            </div>
          </div>
        </div>
        <div class="gallery-grid-con" id="festival">
          <div class="a" data-aos="fade-up" data-aos-duration="1000">
            <div class="image-con">
              <h4>Sinulog Festival</h4>
              <img src="../assets/img/F1.png" alt="Image" />
            </div>
          </div>
          <div class="b">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Ati-atihan Festival</h4>
              <img src="../assets/img/F2.png" alt="Image" />
            </div>
          </div>
          <div class="c">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Pahiyas Festival</h4>
              <img src="../assets/img/F3.png" alt="Image" />
            </div>
          </div>
          <div class="d">
            <div class="image-con" data-aos="fade-up" data-aos-duration="500">
              <h4>Masskara Festival</h4>
              <img src="../assets/img/F4.png" alt="Image" />
            </div>
          </div>
          <div class="e">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Dinagyang Festival</h4>
              <img src="../assets/img/F5.png" alt="Image" />
            </div>
          </div>
          <div class="f">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Ati-atihan Festival</h4>
              <img src="../assets/img/F6.png" alt="Image" />
            </div>
          </div>
        </div>
        <div class="gallery-grid-con" id="heroes">
          <div class="a" data-aos="fade-up" data-aos-duration="1000">
            <div class="image-con">
              <h4>Apolinario Mabini</h4>
              <img src="../assets/img/H1.png" alt="Image" />
            </div>
          </div>
          <div class="b">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Juan Luna</h4>
              <img src="../assets/img/H2.png" alt="Image" />
            </div>
          </div>
          <div class="c">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Marcelo H. Delpilar</h4>
              <img src="../assets/img/H3.png" alt="Image" />
            </div>
          </div>
          <div class="d">
            <div class="image-con" data-aos="fade-up" data-aos-duration="500">
              <h4>Andres Bonifacio</h4>
              <img src="../assets/img/H4.png" alt="Image" />
            </div>
          </div>
          <div class="e">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1000">
              <h4>Jose Rizal</h4>
              <img src="../assets/img/H5.png" alt="Image" />
            </div>
          </div>
          <div class="f">
            <div class="image-con" data-aos="fade-up" data-aos-duration="1500">
              <h4>Emilio Aguinaldo</h4>
              <img src="../assets/img/H6.png" alt="Image" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="team">
    <div class="wrapper">
      <div class="team-con">
        <h2 data-aos="fade-left">
          Meet the <span>Faces Behind</span> FunPinas
        </h2>
        <div class="our-team">
          <div class="our-team-widget" data-aos="flip-left">
            <div class="team-image">
              <img src="../assets/img/ARAGONES.JPG" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Aragones</h4>
              <p><span>Web Designer</span> 1 year of experience</p>
            </div>
          </div>
          <div class="our-team-widget" data-aos="flip-left">
            <div class="team-image">
              <img src="../assets/img/BRYNCH.jpg" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Baño</h4>
              <p><span>Web Developer</span> 1 year of experience</p>
            </div>
          </div>
          <div class="our-team-widget" data-aos="flip-left">
            <div class="team-image">
              <img src="../assets/img/CABUSAS.JPG" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Cabusas</h4>
              <p><span>Web Developer</span> 1 year of experience</p>
            </div>
          </div>
          <div class="our-team-widget" data-aos="flip-right">
            <div class="team-image">
              <img src="../assets/img/DELA ROSA.JPG" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Dela Rosa</h4>
              <p><span>Graphic Designer</span> 1 year of experience</p>
            </div>
          </div>
          <div class="our-team-widget" data-aos="flip-right">
            <div class="team-image">
              <img src="../assets/img/FORNIS.JPG" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Fornis</h4>
              <p><span>Video Editor</span> 1 year of experience</p>
            </div>
          </div>
          <div class="our-team-widget" data-aos="flip-right">
            <div class="team-image">
              <img src="../assets/img/LIM.JPG" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Lim</h4>
              <p><span>Web Designer</span> 1 year of experience</p>
            </div>
          </div>
          <div class="our-team-widget" data-aos="flip-left">
            <div class="team-image">
              <img src="../assets/img/MARTINEZ.JPG" alt="Image" />
            </div>
            <div class="widget-details">
              <h4>Martinez</h4>
              <p><span>Content Creator</span> 1 year of experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="faqs">
    <div class="wrapper">
      <div class="faqs-con">
        <img data-aos="fade-up-left" class="bird" src="../assets/img/Bird.png" alt="Image" />
        <h2 data-aos="fade-up">Frequently Asked <span>Questions</span></h2>
        <div class="faqs-list-con">
          <div class="faqs-widget" data-aos="fade-up">
            <div class="faqs-header">
              <p>
                1. How do I get to famous tourist spots in the Philippines?
              </p>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.14203 1.27592C1.07316 1.20445 1.01928 1.12035 0.983461 1.02841C0.947643 0.936469 0.930591 0.83849 0.93328 0.740068C0.935969 0.641645 0.958346 0.544706 0.999133 0.454785C1.03992 0.364865 1.09832 0.283724 1.17099 0.215996C1.24367 0.148267 1.3292 0.0952771 1.4227 0.0600515C1.5162 0.0248258 1.61584 0.00805405 1.71593 0.0106941C1.81602 0.0133341 1.9146 0.0353341 2.00604 0.0754379C2.09748 0.115542 2.17999 0.172964 2.24886 0.244426L8.73776 6.98113C8.87176 7.12011 8.94658 7.30426 8.94686 7.49578C8.94713 7.6873 8.87285 7.87166 8.73924 8.01103L2.26983 14.7671C2.20162 14.8404 2.11929 14.8995 2.02763 14.9412C1.93598 14.9829 1.83681 15.0062 1.7359 15.0099C1.63498 15.0136 1.53433 14.9975 1.4398 14.9626C1.34526 14.9277 1.25872 14.8747 1.1852 14.8066C1.11168 14.7385 1.05265 14.6568 1.01153 14.5661C0.97042 14.4754 0.948042 14.3776 0.9457 14.2783C0.943358 14.179 0.961099 14.0803 0.997892 13.9878C1.03469 13.8953 1.0898 13.8109 1.16003 13.7396L7.13624 7.49839L1.14203 1.27592Z" fill="white" />
              </svg>
            </div>
            <div class="faqs-details">
              <p>
                You can travel by plane, boat, or bus to reach different
                destinations in the Philippines. Many tourist spots have
                nearby airports or ports, and you can also hire local guides
                to help you navigate.
              </p>
            </div>
          </div>
          <div class="faqs-widget" data-aos="fade-up">
            <div class="faqs-header">
              <p>2. What traditional Filipino foods should I try?</p>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.14203 1.27592C1.07316 1.20445 1.01928 1.12035 0.983461 1.02841C0.947643 0.936469 0.930591 0.83849 0.93328 0.740068C0.935969 0.641645 0.958346 0.544706 0.999133 0.454785C1.03992 0.364865 1.09832 0.283724 1.17099 0.215996C1.24367 0.148267 1.3292 0.0952771 1.4227 0.0600515C1.5162 0.0248258 1.61584 0.00805405 1.71593 0.0106941C1.81602 0.0133341 1.9146 0.0353341 2.00604 0.0754379C2.09748 0.115542 2.17999 0.172964 2.24886 0.244426L8.73776 6.98113C8.87176 7.12011 8.94658 7.30426 8.94686 7.49578C8.94713 7.6873 8.87285 7.87166 8.73924 8.01103L2.26983 14.7671C2.20162 14.8404 2.11929 14.8995 2.02763 14.9412C1.93598 14.9829 1.83681 15.0062 1.7359 15.0099C1.63498 15.0136 1.53433 14.9975 1.4398 14.9626C1.34526 14.9277 1.25872 14.8747 1.1852 14.8066C1.11168 14.7385 1.05265 14.6568 1.01153 14.5661C0.97042 14.4754 0.948042 14.3776 0.9457 14.2783C0.943358 14.179 0.961099 14.0803 0.997892 13.9878C1.03469 13.8953 1.0898 13.8109 1.16003 13.7396L7.13624 7.49839L1.14203 1.27592Z" fill="white" />
              </svg>
            </div>
            <div class="faqs-details">
              <p>
                Some must-try Filipino dishes include adobo (chicken or pork
                stewed in vinegar and soy sauce), sinigang (sour soup with
                meat and vegetables), and lechon (roast pig). Don't forget to
                sample local desserts like halo-halo (mixed shaved ice with
                fruits and sweets) and bibingka (rice cake) for a taste of
                Filipino sweetness!
              </p>
            </div>
          </div>
          <div class="faqs-widget" data-aos="fade-up">
            <div class="faqs-header">
              <p>3. When is the best time to visit the Philippines?</p>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.14203 1.27592C1.07316 1.20445 1.01928 1.12035 0.983461 1.02841C0.947643 0.936469 0.930591 0.83849 0.93328 0.740068C0.935969 0.641645 0.958346 0.544706 0.999133 0.454785C1.03992 0.364865 1.09832 0.283724 1.17099 0.215996C1.24367 0.148267 1.3292 0.0952771 1.4227 0.0600515C1.5162 0.0248258 1.61584 0.00805405 1.71593 0.0106941C1.81602 0.0133341 1.9146 0.0353341 2.00604 0.0754379C2.09748 0.115542 2.17999 0.172964 2.24886 0.244426L8.73776 6.98113C8.87176 7.12011 8.94658 7.30426 8.94686 7.49578C8.94713 7.6873 8.87285 7.87166 8.73924 8.01103L2.26983 14.7671C2.20162 14.8404 2.11929 14.8995 2.02763 14.9412C1.93598 14.9829 1.83681 15.0062 1.7359 15.0099C1.63498 15.0136 1.53433 14.9975 1.4398 14.9626C1.34526 14.9277 1.25872 14.8747 1.1852 14.8066C1.11168 14.7385 1.05265 14.6568 1.01153 14.5661C0.97042 14.4754 0.948042 14.3776 0.9457 14.2783C0.943358 14.179 0.961099 14.0803 0.997892 13.9878C1.03469 13.8953 1.0898 13.8109 1.16003 13.7396L7.13624 7.49839L1.14203 1.27592Z" fill="white" />
              </svg>
            </div>
            <div class="faqs-details">
              <p>
                The Philippines has two main seasons: wet (June to November)
                and dry (December to May). The dry season is generally the
                best time to visit for sunny weather, but festivals and events
                happen year-round, so there's always something exciting to
                experience!
              </p>
            </div>
          </div>
          <div class="faqs-widget" data-aos="fade-up">
            <div class="faqs-header">
              <p>4. When is the best time to visit the Philippines?</p>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.14203 1.27592C1.07316 1.20445 1.01928 1.12035 0.983461 1.02841C0.947643 0.936469 0.930591 0.83849 0.93328 0.740068C0.935969 0.641645 0.958346 0.544706 0.999133 0.454785C1.03992 0.364865 1.09832 0.283724 1.17099 0.215996C1.24367 0.148267 1.3292 0.0952771 1.4227 0.0600515C1.5162 0.0248258 1.61584 0.00805405 1.71593 0.0106941C1.81602 0.0133341 1.9146 0.0353341 2.00604 0.0754379C2.09748 0.115542 2.17999 0.172964 2.24886 0.244426L8.73776 6.98113C8.87176 7.12011 8.94658 7.30426 8.94686 7.49578C8.94713 7.6873 8.87285 7.87166 8.73924 8.01103L2.26983 14.7671C2.20162 14.8404 2.11929 14.8995 2.02763 14.9412C1.93598 14.9829 1.83681 15.0062 1.7359 15.0099C1.63498 15.0136 1.53433 14.9975 1.4398 14.9626C1.34526 14.9277 1.25872 14.8747 1.1852 14.8066C1.11168 14.7385 1.05265 14.6568 1.01153 14.5661C0.97042 14.4754 0.948042 14.3776 0.9457 14.2783C0.943358 14.179 0.961099 14.0803 0.997892 13.9878C1.03469 13.8953 1.0898 13.8109 1.16003 13.7396L7.13624 7.49839L1.14203 1.27592Z" fill="white" />
              </svg>
            </div>
            <div class="faqs-details">
              <p>
                Filipinos are known for their hospitality and respect for
                guests. It's customary to greet others with a smile and a
                polite "po" or "opo" (yes) when speaking to elders. Removing
                your shoes before entering someone's home and avoiding public
                displays of affection are also considered polite gestures.
              </p>
            </div>
          </div>
          <div class="faqs-widget" data-aos="fade-up">
            <div class="faqs-header">
              <p>
                5. What are the best activities to do in the Philippines
                besides beach hopping?
              </p>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.14203 1.27592C1.07316 1.20445 1.01928 1.12035 0.983461 1.02841C0.947643 0.936469 0.930591 0.83849 0.93328 0.740068C0.935969 0.641645 0.958346 0.544706 0.999133 0.454785C1.03992 0.364865 1.09832 0.283724 1.17099 0.215996C1.24367 0.148267 1.3292 0.0952771 1.4227 0.0600515C1.5162 0.0248258 1.61584 0.00805405 1.71593 0.0106941C1.81602 0.0133341 1.9146 0.0353341 2.00604 0.0754379C2.09748 0.115542 2.17999 0.172964 2.24886 0.244426L8.73776 6.98113C8.87176 7.12011 8.94658 7.30426 8.94686 7.49578C8.94713 7.6873 8.87285 7.87166 8.73924 8.01103L2.26983 14.7671C2.20162 14.8404 2.11929 14.8995 2.02763 14.9412C1.93598 14.9829 1.83681 15.0062 1.7359 15.0099C1.63498 15.0136 1.53433 14.9975 1.4398 14.9626C1.34526 14.9277 1.25872 14.8747 1.1852 14.8066C1.11168 14.7385 1.05265 14.6568 1.01153 14.5661C0.97042 14.4754 0.948042 14.3776 0.9457 14.2783C0.943358 14.179 0.961099 14.0803 0.997892 13.9878C1.03469 13.8953 1.0898 13.8109 1.16003 13.7396L7.13624 7.49839L1.14203 1.27592Z" fill="white" />
              </svg>
            </div>
            <div class="faqs-details">
              <p>
                Aside from beach hopping, you can explore stunning rice
                terraces in Banaue, dive or snorkel in Apo Reef and Tubbataha
                Reef, hike Mount Mayon or Mount Pinatubo for breathtaking
                views, attend traditional festivals, visit historical sites
                like Fort Santiago, or enjoy street food adventures in local
                markets.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="wrapper">
      <div class="contact-con">
        <div class="contact-details">
          <h2 data-aos="fade-up"><span>Contact</span> Us</h2>
          <p data-aos="fade-up">
            We'd love to hear from you! Whether you have questions, feedback,
            or need assistance with our Fun Pinas, our team is here to help.
          </p>
          <div class="contact-links-con">
            <a href="" class="links-con" data-aos="fade-up" data-aos-duration="300">
              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="23" cy="23" r="23" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.49 23.0845V36.0565C19.49 36.2405 19.6386 36.3962 19.8297 36.3962H24.6491C24.8331 36.3962 24.9888 36.2476 24.9888 36.0565V22.8722H28.4848C28.6617 22.8722 28.8032 22.7378 28.8244 22.5609L29.1571 18.5907C29.1712 18.3925 29.0155 18.2227 28.8174 18.2227H24.9888V15.4061C24.9888 14.7479 25.5266 14.2101 26.1848 14.2101H28.874C29.058 14.2101 29.2137 14.0615 29.2137 13.8704V9.90024C29.2137 9.71624 29.0651 9.56055 28.874 9.56055H24.3235C21.6555 9.56055 19.49 11.7261 19.49 14.3941V18.2227H17.0838C16.8998 18.2227 16.7441 18.3713 16.7441 18.5624V22.5325C16.7441 22.7165 16.8928 22.8722 17.0838 22.8722H19.49V23.0845Z" fill="#1E4072" />
              </svg>
              <p>facebook.com/FunPinas</p>
            </a>
            <a href="" class="links-con" data-aos="fade-up" data-aos-duration="300">
              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="23" cy="23" r="23" fill="white" />
                <path d="M31.7669 16.3304C31.7669 17.1692 31.0905 17.8456 30.2516 17.8456C29.4128 17.8456 28.7363 17.1624 28.7363 16.3304C28.7363 15.4983 29.4196 14.8151 30.2516 14.8151C31.0837 14.8151 31.7669 15.4983 31.7669 16.3304ZM29.8796 23.1356C29.8796 26.6533 27.0181 29.5148 23.5005 29.5148C19.9828 29.5148 17.1213 26.6533 17.1213 23.1356C17.1213 19.618 19.9828 16.7565 23.5005 16.7565C27.0181 16.7565 29.8796 19.618 29.8796 23.1356ZM27.5863 23.1356C27.5863 20.883 25.7531 19.0498 23.5005 19.0498C21.2478 19.0498 19.4146 20.883 19.4146 23.1356C19.4146 25.3883 21.2478 27.2215 23.5005 27.2215C25.7531 27.2215 27.5863 25.3883 27.5863 23.1356ZM36.4075 18.0148C36.4075 13.7192 32.9237 10.2354 28.6281 10.2354H18.0143C13.7187 10.2354 10.2349 13.7192 10.2349 18.0148V28.6286C10.2349 32.9242 13.7187 36.408 18.0143 36.408H28.6281C32.9237 36.408 36.4075 32.9242 36.4075 28.6286V18.0148ZM33.8505 28.5136C33.8505 31.463 31.4557 33.8577 28.5063 33.8577H18.1225C15.1731 33.8577 12.7784 31.463 12.7784 28.5136V18.1298C12.7784 15.1804 15.1731 12.7856 18.1225 12.7856H28.5063C31.4557 12.7856 33.8505 15.1804 33.8505 18.1298V28.5136Z" fill="#1E4072" />
              </svg>
              <p>instagram.com/FunPinas</p>
            </a>
            <a href="" class="links-con" data-aos="fade-up" data-aos-duration="300">
              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle cx="23" cy="23" r="23" fill="white" />
                <rect x="10" y="10" width="26" height="26" fill="url(#pattern0_168_48)" />
                <defs>
                  <pattern id="pattern0_168_48" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_168_48" transform="scale(0.01)" />
                  </pattern>
                  <image id="image0_168_48" width="100" height="100" xlink:href="data:image/png;base64,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" />
                </defs>
              </svg>
              <p>funpinas@gmail.com</p>
            </a>
            <a href="" class="links-con" data-aos="fade-up" data-aos-duration="300">
              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle cx="23" cy="23" r="23" fill="white" />
                <rect x="10" y="10" width="26" height="26" fill="url(#pattern0_168_51)" />
                <defs>
                  <pattern id="pattern0_168_51" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_168_51" transform="scale(0.01)" />
                  </pattern>
                  <image id="image0_168_51" width="100" height="100" xlink:href="data:image/png;base64,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" />
                </defs>
              </svg>
              <p>Cabuyao City, Laguna</p>
            </a>
          </div>
        </div>
        <form id="concernForm" class="contact-form" data-aos="fade-left">
          <div class="field-con">
            <label for="name">Full Name*</label>
            <input type="text" name="name" placeholder="Enter your full name" required />
          </div>
          <div class="double-field-con">
            <div class="field-con">
              <label for="email">Email*</label>
              <input type="text" name="email" placeholder="Enter your email" required />
            </div>
            <div class="field-con">
              <label for="phone">Phone*</label>
              <input type="text" name="phone" placeholder="Enter your phone" required />
            </div>
          </div>
          <div class="field-con">
            <label for="message">Message*</label>
            <textarea name="message" placeholder="Type your message here..." required></textarea>
          </div>
          <button type="submit" id="submitBtn" class="btn-primary">Send</button>
        </form>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../assets/js/script.js"></script>
  <script>
    const swiper = new Swiper(".swiper", {
      direction: "horizontal",
      loop: true,
      slidesPerView: 3,
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>