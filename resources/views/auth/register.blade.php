@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">INSCRIVEZ VOUS</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">Nom</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">Prénoms</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="job" class="col-md-4 col-form-label text-md-end">Profession</label>

                            <div class="col-md-6">
                                <select name="job" id="job" class="form-control">
                                    <option value="Développeur Web">Développeur Web</option>
                                    <option value="Développeur logiciel" selected>Développeur logiciel</option>
                                    <option value="Administrateur système">Administrateur système</option>
                                    <option value="Analyste de données">Analyste de données</option>
                                    <option value="Ingénieur réseau">Ingénieur réseau</option>
                                    <option value="Scrum Master">Scrum Master</option>
                                    <option value="Ingénieur DevOps">Ingénieur DevOps</option>
                                    <option value="Concepteur UX/UI">Concepteur UX/UI</option>
                                    <option value="Administrateur de base de données">Administrateur de base de données</option>
                                    <option value="Spécialiste en intelligence artificielle">Spécialiste en intelligence artificielle</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phonenumber" class="col-md-3 col-form-label">Numéro Téléphone</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" value="+229" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="firstnums" id="code_region" class="form-control">
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="46">46</option>
                                            <?php for ($i = 50; $i <= 69; $i++) { ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                            <option value="90">90</option>
                                            <option value="91">91</option>
                                            <option value="92">92</option>
                                            <?php for ($i = 94; $i <= 99; $i++) { ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="lastnums" class="form-control" pattern="[0-9]{6}" maxlength="6" required>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
