@extends('layouts/admin/main')
@section('current')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ count($reponse['contacts']) }}</h3>

                        <p>Contacts</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{url('/dashboard/contact')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ count($reponse['sinistres']) }}</h3>

                        <p>Sinistres</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{url('/dashboard/sinistre')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        {{-- <div class="row">
        {{$reponse['data']}}
    </div> --}}
    </div><!-- /.container-fluid -->
@endsection
