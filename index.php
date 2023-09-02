<?php
    include_once "functions.php";
    includeheader("home");
    ?>
    
<style>
    #mainface button{
border: 0;

background-color:transparent;
background-image: url(blackpainttt.png);
background-position:  right;
background-repeat: repeat;
background-size: cover;
padding: 20px 90px 20px 25px;
cursor: pointer;
font-size: 20px;
font-weight: 500;
color: yellow;
}
a {
text-decoration:none;
color:inherit;

}
</style>
<body>
    <section id="mainface" >
        
        <h4>Save Money!</h4>
        <div>
        <h2>Huge Sales For </h2>
        <h1>A Limited-time</h1>
        </div>
        <p>up to 90% OFF!!!!!!</p>


        <a href="shop.php"><button>Shop now</button></a>
        </div>


    </section>
    <br><br>

    <section id="feaproducts" class="sectionp1">
        <h2> Our Featured Products</h2>
        <p> New Winter Collection</p>
        <div class="pro-container">
        <?php
        include "connection.php";
        $sqlf="SELECT * FROM `products` WHERE isf=1 ";
        $resf=mysqli_query($con,$sqlf);
        if(mysqli_num_rows($resf) > 0){
        while($products=mysqli_fetch_assoc($resf)){?>
        <a href="productview.php?idd=<?=$products['id'];?>">
            <div class="prod1">
                <img src="uploads/<?=$products['image1']?>" alt="">
                <div class="desc">
                    <span><?=$products['brand']?> </span>
                    <h5><?=$products['name']?></h5>
                    <div class="star">
                        <i class="fas fa-star <?php if($products['rating']>=1){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=2){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=3){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=4){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=5){echo('checked');}?> "></i>
                    </div>
                    <h4> <?=$products['price']?>$</h4>
                    </a>
                </div>
                
            </div>
       <?php }
    }?>
       </div>     
       
    </section>
    <section id="banner1" class="section-m1">
        <h4><nobr>Trendy &Elegant Collections<nobr></h4>
        <h2> <span> Fast Free Shipping</span></h2>  <h2><span> 3-Day Return Policy</span></h2>
        </section>
       <section id="feaproducts" class="sectionp1">
        <h2> New Arrivals</h2>
        <p> Our New Fresh Products</p>
        <div class="pro-container">
        <?php
        include "connection.php";
        $sql="SELECT * FROM `products` WHERE isf=0 ";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res) > 0){
        while($products=mysqli_fetch_assoc($res)){?>
        <a href="productview.php?idd=<?=$products['id'];?>">
            <div class="prod1">
                <img src="uploads/<?=$products['image1']?>" alt="">
                <div class="desc">
                    <span><?=$products['brand']?> </span>
                    <h5><?=$products['name']?></h5>
                    <div class="star">
                        <i class="fas fa-star <?php if($products['rating']>=1){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=2){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=3){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=4){echo('checked');}?>"></i>
                        <i class="fas fa-star <?php if($products['rating']>=5){echo('checked');}?> "></i>
                    </div>
                    <h4> <?=$products['price']?>$</h4>
                    </a>
                </div>
                
            </div>
       <?php }
    }?>
       </div>     
    </section>
    <?php
    include "footer.php";
    ?>
    <script>

        
    </script>
</body>

</html>