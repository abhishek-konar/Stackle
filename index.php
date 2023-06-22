<?php include ("./navbar.php");
?>

<body  onload="startTime()">
<div class="container-fluid">
  <div class="cover">
    <p class="display-5">Explore a vast selection <br> of products.</p>
    <p class="lead my-4">Easy Returns. Hassle Free Shopping. Buy Now! <br>
      Low Prices. Easy & Fast Delivery. Top Brands. Huge Selection.
      
    </p>
    <div class="display-5" id="txt"></div>
</div>
</div>
</body>
<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>