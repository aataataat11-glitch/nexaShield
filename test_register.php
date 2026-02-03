<?php
include "db.php";

$test = $_GET['test'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare(
        "INSERT INTO test_registrations (name,email,test_title)
         VALUES (?,?,?)"
    );
    $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['test']);
    $stmt->execute();
    ?>
    <!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <title>تم التسجيل</title>
        <style>
            body{
                background:#0f172a;
                color:#e5e7eb;
                font-family:'Cairo',sans-serif;
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh;
            }
            .box{
                background:#111827;
                padding:40px;
                border-radius:16px;
                text-align:center;
                box-shadow:0 0 25px rgba(56,189,248,.3);
            }
            a{
                display:inline-block;
                margin-top:20px;
                padding:10px 18px;
                background:#38bdf8;
                color:#fff;
                text-decoration:none;
                border-radius:8px;
                transition:.3s;
            }
            a:hover{background:#22c55e;}
        </style>
    </head>
    <body>
        <div class="box">
            <h2>✅ تم التسجيل في الاختبار بنجاح</h2>
            <p>سيتم التواصل معك قريبًا</p>
            <a href="tests.php">العودة للاختبارات</a>
        </div>
    </body>
    </html>
    <?php
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>تسجيل الاختبار</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Cairo',sans-serif;}
body{
    background:#0f172a;
    color:#e5e7eb;
    min-height:100vh;
    overflow:hidden;
}
canvas#bg{
    position:fixed;
    top:0;left:0;
    z-index:-1;
}

/* الهيدر */
.logo-bar{
    display:flex;
    align-items:center;
    gap:15px;
    padding:10px 50px;
    background:#111827;
    border-bottom:1px solid #0f172a;
    direction:ltr;
}
.logo-img{
    width:40px;height:40px;
    border-radius:50%;
    border:2px solid #38bdf8;
}
.logo-text{
    font-size:20px;
    font-weight:bold;
    color:#4cbdee;
}
.nav{
    display:flex;
    gap:22px;
    margin-left:auto;
}
.nav a{
    color:#cbd5f5;
    text-decoration:none;
    font-size:15px;
}
.nav a:hover{color:#38bdf8;}

/* كارد التسجيل */
.container{
    display:flex;
    justify-content:center;
    align-items:center;
    padding:80px 20px;
}
.card{
    background:linear-gradient(180deg,#111827,#020617);
    padding:40px;
    border-radius:18px;
    width:100%;
    max-width:420px;
    box-shadow:0 0 30px rgba(56,189,248,.25);
}
.card h2{
    text-align:center;
    margin-bottom:10px;
    background:linear-gradient(to left,#38bdf8,#22c55e);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}
.card p{
    text-align:center;
    color:#94a3b8;
    margin-bottom:25px;
    font-size:14px;
}
input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border-radius:8px;
    border:none;
    background:#020617;
    color:#fff;
    font-size:14px;
}
button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#38bdf8;
    color:#fff;
    font-size:15px;
    cursor:pointer;
    transition:.3s;
}
button:hover{background:#22c55e;}
</style>
</head>

<body>

<canvas id="bg"></canvas>

<!-- الهيدر -->
<div class="logo-bar">
    <img src="images/img1.jpg" class="logo-img">
    <span class="logo-text">Nexa Shield</span>
    <nav class="nav">
        <a href="tests.php">الاختبارات</a>
        <a href="courses.html">الدورات</a>
        <a href="index.html">الرئيسية</a>
    </nav>
</div>

<!-- نموذج التسجيل -->
<div class="container">
    <div class="card">
        <h2>📝 تسجيل في الاختبار</h2>
        <p>الاختبار: <strong><?= htmlspecialchars($test) ?></strong></p>

        <form method="POST">
            <input type="text" name="name" placeholder="اسمك الكامل" required>
            <input type="email" name="email" placeholder="بريدك الإلكتروني" required>
            <input type="hidden" name="test" value="<?= htmlspecialchars($test) ?>">
            <button type="submit">تسجيل</button>
        </form>
    </div>
</div>

<script>
const canvas=document.getElementById("bg"),
ctx=canvas.getContext("2d");
function resize(){
    canvas.width=innerWidth;
    canvas.height=innerHeight;
}
resize();addEventListener("resize",resize);

const chars="01",size=16;
let cols=Math.floor(canvas.width/size),
drops=Array(cols).fill(1);

setInterval(()=>{
    ctx.fillStyle="rgba(15,23,42,.35)";
    ctx.fillRect(0,0,canvas.width,canvas.height);
    ctx.font=size+"px monospace";
    ctx.fillStyle="rgba(56,189,248,.15)";
    drops.forEach((y,i)=>{
        ctx.fillText(chars[Math.random()>0.5?1:0],i*size,y*size);
        if(y*size>canvas.height&&Math.random()>0.98)drops[i]=0;
        drops[i]++;
    });
},80);
</script>

</body>
</html>
