@extends('layout.site-layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @include('layout.top-nav')

        <div class="content">
            <div class="title m-b-md">
                Form Examples Page
            </div>

            <section class="form-examples">
                <h2>Simple Form</h2>
                <form method="post" action="{{ route('forms.simple-form') }}?utm=12345">
                    {{ csrf_field() }}
                    <input type="text" name="firstName">
                    <input type="submit">
                </form>

                <h2>Array Form</h2>
                <form method="post" action="{{ route('forms.array-form') }}">
                    {{ csrf_field() }}
                    <h4>Employee 0</h4>
                    <input type="text" name="employees[0][firstName]">
                    <input type="text" name="employees[0][lastName]">

                    <h4>Employee 1</h4>
                    <input type="text" name="employees[1][firstName]">
                    <input type="text" name="employees[1][lastName]">

                    <input type="submit">
                </form>

                <h2>Upload Profile Picture Form</h2>
                <form method="post" action="{{ route('forms.picture-upload') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" name="name">
                    <input type="file" name="profile_picture">

                    <input type="submit">
                </form>
            </section>

            @include('modules.links')
        </div>
    </div>
@endsection

