@extends('layouts.app')


    
@section('breadcrumb')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    <app-home></app-home>
@endsection

