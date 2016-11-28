<li><a @if(Request::route()->getName() === 'page.home') class="active" @endif href="{{ route('page.home') }}">Home</a></li>
<li><a @if(Request::route()->getName() === 'menus.show') class="active" @endif href="{{ route('menus.show') }}">Menus</a></li>
<li><a @if(Request::route()->getName() === 'weddings.index' || Request::route()->getName() === 'wedding.menus.show') class="active" @endif href="{{ route('weddings.index') }}">Weddings</a></li>
<li><a @if(Request::route()->getName() === 'venues.index') class="active" @endif href="{{ route('venues.index') }}">Event Spaces</a></li>
<li><a @if(Request::route()->getName() === 'gallery.index') class="active" @endif href="{{ route('gallery.index') }}">Gallery</a></li>
<li><a @if(Request::route()->getName() === 'blog.index' || Request::route()->getName() === 'blog.post') class="active" @endif href="{{ route('blog.index') }}">Blog</a></li>
<li><a @if(Request::route()->getName() === 'contact.index') class="active" @endif href="{{ route('contact.index') }}" class="contact">Contact Us</a></li>
