@extends('layouts/admin/main')
@section('current')
    <li class="breadcrumb-item active">Sinistre</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Liste des sinistres</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Assurance</th>
                                    <th>Police</th>
                                    <th>Nom</th>
                                    <th>Lieu</th>
                                    <th>Nature</th>
                                    <th>Date</th>
                                    <th>Téléphone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reponse['sinistres'] as $sinistre)
                                    <tr>
                                        <td>{{$sinistre->assurance}}</td>
                                        <td>{{$sinistre->police}}</td>
                                        <td>{{$sinistre->nom}}</td>
                                        <td>{{$sinistre->lieu}}</td>
                                        <td>{{$sinistre->nature}}</td>
                                        <td>{{$sinistre->date}}</td>
                                        <td>{{$sinistre->contact1}}</td>
                                        <td>
                                            <a href="{{url('/dashboard/sinistre', $sinistre->id)}}" class="btn btn-success btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
