@php
    if (empty($authUser) and auth()->check()) {
        $authUser = auth()->user();
    }

    $navBtnUrl = null;
    $navBtnText = null;

    if(request()->is('forums*')) {
        $navBtnUrl = '/forums/create-topic';
        $navBtnText = trans('update.create_new_topic');
    } else {
        $navbarButton = getNavbarButton(!empty($authUser) ? $authUser->role_id : null);

        if (!empty($navbarButton)) {
            $navBtnUrl = $navbarButton->url;
            $navBtnText = $navbarButton->title;
        }
    }
@endphp

<div id="navbarVacuum"></div>
@if(request()->segment(1) == 'sector-details')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="padding: 0px; margin: 0px;">
    <div class="collapse navbar-collapse" id="" style="background-color: #fdfdfe;">
      <ul class="nav nav-tabs" role="tablist"
          style="align-items: center; height:60px; width:100%; justify-content: space-between;">
        <li class="nav-item">
          <img alt="phone" src="/assets/default/img/img_1.png" style="width:325px;height:60px;">
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-size: large;font-weight: bolder;" data-toggle="tab" value="e-tutorial" role="tab" onclick="showNewContent(this.innerText)">
            <i class="material-icons">local_library</i>
            E-Tutorial
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: large;font-weight: bolder;" data-toggle="tab" value="e-content" role="tab" onclick="showNewContent(this.innerText)">
            <i class="material-icons">cast_for_education</i>E-Content
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('forums')}}" class="nav-link" style="font-size: large;font-weight: bolder;">
            <i class="material-icons">forum</i>Forum
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: large;font-weight: bolder;" data-toggle="tab" value="assessment" role="tab" onclick="showNewContent(this.innerText)">
            <i class="material-icons">quiz</i>Assessment
          </a>
        </li>
        <li class="nav-item">
          <img alt="phone" src="/assets/default/img/img_2.png" style="width:225px;height:60px;">
        </li>
      </ul>
    </div>
  </div>
</nav>
@else
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="padding: 0px; margin: 0px;">
    <div class="collapse navbar-collapse" id="" style="background-color: #fdfdfe;">
      <ul class="nav nav-tabs" role="tablist"
          style="align-items: center; height:60px; width:100%; justify-content: space-between;">
        <li class="nav-item">
          <img alt="phone" src="/assets/default/img/img_1.png" style="width:325px;height:60px;">
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" style="font-size: large;font-weight: bolder;" data-toggle="tab" value="e-tutorial" role="tab" onclick="showNewContent(this.innerText)">
            <i class="material-icons">local_library</i>
            E-Tutorial
          </a>
        </li> -->
        @if(!empty($navbarPages) and count($navbarPages))
                        @foreach($navbarPages as $navbarPage)
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: large;font-weight: bolder;" href="{{ $navbarPage['link'] }}">{{ $navbarPage['title'] }}</a>
                            </li>
                        @endforeach
                    @endif
        <li class="nav-item">
          <img alt="phone" src="/assets/default/img/img_2.png" style="width:225px;height:60px;">
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="{{ (!empty($isPanel) and $isPanel) ? 'container-fluid' : 'container'}}">
        <div class="d-flex align-items-center justify-content-between w-100">

            <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 {{ (empty($navBtnUrl) and empty($navBtnText)) ? 'ml-auto' : '' }}" href="/">
                @if(!empty($generalSettings['logo']))
                    <img src="{{ $generalSettings['logo'] }}" class="img-cover" alt="site logo">
                @endif
            </a>

            <button class="navbar-toggler navbar-order" type="button" id="navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-lg-30 d-none d-lg-flex flex-grow-1 navbar-toggle-content " id="navbarContent">
                <div class="navbar-toggle-header text-right d-lg-none">
                    <button class="btn-transparent" id="navbarClose">
                        <i data-feather="x" width="32" height="32"></i>
                    </button>
                </div>

                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    @if(!empty($categories) and count($categories))
                        <li class="mr-lg-25">
                            <div class="menu-category">
                                <ul>
                                    <li class="cursor-pointer user-select-none d-flex xs-categories-toggle">
                                        <i data-feather="grid" width="20" height="20" class="mr-10 d-none d-lg-block"></i>
                                        {{ trans('categories.categories') }}

                                        <ul class="cat-dropdown-menu">
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="{{ (!empty($category->subCategories) and count($category->subCategories)) ? '#!' : $category->getUrl() }}">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ $category->icon }}" class="cat-dropdown-menu-icon mr-10" alt="{{ $category->title }} icon">
                                                            {{ $category->title }}
                                                        </div>

                                                        @if(!empty($category->subCategories) and count($category->subCategories))
                                                            <i data-feather="chevron-right" width="20" height="20" class="d-none d-lg-inline-block ml-10"></i>
                                                            <i data-feather="chevron-down" width="20" height="20" class="d-inline-block d-lg-none"></i>
                                                        @endif
                                                    </a>

                                                    @if(!empty($category->subCategories) and count($category->subCategories))
                                                        <ul class="sub-menu" data-simplebar @if((!empty($isRtl) and $isRtl)) data-simplebar-direction="rtl" @endif>
                                                            @foreach($category->subCategories as $subCategory)
                                                                <li>
                                                                    <a href="{{ $subCategory->getUrl() }}">
                                                                        @if(!empty($subCategory->icon))
                                                                        <img src="{{ $subCategory->icon }}" class="cat-dropdown-menu-icon mr-10" alt="{{ $subCategory->title }} icon">
                                                                        @endif

                                                                        {{ $subCategory->title }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    @if(!empty($navbarPages) and count($navbarPages))
                        @foreach($navbarPages as $navbarPage)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $navbarPage['link'] }}">{{ $navbarPage['title'] }}</a>
                            </li>
                        @endforeach
                    @endif

                </ul>
                <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 {{ (empty($navBtnUrl) and empty($navBtnText)) ? 'ml-auto' : '' }}" href="/">
                @if(!empty($generalSettings['logo']))
                <img alt="phone" src="/assets/default/img/img_2.png" style="width:325px;height:60px;">
                @endif
                </a>
            </div>

            <div class="nav-icons-or-start-live navbar-order">

                @if(!empty($navBtnUrl))
                    <a href="{{ $navBtnUrl }}" class="d-none d-lg-flex btn btn-sm btn-primary nav-start-a-live-btn">
                        {{ $navBtnText }}
                    </a>

                    <a href="{{ $navBtnUrl }}" class="d-flex d-lg-none text-primary nav-start-a-live-btn font-14">
                        {{ $navBtnText }}
                    </a>
                @endif

                <div class="d-none nav-notify-cart-dropdown top-navbar ">
                    @include(getTemplate().'.includes.shopping-cart-dropdwon')

                    <div class="border-left mx-15"></div>

                    @include(getTemplate().'.includes.notification-dropdown')
                </div>

            </div>
        </div>
    </div>
</nav> -->
@endif

@push('scripts_bottom')
    <script src="/assets/default/js/parts/navbar.min.js"></script>
@endpush
