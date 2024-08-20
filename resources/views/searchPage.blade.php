<!DOCTYPE html>
<html lang="en" dir="ltr">
 
<head>
    <meta charset="utf-8">
    <title> 検索ページ </title>
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1309180_m0vigzfu7y.css">
    <style type="text/css">
        .bod1 {
            /*background: -webkit-linear-gradient(to right, #f7797d, #FBD786, #C6FFDD);*/
            /*background-image: url(" 2558.jpg");*/
            /*background-size:cover;*/
            background: #aa4b6b;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 
 
        }
 
        .search-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #FD2C6B;
            height: 40px;
            border-radius: 30px;
            /*圆角边框*/
            padding: 10px;
        }
 
        .search-box:hover>.search-text {
            width: 400px;
        }
 
        .search-box:hover>.search-btn {
            background: white;
            color: #26087b;
        }
 
        .search-btn {
 
            color: white;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #FD2C6B;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
        }
 
        .search-text {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: white;
            font-size: 20px;
            font-family: "Microsoft YaHei UI Light";
            transition: 0.5s;
            line-height: 40px;
            width: 0px;
 
        }
    </style>
</head>
 
<body class="bod1">
    <div class="search-box">
        <input class="search-text" name="inputs" placeholder="在这里输入你想要搜的的东西" >
        <a class="search-btn" onclick="as()">
            <i class="iconfont iconchazhao"></i>
        </a>
    </div>
</body>
<script>
   function as() {
   let e = document.getElementsByClassName('search-text').inputs.value
   window.location.href = `https://www.baidu.com/s?wd=${e}`
    console.log("fsfs",e)
   }
</script>
 
</html>