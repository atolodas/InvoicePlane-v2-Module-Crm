@extends('core::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Address
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admincp.core.addresses.store']) !!}

                        @include('admincp.core.addresses.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
