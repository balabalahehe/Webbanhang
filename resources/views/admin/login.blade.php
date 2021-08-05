<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'arial';
            font-size: 20px;
            font-weight: 300;
            background: linear-gradient(45deg, #ff8a9e, #6fdbff);
        }

        form {
            padding: 40px;
            border-radius: 20px;
            display: flex;
            gap: 30px;
            flex-direction: column;
            background: #EBECF0;
            position: relative;
            box-shadow: 5px 10px 40px #00000072;
        }

        .input-container-flex {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            align-items: center;
            gap: 15px;
            padding-left: 20px;
            margin-top: -15px;
            margin-bottom: -15px;
            font-size: 70%;
            text-shadow: 1px 1px 1px #fff;
            color: #6d6d6d;
            letter-spacing: 0.5px;
        }

        .log-in {
            text-align: center;
            font-weight: 900;
            color: #BABECC;
            font-size: 170%;
            text-shadow: 1px 1px 1px #fff;
        }

        button {
            width: 100%;
            height: 45px;
            border-radius: 30px;
            border: none;
            box-shadow: 0px 5px 8px #b5b5b5, 0px -5px 8px #fff;
            font-weight: 900;
            font-size: 85%;
            color: #555;
            text-shadow: 1px 1px 1px #fff;
            cursor: pointer;
            background: #EBECF0;
            transition: 0.3s;
        }

        button:hover {
            box-shadow: 0px 3px 3px #b5b5b5, 0px -3px 3px #fff;
            ;
        }

        button:focus {
            box-shadow: inset 2px 2px 2px #a5a5a5, inset -2px -2px 2px #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 300px;
            border-radius: 30px;
            outline: none;
            border: none;
            background: transparent;
            box-shadow: inset 2px 2px 5px #a5a5a5, inset -5px -5px 10px #fff;
            padding: 18px;
            position: relative;
            z-index: 1;
            transition: 0.3s all;
            font-size: 75%;
            text-shadow: 1px 1px 1px #fff;
            color: #6d6d6d;
            letter-spacing: 0.5px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            box-shadow: inset 2px 2px 2px #a5a5a5, inset -2px -2px 2px #fff;
        }

        input[type="button"] {
            border: none;
            box-shadow: inset 2px 2px 2px #a5a5a5, inset -2px -2px 2px #fff;
            border-radius: 3px;
            padding: 6px 8px;
            cursor: pointer;
            transition: 0.3s all;
        }

        input[type="button"]:hover {
            box-shadow: inset 1px 1px 1px #a5a5a5, inset -1px -1px 1px #fff;
        }

        .is-checked {
            color: #555;
        }

        .is-not-checked {
            color: transparent;
        }

        ::placeholder {
            text-shadow: 1px 1px 1px #fff;
            color: #6d6d6d;
            letter-spacing: 0.5px;
            font-size: 100%;
            transition: 0.3s all;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="{{Route('adminLogin')}}" method="post">
            @csrf
            <p class="log-in">Log In</p>
            <div class="input-container">
                <input name="email" type="text" placeholder="Email">
            </div>
            <div class="input-container">
                <input name="password" type="text" placeholder="Password">
            </div>
            <div class="input-container">
                <button type="submit" class="login-btn">Log in</button>
            </div>
        </form>
    </div>
</body>
<script>
    const checkBox = document.querySelector('.check-box');

    let isChecked = false;

    checkBox.addEventListener('click', () => {
    if (!isChecked) {
        checkBox.classList.add('is-checked');
        checkBox.classList.remove('is-not-checked')
        isChecked = true
    } else {
        checkBox.classList.remove('is-checked');
        checkBox.classList.add('is-not-checked')
        isChecked = false;
    }
    });

    document.querySelector('.login-btn').addEventListener('click', (e) => {
        e.preventDefault()
    });
</script>

</html>
