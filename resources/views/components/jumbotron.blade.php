<header class="jumbotron my-4">
    <h1 class="display-3">{{$title}}</h1>
    <p class="lead">{{$description}}</p>
    <x-atoms.button-link :link="route('notes.create')" text="Create New Note" />
</header>