@extends('new.layout')
@section('content')
<section id="hero">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-xs-12">
            <div class="hero-left" data-aos="fade-up" data-aos-duration="1300">
               <h1>
                  Idaho Roof repair and replacement made easy
               </h1>
               <p>
                  Connect with idaho's most trusted company.
               </p>
               <div class="action-area">
                  <a href="#" class="custom-main-btn userForm">Get an instant estimate</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-xs-12"  data-aos="fade-up" data-aos-duration="1300">
            <div class="hero-right text-center">
               <h4>Find today's best prices on a new roof!</h4>
               <img src="{{ asset('images/pricing-img.png') }}" style="width: 100%; max-width: 480px" data-aos="fade-up" data-aos-duration="1800" data-aos-easing="ease-in-sine" data-aos-offset="-100">
            </div>
         </div>
      </div>
   </div>
</section>
<section id="process">
   <div class="container">
      <div class="row">
         <div class="col text-center">
            <h2>Get your new roof <span>in 3 easy steps</span></h2>
         </div>
      </div>
      <div class="row threeCols">
         <div class="col-md-4" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="300">
            <div class="d-flex justify-content-center wrapper">
               <div class="icon">
                  <img src="{{ asset('images/enter_details.svg') }}" alt="">
               </div>
               <h3>
                  <span class="vivid">
                  Step1</span>
                  <br>
                  Enter Details
               </h3>
               <p>
                  Measure your roof quickly by answering a few simple questions.
               </p>
            </div>
         </div>
         <div class="col-md-4" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="310">
            <div class="d-flex justify-content-center wrapper">
               <div class="icon">
                  <img src="{{ asset('images/get_estimates.svg') }}" alt="">
               </div>
               <h3>
                  <span class="vivid">
                  Step2</span>
                  <br>
                  Get estimates
               </h3>
               <p>
                  Get quotes and options based on our Idaho roof replacement database.
               </p>
            </div>
         </div>
         <div class="col-md-4" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="320">
            <div class="d-flex justify-content-center wrapper">
               <div class="icon">
                  <img src="{{ asset('images/choose_idaho.svg') }}" alt="">
               </div>
               <h3>
                  <span class="vivid">
                  Step3</span>
                  <br>
                  Get Started
               </h3>
               <p>Get detailed estimates from the highest rated Idaho based contractors.</p>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<section id="review">
   <div class="container">
   <div class="row">
   <div class="w-100 text-center">
      <h2>Here's how we've <span>helped</span></h2>
      <p>Idaho homeowners get projects done</p>
   </div>
   <div class="col text-center">
      <blockquote>“It’s not often you come across a true 5-star roofing experience! Idaho Roofing Cost really came through. We received information quickly from experienced local Idaho roofing companies with the best price we could find anywhere.”</blockquote>
   </div>
   <div id="owl-demo-2" class="owl-carousel owl-theme">
   <article class="thumbnail item">
      <div class="wrapper">
      <div class="avatar rounded-circle"  style="background-image: url('images/ICON-01.jpg')"></div>
      <div class="rating">
         <span class="star-rating star-rating--sm">
         <span class="star-rating__stars star-rating__stars--100">
         </span>
         </span>
      </div>
      <div class="comment">
         <p>"The contractors we received estimates from were professional, upfront, honest, and did not pressure us. Out of the three best contractors we narrowed it down a great local Idaho company. We saved thousands and got a lifetime labor warranty as well."</p>
      </div>
      <div class="name">
         <h6>Dennis K</h6>
      </div>
   </article>
   <article class="thumbnail item">
      <div class="wrapper">
      <div class="avatar rounded-circle"  style="background-image: url('images/ICON-01.jpg')"></div>
      <div class="rating">
         <span class="star-rating star-rating--sm">
         <span class="star-rating__stars star-rating__stars--100">
         </span>
         </span>
      </div>
      <div class="comment">
         <p>"Our roof was replaced in a fast but professional way. We chose a local contractor and saved over three thousand dollars in comparison to the big name referrals websites. They also provided and referral for great financing which made transaction fast and easy."</p>
      </div>
      <div class="name">
         <h6>David W</h6>
      </div>
   </article>
   <article class="thumbnail item">
      <div class="wrapper">
         <div class="avatar rounded-circle"  style="background-image: url('images/ICON-01.jpg')"></div>
         <div class="rating">
            <span class="star-rating star-rating--sm">
            <span class="star-rating__stars star-rating__stars--100">
            </span>
            </span>
         </div>
         <div class="comment">
            <p>"I used IRC for a no cost and no pressure inspection. All the contractors were honest and professional. They took their time and gave me the information I needed and didn't charge me anything.  I will highly recommend IRC to anyone."</p>
         </div>
         <div class="name">
            <h6>Casey J</h6>
         </div>
   </article>
   <article class="thumbnail item">
   <div class="wrapper">
   <div class="avatar rounded-circle"  style="background-image: url('images/ICON-01.jpg')">
   </div>
   <div class="rating">
   <span class="star-rating star-rating--sm">
   <span class="star-rating__stars star-rating__stars--100">
   </span>
   </span>
   </div>
   <div class="comment">
   <p>"I am so impressed by this local service. I tried to get other estimates on my own but found myself frustrated, knowing the insurance claim would be a hassle. I learned how the  entire process works from the information I found at IRC. Also, it was reassuring to have a local trustworthy, reputable company to work with."</p>
   </div>
   <div class="name">
   <h6>Ralph B</h6>
   </div>
   </article>
   <article class="thumbnail item">
   <div class="wrapper">
   <div class="avatar rounded-circle"  style="background-image: url('images/ICON-01.jpg')">
   </div>
   <div class="rating">
   <span class="star-rating star-rating--sm">
   <span class="star-rating__stars star-rating__stars--100">
   </span>
   </span>
   </div>
   <div class="comment">
   <p>"We were highly impressed with the companies that gave us estimates. The contractor we chose was polite, professional, and clean cut. Their crew arrived on time and did exceptional work. We would highly recommend IRC and we especially appreciated the no pressure approach."</p>
   </div>
   <div class="name">
   <h6>Wayne P</h6>
   </div>
   </article>
   </div><!-- #owl-demo-2 -->
   </div>
   </div>
