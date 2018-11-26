<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

        {{-- <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            } */

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}


    </head>

    {{-- BODY STARTS HERE-------------------------------------------------------------------- --}}

    <body>
        <div class="navbar nav invert">            

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                  <a class="navbar-brand" href="#">{{ env('APP_NAME')}}</a>
                  </div>
                  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                    @endif
                </div>
            </nav>

            <!-- CONTENT OF BODY STARTS HERE -->

            <div id="header">
                <div>
                    <div>
                        <a href="index.html" id="logo"><img src="{{ asset('sprites/cat.png') }}" alt="Image"></a>
                    </div>
                </div>
                <ul>
                    <li class="current">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="news.html">News</a>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                </ul>
            </div>

            
            <div id="body">
                <div>
                    <div id="home">
                        <div class="aside">
                            <h1>This website template is FREE!!!</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada turpis quis ligula feugiat volutpat hendrerit eros condimentum. Integer non orci quis odio bibendum euismod ac nec orci. Vestibulum cursus fringilla dui, sed pharetra odio gravida vitae. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum pellentesque porta porttitor. Pellentesque pretium eros magna, ut vulputate magna. In non metus quis orci rutrum elementum sed ac mi. Vestibulum tristique egestas nisl a pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum a lectus augue. Vivamus dignissim lobortis venenatis.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada turpis quis ligula feugiat volutpat hendrerit eros condimentum. Integer non orci quis odio bibendum euismod ac nec orci. Vestibulum cursus fringilla dui, sed pharetra odio gravida vitae. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum pellentesque porta porttitor. Pellentesque pretium eros magna, ut vulputate magna. In non metus quis orci rutrum elementum sed ac mi. Vestibulum tristique egestas nisl a pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum a lectus augue. Vivamus dignissim lobortis venenatis.
                            </p>
                            <a href="index.html" class="readmore">Read more...</a>
                        </div>
                        <div class="sidebar">
                            <div>
                                <h2>Connect</h2>
                                <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank">Twitter</a>
                                <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank">Facebook</a>
                                <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank">Google&#43;</a>
                            </div>
                            <img id="iphone" src="images/iphone-bwastoff.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="section">
                        <div>
                            <h2>Gallery</h2>
                            <div>
                                <ul class="gallery">
                                    <li>
                                        <a href="gallery.html"><img src="images/gallery1.jpg" alt="Image"></a>
                                    </li>
                                    <li>
                                        <a href="gallery.html"><img src="images/gallery2.jpg" alt="Image"></a>
                                    </li>
                                    <li>
                                        <a href="gallery.html"><img src="images/gallery3.jpg" alt="Image"></a>
                                    </li>
                                    <li>
                                        <a href="gallery.html"><img src="images/gallery4.jpg" alt="Image"></a>
                                    </li>
                                </ul>
                                <div class="paging">
                                    <a href="gallery.html" class="next">Next 4 &gt;&gt;</a>
                                    <div>
                                        <a href="gallery.html" class="prev">Prev</a>
                                        <ul>
                                            <li>
                                                <a href="gallery.html">1</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">2</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">3</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">4</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="title m-b-md">
                    {{env('APP_NAME')}}
                </div>

                
            </div>
        </div>
    </body>
</html>
