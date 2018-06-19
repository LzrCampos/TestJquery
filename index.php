<!DOCTYPE html>

<html>

<head>
    <title>Usuarios</title>
    <style>
        #di {
            margin: 0 auto;
            width: 400px;
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
            background-color: #fff  ;
        }

        h1 {
            text-align: center;
        }

        div+div {
            margin-top: 1em;
        }

        .button {
            text-align: center;
            margin-left: .5em;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $("#driver").click(function (event) {
                $.get('https://lzrtestapi.azurewebsites.net/api/user', function (data) {
                    $.each(data, function (i, user) {
                        var item = "<li><b>Nome</b>: " + user.firstName + "</li><li><b>Sobrenome:</b> " + user.lastName + "</li><li><b>Idade:</b> " + user.age + "</li><br/>";
                        $("#test").append(item);
                    });
                });
            });
        })

    </script>
</head>

<body bgcolor="#00BFFF">
    <h1>Lista de Usuarios</h1>
    <br/>
    <div id="di">
        <ul style="list-style-type:none" id="test">
        </ul>
        <div class="button">
            <button type="submit" id="driver">Buscar</button>
        </div>
    </div>

</body>

</html>