<ul class="gnb">

  <li class="nav-item top">
    <span class="material-symbols-outlined" id="close">
      close
    </span>
  </li>

  @php

  if (Voyager::translatable($items)) {
  $items = $items->load('translations');
  }

  @endphp

  @foreach ($items as $item)
  @php

  $originalItem = $item;
  if (Voyager::translatable($item)) {
  $item = $item->translate($options->locale);
  }

  $isActive = null;
  $styles = null;
  $icon = null;

  // Background Color or Color
  if (isset($options->color) && $options->color == true) {
  $styles = 'color:' . $item->color;
  }
  if (isset($options->background) && $options->background == true) {
  $styles = 'background-color:' . $item->color;
  }

  // Check if link is current
  if (url($item->link()) == url()->current()) {
  $isActive = 'active';
  }

  // Set Icon
  if (isset($options->icon) && $options->icon == true) {
  $icon = '<i class="' . $item->icon_class . '"></i>';
  }

  @endphp



  <li class="{{ $isActive }} nav-item">
    <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
      {!! $icon !!}
      <span>{{ $item->title }}</span>
    </a>
    @if (!$originalItem->children->isEmpty())
    @include('voyager::menu.default', [
    'items' => $originalItem->children,
    'options' => $options,
    ])
    @endif
  </li>


  @endforeach
  @guest
  @if (Route::has('login'))
  <li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  @endif

  @if (Route::has('register'))
  <li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
  </li>
  @endif
  @else
  <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </li>
  @endguest

</ul>