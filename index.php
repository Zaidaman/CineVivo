<?php

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>CineVivo</title>
    <style>
        body, html {
            margin:0;
            padding:0;
            font-family:Sans-serif;
            background:#512
        }
        #Titolo{
            font-size:50px;
        }
        .HeaderBar {
            width: 100%;
            height: 60px;
            background-color: #f00;
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-sizing: border-box;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }
        .logo img {
            height: 40px;
        }

        .Profile {
            margin-left: auto;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .Profile img {
            height: 40px;
        }

        .NavBar{
            width: 300px;
            background: #222;
            color: #eee;
            height: calc(100vh - 60px);
            display: flex;
            flex-direction: column;
            padding: 15px;
            box-sizing: border-box;
        }
        .search-container {
            display: flex;
            align-items: center;
            margin: 10px 0px;
        }
        .searchBtn {
            background-color: red;
            color: white;
            border: none;
            padding: 2px 10px;
            cursor: pointer;
        }
        input{
            width:100%;
            color:white;
            border: none;
            border-bottom: 2px solid red;
            background-color: #222;
        }
        ::placeholder {
            color: grey;
            opacity: 0.5;
            font-size: 17px;
        }
        #Categorie{
            display: flex;
            align-items: center;
            margin: 10px 0px;
            border-bottom: 2px solid red;
            color: grey;
            font-size: 30px;
        }
        #categorieList{
            background:lightgrey;
            opacity:0.2;
            padding: 5px;
            border:1px;
            border-radius:5px;
            margin-bottom: 10px;
        }
        #Cronologia{
            display: flex;
            align-items: center;
            margin: 10px 0px;
            border-bottom: 2px solid red;
            color: grey;
            font-size: 30px;
        }
        #cronologiaList{
            background:lightgrey;
            opacity:0.2;
            padding: 5px;
            border:1px;
            border-radius:5px;
            margin-bottom: 10px;
        }
        #Consigliati{
            display: flex;
            align-items: center;
            margin: 10px 0px;
            border-bottom: 2px solid red;
            color: grey;
            font-size: 30px;
        }
        #consigliatiList{
            background:lightgrey;
            opacity:0.2;
            padding: 5px;
            border:1px;
            border-radius:5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="HeaderBar">
        <div class="logo">
            <img src="img/CineVivoLogo.png" alt="CineVivo Logo">
            <label id="Titolo">CineVivo</label>
        </div>
        <div class="Profile">
            <label>dd</label>
            <img src="img/user.png" alt="CineVivo Logo">
        </div>
    </div>
    
    <div class="NavBar">
        <!-- Ricerca -->
        <div class="Search">
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Ricerca">
                <button id="searchBtn" class="searchBtn">Cerca</button>
            </div>
        </div>

        <!-- Categorie -->
        <div class="nav-section Categorie">
            <label id='Categorie'>Categorie</label>
        <div class="categorie-list" id="categorieList">
            <!-- Link categorie qui -->
            <a href="#">Azione</a>
            <a href="#">Avventura</a>
            <a href="#">Commedia</a>
        </div>
        </div>

        <!-- Cronologia -->
        <div class="nav-section Cronologia">
            <label id='Cronologia'>Cronologia</label>
        <div class="cronologia-list" id="cronologiaList">
            <!-- Link consigliati qui -->
            <a href="#">Film visto 1</a>
            <a href="#">Film visto 2</a>
            <a href="#">Film visto 3</a>
            <a href="#">Film visto 4</a>
        </div>

        <!-- Consigliati -->
        <div class="nav-section Consigliati">
            <label id='Consigliati'>Consigliati</label>
        <div class="consigliati-list" id="consigliatiList">
            <!-- Link consigliati qui -->
            <a href="#">Film consigliato 1</a>
            <a href="#">Film consigliato 2</a>
            <a href="#">Film consigliato 3</a>
            <a href="#">Film consigliato 4</a>
        </div>
    </div>
</body>
</html>
