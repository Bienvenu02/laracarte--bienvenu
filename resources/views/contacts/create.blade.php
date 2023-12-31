@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, pleasea <a href="mailto:bienvenuhounye05@gmail.com">ask for help.</a></p>
                <form action="{{ route('contact_path') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        @error("name")
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        @error("email")
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="10" rows="10" class="form-control" required></textarea>
                        @error("message")
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection