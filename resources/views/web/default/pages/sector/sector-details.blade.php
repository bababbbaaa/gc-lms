@extends(getTemplate().'.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush

@section('content')

    @if(!empty($heroSectionData))

        @if(!empty($heroSectionData['has_lottie']) and $heroSectionData['has_lottie'] == "1")
            @push('scripts_bottom')
                <script src="/assets/default/vendors/lottie/lottie-player.js"></script>
            @endpush
        @endif
 
        <div class="tab-pane active" id="e-tutorial" >
        <div class="container">
            <div class="card card-nav-tabs">
            <div class="card-header">
                <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#animation">
                        <i class="material-icons">movie</i>
                        Animations
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#simulations">
                        <i class="material-icons">view_in_ar</i>
                        Simulations
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#virtual_lab">
                        <i class="material-icons">book</i>
                        Virtual Labs
                        </a>

                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content text-center">
                <div class="tab-pane active" id="animation">
                    <h1 style="margin-top: 10px;">ANIMATION LIBRARY</h1>
                    <div class="grid-wrap">
                    <!-- demo 3 -->
                    @foreach($Etutorial as $torial)
                <a class="list-block demo-3" onmouseover="showButton(this)" onmouseout="hideButton(this)">
                <figure >
                  <img alt="" src="/assets/default/img/pexels-photo-3183132.jpg" />
                  <button class="playButton" style="display: none;" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                    <i class="material-icons" style="margin: 0 0 0 0; font-size: 50px;">play_circle</i>
                  </button>
                  <figcaption>
                    <h2>{{$torial->tutorial_name}}</h2>
                    <h2>{{$torial->no_of_views}} Views</h2>
                    <p>Uploaded By : {{$torial->uploaded_by}}</p>
                  </figcaption>
                </figure>
              </a>
              @endforeach
                    </div>
                </div>
                <div class="tab-pane" id="simulations">
                    <h1 style="margin-top: 10px;">SIMULATION LIBRARY</h1>
                    <div class="grid-wrap">
                    <!-- demo 1-->
                    <a class="list-block" href="#">
                        <figure>
                        <img alt="" src="img/pexels-photo-4245826.webp"/>
                        <figcaption>
                            <h2>Thumbnail 01</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                        </figure>
                    </a>
                    <a class="list-block" href="#">
                        <figure>
                        <img alt="" src="img/pexels-photo-4245826.webp"/>
                        <figcaption>
                            <h2>Thumbnail 02</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                        </figure>
                    </a>
                    <a class="list-block" href="#">
                        <figure>
                        <img alt="" src="img/pexels-photo-4245826.webp"/>
                        <figcaption>
                            <h2>Thumbnail 03</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                        </figure>
                    </a>
                    </div>
                </div>
                <div class="tab-pane" id="virtual_lab">
                    <h1 style="margin-top: 10px;">VIRTUAL LAB LIBRARY</h1>
                    <div class="grid-wrap">
                    <!-- demo 2-->
                    <a class="list-block demo-2" href="#">
                        <figure>
                        <img alt="" src="img/pexels-photo-3183132.jpg"/>
                        <figcaption>
                            <h2>Thumbnail 04</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                        </figure>
                    </a>
                    <a class="list-block demo-2" href="#">
                        <figure>
                        <img alt="" src="img/pexels-photo-3183132.jpg"/>
                        <figcaption>
                            <h2>Thumbnail 05</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                        </figure>
                    </a>
                    <a class="list-block demo-2" href="#">
                        <figure>
                        <img alt="" src="img/pexels-photo-3183132.jpg"/>
                        <figcaption>
                            <h2>Thumbnail 06</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                        </figure>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
</div>

<div class="tab-pane" id="e-content" style="display: none;">
  <div class="container">
    <div class="card card-nav-tabs">
      <div class="card-header">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: white;">
                  <i class="material-icons">movie</i>
                  E-Books
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" style="color: white;">
                  <i class="material-icons">view_in_ar</i>
                  Case Study
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  FAQs
                </a>

              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="profile">
            <h1 style="margin-top: 10px;">ANIMATION LIBRARY</h1>
            <div class="grid-wrap">
              <!-- demo 3 -->
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 07</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 08</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 09</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
          <div class="tab-pane" id="messages">
          </div>
          <div class="tab-pane" id="settings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="forum" style="display: none;">
  <div class="container">
    <div class="card card-nav-tabs">
      <div class="card-header">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: white;">
                  <i class="material-icons">movie</i>
                  Doubts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" style="color: white;">
                  <i class="material-icons">view_in_ar</i>
                  Opinion
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Comments
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="profile">
            <h1 style="margin-top: 10px;">ANIMATION LIBRARY</h1>
            <div class="grid-wrap">
              <!-- demo 3 -->
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 07</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 08</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 09</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
          <div class="tab-pane" id="messages">
          </div>
          <div class="tab-pane" id="settings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="assessment" style="display: none;">
  <div class="container">
    <div class="card card-nav-tabs">
      <div class="card-header">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: white;">
                  <i class="material-icons">movie</i>
                  MCQ
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" style="color: white;">
                  <i class="material-icons">view_in_ar</i>
                  Problems
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Quizes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Assignment / Projects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Solutions
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="profile">
            <div class="tableContainer">
              <table class="table">
                <thead class="table-secondary">
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Chapter</th>
                  <th>Author</th>
                  <th>Playtime</th>
                  <th>Views</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Geeta</td>
                  <td>Adhyay1</td>
                  <td>Krishna</td>
                  <td>14hrs : 16min : 36sec</td>
                  <td>123456</td>
                  <td>
                    <button class="btn btn-sm btn-light">
                      <i class="material-icons" style="margin: 0 0 0 0;">play_circle</i></button>
                    <button class="btn btn-sm btn-light">
                      <i class="material-icons" style="margin: 0 0 0 0;">download</i></button>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane" id="messages">
          </div>
          <div class="tab-pane" id="settings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="e-content" style="display: none;">
  <div class="container">
    <div class="card card-nav-tabs">
      <div class="card-header">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: white;">
                  <i class="material-icons">movie</i>
                  E-Books
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" style="color: white;">
                  <i class="material-icons">view_in_ar</i>
                  Case Study
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  FAQs
                </a>

              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="profile">
            <h1 style="margin-top: 10px;">ANIMATION LIBRARY</h1>
            <div class="grid-wrap">
              <!-- demo 3 -->
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 07</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 08</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 09</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
          <div class="tab-pane" id="messages">
          </div>
          <div class="tab-pane" id="settings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="forum" style="display: none;">
  <div class="container">
    <div class="card card-nav-tabs">
      <div class="card-header">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: white;">
                  <i class="material-icons">movie</i>
                  Doubts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" style="color: white;">
                  <i class="material-icons">view_in_ar</i>
                  Opinion
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Comments
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="profile">
            <h1 style="margin-top: 10px;">ANIMATION LIBRARY</h1>
            <div class="grid-wrap">
              <!-- demo 3 -->
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 07</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 08</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
              <a class="list-block demo-3" href="#">
                <figure>
                  <img alt="" src="img/pexels-photo-3183132.jpg"/>
                  <figcaption>
                    <h2>Thumbnail 09</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
          <div class="tab-pane" id="messages">
          </div>
          <div class="tab-pane" id="settings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="assessment" style="display: none;">
  <div class="container">
    <div class="card card-nav-tabs">
      <div class="card-header">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: white;">
                  <i class="material-icons">movie</i>
                  MCQ
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" style="color: white;">
                  <i class="material-icons">view_in_ar</i>
                  Problems
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Quizes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Assignment / Projects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" style="color: white;">
                  <i class="material-icons">book</i>
                  Solutions
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="profile">
            <div class="tableContainer">
              <table class="table">
                <thead class="table-secondary">
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Chapter</th>
                  <th>Author</th>
                  <th>Playtime</th>
                  <th>Views</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Geeta</td>
                  <td>Adhyay1</td>
                  <td>Krishna</td>
                  <td>14hrs : 16min : 36sec</td>
                  <td>123456</td>
                  <td>
                    <button class="btn btn-sm btn-light">
                      <i class="material-icons" style="margin: 0 0 0 0;">play_circle</i></button>
                    <button class="btn btn-sm btn-light">
                      <i class="material-icons" style="margin: 0 0 0 0;">download</i></button>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane" id="messages">
          </div>
          <div class="tab-pane" id="settings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- modal start --> 
 <div class="modal fade modal-xl" id="videoPlayer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Video Player</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <video src="{{$torial->tutorial_path}}" type="video/mp4" controls
        style="width: 1000px;height: 355px;">
        </video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <!-- modal end -->
    @endif


@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
    <script>
        function showButton(x){
        var y = x.children.item(0).children.item(1);
        var z = x.children.item(0).children.item(2)

        z.children.item(0).style.display = "none";
        z.children.item(1).style.display = "none";
        y.style.display = "flex";

        }
        function hideButton(x){

        var y = x.children.item(0).children.item(1);
        var z = x.children.item(0).children.item(2)
   
        z.children.item(0).style.display = "block";
        z.children.item(1).style.display = "block";
        y.style.display = "none";

        }
    </script>
@endpush
