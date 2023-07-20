<?php require views_path('partials/header1');?>
<!DOCTYPE html>
<html>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="navfix">
    <div class="container-fluid">
      <a class="navbar-brand" href="freshman.php">
        <img src="../public/assets/img/logo.png" alt="Logo" width="20%" height="15%" class="d-inline-block align-text-top" id="logofix">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#showMeny">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutFood">Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#deals">Deals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#eventCafe">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap" href="#teamCafe">Our team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap" href="#aboutCafe">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap" href="#contactCafe">Contact us</a>
          </li>
          <li class="modal-body">
            <p><a href="index.php?pg=login"" role="button" class="btn btn-primary" id="logfix">POS</a>.
            </p>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="col-lg-12">
    <img src="../public/assets/img/mainPic.png" class="img-fluid" id="main"alt="..." width="100%">
    <p class="text-over-img">"Eat Well Make Your Day Fresh"</p>
    <div class="btn-toolbar" role="group" aria-label="Basic example">
      <button type="button" id="mainBtn" class="btn btn-outline-secondary">Reserve a table</button>
      <button type="button" id="mainBtn" class="btn btn-outline-secondary">Show pictures</button>
    </div>
  </div>

  <!---------------------------START: Menu section--------------------------->
  <section id="showMeny"></section>
  <div class="container-lg" id="contMenu">
    <H1 id="menu">MENU</H1>
    <div class="card" id="topCard" style="width: 50rem; text-align: center;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample1"
          aria-expanded="false" aria-controls="collapseWidthExample1">Fast Food
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample1" aria-expanded="false" aria-controls="collapseWidthExample1"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>
        </li>
        <div class="collapse" id="collapseWidthExample1">
          <div class="card card-body" id="cardBody" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Crispy Chicken Burger</h5>
                    <p class="card-text">Our burger has crispy chicken fillet layered with cheese, mayonnaise, and
                      special sauces.</p>

                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Special Zinger Burger</h5>
                    <p class="card-text">Fried chicken sandwiched sesame bun together with lettuce and creamy dressings.
                    </p>

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Platter Shawarma</h5>
                    <p class="card-text">Our special hot spicy kebab shawarma with salad and special sauces.</p>

                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Kebab/chicken pizza</h5>
                    <p class="card-text">Cheese kebab/chicken pizza with magical flavor and vegetables.</p>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample2"
          aria-expanded="false" aria-controls="collapseWidthExample2">Pakistani Cuisine
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>

        </li>
        <div class="collapse" id="collapseWidthExample2">
          <div class="card card-body" id="cardBody2" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Chicken Karahi</h5>
                    <p class="card-text">Spicy & flavorful dish made with chicken, onions, tomatoes, ginger, garlic &
                      fresh spices.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Mutton Karahi</h5>
                    <p class="card-text">Mutton Karahi made with fresh ingredients. It’s full of zesty flavor that
                      you’re going to love.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Mix Vegetables</h5>
                    <p class="card-text">Special dish with mixed fresh vegetables with a taste of punjab and different
                      spices.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Special Daal</h5>
                    <p class="card-text">Special dish with a mixture of different daals and curry masala.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample3"
          aria-expanded="false" aria-controls="collapseWidthExample3">Chinese Food
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample3" aria-expanded="false" aria-controls="collapseWidthExample3"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>
        </li>
        <div class="collapse" id="collapseWidthExample3">
          <div class="card card-body" id="cardBody3" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Noodles</h5>
                    <p class="card-text">New favorite! Korean spicy noodles. You can choose between spicy or non-spicy
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Chinese Soup</h5>
                    <p class="card-text">With goji berries, Chinese dates, ginger, and Shiitake mushrooms, this soup is
                      healthy.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Spring rolls</h5>
                    <p class="card-text">Rolls with shatteringly crisp on the outside with a juicy chicken, vegetable
                      filling.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Chow Meins</h5>
                    <p class="card-text">Chow Mein made of soy sauce, oyster sauce, sesame oil, sugar and cornstarch for
                      thickening.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample4"
          aria-expanded="false" aria-controls="collapseWidthExample4">Rice
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample4" aria-expanded="false" aria-controls="collapseWidthExample4"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>
        </li>
        <div class="collapse" id="collapseWidthExample4">
          <div class="card card-body" id="cardBody4" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Chicken Biryani</h5>
                    <p class="card-text">Traditional chicken biryani made with layering marinated chicken and potatoes.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Vegetable Rice</h5>
                    <p class="card-text">Fluffy seasoned rice pilaf tossed with mixed vegetables with our special
                      spices.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Mutton Palao</h5>
                    <p class="card-text">Basmati rice laced with cardamom, cloves, and juicy pieces of mutton.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Zarda</h5>
                    <p class="card-text">Traditional Pakistani sweet dish made with rice, sugar, nuts and cardamom
                      seeds.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample5"
          aria-expanded="false" aria-controls="collapseWidthExample5">Sea Food
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample5" aria-expanded="false" aria-controls="collapseWidthExample5"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>
        </li>
        <div class="collapse" id="collapseWidthExample5">
          <div class="card card-body" id="cardBody5" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Shushi</h5>
                    <p class="card-text">Rolled uramaki-style, with rice wrapped around, the fillings are a mix of
                      poached shrimp.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Fish masala</h5>
                    <p class="card-text">Flaky pieces of fish coated in a spicy butter, then fried.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Crispy Fried Fish</h5>
                    <p class="card-text">Fresh fish fried with spicy curry, served with chuteny.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Bonless Fish</h5>
                    <p class="card-text">6 bonless fish pieces made with love and special spices. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample6"
          aria-expanded="false" aria-controls="collapseWidthExample6">Drinks
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample6" aria-expanded="false" aria-controls="collapseWidthExample6"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>
        </li>
        <div class="collapse" id="collapseWidthExample6">
          <div class="card card-body" id="cardBody6" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Juices</h5>
                    <p class="card-text">Try out our 4 yummy juices. Choose between Apple, carrot, orange and pineapple
                      juice.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Shakes</h5>
                    <p class="card-text">Our special signature shakes with love. Choose between oreo, banana or
                      ice-cream shake.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Tea</h5>
                    <p class="card-text">Warm hot pakistani tea made with lots of love and gives you a taste of punjab.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Kahwa</h5>
                    <p class="card-text">Kahwa is a Kashmiri tea flavored with cinnamon, cardamom, and saffron.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <li class="list-group-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample7"
          aria-expanded="false" aria-controls="collapseWidthExample7">Deserts
          <svg xmlns="http://www.w3.org/2000/svg" id="drp" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample7" aria-expanded="false" aria-controls="collapseWidthExample7"
            width="30" height="30" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
          </svg>
        </li>
        <div class="collapse" id="collapseWidthExample7">
          <div class="card card-body" id="cardBody7" style="width: 100%;">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Molten Lava</h5>
                    <p class="card-text">Cakey on the outside with an irresistible center of flowing warm dark chocolate
                      inside.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Ice Cream</h5>
                    <p class="card-text">Choose between 3 flavors of our signature ice cream. Will it be Vanilla,
                      Chocolate or mint?</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3 mb-sm-0" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Cookies</h5>
                    <p class="card-text">Buttery, slightly doughy, & so good cookies made with love and chocolate.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="menuCard">
                <div class="card" id="foodCard">
                  <div class="card-body">
                    <h5 class="card-title">Crepe</h5>
                    <p class="card-text">French-style pancakes. Perfect for brunch with a sweet or savory filling!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!---------------------------END: Menu section--------------------------->


  <!---------------------------START: About food section--------------------------->
  <section id="aboutFood"></section>
  <div id="foodi">
    <h1>About Our Food</h1>
    <img src="../public/assets/img/cafe.jpg" class="img-fluid" id="img2" alt="Responsive image">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="rowFood1">
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Food Quality</h5>
          </div>
          <div class="card-footer">
            <img src="../public/assets/img/food.png" class="img-fluid" id="foodCardimg" alt="Responsive image">
            <a href="#" class="btn btn-dark" id="btn1">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Our Ingredents</h5>

          </div>
          <div class="card-footer">
            <img src="../public/assets/img/ing.png" class="img-fluid" id="foodCardimg" alt="Responsive image">
            <a href="#" class="btn btn-dark" id="btn1">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Rights To Know</h5>
          </div>
          <div class="card-footer">
            <img src="../public/assets/img/right.png" class="img-fluid" id="foodCardimg" alt="Responsive image">
            <a href="#" class="btn btn-dark" id="btn1">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---------------------------END: About food section--------------------------->
  <!---------------------------START: Deals section--------------------------->
  <section id="deals"></section>
  <br>
  <br>
  <br>
  <div class="container-lg">
    <h1>Deals</h1>
    <h1>Deal With Us And Keep Smiling :) </h1>
    <div class="container text-center my-3">
      <div class="row mx-auto my-auto justify-content-center" id="justify">
        <div id="recipeCarousel" class="carousel slide" data-bs-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="col-md-3" id="ali2">
                <div class="card" id="ali3">
                  <div class="card-img">
                    <img src="../public/assets/img/deal8.jpg" class="img-fluid" id="dealImg">
                  </div>
                  <div class="card-body" id="cardText">
                    <h5 class="card-title" id="cardTexth5">Special Breakfast Deal  <br> Timings 07am - 10am <br><br> ENJOY YOUR MEAL</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3" id="ali2">
                <div class="card" id="ali3">
                  <div class="card-img">
                    <img src="../public/assets/img/deal5.jpg" class="img-fluid" id="dealImg">
                  </div>
                  <div class="card-body" id="cardText">
                    <h5 class="card-title" id="cardTexth5">Lunch Happy Deal <br> Timings 12pm - 03pm  <br><br> ENJOY YOUR MEAL</h5>
                    

                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3" id="ali2">
                <div class="card" id="ali3">
                  <div class="card-img">
                    <img src="../public/assets/img/deal6.jpg" class="img-fluid" id="dealImg">
                  </div>
                  <div class="card-body" id="cardText">
                    <h5 class="card-title" id="cardTexth5">Special Evening Deal  <br> Timings 06pm - 09pm  <br><br> ENJOY YOUR MEAL</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3" id="ali2">
                <div class="card" id="ali3">
                  <div class="card-img">
                    <img src="../public/assets/img/deal9.avif" class="img-fluid" id="dealImg">
                  </div>
                  <div class="card-body" id="cardText">
                    <h5 class="card-title" id="cardTexth5">Happy Meal Ever  <br> Timings 12pm - 12am  <br><br> ENJOY YOUR MEAL</h5>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev bg-transparent w-aut" id="prevBtn" href="#recipeCarousel" role="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" id="nextBtn" href="#recipeCarousel" role="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <!---------------------------END: Deals section--------------------------->





  <!---------------------------Start: Event section--------------------------->
  <section id="eventCafe"></section>
  <br>
  <br>
  <br>
  <div class="container-lg">
    <h1>Events</h1>
    <h1>Healthy Diet makes you Energyatic</h1>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../public/assets/img/events3.jpg" class="d-block w-100" alt="...">
          <h3 class="carousel-caption">Cafe anniversary <br>Location: Freshman Cafe <br>Date: 01.06.2023 <br>Time: 13:00
            PM</h3>
          <div class="btn-toolbar" role="group" aria-label="Basic example">
          </div>
        </div>
        <div class="carousel-item">
          <img src="../public/assets/img/test4.jpg" class="d-block w-100" alt="...">
          <h3 class="carousel-caption">Chef M Farooq Birthday <br>Location: Freshman Cafe <br>Date: 08.06.2023 <br>Time:
            10:00 AM</h3>

          <div class="btn-toolbar" role="group" aria-label="Basic example">
          </div>
        </div>
        <div class="carousel-item">
          <img src="../public/assets/img/ourfood.jpg" class="d-block w-100" alt="...">
          <h3 class="carousel-caption">Turkey-Pakistan Dinner<br>Location: Freshman Cafe <br>Date: 10.06.2023 <br>Time:
            15:00 PM</h3>
          <div class="btn-toolbar" role="group" aria-label="Basic example">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---------------------------END: Event section--------------------------->


  <!---------------------------Start: Teams section--------------------------->
  <section id="teamCafe"></section>
  <div class="container-lg" id="teams">
    <h1>Our Team</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="rowTeam">
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">CEO: Mr Ali</h5>

          </div>
          <div class="card-footer" id="footerCard">
            <img src="../public/assets/img/chef10.webp" class="img-fluid" id="foodCardimg" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Manager: Miss Amina</h5>
          </div>
          <div class="card-footer" id="footerCard">
            <img src="../public/assets/img/chef11.webp" class="img-fluid" id="foodCardimg" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Chef: Shoaib Butt</h5>
          </div>
          <div class="card-footer" id="footerCard">
            <img src="../public/assets/img/chef2.jpg" class="img-fluid" id="foodCardimg" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="rowTeam">
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Chef: M Farooq</h5>

          </div>
          <div class="card-footer" id="footerCard">
            <img src="../public/assets/img/chef7.webp" class="img-fluid" id="foodCardimg" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Staff: M Mehmood</h5>

          </div>
          <div class="card-footer" id="footerCard">
            <img src="../public/assets/img/chef8.webp" class="img-fluid" id="foodCardimg" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col" id="cardFood">
        <div class="card h-200">
          <div class="card-body" id="cardColor">
            <h5 class="card-title">Staff: Awais Iqbal</h5>
          </div>
          <div class="card-footer" id="footerCard">
            <img src="../public/assets/img/chef9.jpg" class="img-fluid" id="foodCardimg" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---------------------------END: Teams section--------------------------->


  <!---------------------------Start: About us section--------------------------->
  <section id="aboutCafe"></section>
  <div id="aboutUsSection">
    <div class="card mb-3 border-0" id="mb3" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h1 class="card-title">Our history</h1>
          </div>
        </div>
        <div class="col-md-4">
          <img src="../public/assets/img/caf.jpg" class="img-fluid rounded-start" alt="...">
        </div>
      </div>
    </div>
    <!-- Gallery -->
    <div class="container-lg" id="aboutus">
      <h1>How it all started</h1>
      <p class="card-text"> If there is no cozy cafe with good coffee and homemade food where you work,
        <br>
        you can start one yourself. This is what Ali and Amina, to workers in Lahore,
        <br>
        thought when they decided to open Freshman cafe in 2021.
      </p>
      <div class="row">
        <div class="col-md-3 step-1"> <img src="../public/assets/img/aboutus4.jpg" class="w-100 shadow-1-strong rounded mb-4"
            alt="Mountains in the Clouds" /></div>
        <div class="col-md-3 step-2"> <img src="../public/assets/img/aboutus5.jpg" class="w-100 shadow-1-strong rounded mb-4"
            alt="Mountains in the Clouds" /></div>
        <div class="col-md-3 step-3"> <img src="../public/assets/img/aboutus7.jpg" class="w-100 shadow-1-strong rounded mb-4"
            alt="Mountains in the Clouds" /></div>
        <div class="col-md-3 step-4"> <img src="../public/assets/img/aboutus8.jpg" class="w-100 shadow-1-strong rounded mb-4"
            alt="Mountains in the Clouds" /></div>
      </div>
    </div>

    <style>
      @media (min-width: 768px) {
        .step-1 {
          margin-top: 150px;
        }

        .step-2 {
          margin-top: 100px;
        }

        .step-3 {
          margin-top: 50px;
        }
      }
    </style>

    <div class="card mb-3 border-0" id="mb3" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h1 class="card-title" id="cardTextSection2">A new way to enjoy food</h1>
            <p class="card-text" id="cardTextp">Freshman Cafe offers something completely different
              <br>
              the Pakistani tradiotional university cafeteria.
              <br>
              It is a unique, cozy and welcoming atmosphere here,
              <br> students can relax and enjoy their meal.
              <br>
              <br>
              <br>
          </div>
        </div>
      </div>
    </div>

    <div class="container-lg" id="aboutus">
      <h1>Our Branch</h1>
      <p class="card-text">As of today, we only have 1 branch that belongs to Minhaj university. It is centrally
        located
        in Lahore.
        <br>
        It is easy to find,both for pedestrians and those arriving by public transport or car.
        <br>
        We provide facilities for students and employees at the university.
        <br>
        <br>
      <div class="google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.8764269026406!2d74.31425257568199!3d31.44506875085851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391906cbd12a8403%3A0x568e8ad71dab1c6d!2sMinhaj%20University%20Lahore!5e0!3m2!1sno!2sno!4v1684502803691!5m2!1sno!2sno"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <!---------------------------END: About us section--------------------------->


  <!---------------------------Start: Contact us us section--------------------------->
  <section id="contactCafe"></section>
  <div class="container-lg" id="contCafe">
    <br>
    <br>
    <p class="text-over-img" id="cont">Contact Us</p>
    <div class="form-floating mb-3" id="check">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
        style="width: 500px; height: 70px;">
      <br>
      <label for="floatingInputDisabled">Name</label>
    </div>
    <div class="form-floating mb-3" id="check">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
        style="width: 500px; height: 70px;"></textarea>
      <br>
      <label for="floatingTextareaDisabled">Email</label>
    </div>
    <div class="form-floating mb-3" id="check">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
        style="width: 500px; height: 70px;"></textarea>
      <br>
      <label for="floatingTextarea2Disabled">Comments</label>
    </div>
    <input class="btn btn-primary" id="check1" type="submit" value="Submit">
    <br>
    <br>
    <br>
  </div>
  <!---------------------------END: Contact us us section--------------------------->





  <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbarNav");
    var btns = header.getElementsByClassName("nav-item");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
      const minPerSlide = 3
      let next = el.nextElementSibling
      for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
          // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
      }
    })
  </script>
</body>

</html>

<?php require views_path('partials/footer1');?>