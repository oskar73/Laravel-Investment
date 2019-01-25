<x-app-layout layout="blog" :assets="$assets ?? []" title='Blog Grid'>
    <div class="">
        <div class="d-flex justify-content-between mb-4">
            <h2 class="mb-0">Standard Blogs</h2>
            <div class="dropdown d-flex align-items-center">
                Sorting By :
                    <div class="dropdown">
                     <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                    Name
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                  </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 ">
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/01.png" blogdate="01 Dec 2021" blogcontent="We take photos as a return ticket to the moment otherwise gone."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/06.png" blogdate="02 Dec 2021" blogcontent="The Ultimate Travel Guide: What To Do, See & Eat."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla turpis purus vitae tortor, nisl, aliquam. Sodaleset..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/03.png" blogdate="02 Dec 2021" blogcontent="The Cheapest Destinations of All Time, A list of Beauty and Budget."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/04.png" blogdate="11 Dec 2021" blogcontent="I do indeed write on the road. My laptop goes with me everywhere."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla turpis purus vitae tortor, nisl, aliquam. Sodaleset..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/05.png" blogdate="11 Dec 2021" blogcontent="Paranomal and Ghost Experience: The man behind the musical"  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/06.png" blogdate="26 Nov 2021" blogcontent="When your plants are growing like the bosses they are."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/07.png" blogdate="03 Aug 2021" blogcontent="WIT AND DELIGHT: The Advice From A Twenty Something"  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
        <div class="col">
            <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/08.png" blogdate="02 Dec 2021" blogcontent="Travelers like to know which public transportation options are best."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
        <div class="col">
        <x-modules.blog.widgets.blog-card masonrycard="true" classname="" blogimage="blog-categories/09.png" blogdate="02 Dec 2021" blogcontent=" “A year from now you may wish you had started today.”"  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('blog.details')}}" class="btn btn-primary card">Load More</a>
    </div>



</x-app-layout>
