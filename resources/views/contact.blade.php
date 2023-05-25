@extends('layouts/admin/main')
@section('current')
    <li class="breadcrumb-item active">Contact</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Liste des contacts</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reponse['contacts'] as $contact)
                                    <tr>
                                        <td>{{$contact->contact_email}}</td>
                                        <td>{{$contact->contact_phone}}</td>
                                        <td>{{$contact->contact_message}}</td>
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
