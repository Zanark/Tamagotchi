<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamagotchi</title>
    <link rel="shortcut icon" href="{{asset('sprites/png/cat/Idle (1).png')}}" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!-- Google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <script src="assets/js/tamagotchi.js"></script>
    <link rel="stylesheet" href="{{asset('css/tamagotchi.css')}}">
</head>
<body>
    <div class="container jumbotron" style="height: 100%;">
        <div class="col-xs-12 container">
            <center>
                <h1>Azlan's Tamagotchi</h1>
            </center>
        </div>



        <main>
            <div class="col-xs-6 container float-left">
                <img src="{{asset('sprites/png/cat/Idle (1).png')}}" height="40px" width="40px"><em>Gatagotchi</em>
            </div>
            <div class="col-xs-5"></div>
            <div class="col-xs-1 container">
                <i id="settings" class="fas fa-cog"></i>
            </div>
            <div class="col-xs-12">
                <center>
                    <div>
                            <div class="col-xs-1"><i id="health" class="fas fa-heart"></i></div>
                            <div class="progress col-xs-4">
                                <i class="progress-bar bar-info" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100">47%</i>
                            </div>
                            <div class="col-xs-4"></div>
                            <div class="col-xs-3">256<i class="fas fa-coins"></i></div>
                    </div>
                </center>
            </div>
            <!-- tools -->
            <div class="col-xs-12">
                <center>
                    <div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-2"><center><i id="food" class="fas fa-utensils"></i></center></div>
                        <div class="col-xs-2"><center><i id="bath" class="fas fa-bath"></i></center></div>
                        <div class="col-xs-2"><center><i id="play" class="fas fa-gamepad"></i></center></div>
                        <div class="col-xs-2"><center><i id="sleep" class="far fa-moon"></i></center></div>
                        <div class="col-xs-2"><center><i id="first-aid" class="fas fa-first-aid"></i></center></div>
                        <div class="col-xs-1"></div>
                    </div>
                </center>
            </div>
            <!-- avatar -->
            <div class="col-xs-12">
                <center>
                    <div>
                        <img src="{{asset('sprites/png/cat/Idle (1).png')}}" class="img-fluid rounded">
                    </div>
                </center>
            </div>
        </main>
    
    
        <!-- footer -->
        <div class="container">
            <center>
                <div>
                    <div class="col-xs-3"><center><i id="home" class="fas fa-home"></i></center></div>
                    <div class="col-xs-3"><center><i id="dresing" class="fas fa-tshirt"></i></center></div>
                    <div class="col-xs-3"><center><i id="store" class="fas fa-store"></i></center></div>
                    <div class="col-xs-3"><center><i id="info" class="fas fa-info-circle"></i></center></div>
                </div>
            </center>
        </div>
    </div>


        <!-- Settings viewer -->
        <div id="settings-viewer" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <br />
                <button>Logout</button>
            </div>      
        </div>

        <!-- food viewer -->
        <div id="store-viewer" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <br />
                <!-- <button>Logout</button> -->
                <div class="row">
                    <div class="col-xs-4">Pizza</div><div class="col-xs-4"><button class="btn">- </button><i class="material-icons">local_pizza</i><b>X</b><b>4</b><button class="btn"> +</button></div><div class="col-xs-4"><button class="btn btn-primary">Buy</button></div>
                    <div class="col-xs-4">Cookies</div><div class="col-xs-4"><button class="btn">- </button><i class="fas fa-cookie"></i><b>X</b><b>4</b><button class="btn"> +</button></div><div class="col-xs-4"><button class="btn btn-primary">Buy</button></div>
                    <div class="col-xs-4">Milk</div><div class="col-xs-4"><button class="btn">- </button><i class="fas fa-cookie"></i><b>X</b><b>4</b><button class="btn"> +</button></div><div class="col-xs-4"><button class="btn btn-primary">Buy</button></div>
                </div>
            </div>      
        </div>

        <!-- script -->
        <script>
            // settings
            $("#settings").click(function() {
                $("#settings-viewer").css("display","block");
            });

            $(".close").click(function(){
                $("#settings-viewer").css("display","none");
            });
            // store
            $("#store").click(function() {
                $("#store-viewer").css("display","block");
            });

            $(".close").click(function(){
                $("#store-viewer").css("display","none");
            });

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
</body>
</html>