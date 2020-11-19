@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>


    <section class="content">
    {{-- @include('flash-message') --}}
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                                        lora1
                    @foreach ($data as $key)
                        @if ($key['dev_id']=='arusip_lora1')        
                        {{ $key['payload_fields']['ax'] }}
                        @endif
                    @endforeach
                    <br>
                    lora3
                    @foreach ($data as $key)
                        @if ($key['dev_id']=='arusip_lora3')        
                        {{ $key['payload_fields']['ax'] }}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection