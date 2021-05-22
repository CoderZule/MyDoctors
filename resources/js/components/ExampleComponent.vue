<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://pbs.twimg.com/media/EUv1fSOU8AA9S8R.jpg"
                alt="Los Angeles"
                style="width: 100%"
              />
            </div>

            <div class="carousel-item">
              <img
                src="https://ichef.bbci.co.uk/news/2048/cpsprodpb/CEAB/production/_114370925_corona_what_you_need_to_do_09sep_640_3x-nc-2.png"
                alt="Chicago"
                style="width: 100%"
              />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min.js";

export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>