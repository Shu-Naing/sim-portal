
@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('sendApiRequest') }}">
        @csrf
        <label for="msisdn">Enter value:</label>
        <input type="text" name="msisdn" id="msisdn">
        <button type="submit">Submit</button>
    </form>
@endsection
