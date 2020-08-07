@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
    <h4>{{ $pertanyaan->judul }}</h4>
    <p>{{ $pertanyaan->isi }}</p>
</div>
@endsection