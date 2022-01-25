@extends('layout.app')

@section('content')

<div class="infos">
    <img class="avatar" src="https://cdn.pixabay.com/photo/2017/11/13/07/14/cats-eyes-2944820_960_720.jpg" alt="balck cat with yellow eyes in a black background">
    <h1 class="name">Thomas</h1>
</div>

<section class="links">
    @foreach ($links as $link)
    <div class="link">
        <a class="linkUrl" target="_blank" href="{{ $link->url }}">
            <p class="linkName">{{ $link->title }}</p>
        </a>
        <div class="linkActions">
        <span class="linkAction">
                <a href="{{ route('link.update', ['id' => $link->id]) }}">
                    Editer ✍
                </a>
            </span>
            <span class="linkAction">
                <a href="{{ route('link.deleteOne', ['id' => $link->id]) }}">
                Supprimer 🗑
                </a>
            </span>
        </div>
    </div>
    @endforeach
</section>

<div class="subLinks">
    <button class="btn">
        <a class="btnUrl" href="{{ route('link.create') }}">Ajouter un lien</a>
    </button>
</div>

@endsection
