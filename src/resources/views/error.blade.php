<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <title>{{$status==200?'提示':'错误提示'}}</title>
    <!-- Styles -->
    <style>
body{
    background-color: #fff;
}
.error-page {
    height: 100%;
    position: fixed;
    width: 100%;
}
.error-body {
    padding-top: 5%;
}
.error-body h1 {
    font-size: 210px;
    font-weight: 700;
    text-shadow: 4px 4px 0 #f5f6fa, 6px 6px 0 #33cabb;
    line-height: 210px;
    color: #33cabb;
}
.error-body h4 {
    margin: 30px 0px;
}
</style>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }

        a {
            text-decoration: none;
            font-size: 13px;
        }
    </style>
</head>
<body>
<section class="error-page">
  <div class="error-box">
    <div class="error-body text-center">



            <h1>{{$status}}</h1>
            <h4 class="message" style="padding: 10px;">
                {{ $error }}
            </h4>
        </div>
        <div style="text-align: center;margin-top: 15px">
            <a href="{{ ($url && $url!='S')?$url:'javascript:history.back(-1)' }}"
               id="url">点击跳转@if(isset($url) && $url!='S')(<span id="s">4</span>)@endif</a>
            <a style="margin-left: 10px" href="/">返回首页</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    function url() {
        var s = document.getElementById("s").innerText;
        s = Number(s);
        s--;
        if (s < 1) {
            document.getElementById("url").click();
        } else {
            document.getElementById("s").innerText = s;
            setTimeout(url, 1000);
        }
    }

    @if(isset($url) && $url!='S')
    url();
    @endif
</script>
</body>
</html>
