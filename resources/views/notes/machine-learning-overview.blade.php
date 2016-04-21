@extends('layouts.master')

@section('title', 'Machine Learning Overview')

@section('content')
    <div>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>
                    Machine Learning
                </h1>
                <p>
                Recently I've started (again) a course of <a href="https://www.coursera.org/learn/machine-learning/" target="_blank">Machine Learning on Coursera.</a>
                These are some notes about the course.
                </p>
            </div>
        </div>
        <div class="content container">
            <p>
                Machine Learning problems can be seperated into two major parts: <strong>Supervised</strong> and <strong>Unsupervised</strong> machine learning.
            </p>
            <p>
                Supervised machine learning is when we have some right answers for some amount of inputs and want to predict right anwsers for different inputs.
            </p>
            <p>
                In Unsupervised machine learning programs we does not have any right anwsers it makes clastering of data.
            </p>
            <p>
                To understand them better, here are some examples.
            </p>
            <h2>Supervised Machine Learning Example</h2>
            <h3>Regression Problem</h3>
            <p>
                Let's say we want to predict housing prices. And we have some data about the prices of houses and what was the total area of each house.
            </p>

            <table-body data-provider="/json/house-prices-by-area.json"></table-body>
            <p>
                Lets plot the dataset, on the horizontal (x) axis we will have area of the house and the vertical (y) axis will be the price.
            </p>
            <scatter-plot
                title="House Prices by Area"
                subtitle=""
                x-axis-label="Area"
                y-axis-label="Price"
                data-provider="/json/house-prices-by-area.json">
            </scatter-plot>
            <p>
                Now we need to come up with a function that takes area and tells us the predicted price.
            </p>
            <p>
                Let's say x - is the area of the house and y is the price from the dataset.
            </p>
            <p>
                So we need to come up with a differentiable function h(x) that gives us minimum of following <strong>(h(x)-y)<sup>2</sup></strong> (Squared error function).
                The function can be linear, quadratic, cubic, logaritmic etc.
                For example lets say we want to find a linear function that best fits our dataset.<br>
                General representation of linear function would be: <strong>h(x) = Θ<sub>0</sub> + Θ<sub>1</sub>x</strong>.
                So we need to choose Θ<sub>0</sub> and Θ<sub>1</sub> that gives us the closest results to y.
            </p>
            <h5>Summary:</h5>
            <p>
                Hypothesis: <strong>h<sub>Θ</sub>(x) = Θ<sub>0</sub> + Θ<sub>1</sub>x</strong><br>
                Cost Function: <strong>J(Θ<sub>0</sub>, Θ<sub>1</sub>) = 1 / 2m Σ(h<sub>Θ</sub>(x<sup>i</sup>) - y<sup>i</sup>)<sup>2</sup></strong> where i changes from 1 to m where m is a number of training examples<br>
                Goal: <strong>minimize J(Θ<sub>0</sub>, Θ<sub>1</sub>)</strong>
            </p>
            <p>
                Later we will discuss algorithms that helps us to reach the goal. now let's discribe another example of supervised machine learning
            </p>
            <h3>Classification</h3>
            <p>
                In this case we have finite number of 'y's or h(x) can give us only finite number of results. Let's say we want to predict cancer for patients, is it malignant or benign.
                Similar machine learning problem would be defining a letter is a spam or not.
            </p>
            <p>
                So our data can be something like this:
            </p>
            <table-body data-provider="/json/tumor-malignant-or-benign-by-size.json"></table-body>
            <scatter-plot
                title="Is tumor malignant or benign"
                subtitle=""
                x-axis-label="Size"
                y-axis-label="Age"
                data-provider="/json/tumor-malignant-or-benign-by-size.json">
            </scatter-plot>
            <p>
                In this case the task is to find a function that seperates red and blue dots from each other. the function will seperate whole surface into two parts.
                The area with the most red dots in it will be benign part and the other part of the surface would be malignant.
            </p>
            <p>
                In these examples there are used one or two of features to predict something, but in real world examples there will be lots of features that should be considered to before we the prediction.
                If you understand how this works with one or two features it is not hard apply that knowledge for multiple features. Later I will try to describe how to do this.
            </p>
            <h2>Unsupervised Machine Learning Example</h2>
            <h3>Clastering</h3>
            <p>
                In supervised machine learning we were given a data with some labels, for example we had data of tumor were we knew which row was malignant or benign,
                in unsupervised machine learning data does not have any labels. So we are given a dataset with no labels and we need to find some structure in the dataset.
                These kind of problems are called clastering problems.
            </p>
            <p>
                Good example of the clastering problem would be a google news. What google news does it finds lots of articles on the web, finds similaries / structure in those articles and groups them by the subject.
            </p>
            <p>
                Other examples of unsupervised learning or clastering can be, Market segmentation or astronomical data analysis etc.
            </p>
            <p>
                Lets visualize the problem to better understand what we are talking about.
            </p>
            <scatter-plot
                title="Unsupervised Tumor Dataset"
                subtitle=""
                x-axis-label="Size"
                y-axis-label="Age"
                data-provider="/json/unsupervised-tumor-dataset.json">
            </scatter-plot>
            <p>
                So we have same data as in tumor problem, only without labels. And we need to find the groups fo data that can be seperated.
            </p>
        </div>
    </div>
@endsection
