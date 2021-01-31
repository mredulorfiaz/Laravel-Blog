{{-- @foreach ($newsBody as $item)
    <h1>  {{ $item[0]}}</h1>
    
@endforeach --}}
@extends('layouts.app')

@section('content')
    <div class="flex justify-center pb-3">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <p class="text-center text-green-500 text-l"> Data Added Successfully</p>
        </div>
    </div>

@endsection