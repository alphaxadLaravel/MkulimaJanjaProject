<?php

function productCard($conn,$page_request){

    $sql = "SELECT * FROM bidhaa where (category ='$page_request' AND status = 'active') ORDER BY id Desc";
    $check = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($check)){
?>

<div class="col-md-3 my-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="card border-0 shadow-sm">
        <div class="position-relative bg-light overflow-hidden">
            <a href="bidhaa.php?id=<?php echo $row['id']; ?>"><img class="img-fluid w-100" src="<?php echo $row['picha']; ?>" style="height: 200px;" alt=""></a>
            <!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
        </div>
        <div class="text-center p-4">
            <!-- <a class="d-block h5 mb-2" href="bidhaa.php?id=<?php echo $row['id']; ?>"><?php echo $row['jina_bidhaa']; ?></a> -->
          <a class=" mb-2" href="bidhaa.php?id=<?php echo $row['id']; ?>"><span class=" me-1"><span class="text-dark">Bei:</span> <span class="text-primary">Tsh <?php echo number_format($row['bei'])?>/=</span></span></a>
            <!-- <span class="text-body text-decoration-line-through">Tsh 2,000/=</span> -->
        </div>
        <!-- <div class="d-flex border-top">
            <small class="w-50 text-center border-end py-2">
                <a class="text-body" href="bidhaa.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye text-primary me-2"></i>Taarifa zaidi</a>
            </small>
            <small class="w-50 text-center py-2">
                <a class="text-body" href="cart.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Weka Kapuni</a>
            </small>
        </div> -->
    </div>
</div>

<?php }};?>