<x-app-layout layout="blog" :assets="$assets ?? []" title='Blog Category'>
    <div>
        <h4 class="mb-0">Category</h4>
    </div>
    <div>
        <ul class="nav iq-nav-category mt-3 mb-3 justify-content-start bg-transparent" id="pills-tab" role="tablist">
            <li class="nav-item me-3" role="presentation">
                <a class="nav-link active" id="pills-no-1-tab" data-bs-toggle="pill" href=""
                data-bs-target="#pills-no-1" role="tab" aria-controls="pills-no-1"
                aria-selected="true">All</a>
            </li>
            <li class="nav-item me-3" role="presentation">
                <a class="nav-link" id="pills-no-2-tab" data-bs-toggle="pill" data-bs-target="#pills-no-2" href=""
                role="tab" aria-controls="pills-no-2" aria-selected="false">Popular</a>
            </li>
            <li class="nav-item me-3" role="presentation">
                <a class="nav-link" id="pills-no-3-tab" data-bs-toggle="pill" data-bs-target="#pills-no-3" href=""
                role="tab" aria-controls="pills-no-3" aria-selected="false">Latest</a>
            </li>
        </ul>
    </div>
    <div class="tab-content mt-3" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-no-1" role="tabpanel"
            aria-labelledby="pills-no-1">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-4">
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Food" categoryimage="blog-list/02.png"  postcount="5458" />
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Workspace" categoryimage="blog-list/04.png"  postcount="6542"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Card" categoryimage="blog-list/05.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Workspace" categoryimage="blog-list/04.png"  postcount="1546"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Card" categoryimage="blog-list/05.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Card" categoryimage="blog-list/05.png"  postcount="365"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Workspace" categoryimage="blog-list/04.png"  postcount="500"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Food" categoryimage="blog-list/02.png"  postcount="4623"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Card" categoryimage="blog-list/05.png"  postcount="4623"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Food" categoryimage="blog-list/02.png"  postcount="500"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Food" categoryimage="blog-list/02.png"  postcount="5458 "/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Card" categoryimage="blog-list/05.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Workspace" categoryimage="blog-list/04.png"  postcount="6542"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Food" categoryimage="blog-list/02.png"  postcount="365"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Workspace" categoryimage="blog-list/04.png"  postcount="1546"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Card" categoryimage="blog-list/05.png"  postcount="4623"/>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-no-2" role="tabpanel" aria-labelledby="pills-no-2">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-4">
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Animals" categoryimage="blog-list/10.png"  postcount="5458" />
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Entertainment" categoryimage="blog-list/11.png"  postcount="6542"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Health" categoryimage="blog-list/12.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Music" categoryimage="blog-list/13.png"  postcount="1546"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Entertainment" categoryimage="blog-list/11.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Music" categoryimage="blog-list/13.png"  postcount="365"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Animals" categoryimage="blog-list/10.png"  postcount="500"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Health" categoryimage="blog-list/12.png"  postcount="4623"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Animals" categoryimage="blog-list/10.png"  postcount="4623"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Business" categoryimage="blog-list/14.png"  postcount="500"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Entertainment" categoryimage="blog-list/11.png"  postcount="5458 "/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Music" categoryimage="blog-list/13.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Animals" categoryimage="blog-list/10.png"  postcount="6542"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Health" categoryimage="blog-list/12.png"  postcount="365"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Business" categoryimage="blog-list/14.png"  postcount="1546"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Health" categoryimage="blog-list/12.png"  postcount="4623"/>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-no-3" role="tabpanel" aria-labelledby="pills-no-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-4">
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Sports" categoryimage="blog-list/15.png"  postcount="5458" />
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="News" categoryimage="blog-list/16.png"  postcount="6542"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Cars" categoryimage="blog-list/17.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Movies" categoryimage="blog-list/18.png"  postcount="1546"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Fashion" categoryimage="blog-list/19.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Business" categoryimage="blog-list/14.png"  postcount="365"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="News" categoryimage="blog-list/16.png"  postcount="500"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Movie" categoryimage="blog-list/18.png"  postcount="4623"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Cars" categoryimage="blog-list/17.png"  postcount="4623"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Fashion" categoryimage="blog-list/19.png"  postcount="500"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="News" categoryimage="blog-list/16.png"  postcount="5458 "/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Sports" categoryimage="blog-list/15.png"  postcount="3265"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Music" categoryimage="blog-list/13.png"  postcount="6542"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Movie" categoryimage="blog-list/18.png"  postcount="365"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="Fashion" categoryimage="blog-list/19.png"  postcount="1546"/>
                </div>
                <div class="col">
                    <x-modules.blog.widgets.category-card categoryname="News" categoryimage="blog-list/16.png"  postcount="4623"/>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="javascript:void(0);" class="btn btn-primary card">Load More</a>
    </div>
</x-app-layout>
