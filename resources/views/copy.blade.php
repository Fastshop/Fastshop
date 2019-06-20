@extends('layouts.demo')

@section('head')
    <script src="https://cdnjs.loli.net/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
@endsection

@section('body')

    <div class="container">
        <!-- Content here -->

        <div class="row p-4">

            <div class="col-sm">

                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                </div>
                <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>
                <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                </div>
                <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                </div>
                <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                </div>
                <div class="alert alert-dark" role="alert">
                    A simple dark alert—check it out!
                </div>
                One of three columns
            </div>
            <div class="col-sm">
                One of three columns
            </div>
            <div class="col-sm">
                <button class="btn btn-copy btn-primary" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                    <i class="fa fa-copy"></i> Copy to clipboard
                </button>
            </div>
        </div> <!-- .row -->

    </div> <!-- .container -->

    <script>
        $(function() {
            new ClipboardJS('.btn-copy');
        });
    </script>
@endsection
