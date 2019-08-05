<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel Answers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Recent</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Popular</a>
            </li>
        </ul>
        <ul class="nav navbar-nav nabbar-right">
            <a href="" class="btn btn-primary" style="margin-top:5px;">Ask A Question</a>
        </ul>
    </div>
</nav>