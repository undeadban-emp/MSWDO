@extends('admin.layout.app')
@section('title', 'Admin')
@section('cbmsActive', 'active')
@section('subCbmsActive', 'active')
@section('listCbmsActive', 'active')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@prepend('meta-data')

@endprepend
@section('content')
{{-- content --}}




@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection

