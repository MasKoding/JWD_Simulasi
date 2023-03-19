<?php 
        
        $id = $_GET['id'];
        $query = getPilihanBeasiswaById($id);
        $row = mysqli_fetch_assoc($query);
?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-8">
            <img src="<?=SRC_URL.'/image/'.$row['image']?>" alt="" class="img-thumbnail img-custom"> 

        </div>
    </div>
</div>


<div class="container">
    <div class="row d-flex justify-content-center">
   
    <div class="col-md-8 offset-md-4 mt-4">
        <h4 class="ms-3">Ketentuan & Syarat</h4>
        <?=$row['ketentuan']?>
    </div>
    
    </div>
</div>