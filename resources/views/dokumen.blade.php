@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Download Dokumen
        @endslot
        @slot('li_1')
            Data - Data
        @endslot
        @slot('li_2')
            Download Dokumen
        @endslot
    @endcomponent

<div class="content">
    <div class="container">
        <div class="row col-12">
            <h1>Download Documents</h1>

            <p>Click the links below to download the documents:</p>

            <a href="assets/img/dppkb/struktur.jpeg" download="document1-name.doc">Download Document 1</a>
            <br>
            <a href="assets/img/dppkb/struktur.jpeg" download="document2-name.doc">Download Document 2</a>
        </div>
    </div>
</div> 
@endsection
