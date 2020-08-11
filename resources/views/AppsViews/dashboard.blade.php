@extends('include.layout')

@section('title_page', 'Dashboard')

@section('content')
<div class="row">
    @include('AppsViews.DashboardPartials._thisWeek')
    @include('AppsViews.DashboardPartials._urgentTask')
    @include('AppsViews.DashboardPartials._projectsList')
</div>
@stop