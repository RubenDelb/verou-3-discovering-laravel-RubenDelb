@extends('layouts.app')

@section('body')
    <h2 class="bg-indigo-400">Hello World</h2>
    <p class="mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, nemo magni. Soluta voluptatum hic illum rerum
        voluptatem, debitis iusto ratione inventore, corporis, voluptate molestiae vero. Ipsa dolorem ut iure nihil!</p>
    {{ $errors }}
    <form action="" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@email.com">
        <label for="password">password: </label>
        <input type="password" name="password" id="password" placeholder="Enter password here...">
        <input type="submit" value="CLICK ME">
    </form>
@endsection
