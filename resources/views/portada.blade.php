<x-layout>

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index.html" class="logo">
                <span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">{{config('app.name')}}</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <header>
                <h1>This is Phantom, a free, fully responsive site<br />
                    template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
                <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus
                    arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros
                    aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
            </header>
            <x-tile-grid :posts="$posts" />
        </div>
    </div>
</x-layout>
