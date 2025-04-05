<!DOCTYPE html>
<html lang="en" >
@include('pages.backend.__includes.head')

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <a href="index.html">
      <img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/>
    </a>

    <div class="d-flex align-items-center">
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>

      <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
        <span></span>
      </button>

      <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
        <span class="svg-icon svg-icon-xl">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24"/>
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
            </g>
          </svg>
        </span>
      </button>
    </div>
  </div>

  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
      <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        <div class="brand flex-column-auto" id="kt_brand">
          <a href="index.html" class="brand-logo">
            <img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/>
          </a>

          <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                  <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                </g>
              </svg>
            </span>
          </button>
        </div>

        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
          <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
              <li class="menu-item" aria-haspopup="true"><a href="index.html" class="menu-link "><i class="menu-icon flaticon-home"></i><span class="menu-text">Dashboard</span></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header header-fixed">
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
              <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default " >
                <ul class="menu-nav">
                  <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
                    <a  href="javascript:;" class="menu-link menu-toggle"><span class="menu-text">Pages</span><i class="menu-arrow"></i></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="topbar">
              @include('pages.backend.__includes.topbar.search')
              @include('pages.backend.__includes.topbar.notification')
              @include('pages.backend.__includes.topbar.quick-action')
              @include('pages.backend.__includes.topbar.language')
              @include('pages.backend.__includes.topbar.user')
            </div>
          </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
              <div class="d-flex align-items-center flex-wrap mr-1">

                <div class="d-flex align-items-baseline flex-wrap mr-5">
                  <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    @if (!empty($page) && $page == 'dashboard')
                    <li class="breadcrumb-item"><span class="text-muted"><i class="fas fa-desktop"></i></li>
                    <li class="breadcrumb-item"><span class="text-muted"> Dashboard </span></li>

                    @elseif (!empty($page) && $page == 'statistics')
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="menu-icon fas fa-desktop"></i></a></li>
                    <?php $link = "" ?>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                    @if($i < count(Request::segments()) & $i > 0)
                    <?php $link .= "/" . Request::segment($i); ?>
                    <li class="breadcrumb-item"><a href="/dashboard<?= $link ?>"> {{ ucwords(str_replace('-',' ',Request::segment($i)))}} </a></li>
                    @else
                    <li class="breadcrumb-item"><span class="text-muted"> {{ucwords(str_replace('-',' ',Request::segment($i)))}} </span></li>
                    @endif
                    @endfor

                    @else
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="menu-icon fas fa-desktop"></i></a></li>
                    <?php $link = "" ?>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                    @if($i < count(Request::segments()) & $i > 0)
                    <?php $link .= "/" . Request::segment($i); ?>
                    <li class="breadcrumb-item"><a href="/dashboard<?= $link ?>"> {{ ucwords(str_replace('-',' ',Request::segment($i)))}} </a></li>
                    @else
                    <li class="breadcrumb-item"><span class="text-muted"> {{ucwords(str_replace('-',' ',Request::segment($i)))}} </span></li>
                    @endif
                    @endfor
                    @endif
                  </ul>
                </div>

              </div>

              <div class="d-flex align-items-center">
                @if (!empty($page) && $page == 'datatable-index')
                <a href="{{ URL::Current() }}/activities" class="btn btn-xs btn-icon btn-info mr-1" data-toggle="tooltip" data-original-title="{{ __('default.label.activity') }}"><i class="fas fa-history"></i></a>
                <a href="{{ URL::Current() }}/trash" class="btn btn-xs btn-icon btn-danger" data-toggle="tooltip" data-original-title="{{ __('default.label.trash') }}"><i class="fas fa-trash"></i></a>
                @endif
              </div>

            </div>
          </div>


          <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
              @yield('content')
            </div>
          </div>

        </div>

        @include('pages.backend.__includes.footer')
      </div>
    </div>
  </div>

  @include('pages.backend.__includes.canvas-user')
  @include('pages.backend.__includes.scroll-top')
  @include('pages.backend.__includes.sticky-toolbar')

  <script> var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview"; </script>
  <script> var KTAppSettings = { }; </script>
  <script src="/assets/backend/plugins/global/plugins.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/js/scripts.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/js/pages/widgets.js?v=7.0.6"></script>
  @stack('js')

</body>
</html>
