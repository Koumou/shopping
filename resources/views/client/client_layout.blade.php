<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .fixed {
        position: fixed;
        /* width: 25%; */
    }

    .scrollit {
        float: right;
        width: 71%
    }

    .homegrid1 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 10px;
    }

    .topfixed2 {
        display: none;
        position: fixed;
        z-index: 3;
        width: 100%;
        left: 0;
        /* padding-top: 10px; */
    }

    .spacenavbody {
        padding-top: 50px;
    }

    .displaynone2 {
        display: none;
        position: fixed;
    }

    .displaywhen {
        display: none;
        float: unset;
    }

    .search {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTerm {
        width: 100%;
        border: 3px solid #FBD643;
        border-right: none;
        padding: 5px;
        height: 20px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #9DBFAF;
    }

    .searchTerm:focus {
        color: #00B4CC;
    }

    .searchButton {

        width: 40px;
        height: 36px;
        border: 1px solid #00B4CC;
        background: #00B4CC;
        text-align: center;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    /*Resize the wrap to see the search bar change!*/
    .wrap {
        width: 30%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    /* .displaywhen3{
           display: block;
       } */

    @media screen and (max-width: 768px) {
        .topfixed2 {
            display: block;
            position: fixed;
            padding-top: 60px;

        }


   
        .fixed {
            display: none;
            position: unset;
            /* width: 25%; */
        }

        .scrollit {
            float: unset;
            /* width: 71% */
        }

        .displayresponsive {
            display: none;

        }

        .displaywhen {
            display: block;
            position: fixed;
        }

        .displaywhen2 {
            display: none;
        }

    }


    .badgeposition {
        width: 100px;
        text-align: center;
        vertical-align: middle;
        position: relative;
    }

    .contaitermodified {

        margin-right: auto;
        margin-left: auto;
        max-width: 1600px;
        padding-right: 5px;
        padding-left: 5px;
    }

    .badgeafter:after {
        content: attr(data-count);
        position: absolute;
        background: red;
        height: 1.5rem;
        top: 0.3rem;
        right: 1.5rem;
        width: 1.4rem;
        text-align: center;
        line-height: 1.4rem;
        font-size: 0.7rem;
        border-radius: 50%;
        color: white;
        border: 1px solid red;
        font-family: sans-serif;
        font-weight: bold;
    }

    .site-footer {
        background-color: #26272b;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #737373;
    }

    .site-footer hr {
        border-top-color: #bbb;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .site-footer a {
        color: #737373;
    }

    .site-footer a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block
    }

    .footer-links a {
        color: #737373
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #33353d
    }

    .copyright-text {
        margin: 0
    }

    @media (max-width:991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width:767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
    }

    .social-icons li.title {
        margin-right: 15px;
        text-transform: uppercase;
        color: #96a2b2;
        font-weight: 700;
        font-size: 13px
    }

    .social-icons a {
        background-color: #eceeef;
        color: #818a91;
        font-size: 16px;
        display: inline-block;
        line-height: 44px;
        width: 44px;
        height: 44px;
        text-align: center;
        margin-right: 8px;
        border-radius: 100%;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
        color: #fff;
        background-color: #29aafe
    }

    .social-icons.size-sm a {
        line-height: 34px;
        height: 34px;
        width: 34px;
        font-size: 14px
    }

    .social-icons a.facebook:hover {
        background-color: #3b5998
    }

    .social-icons a.twitter:hover {
        background-color: #00aced
    }

    .social-icons a.linkedin:hover {
        background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
        background-color: #ea4c89
    }


    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }
    }


    .card-information-bottom {}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">FEMME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HOMME</a>
                </li>


            </ul>
            <!-- <form class="form-inline my-2 my-lg-0 displayresponsive">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->

            <div style="vertical-align:baseline;">
                <div>

                    <ul class="navbar-nav mr-auto d-flex flex-row ">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mon histoire
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                        <li class="displaywhen2">
                            <i data-count="3" class="fa fa-shopping-cart fa-2x fa-border-0  badgeafter badgeposition "></i>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-md navbar-light text-dark bg-light displaywhen fixed-bottom">
        <div style="vertical-align:baseline;">
            <div>
                <br />
                <ul class="navbar-nav mr-auto d-flex flex-row ">
                    <li class="nav-item">
                        <a class=" nav-link mr-4" href="#">FEMME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOMME</a>
                    </li>
                    <li>
                        <i data-count="3" class="fa fa-shopping-cart fa-2x fa-border-0  badgeafter badgeposition " style=""></i>
                    </li>
                </ul>
                <!-- <span class="navbar-text float-right">
                    Navbar text with an inline element
                </span> -->
            </div>
        </div>
    </nav>



    <!-- <hr /> -->
    <div class="spacenavbody">
    </div>


    <main class="py-4">
        @yield('content')
    </main>
    </div>
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Scanfcode</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul> -->
                </div>
            </div>
        </div>
        <br />
        <br />
    </footer>
    <nav class="navbar fixed-bottom navbar-light bg-light displaynone2">
        <a class="navbar-brand" href="#">Fixed bottom</a>
    </nav>
</body>

</html>