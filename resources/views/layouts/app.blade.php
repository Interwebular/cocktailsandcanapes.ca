<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.partials.mainheader')

        @include('layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                @if(isset($errors) AND count($errors) > 0)
                    <div class="callout callout-danger">
                        <h4><i class="fa fa-close"></i> Error(s):</h4>
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('success'))
                    <div class="callout callout-success">
                        <h4><i class="fa fa-check"></i> Success:</h4>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="callout callout-danger">
                        <h4><i class="fa fa-close"></i> Error(s):</h4>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('main-content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('layouts.partials.footer')

    </div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
