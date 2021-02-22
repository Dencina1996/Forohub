@extends('layouts.desktop.main')

@section('title', 'Guía de comunidades - Forohub')

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/desktop/classes.css">
    <link rel="stylesheet" type="text/css" href="/css/desktop/guides.css">
@endpush
@push('scripts')
	<script type="text/javascript" src="/js/guides.js"></script>
@endpush
@section('body')
	@include('layouts.desktop.templates.guides.guide_selection')
	@include('layouts.desktop.templates.guides.communities_guide')
	@if ($communities->hasPages())
	    <div style="text-align: center;">
	        <div class="pageSelector">
	            {!!$communities->links()!!}
	        </div>
	    </div>
	@endif
@endsection