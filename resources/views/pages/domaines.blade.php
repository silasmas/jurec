@extends("layouts.template")


@section("content")
@include("parties.banner")

<section class="blockquote-section page-section-ptb">
    <div class="container">
      <div class="row no-gutter">
        <div class="col-sm-12 text-center">
          {{-- <blockquote class="blockquote quote mb-0">
            For a first time entrepreneur, choosing a business that has a clear revenue path is extremely important.

          </blockquote> --}}
        </div>
      </div>
    </div>
  </section>

<section class="mb-80">
    <div class="container">
      <div class="row">
        @forelse ($menuDomaine as $domaine)
        <div class="col-lg-3 col-md-6 col-sm-12 sm-mb-30">
          <div class="card border-0 theme-bg o-hidden h-100">
            <div class="badge bg-success">
                <a href="">{{$domaine->categorie->nom}}</a>
            </div>
            <img class="img-fluid" src="{{ asset('storage/'.$domaine->couverture[0]) }}" alt="">
            <div class="p-4">
              <h4> <a href="{{ route("detailDomaine",['slug' => $domaine->slug]) }}" class="text-white">{{ $domaine->titre }}</a></h4>
              <p class="mb-0 pb-0 text-white">{{  $domaine->resume  }}</p>
            </div>
          </div>
        </div>
        @empty

        @endforelse
    </div>
  </section>



@endsection
