<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN | DARKEMPEROR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('Background.JPEG');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center p-4">
    <div class="bg-black/60 backdrop-blur-xl p-8 rounded-2xl border border-white/10 w-full max-w-md shadow-2xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white tracking-tighter">ADMIN LOGIN</h1>
            <p class="text-gray-400 text-sm mt-2">เฉพาะผู้ดูแลระบบ DARKEMPEROR เท่านั้น</p>
        </div>

        <form action="check_login.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-gray-300 text-sm font-medium mb-2">Username</label>
                <input type="text" name="username" required
                    class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-white/40 transition">
            </div>
            
            <div>
                <label class="block text-gray-300 text-sm font-medium mb-2">Password</label>
                <input type="password" name="password" required
                    class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-white/40 transition">
            </div>

            <button type="submit" 
                class="w-full bg-white text-black font-bold py-3 rounded-lg hover:bg-gray-200 transition duration-300 uppercase tracking-widest">
                เข้าสู่ระบบ
            </button>
            
            <div class="text-center">
                <a href="index.html" class="text-gray-500 hover:text-white text-xs transition">กลับหน้าหลัก</a>
            </div>
        </form>
    </div>
</body>
</html>