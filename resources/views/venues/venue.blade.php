<div class="col-md-3 col-sm-6 col-xs-12 m-grid-item">
    <a href="{{ route('venues.show', [$venue]) }}/{{ str_slug($venue->name) }}" class="directory-item">
        @if($venue->image)
            <div class="directory-item-background" style="background-image:url({{ $venue->image }})"></div>
        @endif
        <div class="directory-item-details">
            <h3>{{ $venue->name }}</h3>
            <table>
                @if($venue->location)
                    <tr>
                        <td align="right"><b>Location</b></td>
                        <td>{{ $venue->location }}</td>
                    </tr>
                @endif

                @if($venue->rececption_count)
                    <tr>
                        <td align="right"><b>Reception</b></td>
                        <td>{{ $venue->rececption_count }}</td>
                    </tr>
                @endif

                @if($venue->dining_count)
                    <tr>
                        <td align="right"><b>Dining</b></td>
                        <td>{{ $venue->dining_count }}</td>
                    </tr>
                @endif
            </table>
        </div>
    </a>
</div>
