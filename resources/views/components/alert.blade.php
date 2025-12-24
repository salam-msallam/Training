@props(['type'])
<div class="alert alert-{{$type}}" role="alert">
    {{ $slot }}
    my name is :
    {{ $view }}
  </div>