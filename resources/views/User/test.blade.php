<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  </html>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">phone</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as  $user )
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->phone}}</td>
          @csrf
</form>
       
      </tr>
      @endforeach
      
        
    </tbody>
  </table>
  <a href={{ route('user.create') }}>create</a>
  <x-card type="card">
    {{-- <x-slot name=view>
      salam
    </x-slot>
    hello --}}
  </x-card>
</body>
