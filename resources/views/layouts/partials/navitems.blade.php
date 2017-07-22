<!-- <li><a @if(Request::route()->getName() === 'page.home') class="active" @endif href="{{ route('page.home') }}">Home</a></li> -->
<li><a @if(Request::route()->getName() === 'about') class="active" @endif href="{{ route('about') }}">About</a></li>
<li class="catering-nav">
  <a @if(Request::route()->getName() === 'services') class="active" @endif href="{{ route('services') }}">Catering</a>
  <div class="hidden-nav">
    <div class="hidden-nav__inner">
      <a @if(Request::route()->getName() === 'weddings.index') class="active" @endif href="{{ route('weddings.index') }}">Weddings</a>
      <a @if(Request::route()->getName() === 'corporate.index') class="active" @endif href="{{ route('corporate.index') }}">Corporate</a>
      <a @if(Request::route()->getName() === 'parties.index') class="active" @endif href="{{ route('parties.index') }}">Events</a>
    </div>
  </div>
</li>
<li><a @if(Request::route()->getName() === 'menus.show') class="active" @endif href="{{ route('menus.show') }}">Menus</a></li>
<!-- <li><a @if(Request::route()->getName() === 'weddings.index' || Request::route()->getName() === 'wedding.menus.show') class="active" @endif href="{{ route('weddings.index') }}">Weddings</a></li> -->
<li><a @if(Request::route()->getName() === 'venues.index') class="active" @endif href="{{ route('venues.index') }}">Venues</a></li>
<!-- <li><a @if(Request::route()->getName() === 'blog.index' || Request::route()->getName() === 'blog.index') class="active" @endif href="{{ route('blog.index') }}">Blog</a></li> -->
<!-- <li><a @if(Request::route()->getName() === 'gallery.index') class="active" @endif href="{{ route('gallery.index') }}">Gallery</a></li> -->
<li><a @if(Request::route()->getName() === 'contact.index') class="active" @endif href="{{ route('contact.index') }}" class="contact">Contact</a></li>
<style>
  .hidden-nav {
    display: none;
    position: absolute;
    opacity: 0.8;
    background-color: #121b26;
  }
  .hidden-nav__inner {
    display: flex;
    flex-direction: column;
    color; white;
  }
  @media (max-width: 990px) {
    .hidden-nav__inner {
        display: none;
      }
  
  }
</style>