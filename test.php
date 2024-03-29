<?php /* Template Name: WA-1 */ ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="http://expertey.in/wp-content/uploads/2019/wisdom/css/font-awesome.min.css"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="http://expertey.in/wp-content/uploads/2019/wisdom/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="http://expertey.in/wp-content/uploads/2019/wisdom/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="http://expertey.in/wp-content/uploads/2019/wisdom/css/owl.theme.default.min.css"
    />

    <!-- <link rel="stylesheet" href="dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="dist/assets/owl.theme.default.min.css" /> -->

    <title>Hello, world!</title>

    <style>
      .testimonial-pair-left {
        font-weight: bold;
      }
      .testimonial-quote {
        text-align: center;
        font-style: italic;
        padding: 1rem;
      }
      @media screen and (min-width: 0px) and (max-width: 767px) {
        #section-image {
          display: none;
        }

        /* show it on small screens */
      }

      /*  footer */
      .section {
        display: block;
        padding-top: 100px;
        padding-bottom: 100px;
        background-color: rgb(255, 255, 255);
      }

      .section.footer {
        padding-top: 70px;
        padding-bottom: 40px;
        background-color: #0c0e1a;
        /*--rgb(20, 19, 28); */
      }

      .footer-div {
        display: flex;
        width: 40%;
        margin-right: auto;
        margin-left: auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
      }

      a {
        background-color: transparent;
      }

      a:active,
      a:hover {
        outline: 0px;
      }

      .w-inline-block {
        max-width: 100%;
        display: inline-block;
      }

      a {
        color: rgb(187, 19, 51);
        text-decoration: none;
      }

      .footer-icon {
        height: auto;
      }

      .footer-icon.w--current {
        margin-right: 20px;
      }

      img {
        border: 0px;
        max-width: 100%;
        vertical-align: middle;
        display: inline-block;
      }

      .footer-list {
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
      }

      .footer-header {
        margin-bottom: 10px;
        padding-top: 4px;
        padding-bottom: 4px;
        font-family: Lato, sans-serif;
        color: rgb(172, 178, 204);
        font-size: 18px;
        line-height: 20px;
        font-weight: 400;
        letter-spacing: 0.3px;
        text-transform: none;
      }

      .footer-header:active {
        opacity: 0.8;
      }

      .footer-link {
        padding-top: 4px;
        padding-bottom: 4px;
        font-family: Lato, sans-serif;
        color: rgb(112, 116, 134);
        font-size: 14px;
        line-height: 20px;
        font-weight: 700;
        letter-spacing: 0.3px;
        text-decoration: none;
        text-transform: none;
      }

      .footer-link:hover {
        color: rgb(162, 173, 190);
      }

      .footer-link:active {
        opacity: 0.8;
      }

      .body-copy {
        /* width: 100%; */
        margin-top: 14px;
        font-family: Lato, sans-serif;
        color: rgb(56, 54, 81);
        font-size: 17px;
        line-height: 30px;
        font-weight: 400;
      }

      .body-copy.footnote {
        margin-top: 40px;
        color: rgb(85, 89, 109);
        font-size: 14px;
        text-align: center;
      }

      @media (max-width: 767px) {
        .section {
          padding-top: 80px;
          padding-bottom: 80px;
        }
      }

      @media (max-width: 479px) {
        .section {
          padding-top: 60px;
          padding-bottom: 60px;
        }
      }

      @media (max-width: 991px) {
        .footer-div {
          width: 60%;
          -webkit-box-orient: horizontal;
          -webkit-box-direction: normal;
          flex-direction: row;
          -webkit-box-pack: justify;
          justify-content: space-between;
          -webkit-box-align: stretch;
          align-items: stretch;
        }
      }

      @media (max-width: 479px) {
        .footer-div {
          width: 80%;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          flex-direction: column;
          -webkit-box-align: center;
          align-items: center;
        }
      }

      @media (max-width: 991px) {
        .footer-icon {
          margin-top: 6px;
        }
      }

      @media (max-width: 479px) {
        .footer-list {
          margin-top: 40px;
          -webkit-box-align: center;
          align-items: center;
        }
      }

      @media (max-width: 991px) {
        .footer-header {
          display: block;
          transition: background-color 400ms ease 0s, opacity 400ms ease 0s,
            color 400ms ease 0s;
          text-align: left;
        }
      }

      @media (max-width: 991px) {
        .footer-link {
          display: block;
          transition: background-color 400ms ease 0s, opacity 400ms ease 0s,
            color 400ms ease 0s;
        }
      }

      @media (max-width: 479px) {
        .footer-list {
          margin-top: 40px;
          -webkit-box-align: center;
          align-items: center;
        }
      }

      @media (max-width: 991px) {
        .footer-header {
          display: block;
          transition: background-color 400ms ease 0s, opacity 400ms ease 0s,
            color 400ms ease 0s;
          text-align: left;
        }
      }

      @media (max-width: 767px) {
        .body-copy {
          /* width: 100%; */
        }
      }

      @media (max-width: 479px) {
        .body-copy {
          line-height: 28px;
        }
      }

      @media (max-width: 479px) {
        .body-copy.footnote {
          padding-right: 10px;
          padding-left: 10px;
          line-height: 20px;
        }
      }

      /* footer end */

      /* section 4 */
      .button {
        margin-right: 40px;
        margin-left: 40px;
        padding: 12px 25px;
        border-radius: 0px;
        background-color: #0e4eca;
        transition: background-color 400ms ease 0s, opacity 400ms ease 0s;
        color: rgb(255, 255, 255);
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 0.5px;
        text-decoration: none;
        text-transform: none;
      }

      .button.no-padding {
        margin-top: 40px;
        margin-right: auto;
        margin-left: auto;
        -webkit-transition: background-color 400ms ease, opacity 400ms ease;
        transition: background-color 400ms ease, opacity 400ms ease;
        font-family: Lato, sans-serif;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 0px;
      }

      .feature-text.white {
        color: #fff;
      }

      .feature-text.center {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
      }

      .feature-text {
        width: 40%;
        font-family: Lato, sans-serif;
        color: #383651;
        font-size: 50px;
        line-height: 56px;
        font-weight: 700;
        text-align: left;
        letter-spacing: -0.5px;
      }

      @media (max-width: 479px) {
        .feature-text {
          color: #fff;
          font-size: 40px;
          line-height: 48px;
          text-align: center;
        }
      }

      .img-container {
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 40% 0;
        overflow-y: hidden;
      }

      .inner-container {
        text-align: center;
        position: relative;
        width: 100%;
        top: 30%;
      }

      a:hover {
        color: #6a7d91;
        text-decoration: underline;
      }

      /* zoom start */

      .zoom {
        transition: transform 0.2s;
        /* Animation */
      }

      .zoom:hover {
        transform: scale(1.2);
      }

      /* zoom end */

      .text-center {
        text-align: center;
      }

      .text-left {
        text-align: left;
      }

      .wrapper {
        width: 1170px;
        margin: 0 auto;
        font-family: poppins;
      }

      .section-padding {
        padding: 60px 0;
      }

      .testimonial-carausel {
        margin: 5% auto 0;
      }

      .img-area {
        width: 60px;
        height: 60px;
        display: block;
        /* overflow: hidden; */
        border-radius: 50%;
        margin: 0 auto;
      }

      .img-area img {
        /* width: 50%; */
      }

      .single-testi {
        text-align: center;
        /* border-radius: 50px 0 50px 0; */
      }

      .img-text h2 {
        text-transform: uppercase;
        margin: 20px 0 -15px;
        color: #ff5257;
      }

      .owl-dots {
        text-align: center;
        margin-top: -1rem;
      }

      .owl-carousel button.owl-dot {
        display: inline-block;
        height: 11px !important;
        width: 11px !important;
        background-color: #fff;
        opacity: 0.8;
        border-radius: 50%;
        margin: 50px 5px 0;
      }

      .owl-carousel button.owl-dot.active {
        background-color: #c90d0d;
      }

      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .wrapper {
          width: 100%;
        }
      }

      @media only screen and (max-width: 767px) {
        .wrapper {
          width: 100%;
        }
      }

      @media only screen and (min-width: 480px) and (max-width: 761px) {
        .wrapper {
          width: 100%;
        }
      }

      .progress-bar {
        width: 0;
        animation: progress 1.5s ease-in-out forwards;
      }

      .title {
        opacity: 0;
        animation: show 0.35s forwards ease-in-out 0.5s;
      }

      .progress {
        background-color: #888888;
      }

      @keyframes progress {
        from {
          width: 0;
        }

        to {
          width: 100%;
        }
      }

      @keyframes show {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      .content {
        margin-left: 1rem;
      }

      .icon i.fa {
        line-height: 48px !important;
      }

      .icon i {
        color: #fff;
        font-size: 20px;
        width: 48px;
        height: 48px;
        line-height: 48px;
        border-radius: 50%;
        text-align: center;
      }

      .icon i {
        background: #4db2d8;
      }
    </style>
  </head>

  <body>
    <div
      style="z-index: 9997;background: #182c48;position: fixed;top: 0;width: 100%;padding: 4px;display: inline-block;box-shadow: 0 4px 6px #283f6b;"
    ></div>
    <!-- <img
      src="http://ibigcsehometuition.com/wp-content/uploads/2018/04/WisdomAcademy01-1-300x149.png"
      style="position:absolute;top: 20px;left: 15px;width: 155px;padding: 3px; opacity: .6; z-index: 999;"
      scale="0"
    /> -->
    <img
      src="https://www.oltify.com/wp-content/uploads/2019/10/olti-fy.png"
      style="position:absolute;top: 20px;left: 15px;width: 55px;padding: 3px; opacity: .6; z-index: 999;"
      scale="0"
    />

    <div
      class="container-fluid"
      style="  background: #233c6e;
    font-family: poppins;"
    >
      <div class="row">
        <div class="col-lg-12 text-center" style="margin-top: 3rem;">
          <span style="font-size: 2.5rem; color: #fff;"
            >Premier Educational <br />Home Tutors and Group Tuitions<br />
            in Mumbai</span
          >
        </div>
      </div>
      <div class="wrapper">
        <div class="testimonial-carousel section-padding owl-carousel">
          <div class="single-testi">
            <div
              class="img-text"
              style="padding: 8%;background: white; text-align: left;"
            >
              <div class="testimonial-quote">
                The tutors here at Wisdom Academy are extremely helpful and
                friendly; they make sure to clear all our doubts completely.
              </div>
              <div>
                <span class="testimonial-pair-left">School:</span>
                <span>Aditya Birla Academy</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Subjects:</span>
                <span> Accounts, Economics, Computer Science</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Grade:</span>
                <span>A Level</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Result:</span>
                <span
                  >A* in Accounts and Economics and A in Computer Science</span
                >
              </div>
            </div>
            <div
              class=""
              style="width: 100px; margin-left: 2%;
              margin-top: -5%; "
            >
              <div class="img-area">
                <img
                  src="http://expertey.in/wp-content/uploads/2019/wisdom/img/18-47x47.jpg"
                  alt=""
                  width="47"
                  height="47"
                  style="border-radius: 50%;"
                />
              </div>

              <div class="text-left" style="color: white;">
                <div>Rohit Malhotra</div>
              </div>
            </div>
          </div>
          <div class="single-testi">
            <div
              class="img-text"
              style="padding: 8%;background: white; text-align: left;"
            >
              <div class="testimonial-quote">
                The tutors here at Wisdom Academy are extremely helpful and
                friendly; they make sure to clear all our doubts completely.
              </div>
              <div>
                <span class="testimonial-pair-left">School:</span>
                <span> Bombay Cambridge international School</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Subjects:</span>
                <span>Physics, Chemistry, Maths and English</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Grade:</span>
                <span>AS Level</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Result:</span>
                <span
                  >A* in Physic and Maths and A in Chemistry and English</span
                >
              </div>
            </div>
            <div
              class=""
              style="width: 100px; margin-left: 2%;
                margin-top: -5%; "
            >
              <div class="img-area">
                <img
                  src="http://expertey.in/wp-content/uploads/2019/wisdom/img/18-47x47.jpg"
                  alt=""
                  width="47"
                  height="47"
                  style="border-radius: 50%;"
                />
              </div>

              <div class="text-left" style="color: white;">
                <div>Siddharth Rana</div>
              </div>
            </div>
          </div>
          <div class="single-testi">
            <div
              class="img-text"
              style="padding: 8%;background: white; text-align: left;"
            >
              <div class="testimonial-quote">
                The study environment is enthusiastic, increasing our initiative
                to study, with the help of our wonderful teachers. Having joined
                Wisdom Academy Tuition centre 5 months ago before my Exams, I
                experience an immense change in apprehending Accounts and
                mathematical calculations and concepts. Worksheet provided by
                them helped me a lot.
              </div>
              <div>
                <span class="testimonial-pair-left">School:</span>
                <span>Poddar International School</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Subjects:</span>
                <span> Maths and Accounts</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Grade:</span>
                <span>A Level</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Result:</span>
                <span> A* in Maths and A in Accounts</span>
              </div>
            </div>
            <div
              class=""
              style="width: 100px; margin-left: 2%;
                  margin-top: -5%; "
            >
              <div class="img-area">
                <img
                  src="http://expertey.in/wp-content/uploads/2019/wisdom/img/18-47x47.jpg"
                  alt=""
                  width="47"
                  height="47"
                  style="border-radius: 50%;"
                />
              </div>

              <div class="text-left" style="color: white;">
                <div>Susan Fernandes</div>
              </div>
            </div>
          </div>

          <div class="single-testi">
            <div
              class="img-text"
              style="padding: 8%;background: white; text-align: left;"
            >
              <div class="testimonial-quote">
                Thank you Wisdom Academy and Prashant Sir for helping me
                throughout the year.
              </div>
              <div>
                <span class="testimonial-pair-left">School:</span>
                <span>Poddar International School</span>
              </div>

              <div>
                <span class="testimonial-pair-left">Subjects:</span>
                <span>
                  Economics (HL) and Business Management (SL) and English
                  (SL)</span
                >
              </div>
              <div>
                <span class="testimonial-pair-left">Grade:</span>
                <span>12th IB</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Result:</span>
                <span>
                  <br />Economics (HL): 7 score <br />
                  Business Management (SL): 6 Score <br />
                  English (SL): 6 Score</span
                >
              </div>
            </div>
            <div
              class=""
              style="width: 100px; margin-left: 2%;
                    margin-top: -5%; "
            >
              <div class="img-area">
                <img
                  src="http://expertey.in/wp-content/uploads/2019/wisdom/img/18-47x47.jpg"
                  alt=""
                  width="47"
                  height="47"
                  style="border-radius: 50%;"
                />
              </div>

              <div class="text-left" style="color: white;">
                <div>Rihaana Shaikh</div>
              </div>
            </div>
          </div>
          <div class="single-testi">
            <div
              class="img-text"
              style="padding: 8%;background: white; text-align: left;"
            >
              <div class="testimonial-quote">
                The study environment is enthusiastic, increasing our initiative
                to study, with the help of our wonderful teachers. Having joined
                Wisdom Academy Tuition centre 5 months ago before my Exams, I
                experience an immense change in apprehending Accounts and
                mathematical calculations and concepts. Worksheet provided by
                them helped me a lot.
              </div>
              <div>
                <span class="testimonial-pair-left">School:</span>
                <span>Poddar International School</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Subjects:</span>
                <span> Maths and Accounts</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Grade:</span>
                <span>A Level</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Result:</span>
                <span> A* in Maths and A in Accounts</span>
              </div>
            </div>
            <div
              class=""
              style="width: 100px; margin-left: 2%;
                      margin-top: -5%; "
            >
              <div class="img-area">
                <img
                  src="http://expertey.in/wp-content/uploads/2019/wisdom/img/18-47x47.jpg"
                  alt=""
                  width="47"
                  height="47"
                  style="border-radius: 50%;"
                />
              </div>

              <div class="text-left" style="color: white;">
                <div>Susan Fernandes</div>
              </div>
            </div>
          </div>
          <div class="single-testi">
            <div
              class="img-text"
              style="padding: 8%;background: white; text-align: left;"
            >
              <div class="testimonial-quote">
                The study environment is enthusiastic, increasing our initiative
                to study, with the help of our wonderful teachers. Having joined
                Wisdom Academy Tuition centre 5 months ago before my Exams, I
                experience an immense change in apprehending Accounts and
                mathematical calculations and concepts. Worksheet provided by
                them helped me a lot.
              </div>
              <div>
                <span class="testimonial-pair-left">School:</span>
                <span>Poddar International School</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Subjects:</span>
                <span> Maths and Accounts</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Grade:</span>
                <span>A Level</span>
              </div>
              <div>
                <span class="testimonial-pair-left">Result:</span>
                <span> A* in Maths and A in Accounts</span>
              </div>
            </div>
            <div
              class=""
              style="width: 100px; margin-left: 2%;
                        margin-top: -5%; "
            >
              <div class="img-area">
                <img
                  src="http://expertey.in/wp-content/uploads/2019/wisdom/img/18-47x47.jpg"
                  alt=""
                  width="47"
                  height="47"
                  style="border-radius: 50%;"
                />
              </div>

              <div class="text-left" style="color: white;">
                <div>Susan Fernandes</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="padding-top:3em;">
      <div class="row ">
        <div class="col-md-12 text-center" style="margin-bottom: 3rem;">
          <h2>COURSES OFFERED BY US !</h2>
        </div>
      </div>

      <div class="row" style="text-align: center;">
        <div class="col-sm-4 col-md-4 zoom" href="#">
          <a
            href="http://ibigcsehometuition.com/courses/igcse-coaching-classes-home-tutors-in-andheri-borivali-mumbai/"
            target="_self"
          >
            <img
              alt="IGCSE"
              src="img/IGCSE-Course1.png"
              width="200px"
              style=" opacity: 0.8;"
            />
          </a>
          <span>
            <h3
              style="margin-top: 1rem
                  ;"
            >
              IGCSE
            </h3>
            <p>International General Certificate of Secondary Education</p>
            <a
              class="qbutton no_fill"
              href="http://ibigcsehometuition.com/courses/igcse-coaching-classes-home-tutors-in-andheri-borivali-mumbai/"
              target="_self"
              >Know More..</a
            >
          </span>
        </div>

        <div class=" col-sm-4 col-md-4 zoom">
          <a
            href="http://ibigcsehometuition.com/courses/igcse-coaching-classes-home-tutors-in-andheri-borivali-mumbai/"
            target="_self"
            ><img
              alt="IGCSE"
              src="img/IB-Course.png"
              width="200px"
              style=" opacity: 0.8;"
          /></a>

          <span>
            <h3
              style="margin-top: 1rem
                  ;"
            >
              IB
            </h3>
            <p>International Baccalaureate</p>
            <a
              class="qbutton no_fill"
              href="http://ibigcsehometuition.com/courses/international-baccalaureate-coaching-classes-certified-ib-home-tutors-in-mumbai"
              target="_self"
              >Know More..</a
            >
          </span>
        </div>

        <div class="col-sm-4 col-md-4 zoom">
          <a
            href="http://ibigcsehometuition.com/courses/igcse-coaching-classes-home-tutors-in-andheri-borivali-mumbai/"
            target="_self"
            ><img
              alt="A Level Exams"
              src="img/A-Level-Courses.png"
              width="200px"
              style=" opacity: 0.8;"
          /></a>

          <span>
            <h3
              style="margin-top: 1rem
                  ;"
            >
              A Level Exams
            </h3>
            <p>The General Certificate of Education Advanced Level</p>
            <a
              class="qbutton no_fill"
              href="http://ibigcsehometuition.com/courses/alevel/"
              target="_self"
              >Know More..</a
            >
          </span>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div
          class="col-md-12 text-center"
          style="
            
            margin-top: 5rem;
        "
        >
          <h2>Why avail Tuitions from Wisdom Academy?</h2>
        </div>
      </div>

      <div
        class="row"
        style="
        /* padding: 2rem; */
    "
      >
        <div
          class="col-md-8 "
          style="
        padding: 4rem;
    "
        >
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="d-flex">
                <div class="icon"><i class="fa fa-line-chart"></i></div>
                <div class="content">
                  <h3>Modern Courses</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Repellendus, quaerat beatae nulla.
                  </p>
                </div>
              </div>
            </div>
            <div class="bright-feature-item col-md-6 col-sm-12">
              <div class="d-flex">
                <div class="icon"><i class="fa fa-briefcase"></i></div>
                <div class="content">
                  <h3>Guaranteed Career</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Repellendus, quaerat beatae nulla.
                  </p>
                </div>
              </div>
            </div>
            <div class="bright-feature-item col-md-6 col-sm-12">
              <div class="d-flex">
                <div class="icon"><i class="fa fa-money"></i></div>
                <div class="content">
                  <h3>Affordable Costs</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Repellendus, quaerat beatae nulla.
                  </p>
                </div>
              </div>
            </div>
            <div class="bright-feature-item col-md-6 col-sm-12">
              <div class="d-flex">
                <div class="icon"><i class="fa fa-trophy"></i></div>
                <div class="content">
                  <h3>High-profile Faculties</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Repellendus, quaerat beatae nulla.
                  </p>
                </div>
              </div>
            </div>
            <div class="bright-feature-item col-md-6 col-sm-12">
              <div class="d-flex">
                <div class="icon"><i class="fa fa-magic"></i></div>
                <div class="content">
                  <h3>Research Programs</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Repellendus, quaerat beatae nulla.
                  </p>
                </div>
              </div>
            </div>
            <div class="bright-feature-item col-md-6 col-sm-12">
              <div class="d-flex">
                <div class="icon"><i class="fa fa-film"></i></div>
                <div class="content">
                  <h3>Cultural Events</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Repellendus, quaerat beatae nulla.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="section-image" class="col-md-4">
          <img
            width="392"
            height="600"
            src="img/why.png"
            class="vc_single_image-img attachment-full"
            alt=""
          />
        </div>
      </div>
    </div>
    <div
      class="container"
      style="
    margin-top: 4rem;
    padding-top: 4rem;
    clear: both;
    margin-bottom: 4rem;
    background-color: #f6f6f6;
    color: #494E56;
"
    >
      <div class="row ">
        <div class="col-md-12 text-center">
          <h2>OUR ACHIEVEMENTS</h2>
          <p>
            We have achieved a lot with the help of our students and aim to
            achieve more.
          </p>
        </div>
      </div>
      <div class="row">
        <div
          class="col-xs-offset-1 col-xs-6 col-sm-6 col-md-6 col-lg-6"
          style="padding: 4rem;"
        >
          <div>International Baccalaureate</div>
          <div class="progress">
            <div
              class="progress-bar"
              role="progressbar"
              aria-valuenow="60"
              aria-valuemin="0"
              aria-valuemax="100"
              style="max-width: 98%"
            >
              <span class="title">98%</span>
            </div>
          </div>
          <div
            style="
    margin-top: 1rem;
"
          >
            International General Certificate of Secondary Education
          </div>
          <div class="progress">
            <!-- <div></div> -->
            <div
              class="progress-bar"
              role="progressbar"
              aria-valuenow="60"
              aria-valuemin="0"
              aria-valuemax="100"
              style="max-width: 93%"
            >
              <span class="title">93%</span>
            </div>
          </div>
          <div
            style="
    margin-top: 1rem;
"
          >
            General Certificate of Education Advanced Level
          </div>
          <div class="progress">
            <div
              class="progress-bar"
              role="progressbar"
              aria-valuenow="60"
              aria-valuemin="0"
              aria-valuemax="100"
              style="max-width: 87%"
            >
              <span class="title">87%</span>
            </div>
          </div>
        </div>
        <div
          class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 fh5co-counters text-center "
          style="padding: 3rem;"
        >
          <div style="font-size: 3rem;">
            554
          </div>
          <span class="fh5co-counter-label" style="color: black;"
            >OUR STUDENTS</span
          >
          <div>Count of students who have come out with flying colours</div>
        </div>
      </div>
    </div>

    <div
      class="img-container"
      style="background-image: url(https://www.oltify.com/wp-content/uploads/2019/11/ptrn.jpg);height: 500px;"
    >
      <div class="inner-container">
        <p class="feature-text center white">
          Tell us your specific Tuition Requirement
        </p>
        <a href="/" class="button no-padding w-inline-block">
          <div class="bold-text">Request Personalised..</div>
        </a>
      </div>
    </div>

    <!-- footer-start-->
    <div class="section footer">
      <div class="footer-div">
        <a href="/" class="footer-icon w-inline-block w--current"
          ><img
            src="http://ibigcsehometuition.com/wp-content/uploads/2019/11/go-up.jpg"
            width="46"
            alt=""
        /></a>
        <div class="footer-list">
          <div class="footer-header">Wisdom Academy</div>
          <a href="/about" class="footer-link w-inline-block">
            <div>About</div> </a
          ><a href="/careers" class="footer-link w-inline-block">
            <div>Courses</div> </a
          ><a href="/the-commons" class="footer-link w-inline-block">
            <div>IB</div> </a
          ><a href="/mentor-program" class="footer-link w-inline-block">
            <div>IGCSE</div> </a
          ><a href="/privacy-policy" class="footer-link w-inline-block">
            <div>Testimonials</div> </a
          ><a href="/faq" class="footer-link w-inline-block"> <div>FAQ</div> </a
          ><a href="/contact" class="footer-link w-inline-block">
            <div>Contact Us</div>
          </a>
        </div>
        <div class="footer-list">
          <div class="footer-header">Follow us on</div>
          <a href="/" target="_blank" class="footer-link w-inline-block">
            <div>Facebook</div> </a
          ><a href="/" target="_blank" class="footer-link w-inline-block">
            <div>Instagram</div>
          </a>
          <a href="/" target="_blank" class="footer-link w-inline-block">
            <div>LinkedIn</div> </a
          ><a
            href="https://github.com/LambdaSchool"
            target="_blank"
            class="footer-link w-inline-block"
          >
            <div>Twitter</div>
          </a>
        </div>
      </div>
      <div class="body-copy footnote">
        Copyright © 2019 Wisdom Academy - All rights reserved
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- <script src="dist/owl.carousel.min.js"></script> -->
    <script>
      $(".testimonial-carousel").owlCarousel({
        loop: true,
        margin: 20,
        autoplay: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          }
        }
      });
    </script>
  </body>
</html>
