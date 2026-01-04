<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Members - DARKEMPEROR</title>

  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body{
      font-family:'Prompt',sans-serif;
      background:#070812;
      color:#fff;
      margin:0;
      padding:24px;
    }
    .wrap{max-width:1000px;margin:0 auto;}
    header{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:20px;
      flex-wrap:wrap;
      gap:10px;
    }
    .left h2{margin:0;}
    .grid{
      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
      gap:16px;
    }
    .card{
      background:linear-gradient(180deg,rgba(255,255,255,.05),rgba(255,255,255,.02));
      padding:12px;
      border-radius:10px;
      box-shadow:0 6px 18px rgba(0,0,0,.6);
      transition:.2s;
    }
    .card:hover{
      transform:translateY(-3px);
      box-shadow:0 8px 22px rgba(0,0,0,.8);
    }
    .avatar{
      width:56px;
      height:56px;
      border-radius:8px;
      overflow:hidden;
      background:#1f2937;
      margin-right:10px;
      flex-shrink:0;
    }
    .avatar img{
      width:100%;
      height:100%;
      object-fit:cover;
    }
    .name{font-weight:600;}
    .role{font-size:13px;color:#9ca3af;}
    a.fb{
      display:inline-block;
      margin-top:8px;
      font-size:13px;
      color:#60a5fa;
      text-decoration:none;
      background:rgba(96,165,250,.1);
      padding:5px 10px;
      border-radius:6px;
      transition:.2s;
    }
    a.fb:hover{background:rgba(96,165,250,.3);}
    nav a{color:#93c5fd;text-decoration:none;margin-left:10px;}
    .search-box input{
      background:#0b0d18;
      border:1px solid #1e293b;
      color:#fff;
      padding:8px 12px;
      border-radius:8px;
      outline:none;
      width:180px;
    }
    .search-box input:focus{border-color:#60a5fa;}
  </style>
</head>

<body>
<div class="wrap">

<header>
  <div class="left">
    <h2>Members</h2>
    <div class="role">ยินดีต้อนรับสู่ DARKEMPEROR</div>
  </div>
  <div style="display:flex;align-items:center;gap:10px;">
    <div class="search-box">
      <input type="text" id="searchInput" placeholder="ค้นหาชื่อสมาชิก...">
    </div>
    <nav>
      <a href="index.html">หน้าแรก</a> |
      <a href="https://ufsmp.com" target="_blank">Partner</a>
    </nav>
  </div>
</header>

<div class="grid">

<div class="card member-card" data-name="seft winterfell leader">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Leader</div>
    </div>
  </div>
  <a class="fb" href="#" target="_blank">Facebook</a>
</div>

<div class="card member-card" data-name="frequent knx leader">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Leader</div>
    </div>
  </div>
  <a class="fb" href="#" target="_blank">Facebook</a>
</div>

<div class="card member-card" data-name="lugai knx leader">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Leader</div>
    </div>
  </div>
  <a class="fb" href="#" target="_blank">Facebook</a>
</div>

<div class="card member-card" data-name="blink deargod member">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Member</div>
    </div>
  </div>
</div>

<div class="card member-card" data-name="aryang deargod member">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Member</div>
    </div>
  </div>
</div>

<div class="card member-card" data-name="boom deargod member">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Member</div>
    </div>
  </div>
</div>

<div class="card member-card" data-name="chris winterfell member">
  <div style="display:flex;align-items:center">
    <div class="avatar"><img src="logo.png" alt=""></div>
    <div>
      <div class="name">Name</div>
      <div class="role">Member</div>
    </div>
  </div>
  <a class="fb" href="https://www.facebook.com/chrisufsmp" target="_blank">Facebook</a>
</div>

</div>
</div>

<script>
const searchInput = document.getElementById('searchInput');
const cards = document.querySelectorAll('.member-card');

searchInput.addEventListener('input', () => {
  const q = searchInput.value.toLowerCase().trim();
  cards.forEach(card => {
    card.style.display = card.dataset.name.includes(q) ? '' : 'none';
  });
});

document.querySelectorAll('.avatar img').forEach(img => {
  img.onerror = function () {
    this.src = 'https://ui-avatars.com/api/?background=1f2937&color=fff&name=Member';
  };
});
</script>

</body>
</html>
