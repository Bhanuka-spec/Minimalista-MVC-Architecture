<?php $this->view("minima/header",$data);?>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Contact Us</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">However, one may seek pleasure through overcoming discomfort, striving for balance and ease without complication or unnecessary strain<br>
              We are dedicated to creating designs that blend sophistication with simplicity, ensuring balance and harmony in every space.</p>
            </div>  
          </header>
          <section class="full-width background-dark">
            <div class="s-12 m-12 l-6">
              <!-- Change the background image -->  
              <div style="background-image: url(<?=ASSETS?>minima/img/img-contact.jpg);" class="contact-image" ></div>
            </div>
            <div class="s-12 m-12 l-6 text-center">
              <div class="padding-2x">
                <i class="icon-sli-location-pin text-white text-size-30 center"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Company Address</h2>                
                <p>No. 99</p>
                <p>Colombo 07</p>
                <p>Sri Lanka</p>
                <i class="icon-sli-envelope text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">E-mail</h2>                
                <a class="text-primary-hover" href="mailto:contact@sampledomain.com">minimalista@sampledomain.com</a><br>
                <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a>
                <i class="icon-sli-earphones-alt text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Phone Numbers</h2>                
                <p>+94 112 456 788</p>
                <p>+94 112 456 789</p>
                <p>+94 112 456 790</p>
              </div>
            </div>
          </section>
          
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Contact Us</h4>
              <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text">
                      <p class="email-error form-error">Please enter your e-mail.</p>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name" placeholder="Your name" title="Your name" type="text">
                      <p class="name-error form-error">Please enter your name.</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text">
                  <p class="subject-error form-error">Please enter the subject.</p>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
              </form>
            </div>           
          </section> 
        </article>
      </main>
      
     <?php $this->view("minima/footer",$data);?>