<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>한아름 러쉬 리뉴얼</title>
<!-- 테일윈드 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
<!-- 제이쿼리 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- 스와이프 불러오기 -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- 사이트 공통 JS -->
<script src="resource/common.js" defer></script>
<!-- 사이트 공통 CSS -->
<link rel="stylesheet" href="resource/common.css">
</head>
<body>
<div class="site-wrap">
  <header class="top-bar">
    <a href="index.ssg.php"><img class="cursor-pointer" src="resource/img/menu_1<?=$pageCode == 'home' ? '_active' : ''?>.png" alt=""></a>
    <a href="aboutMe.ssg.php"><img class="cursor-pointer" src="resource/img/menu_2<?=$pageCode == 'aboutMe' ? '_active' : ''?>.png" alt=""></a>
    <a href="pf.ssg.php"><img class="cursor-pointer" src="resource/img/menu_3<?=$pageCode == 'pf' ? '_active' : ''?>.png" alt=""></a>
    <a href="etc.ssg.php"><img class="cursor-pointer" src="resource/img/menu_4<?=$pageCode == 'etc' ? '_active' : ''?>.png" alt=""></a>
    <a href="email.ssg.php"></a> 
  </header>
