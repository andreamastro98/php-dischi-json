<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div id="app">
        <div class="bg-body">

            <!-- nav -->
            <nav class="navbar mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">DISCHI JSON</a>
                </div>
            </nav>

            <!-- body -->
            <div class="container d-flex justify-content-between flex-wrap">

                <div v-for="(elem,index) in data" :key="index" class="card mb-5 px-5 pt-5">
                    <img :src="elem.poster" class="card-img-top" :alt="elem.title">
                    <div class="card-body mt-2">
                        <h5 class="card-title text-center">{{ elem.title }}</h5>
                        <p class="card-text text-center">{{ elem.author }}</p>
                        <h5 class="text-center">{{ elem.year }}</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>