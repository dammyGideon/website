<div class="col-md-4 sidebar">

    <div class="input-group">
      <input type="text"
      class="form-control"
      placeholder="Search For.."
      >
        <div class="input-group-append">

                <div class="btn" style="background:#48887b">
                    <button class="btn" type="button">
                        <i class="fas fa-search" style="color: white"></i>
                    </button>
                  </div>

          </div>
      </div>





  <!--categories-->
<div class="card mt-5 shadow p-3 mb-5 bg-white rounded">
    <?php 
          $category=App\Models\BlogCategory::orderby('blog_category','asc')->get();    
        
    
    ?>
    <div class="card-header p-3">
      <b>CATEGORIES</b>
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($category as $cat )

        <?php
        $post=DB::table('blog_posts')->where('category_id',$cat->id)->pluck('id');
        ?>

        <li class="list-group-item p-3" style="background:#48887b">
            <a href="{{ route('blog.category',$cat->blog_category) }}" style="text-decoration: none; color:white"><i class="fas fa-angle-right"></i>
                {{ $cat->blog_category	}}
            </a>
       
            <span class="badge pull-right ">{{ count($post) }}</span>
        </li>
        @endforeach
      
      
    </ul>
</div>

 <!--categories ends-->

<!--populate post-->
<div class="card mt-5 shadow p-3 mb-5 bg-white rounded">
    <div class="card-header p-3">
      <b>POPULAR POSTS</b>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item  p-3">
        <a href="">
            Cras justo odio
        </a>
      </li>
    </ul>
</div>
 <!--populate post ends-->
</div>
<!--sidebar-->
