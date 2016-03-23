@extends('layouts.app')

@section('htmlheader_title')
	Testimonials
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    {{-- <i class="fa fa-users"></i> --}}
                    <h3 class="box-title">Testimonials</h3>

                    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="box-body pad table-responsive">
                    <table class="table">
                        @foreach($testimonials as $testimonial)
                            <tr>
								<td>
									{{ $testimonial->type }}
								</td>
                                <td>
									<a href="{{ route('admin.testimonials.edit', [$testimonial]) }}">{!! $testimonial->client !!}</a>
								</td>
                            </tr>
                        @endforeach
                    </table>

                    {!! $testimonials->render() !!}
                </div>
            </div>
		</div>
	</div>

@endsection
