
@php the_content() @endphp
   
   @php $children = Page::getChildren(get_the_ID()); @endphp
    <ul id="menu-content" class="mb-3">
        @foreach($children as $child)
        <li>
            <a class="btn btn-outline-primary btn-title h4" data-target="#contenu-{{ $child['slug'] }}" role="button" aria-expanded="false" aria-controls="contenu-{{ $child['slug'] }}">
                {{ $child['title'] }}
            </a>
        </li>  
        @endforeach
    </ul>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

@foreach($children as $child)
<div id="contenu-{{ $child['slug'] }}" class="contenu" aria-labelledby="contenu-{{ $child['slug'] }}">
    {{-- ICI LES CONTENU DE SENFANT TITRE + PARAGRAPHE  --}}
        <h2>
            {{ $child['title'] }}
        </h2>
        {!! $child['content'] !!}

        @php $underChildren = Page::getChildren($child['ID'] ); @endphp
        <div id="accordion">
            @foreach($underChildren as $underchild)
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{!! $underchild['slug'] !!}" aria-expanded="true" aria-controls="collapse-{!! $underchild['slug'] !!}">
                            {!! $underchild['title'] !!}
                        </button>
                        </h5>
                    </div>
                
                    <div id="collapse-{!! $underchild['slug'] !!}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading-{!! $underchild['slug'] !!}" data-parent="#accordion">
                        <div class="card-body">
                            {!! $underchild['content'] !!}                    
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
</div>
@endforeach

