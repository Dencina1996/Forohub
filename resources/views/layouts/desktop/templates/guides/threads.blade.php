@extends('layouts.desktop.main')

@isset ($character)
	@section('title', 'Guía de temas ('.strtoupper($character).') - Forohub')
@else
	@section('title', 'Guía de temas - Forohub')
@endif

@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/desktop/classes.css">
    <link rel="stylesheet" type="text/css" href="/css/desktop/guides.css">
@endpush
@push('scripts')
	<script type="text/javascript" src="/js/guides.js"></script>
@endpush
@section('body')
	@include('layouts.desktop.templates.guides.guide_selection')
	@include('layouts.desktop.templates.guides.threads_guide')
@endsection