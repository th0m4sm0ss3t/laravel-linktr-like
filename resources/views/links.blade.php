@extends('layout.app')

@section('content')
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
