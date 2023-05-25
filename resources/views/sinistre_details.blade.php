@extends('layouts/admin/main')
@section('current')
    <li class="breadcrumb-item active">Sinistre</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            
            <div class="container col-md-12">
                <p class="lead">Sinistre de {{$reponse['sinistre']->nom}}</p>
                    

                <div class="table-responsive">
                  <table class="table">
                    <tbody><tr>
                      <th style="width:50%">Assurance:</th>
                      <td>{{$reponse['sinistre']->assurance}}</td>
                    </tr>
                    <tr>
                      <th>Police</th>
                      <td>{{$reponse['sinistre']->police}}</td>
                    </tr>
                    <tr>
                      <th>Nom et prénoms:</th>
                      <td>{{$reponse['sinistre']->nom}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$reponse['sinistre']->email}}</td>
                    </tr>
                    <tr>
                        <th>Numéro princpal</th>
                        <td>{{$reponse['sinistre']->contact1}}</td>
                      </tr>
                      <tr>
                        <th>Numéro secondaire</th>
                        <td>{{$reponse['sinistre']->contact2}}</td>
                      </tr>
                      <tr>
                        <th>Lieu</th>
                        <td>{{$reponse['sinistre']->lieu}}</td>
                      </tr>
                      <tr>
                        <th>Nature</th>
                        <td>{{$reponse['sinistre']->nature}}</td>
                      </tr>
                      <tr>
                        <th>Date</th>
                        <td>{{$reponse['sinistre']->date}}</td>
                      </tr>
                      <tr>
                        <th>Details</th>
                        <td>{{$reponse['sinistre']->details}}</td>
                      </tr>
                  </tbody></table>
                </div>
              </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
