@extends('layouts.app')

@section('title','Home')

@section('content')
@foreach ($users as  $user )

<x-card type="card">
    {{$user->id}}
    {{$user->name}}
{{-- <x-slot name=view>
  salam
</x-slot>
hello --}}
</x-card>
@endforeach
   @endsection