
  @include ('layouts/fontend/head')

<body>

  @include ('layouts/fontend/header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Nok's Cooked to Order  <span>Restaurant Website</span></h1>
          <h2>เว็บไซต์ร้านนกอาหารตามสั่ง</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=FkdjLZVIWhY" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('admin/assetsfont/img/menu/bread-barrel.jpeg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ประโยชน์ของอาหารตามสั่ง</h3>

            <p class="fst-italic">
              อาหารแต่ละชนิด นอกจากมีสารอาหารที่ให้ประโยชน์ต่อร่างกาย แล้วยังมีน้ำอยู่ด้วย น้ำเป็นสิ่งสำคัญและมีประโยชน์ต่อร่างกาย ร่างกาย 
              ขาดน้ำไม่ได้ เพราะน้ำช่วยนำอาหารไปเลี้ยงส่วนต่าง ๆ ของร่างกาย และช่วยควบคุมระบบการทำงานของร่างกายให้เป็นปกติ เช่น ระบบ             
                การย่อยอาหาร การหมุนเวียนของโลหิต การขับถ่ายของเสียออกจากร่างกาย  นอกจากนี้น้ำยังช่วยควบคุมอุณหภูมิของร่างกายให้เป็นปกติ และทำให้ผิวพรรณสดชื่นด้วย

            </p>
            <p>
              each food In addition to the nutrients that are beneficial to the body. And there is still water. 
              Water is important and beneficial to the body. The body cannot be dehydrated because water helps to carry food to different 
              parts of the body and helps regulate the normal functioning of the body, such as the digestive system, blood circulation. 
              excretion of waste from the body In addition, water helps to normalize body temperature. and make your skin fresh.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>เมนูอาหาร</h2>
          <p>ร้านนกอาหารตามสั่ง</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active"></li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($product as $products)
          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('admin/images/'.$products->image)}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">{{$products->name}}</a><span>{{$products->price}}-.</span>
            </div>
            
          </div>

        </div>
        @endforeach

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ประโยชน์</h2>
          <p>เมนูยอดนิยม</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">ไข่ข้นชีส</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">ต้มยำกุ้ง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">ไข่เจียวหอมใหญ่</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">ไก่ผัดขิง</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>ไข่ข้นชีส</h3>
                    <p class="fst-italic">ช่วยลดไขมันคอเลสเตอรอล และความดันโลหิต ซึ่งเป็นปัจจัยเสี่ยงต่อโรคหัวใจและโรคอัมพาต
                      ลดระดับไตรกลีเซอไรด์ในเลือด ที่ทำให้ลดความเสี่ยงต่อภาวะหัวใจขาดเลือด
                      ช่วยสร้างภูมิคุ้มกันให้แก่ร่างกาย โดยเฉพาะคนที่เป็นภูมิแพ้
                      ช่วยบำรุงสายตา ทำให้การมองเห็นดีขึ้น
                      บำรุงสมอง ช่วยในเรื่องของความจำ ทำให้มีความจำที่ดี และลดภาวะความจำเสื่อม
                      ช่วยทำให้อาการอักเสบของกระดูกและข้อดีขึ้น
                      ทำให้ผิวเปล่งปลั่ง ดูสุขภาพดี
                      มีประโยชน์ต่อสตรีมีครรภ์ สำหรับเด็กที่อยู่ในครรภ์มารดาอย่างยิ่ง จะช่วยพัฒนาระบบประสาท สายตาและสมองของเด็ก</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('admin/assetsfont/img/specials-1.jpeg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>ต้มยำกุ้ง</h3>
                    <p class="fst-italic">ต้มยำกุ้ง เป็นอาหารที่อุดมด้วย แร่ธาตุ โปรตีน และคาร์โบไฮเดรต มีไขมันน้อย กุ้งเป็นเนื้อสัตว์ที่มีโคเลสเตอรอลชนิดที่ดี มีประโยชน์ต่อร่างกาย สามารถช่วยลดความเสี่ยงต่อการเกิดโรคหัวใจได้อีกด้วย รวมทั้งมีธาตุสังกะสีและซีลีเนียมในปริมาณสูง ช่วยเสริมสร้างภูมิคุ้มกัน เพิ่มความต้านทานต่อการติดเชื้อ เครื่องสมุนไพรต้มยำ เช่น ข่า ตะไคร้ ใบมะกรูดมีสรรพคุณแก้ท้องอืด แก้ไอ แก้ช้ำใน ขับลมในลำไส้ แก้คลื่นเหียน แก้จุกเสียด ได้ดี</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('admin/assetsfont/img/specials-3.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>ไข่เจียวหอมใหญ่</h3>
                    <p class="fst-italic">“หอมหัวใหญ่” ผักใกล้ตัวที่คนไทยใช้ประกอบอาหารหลากหลายเมนู ทั้งต้ม ผัด ทอด และยำ 
                      ซึ่งนอกจากจะเพิ่มกลิ่นและรสชาติให้อาหารจานนั้นๆ แล้วยังให้ประโยชน์ต่อร่างกายหลายอย่างที่คุณอาจไม่เคยรู้มาก่อน
                       อาทิ บำรุงผิวพรรณ มีสารต้านมะเร็ง บำรุงกระดูกให้แข็งแรง เป็นต้น</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('admin/assetsfont/img/specials-4.jpeg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>ไก่ผัดขิง</h3>
                    <p class="fst-italic">ขิง เป็นพืชสมุนไพรที่ประกอบไปด้วยสารอาหารต่างๆ มากมาย เช่น วิตามินA วิตามินB วิตามินC โปรตีน แคลเซียม ฟอสฟอรัส โพแทสเซียม 
                      ธาตุเหล็กและแมกนีเซียม โดยส่วนที่นำมาใช้ประโยชน์คือเหง้าแก่และเหง้าอ่อน รวมถึงแกนลำต้นอ่อนและใบ
                    </p>
                   
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('admin/assetsfont/img/specials-5.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    

    

    

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
         
          <p>ผู้จัดทำ</p>
        </div>
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{asset('admin/assetsfont/img/chefs/chefs-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>นางสาวณัฐญาดา นกยูงทอง</h4>
                </div>
                <div class="social">
                  <a href="https://web.facebook.com/natyada.nokyoungtong"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/kawa_masaki/"><i class="bi bi-instagram"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('admin/assetsfont/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>นางสาวพรณภา โพธิ์พันธิ์</h4>
                </div>
                <div class="social">
                  <a href="https://web.facebook.com/profile.php?id=100011342921913"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/phonnpha__/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('admin/assetsfont/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>นางสาวปภาพินท์ หลวงอินทร์</h4>
                </div>
                <div class="social">
                  <a href="https://web.facebook.com/profile.php?id=100013802001097"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/chocolate_xsxa/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      
      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
     
      </div>

      <div class="container" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d559.493690332452!2d100.49718567065939!3d13.833157701284645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b4b355f7b19%3A0x71454df12a9ab271!2z4Liq4Liw4Lie4Liy4LiZ4Lie4Lij4Liw4Lij4Liy4LihIDU!5e0!3m2!1sth!2sth!4v1629390907986!5m2!1sth!2sth" width="1400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>7/67 ต.สวนใหญ่ อ.เมือง จ.นนทบุรี 11000</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Friday:<br>
                  08:00 - 16:00 
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>krathikrathi@.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0657232647</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

   
    @include ('layouts/fontend/footer')
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/assetsfont/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/assetsfont/js/main.js')}}"></script>

</body>

</html>