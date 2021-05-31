@extends('layouts.desktop.main')

@section('title', 'Restablecer contraseña - Forohub')

@push('styles')
	<link rel="stylesheet" type="text/css" href='{{ asset("/css/desktop/forgot_password.css") }}'>
@endpush
@push('scripts')
@endpush
@section('body')
	<div id="reset-password-container">
		<img src="/src/media/logo_black.webp">
		<div>
			<h2>Nueva contraseña:</h2>
			<input type="password" name="reset-password-new-password" autocomplete="off" value="" maxlength="64">
			<h2>Confirmar contraseña:</h2>
			<input type="password" name="reset-password-confirm-password" autocomplete="off" value="" maxlength="64">
		</div>
		<button id="reset-password-button">Restablecer Contraseña</button>
	</div>
@endsection