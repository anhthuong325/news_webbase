<?php
include 'enums/UserType.php';
session_start();

if (!in_array($_SESSION['ROLE'], array(UserType::ADMIN, UserType::STUDENT))) {
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/all.css" />
    <link rel="stylesheet" href="./css/content.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="app">
      <div class="header">
        <div class="title"><h3>News Web</h3></div>
        <nav>
          <a href="#">Home</a>
          <a href="#">Home</a>
          <a href="#">Home</a>
          <a href="#">Home</a>
        </nav>
        <div class="auth">
          <button>Đăng nhập</button>
        </div>
      </div>

      <div class="content__container">
        <div class="col__left">
          <h4>BÀI VIẾT MỚI NHẤT</h4>
          <div class="posts">
            <div class="content__posts">
              Tuyển Việt Nam thắng đậm Lào 6-0 ở trận ra quân AFF Cup 2022 mang
              đến niềm vui cho người hâm mộ.
            </div>
            <div class="content__posts">
              Tuyển Việt Nam thắng đậm Lào 6-0 ở trận ra quân AFF Cup 2022 mang
              đến niềm vui cho người hâm mộ.
            </div>
          </div>
        </div>
        <div class="col__right">
          <div class="time__upPost">
            <img
              src="https://cdn.pixabay.com/photo/2016/07/31/20/54/calendar-1559935_960_720.png"
            />
            <p>22/12/200</p>
          </div>

          <h2>
            Tuyển Việt Nam thắng đậm Lào 6-0 ở trận ra quân AFF Cup 2022 mang
            đến niềm vui cho người hâm mộ.
          </h2>
          <p>
            Tuyển Việt Nam thắng đậm Lào 6-0 ở trận ra quân AFF Cup 2022 mang
            đến niềm vui cho người hâm mộ, nhưng đứng ở góc độ chuyên môn HLV
            Park Hang Seo vẫn còn nhiều âu lo.
          </p>
          <img
            src="https://static-images.vnncdn.net/files/publish/2022/12/21/van-toan-1-1629.jpg?width=900"
          />
          <p>
            Tuyển Việt Nam thắng đậm Lào 6-0 ở trận ra quân AFF Cup 2022 mang
            đến niềm vui cho người hâm mộ, nhưng đứng ở góc độ chuyên môn HLV
            Park Hang Seo vẫn còn nhiều âu lo.
          </p>
        </div>
      </div>

      <div class="footer">
        <p>Bản quyền thuộc về @DC19CTT</p>
      </div>
    </div>
  </body>
  <script src="jquery-3.6.1.min.js"></script>
</html>
