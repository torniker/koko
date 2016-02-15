<nav class="navbar navbar-default">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    Tornike Razmadze
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ $isActive('/') }}">
                        <a href="/" >About Me</a>
                    </li>
                    <li class="dropdown {{ $isActive('notes', 1) }}">
                        <a role="button" class="dropdown-toggle" data-toggle="dropdown">
                            Notes <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" >
                            <li class="{{ $isActive('notes/my-sublime-setup-for-php-development') }}">
                                <a href="/notes/my-sublime-setup-for-php-development">My Sublime Setup for PHP Development</a>
                            </li>
                            <li class="{{ $isActive('notes/laravel-build-and-deployment-on-vps-over-github') }}">
                                <a href="/notes/laravel-build-and-deployment-on-vps-over-github">Laravel Continuous Deployment on VPS over Github</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown {{ $isActive('micro-services', 1) }}">
                        <a role="button" class="dropdown-toggle" data-toggle="dropdown">
                            Micro Services <span class="caret"></span>
                        </a>
                        <ul  class="dropdown-menu" >
                            <li class="{{ $isActive('micro-services/user-info') }}">
                                <a href="/micro-services/user-info">User Info</a>
                            </li>
                            <li class="{{ $isActive('micro-services/date-converter') }}">
                                <a href="/micro-services/date-converter">Date Converter</a>
                            </li>
                            <li class="{{ $isActive('micro-services/password-generator') }}">
                                <a href="/micro-services/password-generator">Password Generator</a>
                            </li>
                            <li class="{{ $isActive('micro-services/password-hasher') }}">
                                <a href="/micro-services/password-hasher">Password Hasher</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="https://github.com/torniker"><i class="fa fa-lg fa-github"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/torniker"><i class="fa fa-lg fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="http://stackoverflow.com/users/413026/koko"><i class="fa fa-lg fa-stack-overflow"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/torniker"><i class="fa fa-lg fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
