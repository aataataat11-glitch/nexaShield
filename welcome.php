<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>مرحبا</title>
<style>
canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}
* {margin:0; padding:0; box-sizing:border-box; font-family:'Cairo',sans-serif;}
body {
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color:#ffffff;
    text-align:center;
}
h1 {
    font-size:20px;
    margin-bottom:25px;
    background: linear-gradient(to right, #38bdf8, #22c55e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
button {
    padding:15px 40px;
    font-size:18px;
    background: linear-gradient(to right, #38bdf8, #0ea5e9);
    border:none;
    border-radius:10px;
    cursor:pointer;
    color:#020617;
    font-weight:bold;
    transition:0.3s;
}
button:hover { transform:scale(1.05); }
.nav {margin-top:30px;}
.nav a {color:#38bdf8; text-decoration:none; font-size:16px; margin:0 10px;}
.nav a:hover {text-decoration:underline;}
</style>
</head>
<body>
<canvas id="bg"></canvas>

<h1>ابدأ رحلتك في الامن السيبراني<br>
<br>

</h1>


<button onclick="startJourney()">ابدأ رحلتك</button>


<script>
function startJourney() {
    window.location.href = 'index.php'; 
}

</script>
<script>
const canvas = document.getElementById("bg");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

// خلفية ثنائية خافتة
const chars = "01";
const fontSize = 16;
let columns = Math.floor(canvas.width / fontSize);
let drops = Array(columns).fill(1);

function drawBinary() {
    ctx.fillStyle = "rgba(15, 23, 42, 0.35)"; // نفس لون الخلفية تقريبًا
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = fontSize + "px monospace";
    ctx.fillStyle = "rgba(56, 189, 248, 0.15)"; // خافت جدًا

    for (let i = 0; i < drops.length; i++) {
        const text = chars[Math.floor(Math.random() * chars.length)];
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        if (drops[i] * fontSize > canvas.height && Math.random() > 0.98) {
            drops[i] = 0;
        }
        drops[i]++;
    }
}

setInterval(drawBinary, 80);
</script>

</body>
</html>

