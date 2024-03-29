<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link -->
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" 
    integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <title>PHP ToDo List JSON</title>

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <h1 class="text-center my-3 text-white">My Todo-List</h1>
                <div class="list-container">
                    <ul class="list-unstyled">
                        <li v-for="city, key in city" :key="key" class="d-flex justify-content-between">
                            <div @click="toggleDone(key)" :class="city.done ? 'text-decoration-line-through' : ''">{{city.text}}</div>
                            <div class="d-flex">
                                <button @click="toggleDone(key)" class="btn btn-sm btn-primary">Visitata</button>
                                <button @click="deleteCity(key)" class="btn btn-sm btn-danger ms-2">Cancella</button>
                            </div>
                        </li>
                    </ul>
                    <div class="input-group mt-4">
                        <input type="text" v-model="newCity" @keyup.enter="addNewCity" class="form-control form-control-sm" placeholder="Aggiungi una nuova città da visitare">
                        <button type="button" class="btn btn-sm btn-primary" @click="addNewCity">Aggiungi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>