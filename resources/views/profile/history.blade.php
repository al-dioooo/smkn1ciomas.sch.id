@extends('layout.guest')

@section('container')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Sorry</h2>
                    <p>
                        Were currently working on this page.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Sejarah Singkat</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->
@endsection
