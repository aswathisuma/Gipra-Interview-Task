@extends('layout.app')

{{-- Page Title --}}
@section('title', $title)

{{-- Page Content --}}
@section('page_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

@endsection
{{-- /End Page Content --}}
