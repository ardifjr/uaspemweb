@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Bidang Keluarga Berencana Ketahanan dan Kesejahteraan Keluarga
        @endslot
        @slot('li_1')
           Layanan
        @endslot
        @slot('li_2')
            Bidang Keluarga Berencana Ketahanan dan Kesejahteraan Keluarga
        @endslot
    @endcomponent

<div class="content">
    <div class="container">
        <div class="row col-12">
            
        </div>
    </div>
</div> 
@endsection
