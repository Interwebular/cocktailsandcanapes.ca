@extends('layouts.app')

@section('htmlheader_title')
	Add User
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">{{ $menu->name }} Menu</h3>
                </div>
                <div class="box-body pad">
					<div class="col-md-12">
                        <h4>
                            Uncategorized Meals
                            <a href="{{ route('admin.menus.meals.create', [$menu]) }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Add Meal</a>
                        </h4>
                        <table class="table table-hover">
                            @foreach($menu->meals()->orderBy('sorting_order', 'ASC')->get() as $meal)
                                @if(!$meal->category_id)
                                    <tr>
										<td>{{ $meal->sorting_order }}</td>
                                        <td><a href="{{ route('admin.menus.meals.edit', [$menu, $meal]) }}">{{ $meal->name }}</a></td>
                                        <td>
                                            <form action="{{ route('admin.menus.meals.delete', [$menu, $meal]) }}" method="POST" class="delete-action">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-xs pull-right delete-action"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>

                    <div class="col-md-12">
                        @foreach($menu->categories as $category)
                            <h4>
                                {{ $category->name }}
                                <a href="{{ route('admin.menus.categories.edit', [$menu, $category]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                <form action="{{ route('admin.menus.categories.destroy', [$menu, $category]) }}" method="POST" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-xs delete-action"><i class="fa fa-trash"></i></button>
                                </form>
                                <a href="{{ route('admin.menus.categories.meals.create', [$menu, $category]) }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Add Meal</a>
                            </h4>
                            <table class="table table-hover">
                                @foreach($category->meals()->orderBy('sorting_order', 'ASC')->get() as $meal)
                                    @if($meal->category_id)
                                        <tr>
											<td>{{ $meal->sorting_order }}</td>
                                            <td><a href="{{ route('admin.menus.meals.edit', [$menu, $meal]) }}">{{ $meal->name }}</a></td>
                                            <td>
                                                <form action="{{ route('admin.menus.meals.delete', [$menu, $meal]) }}" method="POST">
                        							{{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                        							<button type="submit" class="btn btn-danger btn-xs pull-right delete-action"><i class="fa fa-trash"></i></button>
                        						</form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        @endforeach
                        <a href="{{ route('admin.menus.categories.create', [$menu]) }}" class="btn btn-default btn-xs">Add Category</a>
					</div>
                </div>
            </div>
		</div>
	</div>

@endsection

@section('js')
    <script>
        $(".delete-action").click(function(e) {
            var $this = $(this);

            if(confirm("Are you sure?")) {
                $this.parent('form').submit();
            }

            e.preventDefault();
        });
    </script>
@endsection
