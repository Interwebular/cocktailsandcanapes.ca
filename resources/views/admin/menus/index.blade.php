@extends('layouts.app')

@section('htmlheader_title')
	Users
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Menus</h3>
                </div>
                <div class="box-body pad table-responsive">
                    <table class="table">
						<thead>
							<tr>
								<th width="100">Sorting Priority</th>
								<th width="150">Type</th>
								<th>Menu</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
	                        @foreach($menus as $menu)
	                            <tr>
									<td>{{ $menu->sorting_order }}</td>
									<td>{{ ucfirst($menu->type) }}</td>
	                                <td><a href="{{ route('admin.menus.show', [$menu]) }}">{{ $menu->name }}</a></td>
	                                <td align="right">
										<a class="btn btn-info btn-xs" href="{{ route('admin.menus.edit', [$menu]) }}"><i class="fa fa-pencil"></i></a>
										&nbsp;
										<form action="{{ route('admin.menu.delete', [$menu]) }}" method="POST" style="display: inline-block">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs delete-action"><i class="fa fa-trash"></i></button>
										</form>
									</td>
								</tr>
	                        @endforeach
						</tbody>
                    </table>
					<a href="{{ route('admin.menus.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
		</div>
	</div>

@endsection

@section('js')
    <script>
        $(".delete-action").click(function(e) {
            var $this = $(this);

            if(confirm("Are you sure? This CANNOT be undone.")) {
                $this.parent('form').submit();
            }

            e.preventDefault();
        });
    </script>
@endsection