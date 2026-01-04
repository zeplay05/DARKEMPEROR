<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members - DARKEMPEROR</title>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #60a5fa;
            --bg-dark: #05060f;
            --card-bg: rgba(255,255,255,0.03);
            --card-border: rgba(255,255,255,0.08);
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Prompt', sans-serif;
            background:
              linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
              url('ssa.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            margin: 0;
            min-height: 100vh;
        }

        .bg-glow {
            position: fixed;
            inset: 0;
            z-index: -1;
        }

        .bg-glow::after {
            content: "";
            position: absolute;
            inset: -50%;
            background: radial-gradient(circle, rgba(96,165,250,0.05) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            to { transform: rotate(360deg); }
        }

        .wrap {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .left h2 {
            margin: 0;
            font-size: 2.5rem;
            background: linear-gradient(to right, #fff, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            font-size: 14px;
            color: #9ca3af;
        }

        .controls {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-box input {
            background: rgba(11,13,24,0.6);
            border: 1px solid var(--card-border);
            color: #fff;
            padding: 12px 16px;
            border-radius: 12px;
            width: 240px;
            outline: none;
        }

        nav a {
            color: #93c5fd;
            text-decoration: none;
            font-size: 14px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            padding: 20px;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            backdrop-filter: blur(12px);
        }

        .card-top {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            align-items: center;
        }

        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            overflow: hidden;
            background: #1e293b;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .name { font-weight: 600; }
        .role-tag { font-size: 12px; color: #9ca3af; }

        .fb-btn {
            text-align: center;
            font-size: 13px;
            color: #fff;
            text-decoration: none;
            background: rgba(96,165,250,0.1);
            border: 1px solid rgba(96,165,250,0.2);
            padding: 8px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .no-link {
            text-align: center;
            font-size: 12px;
            color: #4b5563;
            margin-top: 15px;
        }
    </style>
</head>

<body>
<div class="bg-glow"></div>

<div class="wrap">
<header>
    <div class="left">
        <h2>Members</h2>
        <div class="subtitle">ยินดีต้อนรับสู่ DARKEMPEROR</div>
    </div>
    <div class="controls">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="ค้นหาชื่อหรือตำแหน่ง...">
        </div>
        <nav>
            <a href="index.php">หน้าแรก</a> |
            <a href="#">PARTNER</a>
        </nav>
    </div>
</header>

<div class="grid">

<div class="card member-card" data-name="shou conquers leader">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">LEADER</div>
        </div>
    </div>
            <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="frequent knx leader">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">LEADER</div>
        </div>
    </div>
        <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="lugai knx leader">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">LEADER</div>
        </div>
    </div>
        <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="try knxstyle leader">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">LEADER</div>
        </div>
    </div>
        <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="blink deargod member">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">Member</div>
        </div>
    </div>
        <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="aryang deargod member">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">Member</div>
        </div>
    </div>
        <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="mike deargod member">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">Member</div>
        </div>
    </div>
    <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>
<div class="card member-card" data-name="mike deargod member">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">Member</div>
        </div>
    </div>
    <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

<div class="card member-card" data-name="yang deargod member">
    <div class="card-top">
        <div class="avatar"><img src="logo.png"></div>
        <div>
            <div class="name">Name</div>
            <div class="role-tag">Member</div>
        </div>
    </div>
    <a class="fb-btn" href="LINK FACEBOOK" target="_blank">Facebook Profile</a>
    <div class="no-link">LINK FACEBOOK</div>
</div>

</div>
</div>

<script>
const searchInput = document.getElementById('searchInput');
const cards = document.querySelectorAll('.member-card');

searchInput.addEventListener('input', () => {
    const q = searchInput.value.toLowerCase();
    cards.forEach(card => {
        card.style.display = card.dataset.name.includes(q) ? 'flex' : 'none';
    });
});

document.querySelectorAll('.avatar img').forEach(img => {
    img.onerror = function () {
        this.src = 'https://ui-avatars.com/api/?background=1e293b&color=fff&name=Member';
    };
});
</script>
</body>
</html>
