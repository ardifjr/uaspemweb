@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Bidang Pengendalian Penduduk dan Penggerakan
        @endslot
        @slot('li_1')
           Layanan
        @endslot
        @slot('li_2')
            Bidang Pengendalian Penduduk dan Penggerakan
        @endslot
    @endcomponent

<div class="content">
    <div class="container">
        <div class="row col-12">
            
        </div>
    </div>
</div> 
@endsection
