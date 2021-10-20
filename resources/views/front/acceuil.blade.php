@extends('layouts.layout')
@section('content')
    <style>
        button{
            background-color: rgba(3,178,216,255);
            border-radius: 10px 10px 10px 10px;
            color: white;

        }
        .pageAcceuil{

        }
        .barreRectangle{
            border-radius: 10px 10px 10px 10px;
            box-shadow: darkgrey 0.5em 0.5em 0.3em;
        }
        .card{
            border-radius: 10px 10px 10px 10px;
            box-shadow: darkgrey 0.5em 0.5em 0.3em;
            text-align: center;
            padding: 0;
        }
        .destinationPopulaire{
            padding-bottom: 2%;
            padding-left: 3%;
        }
        .nousChoisir{
            padding-left: 3%;
            padding-bottom: 2%;
            box-shadow: none;
            border: none;

        }
        .recamentAjoute{
            padding-left: 3%;

        }
        .choisir{
            padding-left: 3%;
            padding-top: 2%;
            padding-bottom: 2%;
        }

        .rectangleRecherche{
            padding: 2% 25% 2% 25%;

        }
        .elementBarreRecherche1{
            padding: 2% 20% 2% 20%;
            text-align: center;
        }
        .barreRecherche{
            padding: 2% 10% 2% 10%;
            text-align: center;
        }
        #villeDepart{
            padding-bottom: 2%;
        }
        #evenementLieu{
            padding-bottom: 2%;
        }

        .ajoutEvenementCommerce{
            background-color: rgba(3,178,216,255);
            padding-left:3%;
        }
        .div_left{
            padding-top: 2%;
        }
        .div_right{
           float: right;
        }
        .quiSommeNous{
            padding-top: 2%;
            padding-bottom: 12%;
            padding-left: 3%;
        }
        .fondateurs{
            padding-left: 2%;
            text-align: center;
        }
    </style>
    <div class="pageAcceuil">
        <div class="rectangleRecherche">
            <div class="barreRectangle">
                <div class="elementBarreRecherche1">
                    <button> Lieux d'intérét </button>
                    <button> Evénement </button>
                </div>
                <div class="barreRecherche">
                    <table>
                        <tbody>
                        <tr><input type="text" id="recherche" name="recherche" placeholder="Rechercher"> </tr>
                        <tr><input type="text" id="city" name="city" placeholder="Code postal, ville"> </tr>
                        <tr>
                            <select id="catégorieRecherche">
                                <option value="">--Catégorie--</option>
                                <option value="dog">Commerce</option>
                                <option value="cat">hotel</option>
                                <option value="hamster">Bar</option>
                                <option value="parrot">Restaurant</option>
                                <option value="spider">etc</option>
                            </select>
                        </tr>
                        <tr>
                            <button id="lancerRecherche">recherche</button>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="destinationPopulaire" >
            <div id="villeDepart" class="row">
                <div class="col-md-2">Destinations populaire</div>
                <div class="col-md-2 text-left">
                    <button class="col-ml-2" type="button">Villes</button>
                    <button type="button">Département</button>
                </div>
            </div>

            <div class="row">

                <div class="card col-md-2 ml-5">
                    <img class="card-img-top" src="pexels-photo-208701.png" alt="le havre">
                    <div class="card-body">
                        <p class="card-text">Le havre</p>
                    </div>
                </div>

                <div class="card col-md-2 ml-5" >
                    <img class="card-img-top" src="pexels-photo-208701.png" alt="ville2">
                    <div class="card-body">
                        <p class="card-text">Ville 2</p>
                    </div>
                </div>

                <div class="card col-md-2 ml-5">
                    <img class="card-img-top" src="pexels-photo-208701.png" alt="ville3">
                    <div class="card-body">
                        <p class="card-text">Ville 3</p>
                    </div>
                </div>

                <div class="card col-md-2 ml-5">
                    <img class="card-img-top" src="pexels-photo-208701.png" alt="ville4">
                    <div class="card-body">
                        <p class="card-text">Ville 3</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="recamentAjoute" >
            <div>
                <div id="evenementLieu" class="row">
                    <div class="col-md-2">Récemment ajoutées</div>
                    <div class="col-md-3">
                        <button> Evénements </button>
                        <button> Lieux d'intérêt </button>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="card col-md-3 ml-5">
                    <img class="card-img-top" src="pexels-photo-2507007@2x.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Holiday home</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card col-md-3 ml-5">
                    <img class="card-img-top" src="pexels-photo-2507007@2x.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Holiday home</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#"class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card col-md-3 ml-5">
                    <img class="card-img-top" src="pexels-photo-2507007@2x.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Holiday home</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nousChoisir" >
            <div class="choisir">Pourquoi nous choisir ?</div>
            <div class="row">
                <div class="col-md-3 ml-auto" >
                    <div class="iconChoisir">
                        <i class='far fa-credit-card' style="font-size:100px;color:rgba(3,178,216,255);"></i>
                    </div>

                    <div class="cardChoisir">
                        <p class="card-text">Service pas cher garanti</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-md-3 ml-auto">

                    <div class="iconChoisir">
                        <i class="material-icons" style="font-size:100px;color:rgba(3,178,216,255);">airplanemode_active</i>
                    </div>

                    <div class="cardChoisir">
                        <p class="card-text">Service pas cher garanti</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-md-3 ml-auto">
                    <div class="iconChoisir">
                        <i class='fas fa-gift' style="align-content:center;font-size:100px;color:rgba(3,178,216,255);"></i>                    </div>
                    <div class="cardChoisir">
                        <p class="card-text">Service pas cher garanti</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ajoutEvenementCommerce">
            <div class="row">
                <div class="div_left">
                    <p>Ajouter vos commerces et événements dès maintenant pour ne rien louper</p>
                    <p>bla bla</p>

                    <button>Ajouter un commerce </button>
                    <button>Ajouter un évenement </button>
                </div>

                <div class="div_right">
                    <img class="card-img-top" src="pexels-photo-3810901.png" style="float: right;line-height:65px;" alt="ville quelquonque">
                </div>
            </div>
        </div>

        <div class="quiSommeNous">
            <p>Qui sommes nous?</p>
            <div class="fondateurs">
                <div class="row">

                    <div class="col-md-3 ml-5"  >
                        <img class="card-img-top" src="visageVieux.png" style="width: 50%"alt="Thierry GROFFE">
                        <div>
                            <p class="card-text">Thierry GROFFE</p>
                            <p class="card-text">Fondateur de Coeur2Ville</p>
                        </div>
                    </div>

                    <div class="col-md-3 ml-5"  >
                        <img class="card-img-top" src="visageHomme.png" style="width: 50%"alt="Clément GROFFE">
                        <div>
                            <p class="card-text">Clément GROFFE</p>
                            <p class="card-text">Chef de projet</p>
                        </div>
                    </div>

                    <div class="col-md-3 ml-5"  >
                        <img class="card-img-top" src="visageFemme.png" style="width: 50%" alt="Marcel PATULACCI">
                        <div>
                            <p class="card-text">Marcel PATULACCI</p>
                            <p class="card-text">Product Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
