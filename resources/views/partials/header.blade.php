<header>
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="site-name">
            {{ '<Jokes.bool>' }}
        </div>
        <nav>
            <ul class="d-flex">
                <li>
                    <a href="{{ route('homepage') }}" class="homepage">Homepage</a>
                </li>
                <li>
                    <a href="{{ route('jokes.index') }}" class="cp">Jokes Panel</a>
                </li>
            </ul>
        </nav>

    </div>
</header>