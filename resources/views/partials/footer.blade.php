<footer class="content-info mt-4 pb-4">
  <div class="container">
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}
    <div class="row">
      <div class="py-4 px-4">
       <ul style="list-style: none; padding:0">
         <li>Atelier Terre Et Créations</li>
         <li>9, rue Maryse Bastié</li>
         <li>69008 LYON</li>
         <li></li>
         <li></li>
         <ul>
      </div>
    </div>
    <div class="row px-4 justify-content-center">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu' => 'footer_menu','menu_class' => 'nav' ]) !!}
    </div>
  </div>
</footer>
