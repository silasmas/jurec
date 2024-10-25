
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="../assets/images/bg/cover5.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="page-title-name">
            <h1>{{ $title['titre'] }}</h1>
            {{-- <p>{{ $title['titre'] }}</p> --}}
          </div>
            <ul class="page-breadcrumb">
              <li><a href="{{ route($title['Pretour']) }}"><i class="fa fa-home"></i> {{ $title['PretourT'] }}</a> <i class="fa fa-angle-double-right"></i></li>
              @isset($title['t3'])
              <li><a href="{{ route($title['retourT3']) }}">{{ $title['t3'] }}</a> <i class="fa fa-angle-double-right"></i></li>

                @endisset
              <li><span>{{ $title['t2'] }}</span> </li>
         </ul>
       </div>
       </div>
    </div>
  </section>
