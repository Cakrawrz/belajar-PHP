<form action="" method="POST">
      Program Cek Data Umur Masyarakat 
      <br>
      Umur : <input type="text" name="umur">
      <input type="submit" value="hasil">
</form>
    <?php
      if ($_POST)
      {
        $umur = $_POST['umur'];
        if ($umur <= 10)
        {
          $keterangan = ("Anak-anak");
        }
        elseif ($umur <= 18)
        {
          $keterangan = ("Remaja");
        }
        elseif ($umur <= 35)
        {
          $keterangan = ("Dewasa");
        }
        elseif ($umur <= 50)
        {
          $keterangan = ("Parubaya");
        }
        else {
          $keterangan = ("Tua");
        }
        echo "Data Masyarakat :";
        echo "<br>";
        echo "Umur : ".$umur;
        echo "<br>";
        echo "Keterangan : ".$keterangan;
        echo "<br>";
      }
    ?>