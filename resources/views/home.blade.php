@extends('layouts.main')

@section('content')
<main class="container-wrap">

  <!-- ##### BANNER #####-->
  <section id="banner">
    <div class="root">
      <div class="video">
        <div class="overlay"></div>
        <img class="show-md-down" src="./assets/favicons/banner_cover.png" alt="cover" />
        <img id="banner_cover" src="./assets/images/banner_cover.png" alt="cover" />
        <div class="show-lg-up" id="youtube"></div>
        <div class="caption">
          <div class="container">
            <div class="hidden-sm-down">
              <button class="btn-icon btn-play waves-effect hide" id="btn_play">
                <span class="hidden">watch</span>
                <span class="hidden">trailer</span>
                <i class="ion-ios-pause-outline pause"></i>
                <i class="ion-arrow-right-b play"></i>
              </button>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="use-text-subtitle2">arnez de Lourdes</p>
                <h2 class="use-text-title">PT. Ineza Medika</h2>
                <p class="use-text-subtitle">On the air 27 . 06 . 2007</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### END BANNER #####-->

  <!-- ##### OUTLET #####-->
  <section id="outlets">
    <div class="root">
      <div class="slider-wrap">
        <div class="anim-slider">
          <div class="slide slider-content anim-slide">
            <section class="inner item">
              <div class="inner-bg">
                <div class="background">
                  <figure>
                    <img src="./assets/images/outlets/arbin.jpg" alt="outlet" />
                  </figure>
                </div>
                <div class="row">
                  <div class="col-sm-7 pa-0">
                    <div class="text">
                      <h4><span class="use-text-subtitle2">Outlet Bintaro</span>arnez de Lourdes Bintaro</h4>
                      <div class="property">
                        <div class="star">
                          <i class="material-icons star-icon" title="1">star</i>

                          <i class="material-icons star-icon" title="2">star</i>

                          <i class="material-icons star-icon" title="3">star</i>

                          <i class="material-icons star-icon" title="4">star</i>

                          <i class="material-icons star-icon" title="5">star</i>
                        </div>

                        5.0<span class="divider"></span>26 October 2009
                      </div>
                      <article class="desc">
                      <h6 class="use-text-paragraph">Ruko Sentra Menteng Blok MN / 88Q Sektor 7 Bintaro Tangerang</h6>
                      <h6 class="use-text-paragraph">Phone / Fax : 021 - 74863936 / 7450505</h6>
                      <h6 class="use-text-paragraph">Email : arbin@inezamedika.com</h6>
                      </article>
                      <div class="btn-area">
                        <a class="btn primary waves-effect" href="#">View Outlet</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 pa-0">
                    <div class="hidden-xs-down">
                      <div class="image">
                        <figure>
                          <img src="./assets/images/outlets/arbin.jpg" alt="outlet arnez de lourdes bintaro" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="slide slider-content anim-slide">
            <section class="inner item">
              <div class="inner-bg">
                <div class="background">
                  <figure>
                    <img src="./assets/images/outlets/arpon.jpg" alt="promotion" />
                  </figure>
                </div>
                <div class="row">
                  <div class="col-sm-7 pa-0">
                    <div class="text">
                      <h4><span class="use-text-subtitle2">Outlet Pondok Pinang</span>arnez de Lourdes Pondok Pinang</h4>
                      <div class="property">
                        <div class="star">
                          <i class="material-icons star-icon" title="1">star</i>

                          <i class="material-icons star-icon" title="2">star</i>

                          <i class="material-icons star-icon" title="3">star</i>

                          <i class="material-icons star-icon" title="4">star</i>

                          <i class="material-icons star-icon" title="5">star</i>
                        </div>

                        5.0<span class="divider"></span>28 March 2008
                      </div>
                      <article class="desc">
                        <h6 class="use-text-paragraph">Jl. Ciputat Raya No. 14B DKI Jakarta</h6>
                        <h6 class="use-text-paragraph">Phone / Fax : 021 - 7661969 / 7661970</h6>
                        <h6 class="use-text-paragraph">Email : arpon@inezamedika.com</h6>
                      </article>
                      <div class="btn-area">
                        <a class="btn primary waves-effect" href="#">View Outlet</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 pa-0">
                    <div class="hidden-xs-down">
                      <div class="image">
                        <figure>
                          <img src="./assets/images/outlets/arpon.jpg" alt="arnez de Lourdes Pondok Pinang" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="slide slider-content anim-slide">
            <section class="inner item">
              <div class="inner-bg">
                <div class="background">
                  <figure>
                    <img src="./assets/images/outlets/arfat.jpg" alt="promotion" />
                  </figure>
                </div>
                <div class="row">
                  <div class="col-sm-7 pa-0">
                    <div class="text">
                      <h4><span class="use-text-subtitle2">Outlet Fatmawati</span>arnez de Lourdes Fatmawati</h4>
                      <div class="property">
                        <div class="star">
                          <i class="material-icons star-icon" title="1">star</i>

                          <i class="material-icons star-icon" title="2">star</i>

                          <i class="material-icons star-icon" title="3">star</i>

                          <i class="material-icons star-icon" title="4">star</i>

                          <i class="material-icons star-icon" title="5">star</i>
                        </div>

                        5.0<span class="divider"></span>27 Juny 2007
                      </div>
                      <article class="desc">
                        <h6 class="use-text-paragraph">Jl. RS. Fatmawati No. 27 DKI Jakarta</h6>
                        <h6 class="use-text-paragraph">Phone / Fax : 021 - 7658081</h6>
                        <h6 class="use-text-paragraph">Email : arfat@inezamedika.com</h6>
                      </article>
                      <div class="btn-area">
                        <a class="btn primary waves-effect" href="#">View Outlet</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 pa-0">
                    <div class="hidden-xs-down">
                      <div class="image">
                        <figure>
                          <img src="./assets/images/outlets/arfat.jpg" alt="promotion" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="slide slider-content anim-slide">
            <section class="inner item">
              <div class="inner-bg">
                <div class="background">
                  <figure>
                    <img src="./assets/images/outlets/armina.jpg" alt="promotion" />
                  </figure>
                </div>
                <div class="row">
                  <div class="col-sm-7 pa-0">
                    <div class="text">
                      <h4><span class="use-text-subtitle2">Outlet Pertamina</span>arnez de Lourdes Pertamina</h4>
                      <div class="property">
                        <div class="star">
                          <i class="material-icons star-icon" title="1">star</i>

                          <i class="material-icons star-icon" title="2">star</i>

                          <i class="material-icons star-icon" title="3">star</i>

                          <i class="material-icons star-icon" title="4">star</i>

                          <i class="material-icons star-icon" title="5">star</i>
                        </div>

                        5.0<span class="divider"></span>09 July 2012
                      </div>
                      <article class="desc">
                        <h6 class="use-text-paragraph">RSPP Jl. Kyai Maja No. 43 DKI Jakarta</h6>
                        <h6 class="use-text-paragraph">Phone / Fax : 021 - 7219013</h6>
                        <h6 class="use-text-paragraph">Email : armina@inezamedika.com</h6>
                      </article>
                      <div class="btn-area">
                        <a class="btn primary waves-effect" href="#">View Outlet</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 pa-0">
                    <div class="hidden-xs-down">
                      <div class="image">
                        <figure>
                          <img src="./assets/images/outlets/armina.jpg" alt="promotion" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="anim-arrows">
            <a class="anim-arrows-prev prev" href="#">
              <i class="ion-ios-arrow-thin-left arrow-icon"></i>
            </a>
            <a class="anim-arrows-next next" href="#">
              <i class="ion-ios-arrow-thin-right arrow-icon"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- ##### END OUTLET #####-->

  <!-- ##### FAQ #####-->
  <section class="space-top" id="faq">
    <div class="root">
      <div class="container fixed-width">
        <div class="row spacing6">
          <div class="col-md-6 pa-6">
            <div class="title-main align-left">
              <h4 class="primary-title">STRENGHT</h4>
              <h4 class="secondary-title">arnez de Lourdes</h4>
            </div>
            <p class="text use-text-subtitle2 text-md-start text-center">Life is for service.</p>
            <div class="hidden-sm-down">
              <div class="illustration">
                <img src="./assets/images/movie/faq.png" alt="illustration" />
              </div>
            </div>
          </div>
          <div class="col-md-6 pa-6">
            <div class="accordion">
              <ul class="collapsible">
                <li class="accordion-content paper active">
                  <div class="collapsible-header content">
                    <p class="heading">After Sales Service</p><i class="material-icons right arrow">expand_more</i>
                  </div>
                  <div class="collapsible-body detail">
                    <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor.</p>
                  </div>
                </li>
                <li class="accordion-content paper">
                  <div class="collapsible-header content">
                    <p class="heading">Quick Response</p><i class="material-icons right arrow">expand_more</i>
                  </div>
                  <div class="collapsible-body detail">
                    <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                  </div>
                </li>
                <li class="accordion-content paper">
                  <div class="collapsible-header content">
                    <p class="heading">Guarantee and The Spare Part</p><i class="material-icons right arrow">expand_more</i>
                  </div>
                  <div class="collapsible-body detail">
                    <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                  </div>
                </li>
                <li class="accordion-content paper">
                  <div class="collapsible-header content">
                    <p class="heading">Availability products consistency</p><i class="material-icons right arrow">expand_more</i>
                  </div>
                  <div class="collapsible-body detail">
                    <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                  </div>
                </li>
                <li class="accordion-content paper">
                  <div class="collapsible-header content">
                    <p class="heading">Coverage distribution</p><i class="material-icons right arrow">expand_more</i>
                  </div>
                  <div class="collapsible-body detail">
                    <p>Vivamus sit amet interdum elit. Proin lacinia erat ac velit tempus auctor. </p>
                  </div>
                </li>
                <li class="accordion-content paper">
                  <div class="collapsible-header content">
                    <p class="heading">Branch or outlite in main area or main city in Indonesia</p><i class="material-icons right arrow">expand_more</i>
                  </div>
                  <div class="collapsible-body detail">
                    <p>Jakarta, Bandung, Surabaya, Palembang, Fatmawati, Pondok Pinang, Bintaro, Bandung, Palembang</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### END FAQ #####-->

  <!-- ##### POP UP #####-->
{{--  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--      <div class="modal-content">--}}
{{--        <div class="modal-header">--}}
{{--          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <div class="modal-body">...</div>--}}
{{--        <div class="modal-footer">--}}
{{--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
  <!-- ##### END POP UP #####-->

  <div class="box-lowongan">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://sekarguna.co.id/wp-content/uploads/2022/06/Interview-Medical-Store-Attendant.jpeg" class="img-fluid" alt="Interview Lowongan Medical Store Attendant">
        </div>
        <div class="col-md-6">
          <img src="https://sekarguna.co.id/wp-content/uploads/2022/06/National-Product-Marketing.jpeg" class="img-fluid" alt="Lowongan National Product Marketing">
        </div>
      </div>
    </div>
  </div>

  <!-- ##### NEWS EVENT #####-->
  <section class="space-top-short" id="news">
    <div class="root">
      <div class="carousel">
        <div class="slick-carousel" id="news_carousel">
          <div>
            <div class="item">
              <div class="news-card">
                <figure>
                  <img src="./assets/images/avatars/pp_boy3.svg" alt="thumb" />
                </figure>
                <div class="desc">
                  <div class="text">
                    {{-- <p class="type caption">news</p> --}}
                    <p>I am very happy Ineza Medika already opened branches in Malang, Finally the citizen can be easily to get medical equipment.</p>
                  </div>
                  <a class="btn btn-small btn-flat waves-effect">H. Muhammad Anton - Majors</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="item">
              <div class="news-card">
                <figure>
                  <img src="./assets/images/avatars/pp_boy3.svg" alt="thumb" />
                </figure>
                <div class="desc">
                  <div class="text">
                    {{-- <p class="type caption">news</p> --}}
                    <p>The best retail medical equipment in the city so far. Me and my wife didn't have any problems with their service. Everything went so profesinals. We're both very happy.</p>
                  </div>
                  <a class="btn btn-small btn-flat waves-effect">Marteen</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### NEWS EVENT #####-->

</main>

<script>
$(document).ready(function(){
  $('#exampleModal').modal('show');
})
</script>

@endsection
