@include('inc.header')
<div class="container">
    <br class="row">
        <legend>Read Article</legend>
        <p class="lead">{{ $articles->title }}</p></br>
        <p>{{ $articles->description }}</p>
    </div>
</div>
@include('inc.footer')