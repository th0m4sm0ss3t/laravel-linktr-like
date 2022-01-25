@extends('layout.app')

@section('content')

<section class="links">
    <h1 class="formTitle">Modifier votre lien</h1>

    <form class="form" action="{{ route('link.updateOneInDB', ['id' => $link->id]) }}" method="POST">

        <!-- for security -->
        @csrf

        <div class="formSection">
            <label for="title">Nom de votre lien :</label>
            <input type="text" name="title" required value="{{ $link->title }}">
        </div>

        <div class="formSection">
            <label for="url">Votre url :</label>
            <input type="text" name="url" required value="{{ $link->url }}">
        </div>

        <div class="formNameBtns">
            <button class="formNameBtnsCreate" type="submit">Modifier le lien</button>
            <button class="formNameBtnsCancel" type="reset">Annuler</button
        </div>
    </form>
</section>

@endsection
