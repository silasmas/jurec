@extends("layouts.template")


@section("content")
@include("parties.banner")


<section class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid mx-auto" src="{{ asset('storage/'.$domaine->couverture[0]) }}" alt="">
        </div>
        <div class="col-lg-6 sm-mt-50 align-self-center">
          <div class="section-title">
            <h2 class="title-effect">{{ $domaine->titre }} </h2>
            <span class="badge bg-primary mt-30">
                {{ $domaine->categorie->nom }}
            </span>
          </div>
          <p> {!! $domaine->description !!} </p>
          <div class="divider my-5"></div>
          <div class="row">
            <div class="col-lg-4 col-sm-4 sm-mb-30">
            <div class="counter">
              <span class="timer" data-to="4905" data-speed="3000">4905</span>
              <label>Projects</label>
            </div>
          </div>
           <div class="col-lg-4 col-sm-4 sm-mb-30">
            <div class="counter">
              <span class="timer" data-to="975" data-speed="3000">975</span>
              <label>Clients</label>
            </div>
          </div>
           <div class="col-lg-4 col-sm-4 xs-mb-30">
            <div class="counter">
              <span class="timer" data-to="8782" data-speed="3000">8782</span>
              <label>Hours Work</label>
            </div>
          </div>
        </div>
        </div>
     </div>
    </div>
  </section>
  
  <!--=================================
   Premium Features -->
  
  
  <!--=================================
  Work Process  -->
  
  <section class="black-bg page-section-ptb">
     <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-start">
              <h2 class="title-effect text-white">Notre de transformation</h2>
              <p class="text-white">We are dedicated to providing you with the best experience possible.</p>
            </div>
          </div>
        </div>
        <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30">
              <div class="feature-step">
                <h1 class="text-white">01<span class="text-black">.</span></h1>
                <h3 class="text-white">We have magic</h3>
                <p class="text-white">I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in the world with amazing. </p>
                <a class="button icon-color white-btn mt-15" href="#">Read More <i class="fa fa-angle-right"></i></a>
              </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30">
              <div class="feature-step text-white">
                <h1 class="text-white">02<span class="text-black">.</span></h1>
                <h3 class="text-white">We're Friendly</h3>
                <p class="text-white">We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Bill Gates. </p>
                <a class="button icon-color white-btn mt-15" href="#">Read More <i class="fa fa-angle-right"></i></a>
              </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="feature-step">
                <h1 class="text-white">03<span class="text-black">.</span></h1>
                <h3 class="text-white">We’re award winner</h3>
                <p class="text-white">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success. </p>
                <a class="button icon-color white-btn mt-15" href="#">Read More <i class="fa fa-angle-right"></i></a>
              </div>
           </div>
        </div>
     </div>
  </section>
  
  <!--=================================
  Work Process -->
  
 
  
  <!--=================================
   our-blog  -->
  
  <section id="blog" class="our-blog page-section-ptb gray-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8">
          <div class="section-title text-center text-start">
            <h2 class="title-effect">Nos services</h2>
            <p>We are dedicated to providing you with the best experience possible.</p>
          </div>
        </div>
      </div>
     <div class="row">
        @forelse ($menuDomaine as $domaine)
        <div class="col-lg-4 col-md-6 col-sm-12 xs-mb-30">
           <div class="card border-0 black-bg o-hidden h-100">
             <img class="img-fluid" src="{{ asset('storage/'.$domaine->couverture[0]) }}" alt="">
             <div class="p-4">
             <h4> <a href="{{ route("detailDomaine",['slug' => $domaine->slug]) }}" class="text-white">{{ $domaine->titre }}</a>
                <span class="badge bg-primary mt-30">
                    {{ $domaine->categorie->nom }}
                </span></h4>
             <p class="mb-0 pb-0 text-white">{{ $domaine->resume }}.</p>
             </div>
           </div>
        </div>            
        @empty
            
        @endforelse
      </div>
    </div>
   </section>
  

@endsection