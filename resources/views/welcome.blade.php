@extends('layouts.front-page.app', ['class' => 'off-canvas-sidebar','titlePage'=>'' , 'activePage' => 'home', 'title' => __('Material Dashboard')])
@section('content')
 <!-- banner part start-->
    <section class="banner_part">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="3000">
            <div class="banner_text">
              <div class="banner_text_iner">
                <h1>ZNMCTECH Electronics Tradings</h1>
                <h5>provides one stop automated solution for you trade and industry.</h5>
                <a href="#" class="btn_1">Check Our services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner part start-->

    <!--::product logo brand part end::-->
    <section class="client_logo">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div
              class="client_logo_slider owl-carousel d-flex justify-content-between"
            >
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/1.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/11.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/3.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/4.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/5.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/6.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/7.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/8.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/9.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/10.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/2.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/12.png" alt="" />
              </div>
              <div class="single_client_logo">
                <img src="{{asset('front-page')}}/img/logo/13.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--::product brand logo part end::-->

    <!-- products part start-->
    <section class="our_project section_padding" id="product">
      <div class="container">
      <div class="row justify-content-between align-items-center">
          <div class="col-lg-4">
            <div class="section_tittle">
              <p>our</p>
              <h2>Products</h2>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="filters portfolio-filter project_menu_item">

            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="more_btn d-none d-md-block">
              <a href="{{route('all-products')}}" class="more_btn_iner">View All Products</a>
            </div>
          </div>
        </div>
        <div class="filters-content">
          <div class="row justify-content-between portfolio-grid">
              @foreach($categories as $category)
            <div class="col-lg-4 col-sm-6 p-3" data-aos="zoom-in" data-aos-duration="2000">
            <a href="category/{{$category->id}}">
              <div class="single_our_project">
                <div class="single_offer">
                  <img src="{{$category->img}}" alt="offer_img_1">
                  <div class="hover_text">
                      <h2>{{$category->name}} <i class="fa fa-align-right" aria-hidden="true"></i>
                      </h2>
                    <p class="my-4">
                    </p>
                  </div>
                </div>
              </div>
              </a>
            </div>
              @endforeach
          </div>
        </div>
      </div>
      <img src="{{asset('front-page')}}/img/animate_icon/icon_2.png" class="animation_icon_2" alt="" />
    </section id="">
    <!-- products part end-->
    <!-- Seminars -->
    <div class="review_part padding_bottom" id="testimonial">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-7">
            <div class="section_tittle text-center">
              <p>Seminars</p>
              <h2>what we did in training</h2>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
          <div class="col-lg-12">
            <div class="review_part_text owl-carousel">
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/1.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/2.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/3.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/4.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/5.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/6.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/7.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/8.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/9.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/10.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/11.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="">
                  <img src="{{asset('front-page')}}/img/seminars/12.JPG" alt="" />
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="{{asset('front-page')}}/img/animate_icon/icon_3.png" class="animation_icon_3" alt="" />
    </div>
    <!--end seminars-->

    <section id="partnerAutomation">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-7">
            <div class="section_tittle text-center py-2">
              <p>Your</p>
              <h2>Automation Partner</h2>
            </div>
          </div>
        </div>
        <div class="row p-2">
            <div class="col-lg-5 text-center  p-2 d-none d-sm-block">
                <img src="{{asset('front-page')}}/img/automation.png" alt="" style="width:290px; max-width:100%;">
            </div>
            <div class="col-lg-7 p-5">
               <p class="text-dark">
                The company has been formed by a group of professionals having vivid experience and while exposure in electronics and communication system. People involved here are young qualified business graduates and qualified engineers from the renowned universities.
                </p>

                <p class="text-dark mt-2">
               The resource personnel working in the company have been consistently providing reliable support service and consultancy to a wide variety of corporate houses either in the capacity of executive or as business partner or consultant. Bottom line of the company philosophy is building a long term business partnership with its clients where interpersonal relationship, reliability, assured quality and target oriented modern technology are the major building blocks.
                </p>
                 <p class="text-dark mt-2">
                 It is a company where professionals from both technical and functional field group together with an objective of providing appropriate business solutions. It realizes the importance of functional knowledge and its impact in developing business solutions. We constantly strive to be a leading technology firm with profound business and functional knowledge. The key to the company’s success is the maintenance of close working relationship with the clients through ensuring the best possible solutions to their needs; to establish and maintain a through knowledge and understanding of client’s objective and help them maximize the benefits.
                 </p>
                 <p class="text-dark mt-2">
                 We want to establish ourselves as the best choice in Computing and Information Technology Service, Consultancy and Development by offering the full spectrum of services.
                 </p>
            </div>
        </div>
    </section>

    <section id="missionVision">
        <div class="row justify-content-center align-items-center bg-dark">
          <div class="col-lg-7">
            <div class="section_tittle text-center py-5">
              <p >Our</p>
              <h2 class="text-white">Mission & Vision</h2>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-6 text-center bg-success p-5">
                <h2 class="text-white">MISSION</h2>
                <p class="text-white">Our Mission is to achieved the reputation of quality,
                high standard & reliable solution & service Provider Company in the ICT industry.</p>
            </div>
            <div class="col-lg-6 text-center bg-primary p-5">
                <h2 class="text-white">VISSION</h2>
                <p class="text-white">Our vision is to achieve 100% customer satisfaction by delivering quality products
                and services at an affordable cost. Out forward vision is to strive to
                become an entity in technology based corporate solutions, capable of
                demanding unconditional response from the targeted niche. We also believe that for out
                scope of improvisation – sky is the limit and we are always ready to take out achievements
                to the next level. We are growing and would always like to remain on the growing streak.</p>
            </div>
        </div>
    </section>

     <section id="development-key" class="mt-5 container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-7">
            <div class="section_tittle text-center py-2">
              <p>Our</p>
              <h2>Key for Development</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center p-2">
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="dev-key-item">
                    <div class="dev-key-item-head">
                    <img src="{{asset('front-page')}}/img/key-development/excellent.svg" alt="">
                    </div>
                    <div class="dev-key-item-body">
                    <h1>Desire for Excellence</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="dev-key-item">
                    <div class="dev-key-item-head">
                    <img src="{{asset('front-page')}}/img/key-development/confidence.svg" alt="">
                    </div>
                    <div class="dev-key-item-body">
                    <h1>Trust and confidence build-up</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="dev-key-item">
                    <div class="dev-key-item-head">
                    <img src="{{asset('front-page')}}/img/key-development/innovation.svg" alt="">
                    </div>
                    <div class="dev-key-item-body">
                    <h1>Innovation</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="dev-key-item">
                    <div class="dev-key-item-head">
                    <img src="{{asset('front-page')}}/img/key-development/transparency.svg" alt="">
                    </div>
                    <div class="dev-key-item-body">
                    <h1>Transparency</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="dev-key-item">
                    <div class="dev-key-item-head">
                    <img src="{{asset('front-page')}}/img/key-development/team.svg" alt="">
                    </div>
                    <div class="dev-key-item-body">
                    <h1>Teamwork</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
