<!-- Navbar -->
@include('admin.layouts.menu')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ url('frontend/adminlte')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ url('frontend/adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ admin()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview ">
          <a href="{{ aurl('') }}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              {{ trans('admin.dashboard') }}

            </p>
          </a>
        </li>


        <li class="nav-item has-treeview ">
          <a href="{{ aurl('settings') }}" class="nav-link ">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              {{ trans('admin.settings') }}

            </p>
          </a>
        </li>



        <li class="nav-item has-treeview {{ active_menu('admin')[0] }}">
          <a href="#" class="nav-link ">
            <i class="nav-icon fa fa-users"></i>
            <p>
              {{ trans('admin.admin') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="{{ active_menu('admin')[1] }}">
            <li class="nav-item">
              <a href="{{aurl('admin')}}" class="nav-link">
                <i class="fa fa-users nav-icon"></i>
                <p>{{ trans('admin.admin') }}</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item has-treeview {{ active_menu('users')[0] }} ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fa fa-users"></i>
            <p>
              {{ trans('admin.users') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style=" {{ active_menu('users')[1] }} ">

            <li class="nav-item">
              <a href="{{aurl('users')}}" class="nav-link">
                <i class="fa fa-users nav-icon"></i>
                <p>{{ trans('admin.all_users') }}</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{aurl('users')}}?membership=user" class="nav-link">
                <i class="fa fa-user nav-icon"></i>
                <p>{{ trans('admin.user') }}</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{aurl('users')}}?membership=vendor" class="nav-link">
                <i class="fa fa-dollar-sign nav-icon"></i>
                <p>{{ trans('admin.vendor') }}</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="{{aurl('users')}}?membership=company" class="nav-link">
                <i class="fa fa-building nav-icon"></i>
                <p>{{ trans('admin.company') }}</p>
              </a>
            </li>

          </ul>
        </li>


        <!--<li class="nav-item has-treeview {{ active_menu('countries')[0] }} ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fa fa-flag"></i>
            <p>
              {{ trans('admin.countries') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style=" {{ active_menu('countries')[1] }} ">

            <li class="nav-item">
              <a href="{{aurl('countries')}}" class="nav-link">
                <i class="fa fa-flag nav-icon"></i>
                <p>{{ trans('admin.countries') }}</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{aurl('countries/create')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>{{ trans('admin.add') }}</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item has-treeview {{ active_menu('cities')[0] }} ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fa fa-flag"></i>
            <p>
              {{ trans('admin.cities') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style=" {{ active_menu('cities')[1] }} ">

            <li class="nav-item">
              <a href="{{aurl('cities')}}" class="nav-link">
                <i class="fa fa-flag nav-icon"></i>
                <p>{{ trans('admin.cities') }}</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{aurl('cities/create')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>{{ trans('admin.add') }}</p>
              </a>
            </li>

          </ul>
        </li>



        <li class="nav-item has-treeview {{ active_menu('states')[0] }} ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fa fa-flag"></i>
            <p>
              {{ trans('admin.states') }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style=" {{ active_menu('states')[1] }} ">

            <li class="nav-item">
              <a href="{{aurl('states')}}" class="nav-link">
                <i class="fa fa-flag nav-icon"></i>
                <p>{{ trans('admin.states') }}</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{aurl('states/create')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>{{ trans('admin.add') }}</p>
              </a>
            </li>

          </ul>
        </li>-->




      <li class="nav-item has-treeview {{ active_menu('categories')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-list"></i>
          <p>
            {{ trans('admin.categories') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('categories')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('categories')}}" class="nav-link">
              <i class="fa fa-list nav-icon"></i>
              <p>{{ trans('admin.categories') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('categories/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>


      <li class="nav-item has-treeview {{ active_menu('services')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-list"></i>
          <p>
            {{ trans('admin.services') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('services')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('services')}}" class="nav-link">
              <i class="fa fa-list nav-icon"></i>
              <p>{{ trans('admin.services') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('services/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview {{ active_menu('investments')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-list"></i>
          <p>
            {{ trans('admin.investments') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('investments')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('investments')}}" class="nav-link">
              <i class="fa fa-list nav-icon"></i>
              <p>{{ trans('admin.investments') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('investments/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>



      <!--<li class="nav-item has-treeview {{ active_menu('brands')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-tags"></i>
          <p>
            {{ trans('admin.brands') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('brands')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('brands')}}" class="nav-link">
              <i class="fa fa-tags nav-icon"></i>
              <p>{{ trans('admin.brands') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('brands/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>-->


      <li class="nav-item has-treeview {{ active_menu('news')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-tags"></i>
          <p>
            {{ trans('admin.news') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('news')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('news')}}" class="nav-link">
              <i class="fa fa-tags nav-icon"></i>
              <p>{{ trans('admin.news') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('news/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview {{ active_menu('slider')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-tags"></i>
          <p>
            {{ trans('admin.slider') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('slider')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('slider')}}" class="nav-link">
              <i class="fa fa-tags nav-icon"></i>
              <p>{{ trans('admin.slider') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('slider/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview {{ active_menu('social_media')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-tags"></i>
          <p>
            {{ trans('admin.social_media') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('social_media')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('social_media')}}" class="nav-link">
              <i class="fa fa-tags nav-icon"></i>
              <p>{{ trans('admin.social_media') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('social_media/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>

      <!--<li class="nav-item has-treeview {{ active_menu('factories')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-address-card"></i>
          <p>
            {{ trans('admin.factories') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('factories')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('factories')}}" class="nav-link">
              <i class="fa fa-address-card nav-icon"></i>
              <p>{{ trans('admin.factories') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('factories/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>-->



      <!--<li class="nav-item has-treeview {{ active_menu('malls')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-building"></i>
          <p>
            {{ trans('admin.malls') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('malls')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('malls')}}" class="nav-link">
              <i class="fa fa-building nav-icon"></i>
              <p>{{ trans('admin.malls') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('malls/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li> -->



      <!--<li class="nav-item has-treeview {{ active_menu('shippings')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-truck"></i>
          <p>
            {{ trans('admin.shippings') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('shippings')[1] }} ">

          <li class="nav-item">
            <a href="{{aurl('shippings')}}" class="nav-link">
              <i class="fa fa-truck nav-icon"></i>
              <p>{{ trans('admin.shippings') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('shippings/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>-->




      <li class="nav-item has-treeview {{ active_menu('attributes')[0] }} ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fa fa-bars"></i>
          <p>
            {{ trans('admin.attributes') }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style=" {{ active_menu('attributes')[1] }} ">


          <li class="nav-item">
            <a href="{{aurl('attribute_families')}}" class="nav-link">
              <i class="fa fa-bars nav-icon"></i>
              <p>{{ trans('admin.attribute_family_id') }}</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="{{aurl('attributes')}}" class="nav-link">
              <i class="fa fa-bars nav-icon"></i>
              <p>{{ trans('admin.attributes') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('attribute_options')}}" class="nav-link">
              <i class="fa fa-bars nav-icon"></i>
              <p>{{ trans('admin.attribute_options') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{aurl('attributes/create')}}" class="nav-link">
              <i class="fa fa-plus nav-icon"></i>
              <p>{{ trans('admin.add') }}</p>
            </a>
          </li>

        </ul>
      </li>










      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
