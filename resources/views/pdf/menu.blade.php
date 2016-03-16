<h3>{{ $menu->name }}</h3>
{!! nl2br(e($menu->pricing)) !!}
<hr />
@foreach($menu->meals as $meal)
    @if(!$meal->category_id)

        <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
        <p>{!! nl2br(e($meal->description)) !!}</p>

    @endif
@endforeach

@foreach($menu->categories as $category)
    <h1 class="menu-category">{{$category->name}}</h1>

    @foreach($category->meals as $meal)
        @if($meal->category_id)
            <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
            <p>{!! nl2br(e($meal->description)) !!}</p>
        @endif
    @endforeach

@endforeach
