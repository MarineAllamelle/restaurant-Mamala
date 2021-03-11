<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
            <a class="logo"><img src="img/logomama.png" alt="logo"></a>
        </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Bruncher Now!</em></button>
        </div>
    </div>
</header>



<!--Our Baby section-->

<section id="aboutus">

    <div class="container">
        <h3 class="text-center"><br><br>Our Baby</h3>
        <div class="row">


            <!--carousel-->
            <div class="col-sm"><br><br>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/tartines.jpg"  alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/oeuf-bene.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/pancake.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><br><br>
            </div>
            <!--end of carousel-->

            <div class="col-sm">
                <div class="arranging"><br>
                    <hr>
                    <h4 class="text-center"></h4>
                    <p><br>Mamala vient d'une envie de partager notre amour pour les brunch. Nous avons commencé avec notre bébé (Foodtruck Brunch) dans le 18ème.
                    <p>Mais pourquoi ne pas en faire profiter tout le monde me suis-je dit?</p> Alors j'ai lancé les chefBrunch ! Un chef rien que pour vous, qui élaborera un sublimissime et succulent brunch, disponible toute la semaine.<br>
                    Oui!Toute la semaine.<br>
                    Pourquoi les brunch ne seraient que les week-end ?<br><br></p>
                    Take away disponible !
                    <hr>
                </div>
            </div>
        </div><br>
    </div>
</section>
<!--end of Our Baby section-->

<div class="header2">
</div>

<!----Saliver Carousel galery -->
<section id="galery">
    <h3 class="text-center"><br>Hmmmmm</h3>
        <div class="col-sm"><br>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/menu1.png"  alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/menu2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/menu3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><br><br>
            </div>
</section>    
<!---- Fin Hmmm Carousel galery -->

<!---Bruncher-->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Brunch <br><br></h3>
    <img src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Book your Chef</button>

</div><br><br>

<div class="header2">
</div>
<!---Fin Bruncher-->

<!-- Map section-->
<section class="map" id="footer">
    <div class="container">
        <h3 class="text-center"><br><br>Find Us</h3><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.75769374045!2d2.2770196569436507!3d48.85895068149207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1609854253126!5m2!1sfr!2sfr"style="width:100%;  height:250px; border:0;" allowfullscreen></iframe>
<!---Fin Map-->           
<!---Disponibilité/ horaire-->
        <div class="row staff">
            <div class="col">
                <h4><strong>When are we available ?</strong></h4>

                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>

                    <?php

                    if (isset($_POST['check_schedule'])) {

                        require 'includes/dbh.inc.php';

                        $date = $_POST['date'];

                        $sql = "SELECT * FROM schedule WHERE date = '$date'";
                        $result = $conn->query($sql);
                        if ($result->num_rows == 1) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                <table class='table table-sm table-striped table-dark text-center'>
                    <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <th scope='row'><em>" . $date . "</em></th>
                    <td>" . $row['open_time'] . "</td>
                    <td>" . $row['close_time'] . "</td>
                    </tr>
                    </tbody>
                </table>";
                            }
                        } else {
                            echo "
                <table class='table table-striped table-dark text-center'>
                    <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <th scope='row'><em>" . $date . "</em></th>
                    <td>09:30</td>
                    <td>14:30</td>
                    </tr>
                    </tbody>
                </table>";
                        }

                        //close connection
                        mysqli_close($conn);
                    }
                    ?>

                </div><br>
            </div>

            <div class="col">
                <h4 class="text-right"><strong>Where are we ?</strong></h4>
                <p class="text-right">MamaLa<br><i class="fa fa-map-marker"></i>&nbsp; 25 boulevard Saint-Denis, 75010<br>Paris <br><br>email: allamellemarine@gmail.com<br>phone: +33 645 77 59 75</p>
            </div>

        </div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>