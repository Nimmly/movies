<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <body>
    @include('partials.navbar')
    
    <div class="container">

    <form method="POST" action=''>
    <h2>Add new Movie</h2>
    {{ csrf_field() }}
        <div class="form-group">

            <label for="title">Title</label>
            <input id = "title" type= "text" name="title" class= "form-control">
            @include('partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label for="genre"> Genre</label>
            <textarea class="form-control" id="genre" name="genre"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'genre'])
        </div>

        <div class="form-group">
            <label for="director"> Director</label>
            <textarea class="form-control" id="director" name="director"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'director'])
        </div>
        
        <div class="form-group">
            <label for="year"> Year</label>
            <textarea class="form-control" id="year" name="year"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'year'])
        </div>


        <div class="form-group">
            <label for="director"> Storyline</label>
            <textarea class="form-control" id="storyline" name="storyline"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'storyline'])
        </div>

        <div class="form-group">
            <label for="is_published">ADD?</label>
            <input type="checkbox" class="form-control" id="is_published" name="is_published" value="1" checked>
        </div>
        

        <div class="form-group">
            <button type="submit" class="btn btn-primary">ADD</button>
        </div>
    </form></div>
    </body>
</html>
