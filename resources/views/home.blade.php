@extends('layouts.app')

@section('content')
<div class="container fs-3 font-weight-bold">
    @guest
        <div class="fs-2">
            Vous n'êtes pas connecté !
        </div>

    @else
        Bienvenue {{ Auth::user()->job }} {{ Auth::user()->lastname }} {{ Auth::user()->firstname }}
        </br>
        </br>

        @if(Auth::user()->isadmin)
            <div class="fs-4">
                Liste des Users enregistrés
                </br>

                <div class="table-responsive fs-5">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Email</th>
                          <th>Job</th>
                          <th>Numéro</th>
                          <th>Est Admin</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td> {{ $user->id }} </td>
                            <td> {{ $user->lastname }} </td>
                            <td> {{ $user->firstname }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->job }} </td>
                            <td> {{ substr($user->phonenumber, 0, 5) . ' ' . substr($user->phonenumber, 5, 2) . ' ' . substr($user->phonenumber, 7, 2) . ' ' . substr($user->phonenumber, 9, 2) . ' ' . substr($user->phonenumber, 11, 2) }} </td>
                            <td> {{ $user->isadmin ? 'Vrai' : 'Faux'}} </td>
                        </tr> 
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  
            </div>

        @else
            <div class="fs-5">
                C'est tout ce que vous verrez car vous n'êtes pas Admin.
            </div>

        @endif
    @endguest
</div>
@endsection
