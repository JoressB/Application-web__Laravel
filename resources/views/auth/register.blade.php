@extends('layouts.appAuth')

@section('title', 'Enregistrement')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white text-center shadow bg-orange-clair">
                        {{ __('ENREGISTREMENT') }}
                    </div>
                    <div class="card-body">
                        <div class="col-12 mr-2">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!--Nom-->
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOM(s)') }}</label>
                                <div class="col-md-6 form">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Prenom(s)-->
                            <div class="form-group row">
                                <label for="forename" class="col-md-4 col-form-label text-md-right">{{ __('Prénom(s)') }}</label>
                                <div class="col-md-6 form">
                                    <input id="forename" type="text" class="form-control @error('forename') is-invalid @enderror" name="forename" value="{{ old('forename') }}" required autocomplete="forename" autofocus>
                                    @error('forename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Email-->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Téléphone-->
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('N° Téléphone') }}</label>
                                <div class="col-md-6 form">
                                    <input id="phoneNumber" type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                                    @error('phoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Nationalité-->
                            <div class="form-group row">
                                <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationalité') }}</label>
                                <div class="col-md-6 form">
                                    <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus>
                                    @error('nationlity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Catégorie-->
                                <div class="form-group row">
                                    <label for="category" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                                    <div class="col-md-6 form">
                                        <select id="category" class="custom-select custom-select-md mb-3" name="category" required>
                                            <option selected>Autres</option>
                                            <option value="Personnel">Personnel</option>
                                            <option value="Etudiants">Etudiant</option>
                                            <option value="Parents">Parent</option>
                                        </select>
                                    </div>
                                </div>

                                <!--Promotion-->
                                <div class="form-group row">
                                    <label for="promotion" class="col-md-4 col-form-label text-md-right">Promotion</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="promotion" name="promotion" value="{{ old('promotion') }}" aria-describedby="promotionHelp" placeholder="Exemple : FA2020 ; Exars2020 ; O2020 ; ...">
                                        <small id="promotionHelp" class="form-text text-center text-black">Renseignez le champ ci-dessus si et seulement si vous êtes un étudiant</small>
                                    </div>
                                </div>

                                <!--Date de naissance-->
                                <div class="form-group row">
                                    <label for="birth_date" class="col-md-4 col-form-label text-md-right">Date de naissance</label> <!--date de naissance-->
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('name') }}" aria-describedby="birthHelp" placeholder="Nationalité">
                                        <small id="birthHelp" class="form-text text-center text-black">Optionnel</small>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation du mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary bg-orange-p border-0">
                                        {{ __("S'enregistrer") }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
