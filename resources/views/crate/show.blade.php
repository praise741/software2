@extends('layouts.app')

@section('template_title')
    {{ $crate->name ?? 'Show Crate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Crate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('crates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $crate->name }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $crate->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Costprice:</strong>
                            {{ $crate->costprice }}
                        </div>
                        <div class="form-group">
                            <strong>Sellingprice:</strong>
                            {{ $crate->sellingprice }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
