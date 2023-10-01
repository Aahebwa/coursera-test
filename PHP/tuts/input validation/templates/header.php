<head>
    <title>Tibu</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: grey;
        }

        .nav-bar{
            display: flex;
            align-items: center;
            background: #fff;
            justify-content: center;
            padding: 20px;
            height: 70px;
        }

        .nav-bar ul{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        ul li{
            list-style-type: none;
        }

        ul li a{
            color: #fff;
            text-decoration: none;
        }

        .btn{
            background: #cbb09c;
            border-radius: 3px;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            padding: 10px 20px;
            margin: 100px;
            transition: .3s ease-in-out;
        }

        .btn:hover{
            color: #cbb09c;
            background: #fff;
        }

        .footer{
            text-align: center;
        }


    </style>
</head>
<body>
    <nav class="nav-bar">
        <ul>
            <li><a href="#" class="btn">Tibu Pizza</a></li>
            <li><a href="#" class="btn">Add A Pizza</a></li>
        </ul>

    </nav>