@extends('layouts.master')

@section('title', 'About - Tornike Razmadze')

@section('content')
    <div class="jumbotron no-bottom-margin">
        <div class="container">
            <h1>
                About Me
            </h1>
            <p>
                Developer since 2001. Always in search of something new and eager to study and become a better professional.
                Fullstack Developer. Enjoy sharing information and experience. Think that is a way of learning something new.
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="nowrap row-left-title col-xs-12 col-md-2">
                <h2><i class="fa fa-laptop"></i> Skills</h2>
            </div>
            <div class="col-xs-12 col-md-10 scroll-container">
                <div class="scroll-arrow scroll-right text-center">
                    <a class="btn btn-default arrow-right"><i class="fa fa-chevron-left"></i></a>
                </div>
                <div class="skill-list">
                    <div class="scrollable">
                        <a href="http://php.net/" class="btn btn-link">PHP</a>
                        <a href="http://laravel.com/" class="btn btn-link">Laravel</a>
                        <a href="http://www.codeigniter.com/" class="btn btn-link">CodeIgniter</a>
                        <a href="https://en.wikipedia.org/wiki/SQL" class="btn btn-link">SQL Databases</a>
                        <a href="https://en.wikipedia.org/wiki/JavaScript" class="btn btn-link">JavaScript (ES 6/7)</a>
                        <a href="http://vuejs.org/" class="btn btn-link">Vue.js</a>
                        <a href="https://www.polymer-project.org/1.0/" class="btn btn-link">Polymer</a>
                        <a href="https://www.docker.com/" class="btn btn-link">Docker</a>
                        <a href="https://laravel.com/docs/master/homestead" class="btn btn-link">Vagrant (Homestead)</a>
                        <a href="https://en.wikipedia.org/wiki/NoSQL" class="btn btn-link">NoSQL</a>
                        <a href="https://nodejs.org/en/" class="btn btn-link">Node.js</a>
                        <a class="btn btn-link">HTML / CSS</a>
                        <a class="btn btn-link">SASS / LESS</a>
                        <a href="http://developer.android.com/index.html" class="btn btn-link">Android Development</a>
                        <a href="https://www.oracle.com/java/index.html" class="btn btn-link">Java</a>
                    </div>
                </div>
                <div class="scroll-arrow scroll-left text-center">
                    <a class="btn btn-default arrow-left"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="col-xs-12 col-sm-6 placeholder text-center">
                <div class="text-center"><i class="fa fa-code fa-5x"></i></div>
                <h4>More Then 15 Years of Working Experience</h4>
                <span class="text-muted">
                    My first comupter was IBM XT 286. I was seven when we got one.
                    After that moment I wanted to know everything about computers.
                    My father did some coding back then and I was sitting next to him
                    watching all those strange combination of words and symbols and I knew
                    that I wanted to learn it. From that moment I am learning...
                </span>
            </div>
            <div class="col-xs-12 col-sm-6 placeholder text-center">
                <div class="text-center"><i class="fa fa-briefcase fa-5x"></i></div>
                <h4>Developed More Then 200 Projects</h4>
                <span class="text-muted">
                    Worked in several web development companies.
                    Created several custom made content management systems and worked with open source ones.
                    Grown from working on simple projects by myself to
                    being a team leader in the biggest web development company in Georgia.
                </span>
            </div>
        </div>
    </div>
    <div class="container experience">
        <div class="page-header">
            <h2><i class="fa fa-briefcase"></i> Work Experience</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <ul class="nav nav-tabs nav-stacked xpcompanies" role="tablist">
                    <li class="active">
                        <a href="#xpitdc" role="tab" data-toggle="tab" class="h5">
                            ITDC
                            <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="#xpgeodna" role="tab" data-toggle="tab" class="h5">
                            GeoDNA
                            <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="#xpilia" role="tab" data-toggle="tab" class="h5">
                            Ilia State University
                            <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="#xpibsu" role="tab" data-toggle="tab" class="h5">
                            International Black Sea Univrsity
                            <span class="pull-right"><i class="fa fa-caret-right"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="xpitdc">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading" role="tab">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#itdcsenior">
                                        Senior Developer <small>2008 - present</small>
                                    </a>
                                </h5>
                            </div>
                            <div id="itdcsenior" class="collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <strong>Responsibilities:</strong>
                                    <ul>
                                        <li>Analyze and Provide the business process recommendations in frame of project to the customer</li>
                                        <li>Lead the team of project that involves 3-5 members</li>
                                        <li>Instruct and assist the group members</li>
                                        <li>Assign tasks to the members of the team</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#itdctrainer">
                                        Trainer <small>2012 - present</small>
                                    </a>
                                </h5>
                            </div>
                            <div id="itdctrainer" class="collapse" role="tabpanel">
                                <div class="panel-body">
                                    <strong>Responsibilities:</strong>
                                    <ul>
                                        <li>Create course syllabuses of Interface Development</li>
                                        <li>Create course syllabuses of Web Programming and Databases</li>
                                        <li>Supervisor of "Interface Development" trainers</li>
                                        <li>"Web Programming and Databases" trainer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#itdcdeveloper">
                                        Developer <small>2006 - 2008</small>
                                    </a>
                                </h5>
                            </div>
                            <div id="itdcdeveloper" class="collapse" role="tabpanel">
                                <div class="panel-body">
                                    <strong>Responsibilities:</strong>
                                    <ul>
                                        <li>Analyze assigned task</li>
                                        <li>Develop appropriate web-application or web-site</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="xpgeodna">
                    <div class="panel">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a role="button" href="#geodnaxp">
                                    Data Manager / Programmer / Server Admin <small>2006 - present</small>
                                </a>
                            </h5>
                        </div>
                        <div class="panel-body">
                            <strong>Responsibilities:</strong>
                            <ul>
                                <li>Process, store and disseminate the marine data and metadata sampled by Georgian institutes and agencies</li>
                                <li>Communicate with foreign partners</li>
                                <li>Discuss and create formats according to suitable standard</li>
                                <li>Participate in standard creation together with European partners</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="xpilia">
                    <div class="panel">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a role="button" href="#geodnaxp">
                                    Lecturer <small>2013 - 2014</small>
                                </a>
                            </h5>
                        </div>
                        <div class="panel-body">
                            Teaching Web Programming. Including basics of HTML, CSS and JavaScript. For server-side developemnt PHP and MySQL.
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="xpibsu">
                    <div class="panel">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a role="button" href="#geodnaxp">
                                    Lecturer <small>2013 - 2014</small>
                                </a>
                            </h5>
                        </div>
                        <div class="panel-body">
                            Teaching Web Programming. Including basics of HTML, CSS and JavaScript. For server-side developemnt PHP and MySQL. The language of instruction has been English
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron no-bottom-margin">
        <div id="education" class="container">
            <h2 class="text-center"><i class="fa fa-university"></i> Education</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 placeholder text-center">
                    <h4>
                        Ilia State University
                        <small>2009 - 2012</small>
                    </h4>
                    <span class="text-muted">
                        Master’s degree studies in Calculus Mathematics and Informatics
                    </span>
                    <br />
                    <br />
                    <p>
                        <a href="http://iliauni.edu.ge/en/" target="_blank" class="btn btn-primary">
                            Visit Website <i class="fa fa-external-link"></i>
                        </a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 placeholder text-center">
                    <h4>
                        Iv. Javakhishvili Tbilisi State University
                        <small>2003 - 2008</small>
                    </h4>
                    <span class="text-muted">
                        Bachelor’s Degree in Applied Mathematics and Computer Sciences
                    </span>
                    <br />
                    <br />
                    <p>
                        <a href="https://tsu.ge/en/" target="_blank" class="btn btn-primary">
                            Visit Website <i class="fa fa-external-link"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="nowrap row-left-title col-xs-12 col-md-4 col-lg-3">
                <h2><i class="fa fa-language"></i> Languages</h2>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-9 scroll-container">
                <div class="lang-list">
                    <div class="col-xs-12 col-md-4 text-center">
                        <a href="https://en.wikipedia.org/wiki/Georgian_language" target="_blank" class="btn btn-link">
                            Georgian <span class="label label-primary">Native</span>
                            </a>
                        </div>
                    <div class="col-xs-12 col-md-4 text-center">
                        <a href="https://en.wikipedia.org/wiki/English_language" target="_blank" class="btn btn-link">
                            English <span class="label label-primary">Fluent</span>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 text-center">
                        <a href="https://en.wikipedia.org/wiki/Russian_language" target="_blank" class="btn btn-link">
                            Russian <span class="label label-primary">Good</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div id="projects" class="container">
            <h2 class="text-center">Projects</h2>
            <div class="col-xs-12 col-sm-6 placeholder text-center">
                <div class="text-center"><i class="fa fa-dashboard fa-5x"></i></div>
                <h4>Content Management System</h4>
                <span class="text-muted">
                    Custom Content Management System (CMS) for governmental, nongovernmental and media agencies.
                    System is very flexible. Development started in 2013, using CodeIgniter,
                    but after Laravel gained it's popularity CMS moved to Laravel.
                </span>
                <br><br>
                <span>
                    <strong>Features:</strong>
                    <span class="label label-primary">Category Management</span>
                    <span class="label label-primary">Text Pages</span>
                    <span class="label label-primary">Polls</span>
                    <span class="label label-primary">Diagram Builder</span>
                    <span class="label label-primary">Form Builder</span>
                    <span class="label label-primary">Google Maps</span>
                    <span class="label label-primary">Google Calendar</span>
                    <span class="label label-primary">Custom Maps</span>
                    <span class="label label-primary">User Management</span>
                    <span class="label label-primary">Permissions</span>
                    <span class="label label-primary">Roles</span>
                </span>
                <br><br>
                <span>
                    <strong>Built using:</strong>
                    <span class="label label-primary">CodeIgniter</span>
                    <span class="label label-primary">Laravel</span>
                    <span class="label label-primary">jQuery</span>
                    <span class="label label-primary">Twitter Bootstrap</span>
                    <span class="label label-primary">Composer</span>
                    <span class="label label-primary">Vagrant (Homestead)</span>
                    <span class="label label-primary">Git</span>
                </span>
            </div>
            <div class="col-xs-12 col-sm-6 placeholder text-center">
                <div class="text-center"><i class="fa fa-graduation-cap fa-5x"></i></div>
                <h4>Learning Management System</h4>
                <span class="text-muted">
                    Learning Management System (LMS) for one of the biggest university in Georgia.
                    This system enables students, administration and academic personnel to coordinate the learning process.
                </span>
                <br><br>
                <span>
                    <strong>Features:</strong>
                    <span class="label label-primary">Faculties’ Management</span>
                    <span class="label label-primary">Programs’ Management</span>
                    <span class="label label-primary">Courses’ Management</span>
                    <span class="label label-primary">Semester Management</span>
                    <span class="label label-primary">Students’ Management</span>
                    <span class="label label-primary">Lecturers’ Management</span>
                    <span class="label label-primary">Registration on Courses</span>
                    <span class="label label-primary">University Calendar Management</span>
                    <span class="label label-primary">Evaluation System</span>
                    <span class="label label-primary">Course Materials Management</span>
                    <span class="label label-primary">Variety of Reports</span>
                </span>
                <br><br>
                <span>
                    <strong>Built using:</strong>
                    <span class="label label-primary">CodeIgniter</span>
                    <span class="label label-primary">jQuery</span>
                    <span class="label label-primary">Twitter Bootstrap</span>
                    <span class="label label-primary">Composer</span>
                    <span class="label label-primary">Git</span>
                </span>
            </div>
            <div class="col-xs-12 col-sm-6 placeholder text-center">
                    <div class="text-center"><i class="fa fa-university fa-5x"></i></div>
                    <h4>Billing &amp; Financial Analysis</h4>
                    <span class="text-muted">
                        System for Billing and financial analysis for universities.
                        System is build on Laravel 5.1 + vuejs. It's a single page application with RESTful API.
                        The project was build using Domain Driven Design (DDD) and SOLID principles.
                    </span>
                    <br>
                    <br>
                    <span>
                        <strong>Features:</strong>
                        <span class="label label-primary">Sponsors’ management</span>
                        <span class="label label-primary">Accounts’ management</span>
                        <span class="label label-primary">Holiday management</span>
                        <span class="label label-primary">Payment plans’ management</span>
                        <span class="label label-primary">Student contracts’ management</span>
                        <span class="label label-primary">Obligations’ management</span>
                        <span class="label label-primary">Variety of reports</span>
                    </span>
                    <br>
                    <br>
                    <span>
                        <strong>Built using:</strong>
                        <span class="label label-primary">Laravel</span>
                        <span class="label label-primary">Doctrine</span>
                        <span class="label label-primary">Vuejs</span>
                        <span class="label label-primary">Twitter Bootstrap</span>
                        <span class="label label-primary">Composer</span>
                        <span class="label label-primary">Git</span>
                        <span class="label label-primary">Docker</span>
                        <span class="label label-primary">Vagrant (Homestead)</span>
                        <span class="label label-primary">Domain Driven Design (DDD)</span>
                        <span class="label label-primary">NodeJS</span>
                        <span class="label label-primary">Redis</span>
                        <span class="label label-primary">SOLID</span>
                        <span class="label label-primary">Test Driven Development (TDD)</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
