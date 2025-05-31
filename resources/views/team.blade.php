@extends('nav')
@section('content')
    
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Team</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <section id="team" class="team section">
      <div class="container">
        <div class="row gy-4">

          @foreach ($teams as $team)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ $team['url'] }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>{{ $team['name'] }}</h4>
                  <span>{{ $team['position'] }}</span>
                  <p>{{ $team['description'] }}</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </section>
@endsection