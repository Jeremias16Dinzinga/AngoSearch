@extends('templents.templent')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Realize Pesquisas Avançadas</h1>
          <h2>Encontrar as informações de forma proﬁssional e rápida</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="/startSearch" class="btn-get-started scrollto">Começar</a>
      </div>
	  
    </div>
  </section><!-- End Hero -->

  <main id="main">  

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$totalRegistros}}</span>
              <p>Total de Registos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$totalMasculino}}</span>
              <p>Homens</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$totalFeminino}}</span>
              <p>Mulheres</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$totalProvincias}}</span>
              <p>Províncias</p>
            </div>
          </div>		  

        </div>

      </div>
    </section><!-- End Counts Section -->         

  </main><!-- End #main -->

  @endsection