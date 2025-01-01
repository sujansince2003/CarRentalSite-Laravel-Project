@extends('layouts.clean')

@section('childContent')
    @include('layouts.components.header')
    @yield('content')
    @include('layouts.components.footer')
@endsection