</section>
<section id="logos">
   <div class="container">
      <div class="row">
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/top-rated-01.svg') }}" width="115" alt=""></a>
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/super-service-01.svg') }}" loading="lazy" width="115" alt=""></a>
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/screened-approved-01.svg') }}" loading="lazy" width="115" alt=""></a>
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/icons-svg-01.svg') }}" loading="lazy" width="115" alt=""></a>
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/elite-service-01.svg') }}" loading="lazy" width="115" alt=""></a>
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/best-of-2020-01.svg') }}" loading="lazy" width="115" alt=""></a>
         <a href="javascript:void(0)" style="cursor: default;" target="_blank" class="press-link w-inline-block"><img src="{{ asset('images/20-reviews-01.svg') }}" loading="lazy" width="115" alt=""></a>
      </div>
</section>
<section id="services">
<div class="container">
<div class="row">
<div class="col text-center">
<h2>
Local Idaho roofing contractors1 <span>you can trust</span>
</h2>
<p>We help you with valuable information, access to Idaho based highly rated contractors, and our roof replacement cost estimator. We make roof repairs and replacements fast and easy.</p>
</div>
</div>
<div class="row threeCols">
<div class="col-md-4">
<div class="d-flex justify-content-center wrapper">
<div class="icon">
<img src="{{ asset('images/free_estimates.svg') }}" alt="">
</div>
<h3>
<span class="vivid">
Step1</span>
<br>
Free estimates
</h3>
<p>
Select one or more estimates to prepare formal quotes for your specific roofing project.
</p>
</div>
</div>
<div class="col-md-4">
<div class="d-flex justify-content-center wrapper">
<div class="icon">
<img src="{{ asset('images/only_the_best.svg') }}" alt="">
</div>
<h3>
<span class="vivid">
Step2</span>
<br>
Only the best
</h3>
<p>
Compare your detailed quotes and choose the best one for YOU!
</p>
</div>
</div>
<div class="col-md-4">
<div class="d-flex justify-content-center wrapper">
<div class="icon">
<img src="{{ asset('images/free_expert_consultation.svg') }}" alt="">
</div>
<h3>
<span class="vivid">
Step3</span>
<br>
Free expert consultations
</h3>
<p>
Our team will answer questions, help you compare quotes, and hire the right roofer.
</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="estimate">
   <div class="container">
      <div class="row">
         <div class="col text-center wrapper">
            <h2 data-aos="fade-up" data-aos-duration="1300">Get your <span class="vivid">free estimate</span> in less than 30 seconds</h2>
            <a href="#" class="custom-main-btn userForm" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="300">Get an estimate</a>
         </div>
      </div>
   </div>
   <img src="{{ asset('images/banner2880.png') }}" loading="lazy" width="1440" sizes="100vw" srcset="{{ asset('images/banner500.png') }} 500w, {{ asset('images/banner800.png') }} 800w, {{ asset('images/banner1080.png') }} 1080w, {{ asset('images/banner1600.png') }} 1600w, {{ asset('images/banner2880.png') }} 2880w" alt="" class="roof-image">
</section>
@endsection