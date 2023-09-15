<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="author" content="Ace Pocholo D. Aguilar - Web Programmger and Graphics">
    <title>Ace Portfolio</title>

    <meta charset="utf-8">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/portfolio.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .box {
            padding: 100px 0;
            width: 400px;
            text-align: center;
            background-color: darkslategrey;
            margin: 20px;
            display: inline-block;
        }

        li {
            list-style: none;
            background-color: slateblue;
            margin: 20px auto;
            padding: 10px 20px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        li.fav {
            background-color: slategray;
        }
    </style>

</head>

<body>
    <header class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">My Portfolio</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </header>

    <main id="app" class="portfolio_cover container mx-auto h-100 px-3">
        <div v-if="showContent">
            <h1>{{ title }} by {{ author }} at {{ age }}</h1>
        </div>
        <p class="lead">an IT support and a programmer finding a better way too achieve any
            ideas that make the possibilities be applied in actual.
        </p>
        <p class="lead">
            <button v-on:click="age++" class="btn mx-2 btn-primary fw-bold">Learn More</button>
            <button v-on:click="age--" class="btn mx-2 btn-warning fw-bold">About</button>
            <!-- <button @click="changeTitle('Created')" class="btn mx-2 btn-success fw-bold">New Title</button> -->
            <button @click="toggleShowContent" class="btn mx-2 btn-success fw-bold">
                <span v-if="showContent">Hide Title</span>
                <span v-else>Show Title</span>
            </button>
        </p>


        <!-- <p>{{ filteredUsers }}</p> -->
        <!-- click events -->
        <div>
            <ul>
                <!-- display only -->
                <!-- <li v-for="user in users" :class="{ fav: user.isFav }" @click="toggleFav(user)"> -->

                <!-- filtering -->
                <li v-for="user in filteredUsers" :class="{ fav: user.isFav }" @click="toggleFav(user)">
                    <img :src="user.img" :alt="user.Dish">
                    <h3>Dish - {{ user.Dish }}</h3>
                    <p>Price - {{ user.Price }}</p>
                </li>
            </ul>
        </div>

        <div>
            <div class="box" @mouseover="handleEvent($event, 5)">mouseover (enter)</div>
            <div class="box" @mouseout="handleEvent">mouseout</div>
            <div class="box" @dblclick="handleEvent">double click</div>
            <div class="box" @mouseMove="handleMouseMove">Position {{ x }}, {{ y }}</div>
        </div>

        <!-- can also use v-bind:href -->
        <a :href="url"><button class="mx-auto btn btn-primary">My Thesis Link</button></a>


    </main>

    <div class="container px-4 py-5 bg-light rounded text text-dark" id="featured-3">
        <h2 class="pb-2 px-2 border-bottom">Skills</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col">
                <div class="portfolio_skill_tiles card card-cover h-100 overflow-hidden border rounded-4 shadow-lg bg-light shadow-lg">
                    <div class="d-flex flex-column text-dark p-4 pb-3 h-100">
                        <h4 class="fw-bold w-100 px-2 py-4">COMPUTER PROGRAMMING</h4>
                        <p class="mt-5 fs-md-3 mx-auto w-100 px-2">Html5, CSS, JavaScript, PHP, Laravel, MySql <a href="#"><span>View More</span></a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="portfolio_skill_tiles card card-cover h-100 overflow-hidden border rounded-4 shadow-lg bg-light shadow-lg">
                    <div class="d-flex flex-column text-dark p-4 pb-3 h-100">
                        <h4 class="fw-bold w-100 px-2 py-4">COMPUTER GRAPHICS</h4>
                        <p class="mt-5 fs-md-3 mx-auto w-100 px-2">Photoshop, Illustrator, Sketch, Paintool SAI <a href="#"><span>View More</span></a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="portfolio_skill_tiles card card-cover h-100 overflow-hidden border rounded-4 shadow-lg bg-light shadow-lg">
                    <div class="d-flex flex-column text-dark p-4 pb-3 h-100">
                        <h4 class="fw-bold w-100 px-2 py-4">MICROSOFT OFFICE</h4>
                        <p class="mt-5 fs-md-3 mx-auto w-100 px-2">MS Word, MS Excel, MS Powerpoint <a href="#"><span>View More</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="pb-2 px-2 border-bottom">My Achivements</h2>
    </div>
</body>
<script src="assets/js/app.js"></script>

</html>