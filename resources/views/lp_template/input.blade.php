<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ランディングページ テンプレート(Bootstrap)</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/css/lp_template.css') }}" rel="stylesheet">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/auth/lp-template/') }}">サイト名</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- nav-item 左寄せ -->
            <!-- この下の行に mr-auto クラスを付与するだけ -->
            <ul class="navbar-nav mr-auto">　
                <li class="nav-item"><a class="nav-link text-white" href="#1"><i class="fas fa-home mr-1"></i>導入</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#2"><i class="fas fa-yen-sign mr-1"></i>ベネフィット</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#3"><i class="fas fa-newspaper mr-1"></i>商品</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#4"><i class="far fa-comments mr-1"></i>お客様の声</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#5"><i class="fas fa-question-circle mr-1"></i>FAQ</a></li>
            </ul>
            <!-- nav-item 右寄せ -->
            <ul class="navbar-nav nav nav-pills">
                <li class="nav-item"><a class="nav-link active text-white bg-danger active" href="#6">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header - set the background image for the header in the line below -->
<header id="main">
    <img class="pc" src="{{ asset('/assets/images/lp_template/pc/main.png') }}" alt="PC用の画像" class="img-fluid">
    <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/main.png') }}" alt="スマホ用の画像" class="img-fluid" border="0">
</header>

<!-- Content section(アクション導線) -->
<section class="py-5 box01">
    <div class="container text-center">
        <a href="#6"><img src="{{ asset('/assets/images/lp_template/pc/action.png') }}" class="img-fluid"></a>
    </div>
</section>

<!-- Content section(導入・きっかけ) -->
<section class="py-5 box02" id="1">
    <div class="container text-center">
        <img class="pc" src="{{ asset('/assets/images/lp_template/pc/box01.png') }}" class="img-fluid">
        <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/box01.png') }}" class="img-fluid">
    </div>
</section>

<!-- Content section(ベネフィット) -->
<section class="py-5 box01" id="2">
    <div class="container text-center">
        <img class="pc" src="{{ asset('/assets/images/lp_template/pc/box02.png') }}" class="img-fluid">
        <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/box02.png') }}" class="img-fluid">
    </div>
</section>

<!-- Content section(アクション導線) -->
<section class="py-5 box02">
    <div class="container text-center">
        <a href="#6"> <img src="{{ asset('/assets/images/lp_template/pc/action.png') }}" class="img-fluid"></a>
    </div>
</section>

<!-- Content section(商品・サービス説明) -->
<section class="py-5 box01" id="3">
    <div class="container text-center">
        <img class="pc" src="{{ asset('/assets/images/lp_template/pc/box03_01.png') }}" class="img-fluid">
        <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/box03_01.png') }}" class="img-fluid">
    </div>
    <div class="container text-center">
        <img class="pc" src="{{ asset('/assets/images/lp_template/pc/box03_02.png') }}" class="img-fluid">
        <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/box03_02.png') }}" class="img-fluid">
    </div>
</section>

<!-- Content section(お客さまの声) -->
<section class="py-5 box02" id="4">
    <div class="container text-center">
        <img class="pc" src="{{ asset('/assets/images/lp_template/pc/box04.png') }}" class="img-fluid">
        <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/box04.png') }}" class="img-fluid">
    </div>
</section>

<!-- Content section(アクション導線) -->
<section class="py-5 box01">
    <div class="container text-center">
        <a href="#6"><img src="{{ asset('/assets/images/lp_template/pc/action.png') }}" class="img-fluid"></a>
    </div>
</section>

<!-- Content section(FAQ) -->
<section class="py-5 box02" id="5">
    <div class="container text-center">
        <img class="pc" src="{{ asset('/assets/images/lp_template/pc/box05.png') }}" class="img-fluid">
        <img class="sp" src="{{ asset('/assets/images/lp_template/mobile/box05.png') }}" class="img-fluid">
    </div>
</section>

<!-- Content section(お問い合わせ) -->
<section class="py-5 box01" id="6">

    <div class="container">

        <div class="alert alert-danger" role="alert">
            <strong>注意</strong><br>
            スパムメール対策として、実際にはメールは送信されません！<br>
            バリデーションと画面推移だけご確認ください。
        </div>

        <!-- フォーム Start-->
        <form method="post" action="{{ url('/auth/lp-template') }}#6" class="needs-validation" novalidate>
        {{ method_field('patch') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!--氏名-->
            <div class="form-group row">
                <label for="inputName" class="text-left col-sm-2 col-form-label">氏名　<img src="{{ asset('/assets/images/lp_template/require.jpg') }}"> </label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="inputName" placeholder="氏名" required>
                    @if($errors->has('name'))
                        {{-- リクエストクラスのエラーメッセージ --}}
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @else
                        {{-- HTMLのエラーメッセージ --}}
                        <div class="invalid-feedback">必須項目です</div>
                    @endif
                </div>
            </div>
            <!--/氏名-->

            <!--Eメール-->
            <div class="form-group row">
                <label for="inputEmail" class="text-left col-sm-2 col-form-label">Eメール　<img src="{{ asset('/assets/images/lp_template/require.jpg') }}"> </label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" @if($errors->has('email')) is-invalid @endif id="inputEmail" placeholder="Eメール" required>
                    @if($errors->has('email'))
                        {{-- リクエストクラスのエラーメッセージ --}}
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @else
                        {{-- HTMLのエラーメッセージ --}}
                        <div class="invalid-feedback">必須項目です</div>
                    @endif
                </div>
            </div>
            <!--/Eメール-->

            <!--内容-->
            <div class="form-group row">
                <label for="Textarea" class="text-left col-sm-2 col-form-label">お問い合わせ内容</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="note" id="Textarea" rows="3" placeholder="その他、質問などありましたら"></textarea>
                </div>
            </div>
            <!--/内容-->

            <!--ボタンブロック-->
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-block btn-lg">入力内容を確認</button>
                </div>
            </div>
            <!--/ボタンブロック-->

        </form>
        <!-- フォーム End -->
    </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright (C) 20xx SITE NAME All Rights Reserved. 　Powered by <a href="https://laraweb.net/" target="_blank">Laravel学習張</a></p>
    </div>
    <!-- /.container -->
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<script>
/*– Smmoth Scroll ———————–*/
$(function(){
    $('a[href^="#"]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});

/*– 無効なフィールドがある場合にフォーム送信を無効にする ———————–*/
(function() {
    'use strict';

    window.addEventListener('load', function() {
        // カスタムブートストラップ検証スタイルを適用するすべてのフォームを取得
        var forms = document.getElementsByClassName('needs-validation');
        // ループして帰順を防ぐ
        var validation = Array.prototype.filter.call(forms, function(form) {
            // submitボタンを押したら以下を実行
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
</body>
</html>
