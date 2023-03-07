<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="col-12 text-center">
    <!--<a href="https://creative-tim.com/" class="simple-text logo-normal"> -->
    <a class="btn btn-primary" href="{{ route('home') }}">
      {{ __('HOME') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <!--  si el $activePage es igual a profile pinte de amarrillo -->
      <li class="nav-item{{ $activePage == 'involucrados' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('proyectos.nuevop') }}">
          <i class="fa-thin fa-plus"></i>
            <p>{{ __('Nuevo Proyecto') }}</p>
        </a>
      </li>
      <!--  si el $activePage es igual a profile pinte de amarrillo -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Mis Proyectos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <!--  si el $activePage es igual a profile pinte de amarrillo -->
            <li class="nav-item{{ $activePage == 'finalizado' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('finalizado.finalizadop')}}">
                <span class="sidebar-mini"> PF </span>
                <span class="sidebar-normal">{{ __('Ptoyectos Finalizados') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'enproceso' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('enproceso.enprocesop')}}">
                <span class="sidebar-mini"> PE </span>
                <span class="sidebar-normal"> {{ __('Proyectos en Proceso') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>Usuarios</p>
        </a>
      </li>
      @endcan
      @can('post_index')
      <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Post') }}</p>
        </a>
      </li>
      @endcan
      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permissions') }}</p>
        </a>
      </li>
      @endcan
      @can('role_index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
      @endcan
      <li class="nav-item{{ $activePage == 'acercade' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('acercade.acercade') }}">
          <i class="material-icons">library_books</i>
          <p>{{ __('Acerca de') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'ayuda' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ayuda.ayudap') }}">
          <i class="material-icons">language</i>
          <p>{{ __('Buscar Ayuda') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
