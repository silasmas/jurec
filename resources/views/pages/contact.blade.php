@extends("layouts.template")


@section("content")
@include("parties.banner")

<section class="theme-bg contact-2 clearfix o-hidden">
    <div class="container-fluid pos-r">
     <div class="row">
     <div class="col-lg-6 map-side g-map map-right" id="map" data-type='black'>
     </div>
    </div>
   </div>
   <div class="container">
   <div class="row">
       <div class="col-lg-5">
       <div class="contact-3-info page-section-ptb text-white">
        <div class="clearfix">
        <h6 class="text-white">Nos bureaux</h6>
            <h2 class="text-white">Pour tout contact</h2>
            <p class="mb-50 text-white"> {{ $setting->site_description }}
                <span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-bs-toggle="tooltip" data-placement="top"> 24 heures!</span></p>
 
            <ul class="addresss-info list-unstyled">
             <li><i class="ti-map-alt"></i> <p>Addresse: 4746, Avenue de la Gombe, Immeuble Prefed, 2e niveau-local 201, en face de l'Ecole Belge de Kinshasa, Commune de la Gombe</p> </li>
             <li><i class="ti-mobile"></i>Télephone: {{ $setting->support_phone }}</li>
             <li><i class="ti-email"></i>Email: {{ $setting->support_email }}</li>
           </ul>
           <div class="social-icons social-border rounded color-hover mt-50">
                 <ul>
                    <li {{ $settings['facebook']==null?'hidden':$settings['facebook'] }}>
                        <a href="{{ $settings['facebook'] }}" target="blank"> <i class="fab fa-facebook"></i> </a>
                    </li>
                    <li {{ $settings['x_twitter']==null?'hidden':$settings['x_twitter'] }}>
                        <a href="{{ $settings['x_twitter'] }}" target="blank"> <i class="fab fa-x"></i> </a>
                    </li>

                    <li {{ $settings['instagram']==null?'hidden':$settings['instagram'] }}>
                        <a href="{{ $settings['instagram'] }}" target="blank"> <i class="fab fa-instagram"></i> </a>
                    </li>

                    <li {{ $settings['youtube']==null?'hidden':$settings['youtube'] }}>
                        <a href="{{ $settings['youtube'] }}" target="blank"> <i class="fab fa-youtube"></i> </a>
                    </li>
                   {{-- <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                   <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i> </a></li>
                   <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                   <li class="social-behance"><a href="#"><i class="fa fa-behance"></i> </a></li>
                   <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li> --}}
                 </ul>
              </div>
             </div>
          </div>
       </div>
      </div>
     </div>
 </section>
 
 <section class="page-section-ptb contact-2">
   <div class="container">
   <div class="row justify-content-center text-center mb-50">
   <div class="col-md-8">
       <div class="section-title">
       <h6>Travaillons ensemble</h6>
        <h2 class="title-effect">Contact Us</h2>
        <p>Avez-vous une question ou un retour à partager ? N'hésitez pas à nous écrire, nous sommes là pour vous aider !</p>
        </div>
    </div>
    </div>
   <div class="row">
   <div class="col-lg-12">
     <div id="formmessage">Success/Error Message Goes Here</div>
      <form id="formContact" role="form" method="post" action=""  onsubmit="event.preventDefault();add('#formContact', 'POST', '../addNewMessage')">
       <div class="contact-form clearfix">
         <div class="section-field">
           <input id="name" type="text" placeholder="Nom*" class="form-control"  name="name">
          </div>
          <div class="section-field">
             <input type="email" placeholder="Email*" class="form-control" name="email">
           </div>
          {{-- <div class="section-field">
             <input type="text" placeholder="Sujet*" class="form-control" name="sujet">
           </div> --}}
          <div class="section-field">
             <input type="text" placeholder="Téléphone*" class="form-control" name="phone">
           </div>
          <div class="section-field textarea">
            <textarea class="input-message form-control" placeholder="Votre message*"  rows="7" name="message"></textarea>
           </div>
             <!-- Google reCaptch-->
             <!-- <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div> -->
             <div class="section-field submit-button">
                 <input type="hidden" name="action" value="Envoyer"/>
                <button id="" name="" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
            </div>
           </div>
         </form>
        <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
       </div>
      </div>
     </div>
 </section>


@endsection