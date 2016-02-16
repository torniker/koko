@extends('layouts.master')

@section('title', 'My Sublime Setup for PHP Development')

@section('content')
    <div>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>
                    My Sublime Setup for PHP Development
                </h1>
                <p>Sublime Text is the best text editor I have worked with.</p>
            </div>
        </div>
        <div class="content container">
            <p>
                In this article I will describe my setup of sublime text 3.
                I am using <a href="http://www.sublimetext.com/3" target="_blank">Sublime Text 3</a>,
                it's beta but I never had any problems with it.
            </p>
            <p>
                Lets get started... Of course after installing sublime,
                first package I install is <a href="https://packagecontrol.io/" target="_blank">Package Control</a>.
                There are a lot of info about this package and I won't go into details.
            </p>
            <h4>Prerequisites</h4>
            <p>
                Of cource PHP should be installed and available, or you need to write path to php for every package that uses it.
                Also phpcs (PHP Code Sniffer) should be installed so that auto formatting php files would work.
            </p>
            <hr>
            <h3>
                User settings of sublime
            </h3>
            <script src="https://gist.github.com/torniker/0d4cf1e1ab0ff10a8fda.js"></script>
            <hr>
            <h3>
                The List of installed packages.
                <br>
                <small>Below I will give all the custom settings I have set for each package.</small>
            </h3>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <ul class="nav nav-tabs nav-stacked original-font-size" role="tablist">
                        <li>
                            <a href="https://github.com/skuroda/Sublime-AdvancedNewFile" target="_blank">
                                Advanced New File
                                <small>Advanced file creation for Sublime Text 2 and Sublime Text 3.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/alienhard/SublimeAllAutocomplete" target="_blank">
                                All Autocomplete
                                <small>Extends the default autocomplete to find matches in all open files.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/akalongman/sublimetext-autobackups">
                                Auto Backups
                                <small>Automatically saves a backup copy of file every time you save or open it.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#codeformatter" role="tab" data-toggle="tab">
                                Code Formatter
                                <small>Beautify source code.</small>
                                <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/spadgos/sublime-jsdocs" target="_blank">
                                Doc Blockr
                                <small>Writing documentation a breeze.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/jisaacks/GitGutter" target="_blank">
                                GitGutter
                                <small>Shows an icon indicating whether a line has been inserted, modified or deleted.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Medalink/laravel-blade" target="_blank">
                                Laravel Blade Highliter
                                <small>Syntax definitions for the Laravel 4 & 5 Blade engine.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#phpcompanion" role="tab" data-toggle="tab">
                                PHP Companion
                                <small>Cool stuff for PHP 5.3+ coding session.</small>
                                <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#phpfmt" role="tab" data-toggle="tab">
                                phpfmt
                                <small>Tooling for PHP - testing, code coverage and formatting</small>
                                <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/SublimeLinter/SublimeLinter3" target="_blank">
                                SublimeLinter (json, php, phpcs)
                                <small>Interactive code linting.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/vuejs/vue-syntax-highlight" target="_blank">
                                Vue Syntax Highlight
                                <small>Syntax definitions for Vue.js.</small>
                                <span class="pull-right"><i class="fa fa-external-link"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="codeformatter">
                        <script src="https://gist.github.com/torniker/b9181216304a85574885.js"></script>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="phpcompanion">
                        <script src="https://gist.github.com/torniker/a7125e26be481a76db45.js"></script>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="phpfmt">
                        <script src="https://gist.github.com/torniker/0e00593cbc1f12bed511.js"></script>
                    </div>
                </div>
            </div>
            <hr>
            <h3>
                Custom Key Binding
            </h3>
            <script src="https://gist.github.com/torniker/b7462d9b8b17065cbf90.js"></script>
        </div>
    </div>
@endsection
