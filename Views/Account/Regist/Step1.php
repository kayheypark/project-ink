<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>잉크</title>
<?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Style.php'; ?>
</head>
<body class="bg-green">
<?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Header.php'; ?>
<main class="py-3 py-md-5 Regist Step1">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8">
                            <em class="cate">회원가입</em>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <a href="/" class="">홈</a>
                            &nbsp;&gt;&nbsp;
                            <a href="javascript:location.reload();" class="">회원가입</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <label for="ID">아이디</label>
                                    <input type="text" id="ID" name="UserInformaion" class="form-control w-50" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <label for="Password">비밀번호</label>
                                    <input type="password" id="Password" name="UserInformaion" class="form-control w-50" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="password" id="Password_Re" name="UserInformaion" class="form-control w-50" placeholder="(재입력)" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <label for="Name">이름</label>
                                    <input type="text" id="Name" name="UserInformaion" class="form-control w-50" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Footer.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/Views/Layout/Script.php'; ?>
</body>
</html>