@extends('layouts.app')


@section('content')
<div>
    <form>
        <input type="text" wire:model="name">
        <input type="password" wire:model="password">    

        <button type="button" wire:click="login">Login</button>
    <form>
</div>
@endsection