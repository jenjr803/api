<style>
    .carousel-item img{
        width: 1920px;
        height: 720px;
    }
</style>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner/<?=$Banner->find(['sh'=>1])['img'];?>" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
            <img src="https://picsum.photos/id/1001/1920/1080" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/id/1002/1920/1080" class="d-block w-100" alt="...">
        </div> -->
    </div>
</div>