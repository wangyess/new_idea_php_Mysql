<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>这个天才又来啦❤️</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/public/public.css">
    <link rel="stylesheet" href="/css/public/home.css">
</head>
<body>
<div class="small-container one">
    <div class="nav">
        <?php if (logged_in()): ?>
            <a href="/logout">登出</a>
        <?php else: ?>
            <a href="/login">登录</a>
            <a href="/signup">注册</a>
        <?php endif; ?>
        <?php echo logged_in() ? his('username') : '游客' ?>你好
    </div>

    <div class="shopping-page">
        <div class="shopping-left">
            <p>购物车</p>
        </div>
        <div class="shopping-right">
            <div class="shopping-r-t">

            </div>
            <hr>
            <div class="shopping-r-b">
                <div><button class="btn btn-default btn_c">一键清空购物车</button></div>
                <div class="price_c"><span>价格 : </span> <span id="price_page"> 888</span>元 </div>
                <div><button class="btn btn-default btn_2_c">结算</button></div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="col-xs-2">
            <div class="cat-list">
            </div>
        </div>
        <div class="col-xs-10">
            <div class="product-list">
                <div class="shopping">
                    <a href="">购物车</a>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<script src="/js/util/fundation.js"></script>
<script src="/js/admin/model_api.js"></script>
<script src="js/public/home.js"></script>
</body>
</html>