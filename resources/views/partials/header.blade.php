@if (has_post_thumbnail())
    <div id="intro" style="background-image: url( {!!  the_post_thumbnail_url() !!})" >
    
    </div>
@endif()

<div id="sm-menu" class="wrapper-main-menu d-md-none">

  <input type="checkbox" id="navcheck" role="button" title="menu">
  <label for="navcheck" aria-hidden="true" title="menu">
    <span class="burger">
      <span class="bar">
        <span class="visuallyhidden">Menu</span>
      </span>
    </span>
  </label>

  <nav id="menu">
    <a class="brand h1" href="{{ home_url('/') }}">
      <span>{{ get_bloginfo('name', 'display') }}</span>
    </a>
    <p>
      {{ get_bloginfo('description', 'display') }}
    </p>
    <hr>
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex-column' ]) !!}
    @endif
  </nav>

</div>

<header class="banner sm-hidden">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
