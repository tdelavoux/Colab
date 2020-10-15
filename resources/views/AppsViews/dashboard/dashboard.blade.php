@extends('include.layout')

@section('title_page', 'Dashboard')

@section('content')
<div id="content-page">
    <div class="row">
        @include('AppsViews.dashboard.DashboardPartials._thisWeek')
        @include('AppsViews.dashboard.DashboardPartials._urgentTask')
        @include('AppsViews.dashboard.DashboardPartials._projectsList')
    </div>
</div>
@stop
