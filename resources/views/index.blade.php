<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tornike Razmadze</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div id="header">
                <img src="http://2.gravatar.com/avatar/24051a7844ff05ec2afd4e26034c3eff" class="thumbnail thumbnail-inline">
                <h1>
                    Tornike Razmadze
                    <small>
                        <a href="https://github.com/torniker"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/torniker"><i class="fa fa-linkedin"></i></a>
                        <a href="http://stackoverflow.com/users/413026/koko"><i class="fa fa-stack-overflow"></i></a>
                        <a href="https://twitter.com/torniker"><i class="fa fa-twitter"></i></a>
                    </small>
                </h1>
            </div>

            <div class="jumbotron">
                <p>
                    Developer since 2001. Always in search of something new and eager to study and become a better professional.
                    Fullstack Developer. Enjoy sharing information and experience with others and think that sharing is a way of learning something new.
                </p>
            </div>
            <div id="skills">
                <div class="page-header">
                    <h2><i class="fa fa-laptop"></i> Computer Skills</h2>
                </div>
                <ul class="nav nav-pills ">
                    <li><a href="http://php.net/"><i class="fa fa-circle-o"></i> PHP</a></li>
                    <li><a href="http://laravel.com/"><i class="fa fa-circle-o"></i> Laravel</a></li>
                    <li><a href="http://www.codeigniter.com/"><i class="fa fa-circle-o"></i> CodeIgniter</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/SQL"><i class="fa fa-circle-o"></i> SQL Databases</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/NoSQL"><i class="fa fa-circle-o"></i> NoSQL</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/JavaScript"><i class="fa fa-circle-o"></i> JavaScript</a></li>
                    <li><a href="https://nodejs.org/en/"><i class="fa fa-circle-o"></i> Server-side JavaScript (Node.js)</a></li>
                    <li><a><i class="fa fa-circle-o"></i> HTML / CSS</a></li>
                    <li><a><i class="fa fa-circle-o"></i> SASS / LESS</a></li>
                    <li><a href="https://www.docker.com/"><i class="fa fa-circle-o"></i> Docker</a></li>
                    <li><a href="http://developer.android.com/index.html"><i class="fa fa-circle-o"></i> Android Development</a></li>
                    <li><a href="https://www.oracle.com/java/index.html"><i class="fa fa-circle-o"></i> Java</a></li>
                </ul>
                <div class="page-header">
                    <h2><i class="fa fa-globe"></i> Languages</h2>
                </div>
                <ul class="nav nav-pills">
                    <li><a href="https://en.wikipedia.org/wiki/Georgian_language">Georgian <span class="label label-info">Native</span></a></li>
                    <li><a href="https://en.wikipedia.org/wiki/English_language">English <span class="label label-info">Fluent</span></a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Russian_language">Russian <span class="label label-info">Good</span></a></li>
                </ul>
            </div>
            <div id="experience">
                <div class="page-header">
                    <h2><i class="fa fa-briefcase"></i> Work Experience</h2>
                </div>
                        <h3 class="page-header">
                            <a href="http://www.itdc.ge/index.php?lang_id=ENG&sec_id=2">IT Development Center</a> <small>ITDC</small>
                        </h3>
                        <p>
                            <strong>About:</strong> Group of professional programmers, designers, and IT experts,
                            who develop veriety of products starting from promotional websites ending with complex systems in order to simplify or automate various business processes.
                        </p>

                        <h4 class="page-header">
                            Trainer
                            <small>2012 - present</small>
                        </h4>
                        <strong>Responsibilities:</strong>
                        <ul>
                            <li>Create course syllabuses of Interface Development</li>
                            <li>Create course syllabuses of Web Programming and Databases</li>
                            <li>Supervisor of "Interface Development" trainers</li>
                            <li>"Web Programming and Databases" trainer</li>
                        </ul>
                        <h4 class="page-header">
                            Senior Developer <small>2008 - present</small>
                        </h4>
                        <strong>Responsibilities:</strong>
                        <ul>
                            <li>Analyze and Provide the business process recommendations in frame of project to the customer</li>
                            <li>Lead the team of project that involves 3-5 members</li>
                            <li>Instruct and assist the group members</li>
                            <li>Assign tasks to the members of the team</li>
                        </ul>
                        <h4 class="page-header">
                            Developer <small>2006 - 2008</small>
                        </h4>
                        <strong>Responsibilities:</strong>
                        <ul>
                            <li>Analyze assigned task</li>
                            <li>Develop appropriate web-application or web-site</li>
                        </ul>

                        <h3 class="page-header">
                            <a href="http://oceandna.ge/">Georgian Designated National Agency for International Data and Information exchange</a>
                        </h3>
                        <p>
                            <strong>About:</strong> Designated National Agency operates within the Centre of Relations with UNESCO of the Ivane Javakhishvili Tbilisi State University
                        </p>
                        <h4 class="page-header">Data Manager / Programmer / Server Admin <small>2006 - present</small></h4>
                        <strong>Responsibilities:</strong>
                        <ul>
                            <li>Process, store and disseminate the marine data and metadata sampled by Georgian institutes and agencies</li>
                            <li>Communicate with foreign partners</li>
                            <li>Discuss and create formats according to suitable standard</li>
                            <li>Participate in standard creation together with European partners</li>
                        </ul>

                        <h3 class="page-header">
                            <a href="http://iliauni.edu.ge/en/">Ilia State University</a>
                        </h3>
                        <p><strong>About:</strong> Ilia State University is one of the biggest universities in Georgia.</p>
                        <h4 class="page-header">Lecturer <small>2013 - 2014</small></h4>
                        <p>
                            Teaching Web Programming. Including basics of HTML, CSS and JavaScript. For server-side developemnt PHP and MySQL.
                        </p>

                        <h3 class="page-header">
                            <a href="http://www.ibsu.edu.ge/en/index.php/en/">Black Sea International University</a>
                        </h3>
                        <p><strong>About:</strong> Black Sea International University has the objective of training Georgian and foreign students in scientific, technical and professional fields of study.</p>
                        <h4 class="page-header">Lecturer <small>2013 - 2014</small></h4>
                        <p>
                            Teaching Web Programming. Including basics of HTML, CSS and JavaScript. For server-side developemnt PHP and MySQL. The language of instruction has been English
                        </p>

            </div>

            <div id="education">
                <div class="page-header">
                    <h2><i class="fa fa-university"></i> Education</h2>
                </div>

                <h3 class="page-header">
                    <a href="http://iliauni.edu.ge/en/">Ilia State University</a>
                    <small>2009 - 2012</small>
                </h3>
                <p>Master’s degree studies in Calculus Mathematics and Informatics</p>
                <h3 class="page-header">
                    <a href="https://tsu.ge/en/">Ivane Javakhishvili Tbilisi State University</a>
                    <small>2003 - 2008</small>
                </h3>
                <p>Bachelor’s Degree in Applied Mathematics and Computer Sciences</p>
            </div>
        </div>
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/bundle.js') }}"></script>
    </body>
</html>
