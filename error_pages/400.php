<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Erreur 400</title>
        <style>
            #bloc_page {
                display: flex;
                width: 100%;
            }
            #error_div {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 200px;
                margin-left: auto;
                margin-right: auto;
            }
            #error_code {
                font-size: 5em;
                color: red;
            }
        </style> 
    </head>
        
    <body>
        <div id="bloc_page">
            <header></header>
            <div id="error_div">
                <p id="error_code">Erreur 400</p>
                <p id="error_tip">Bad Request - Syntaxe de la requête mal formulée.</p>
            </div>
            <footer></footer>
        </div>
    </body>
</html>