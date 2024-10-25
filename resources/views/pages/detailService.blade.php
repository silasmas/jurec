@extends("layouts.template")


@section("content")
@include("parties.banner")
<section class="service white-bg page-section-ptb">
    <div class="container">
      <div class="row">
        <!-- left  -->
        <div class="col-lg-9 col-md-12 order-lg-last">
            <div class="row">
              <div class="col-lg-12">
                <div class="service-img">
                  <img class="img-fluid" src="{{ asset('storage/'.$service->couverture) }}" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="section-title mb-0  py-5">
                  <h2>{{ $service->titre }}</h2>
                    <p>{!! $service->description !!} </p>
                </div>
              </div>
            </div>
           
  
        
          </div>
          <div class="col-lg-3 col-md-12 order-lg-first position-relative mt-4 mt-lg-0">
            <div class="our-service mb-40 pb-0">
              <div class="section-title mb-20">
                <h6>Nos services</h6>
              </div>
              <ul>
                @forelse ($menuService as $s)                    
                <li><a class="{{$s->slug==$service->slug?'active':""}} gray-bg" href="{{ route("detailService",['slug' => $s->slug]) }}">{{ $s->titre }}</a></li>
                @empty
                    
                @endforelse
              </ul>
            </div>
          </div>
  
        <!-- right  -->
  
       </div>
    </div>
  </section>
  

@endsection