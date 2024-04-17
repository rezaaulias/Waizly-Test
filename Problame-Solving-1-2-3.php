<html>
    <head>
        <title>Implementasi Backend 1 dan 2 - Reza Aulia Syahputra</title>
    </head>
<body>

<p>
    <b>Problem Solving Basic #1 </b>
</p>

<p>
    <b>Array number : 1,2,3,4,5</b>
</p>

<script>
    
let number_arr = [1,2,3,4,5]

let sum = number_arr.reduce((a, b) => a + b)

let maxNum = Math.max(...number_arr)
let minNum = Math.min(...number_arr)

document.write("Hasil kalkulasi penjumlahan dari angka di atas menemukan 2 nilai yaitu : <br>")

document.write("1. Nilai Minimum = " + `${sum - maxNum}` + "<br>")
document.write("2. Nilai Maximum = " +`${sum - minNum}` + "<br>")

</script>

<hr>

<!-- #2 -->

<p>
    <b>Problem Solving Basic #2 </b>
</p>

<p>
    <b>Array number : -4,3,-9,0,4,1</b>
</p>

<script>

var noPositif = 0;
var noNegativ = 0;
var noZero = 0;
var decimal = 6;

function BasicTest2(arr) {
 
  var length = arr.length
  var result = []
  for (var i = 0; i < arr.length; i++) {
        if (arr[i] > 0) {
            noPositif += 1;
        } else if (arr[i] < 0) {
            noNegativ += 1;
        } else {
            noZero += 1;
        }
    }
    
    var positif = parseFloat(noPositif / length).toFixed(decimal);
    var negatif = parseFloat(noNegativ / length).toFixed(decimal);
    var zero = parseFloat(noZero / length).toFixed(decimal);
    
    document.write("Hasil pembagian dari nilai positif , negatif dan nol yaitu : <br>")
    document.write("1. Nilai Positif = " +positif+"<br>");
    document.write("2. Nilai Negativ = " + negatif+"<br>");
    document.write("3. Nilai Nol = " +zero+"<br>");

	
}

BasicTest2([-4,3,-9,0,4,1])

</script>

<hr>

<!-- #3 -->

<p>
    <b>Problem Solving Basic #3 </b>
</p>

<p>
    Convert Format Waktu 12 Jam ke Format Waktu 24 Jam
</p>

<form action="" method="post">
  <small>Input Format 12 Jam</small><br>
  <input type="text" name="input12Format" placeholder="00:00:00 PM"/>
  <input type="submit" name="Convert" Value="Convert"/>
</form>   

<?php

if(isset($_POST['Convert'])){
    
    $waktu12Jam = $_POST['input12Format'];
    $waktu24Jam  = date("H:i:s", strtotime($waktu12Jam));
    
    echo $output = "Format Waktu 12 Jam : ".strtoupper($waktu12Jam)."<br>";
    echo $output = "Format Waktu 24 Jam : ".$waktu24Jam;
}    

?>

<hr>

</body>
</html>
