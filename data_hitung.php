<div class="card-container">
    <?php 
        include "config.php";

        // Hitung jumlah makanan
        // $query = mysqli_query($conn, "SELECT COUNT(*) as total FROM makanan");
        // $dataMakanan = mysqli_fetch_assoc($query);

        //oop
        $query = $conn->query("SELECT COUNT(*) as total FROM makanan");
        $dataMakanan = $query->fetch_assoc();
        
        $totalMakanan = $dataMakanan['total'];
        $totalWisata = 0;

    ?>
    <div class="card">
        <h3>Total Makanan Khas</h3>
        <p><?php echo $totalMakanan; ?></p>
    </div>

    <div class="card">
        <h3>Total Objek Wisata</h3>
        <p><?php echo $totalWisata; ?></p>
    </div>

</div>