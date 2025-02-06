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
            <div class="col-lg-12 col-md-12">
              <h4 class="mb-30">Nos domaines d'intervention </h4>
            </div>
            @forelse ($menuDomaine as $domaine)
            <div class="col-lg-4 col-md-4 sm-mb-30">
              <div class="card">
                <img class="card-img-top" src="{{ asset('storage/'.$domaine->couverture[0]) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ Str::limit($domaine->titre, 50, '...') }}</h5>
                  <p class="card-text"> {{ Str::limit($domaine->resume, 50, '...') }}</p>
                  <a href="{{ route("detailDomaine",['slug' => $domaine->slug]) }}" class="btn btn-primary">Voir en detail</a>
                </div>
              </div>
            </div>
            @empty

        @endforelse
         </div>

  </section>



@endsection
