<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
</head>

<body>
    @include('layout.nav')
    <section>
        @if (session('success'))
            <div class="alert-box">
                <p>{{ session('success') }}</p>
                <button onclick="this.parentElement.style.display='none';">Close</button>
            </div>
        @endif
        <div class="contact-box">

            <form action="/uMessage" method="post">
                @csrf
                <div class="try">
                    <input type="text" class="Form" name="name" label="Your name" value="{{ $contact->name }}"
                        required>
                </div>

                <div class="try">
                    <input type="text" class="Form" name="email" label="Your email" required
                        value="{{ $contact->email }}">
                </div>

                <div class="try">
                    <input type="number" class="Form" name="phnum" label="Your phone number" required
                        value="{{ $contact->phnum }}">
                </div>

                <div class="try">
                    <textarea type="text" class="Form1" rows="3" name="Message" label="Your message" required>{{ $contact->Message }}</textarea>
                </div>
                <input type="hidden" name="id" value={{ $id }}>
                <button type="submit" class="Submit_Button">Send message</button>
            </form>
        </div>
    </section>
    @include('layout.footer')
