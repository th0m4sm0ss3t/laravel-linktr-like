@extends('layout.app')

@section('content')

<section class="form">
    <h1 class="formTitle">Créer un nouveau lien</h1>

    <form class="form" action="{{ route('link.createInDB') }}" method="POST">

        <!-- for security -->
        @csrf

        <div class="formSection">
            <label for="title">Nom de votre lien :</label>
            <input type="text" name="title" required placeholder="Ex: Instagram">
        </div>

        <div class="formSection">
            <label for="url">Votre url :</label>
            <input type="text" name="url" required placeholder="Ex: http://instagram.com/truc">
        </div>

        <div class="formNameBtns">
            <button class="formNameBtnsCreate" type="submit">Créer le lien</button>
            <button class="formNameBtnsCancel" type="reset">Annuler</button
        </div>
    </form>
</section>

@endsection
