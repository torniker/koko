@extends('layouts.master')

@section('title', 'Laravel Continuous Deployment on VPS over Github')

@section('content')

    <div class="jumbotron">
        <div class="container text-center">
            <h1>
                Laravel Continuous Deployment on VPS over Github
            </h1>
            <p>Envoyer like deployment to VPS with zero downtime.</p>
        </div>
    </div>
    <div class="content container">
        <p>
            This solution is tested and working for Digital Ocean VPS server with Ubuntu 14.04.
        </p>
        <p>
            <strong>This article will describe:</strong>
        </p>
        <ul>
            <li>How to configure Ubuntu 14.04 for Laravel Project</li>
            <li>Deployment process of the project</li>
        </ul>
        <p>
            <strong>Prerequisites:</strong>
        </p>
        <ul>
            <li>Server with Ubuntu 14.04</li>
            <li>Project with Git version controll</li>
            <li>Github repository for the project</li>
        </ul>
        <hr>
        <h3>How to configure Ubuntu 14.04 for Laravel Project</h3>
        <p>
            Softwares required on the server:
        </p>
        <ul>
            <li>nginx</li>
            <li>
                PHP 7.0
                <ul>
                    <li>PHP mcrypt</li>
                    <li>PHP curl</li>
                    <li>PHP gd</li>
                    <li>PHP json</li>
                    <li>PHP sqlite3</li>
                </ul>
            </li>
            <li>Composer</li>
            <li>NodeJS (npm)</li>
            <li>MySQL Server</li>
        </ul>
        <p>
            List of commands to install all softwares listed above:
            <script src="https://gist.github.com/torniker/ee290504a5591c08e5d3.js"></script>
            Now lets create directories needed for the deployment and the project:
            <pre>mkdir /home/user/deploy
mkdir /home/user/deploy/files
mkdir /home/user/storage
mkdir /home/user/vendor
vim /home/user/.env #put your env data in here</pre>
        </p>
        <p>
            Create two files in /etc/nginx/sites-available/ domain.com and deploy.domain.com and put following configuration in it:
            <script src="https://gist.github.com/torniker/bb89fd18ec4a999b4127.js"></script>
            You need to change server_name and root for deploy.domain.com to
            <pre>server_name deploy.domain.com;
root "/home/user/deploy/public";</pre>
        </p>

        <p>
            At this point we do not have /home/user/current folder so lets put the project in it.
            We need to download the project from github or upload it to the server using ftp or sftp and put it e.g. in /home/user/project folder.
            Then create a symlink for it using followin command <pre>ln -sfT /home/user/project /home/user/current</pre>
        </p>
        <p>
            Now we can start enable our virtual hosts and start nginx:
            <pre>sudo ln -s /etc/nginx/sites-available/domain.com /etc/nginx/sites-enabled/domain.com
sudo ln -s /etc/nginx/sites-available/deploy.domain.com /etc/nginx/sites-enabled/deploy.domain.com
sudo service nginx restart</pre>
        </p>
        <hr>
        <h3>Deployment script</h3>
        <p>
            Put the following files into corresponding folders:
            <br>
            /home/user/deploy/build.sh
            <script src="https://gist.github.com/torniker/9037d147d0582ca9777b.js"></script>
            /home/user/deploy/public/index.php
            <script src="https://gist.github.com/torniker/23002efbb2c62241bf99.js"></script>
        </p>
        <p>
            Now you should configure github repository to request deploy.domain.com on push event.
            From repository settings -> webhooks &amp; services, add a webhook and define your payload URL.
        </p>
        <p>
            Now you can push new commit to your github and see if the deployment process works.
            It can have permission problems, because php is running using www-data user on the server.
            There are many ways to fix this, simply you can make www-data an owner of all files and folder in /home/user.
        </p>
    </div>
@endsection
