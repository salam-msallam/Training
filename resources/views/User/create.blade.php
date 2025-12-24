@extends('layouts.app')


@section('content')

<form method='POST' action="{{ route('user.store') }}">
    @csrf

<label for="name">name</label>
<input id= "name" type="name" name="name"> 

<label for="phone">phone</label>
<input id= "phone" type="phone" name="phone"> 

<button type="submit">submit</button>
</form>
<x-alert type="primary">
    <x-slot name=view>
      salam
    </x-slot>
    hello
  </x-alert>


@endsection
