<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <style>
        .content {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content-login {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: inherit;
        }
    </style>
    <title>로그인 페이지</title>
</head>
<body>
<div>
    <div class="content">
        <div class="content-login">
            <h2>로그인 페이지</h2>
            <form action="{{ route("frontend.auth.postLogin") }}" method="post">
                @csrf
                <label>아이디: <input name="id" type="text"/></label>
                <label>비밀번호: <input name="password" type="text"></label>
                <button>submit</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>