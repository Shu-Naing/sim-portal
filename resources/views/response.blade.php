@extends('layouts.app')

@section('content')
    <h2>API Response</h2>
    <pre>{{ json_encode($response, JSON_PRETTY_PRINT) }}</pre>
@endsection
