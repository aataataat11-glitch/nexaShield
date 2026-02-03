<?php
include "db.php";
$result = $conn->query("SELECT * FROM books ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>مكتبة الكتب | Nexa Shield</title>

<style>
canvas#bg{
  position:fixed;
  inset:0;
  z-index:-1;
}
body{
  margin:0;
  background:#0f172a;
  color:#e5e7eb;
  font-family:'Cairo',sans-serif;
}

.logo-bar{
  background:#111827;
  padding:10px 50px;
  display:flex;
  align-items:center;
  gap:15px;
}
.logo-img{
  width:40px;height:40px;
  border-radius:50%;
  border:2px solid #38bdf8;
}
.logo-text{
  font-size:22px;
  color:#38bdf8;
  font-weight:bold;
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
.nav a:hover{color:#38bdf8}

.content{
  padding:50px 60px;
}
h1{
  text-align:center;
  color:#38bdf8;
  margin-bottom:40px;
}

.books-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
}
.book-card{
  background:#1e293b;
  border:2px solid #38bdf8;
  border-radius:14px;
  text-align:center;
  padding:15px;
  cursor:pointer;
  transition:.3s;
}
.book-card:hover{
  transform:scale(1.05);
}
.book-card img{
  width:100%;
  height:260px;
  object-fit:cover;
  border-radius:10px;
}
.book-card h3{
  margin-top:12px;
  color:#38bdf8;
  font-size:16px;
}

#pdf-box{
  display:none;
  position:fixed;
  inset:0;
  background:rgba(15,23,42,.95);
  z-index:999;
  justify-content:center;
  align-items:center;
  flex-direction:column;
}
#pdf-box iframe{
  width:90%;
  height:90%;
  border-radius:12px;
}
#close{
  margin-top:15px;
  padding:10px 25px;
  border:none;
  border-radius:8px;
  background:#38bdf8;
  cursor:pointer;
}
</style>
</head>

<body>

<canvas id="bg"></canvas>

<div class="logo-bar">
  <img src="images/img1.jpg" class="logo-img">
  <span class="logo-text">Nexa Shield</span>
  <nav class="nav">
        <a href="about.php">Nexa Shield</a>
        <a href="tools.php">الادوات</a>
        <a href="vulnerabilities.php">الثغرات</a>
        <a href="tests.php">الاختبارات</a>
        <a href="courses.php">الدورات</a>
        <a href="materials.php">المواد</a>
        <a href="books.php">الكتب</a>
        <a href="index.php">الرئيسية</a>
        <a href="welcome.php">بداية الرحلة</a>
    </nav>
</div>

<div class="content">
<h1>مكتبة الكتب</h1>

<div class="books-grid">
<?php while($row = $result->fetch_assoc()): ?>
<div class="book-card" onclick="openPDF('books/<?= htmlspecialchars($row['pdf']) ?>')">
    <img src="images/books/<?= htmlspecialchars($row['image']) ?>">
    <h3><?= htmlspecialchars($row['title']) ?></h3>
  </div>
<?php endwhile; ?>
</div>
</div>

<div id="pdf-box">
  <iframe id="pdf-frame"></iframe>
  <button id="close" onclick="closePDF()">إغلاق</button>
</div>

<script>
function openPDF(src){
  document.getElementById('pdf-frame').src = src;
  document.getElementById('pdf-box').style.display='flex';
}
function closePDF(){
  document.getElementById('pdf-frame').src='';
  document.getElementById('pdf-box').style.display='none';
}

const c=document.getElementById("bg"),x=c.getContext("2d");
function r(){c.width=innerWidth;c.height=innerHeight}
r();addEventListener("resize",r);
let d=Array(Math.floor(c.width/16)).fill(1);
setInterval(()=>{
x.fillStyle="rgba(15,23,42,.3)";
x.fillRect(0,0,c.width,c.height);
x.fillStyle="rgba(56,189,248,.15)";
x.font="16px monospace";
d.forEach((y,i)=>{
x.fillText(Math.random()>0.5?"0":"1",i*16,y*16);
d[i]=(y*16>c.height&&Math.random()>.975)?0:y+1;
});
},80);
</script>

</body>
</html>





