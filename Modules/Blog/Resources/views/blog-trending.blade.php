<x-app-layout layout="blog" :assets="$assets ?? []" title='Blog Trending' isMasonry="true">
    <div class="d-flex justify-content-between mb-4">
        <h4 class="mb-0">Trending Blogs</h4>
        <div class="dropdown d-flex align-items-center">
            Sorting By:
            <div class="dropdown">
                <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown"
                    aria-expanded="false">Name</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" data-toggle="masonry">
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header card-thumbnail">
                    <img src="{{ asset('modules/blog/images/blog-categories/02.png') }}" alt="02"
                        class="img-fluid w-100 rounded object-cover " loading="lazy">
                </div>
                <div class="card-body card-thumbnail">
                    <div>
                        <small class="text-primary">
                            02 Dec 2021
                        </small>
                        <a href="{{ route('blog.details') }}" class="iq-title">
                            <h4 class="mt-2 mb-3 text-ellipsis short-2"
                                title="The Ultimate Travel Guide: What To Do, See &amp; Eat." data-bs-toggle="tooltip">
                                The Ultimate Travel Guide: What To Do, See &amp; Eat.</h4>
                        </a>
                        <div class="d-flex gap-3">
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure">Travel</a><span> | </span>
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure text-primary">Jenny
                                Wilson</a>
                        </div>
                        <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div>
                            <a href="{{ route('blog.details') }}" role="button" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header card-thumbnail">
                    <img src="{{ asset('modules/blog/images/blog-grid/15.png') }}" alt="02"
                        class="img-fluid w-100 rounded object-cover " loading="lazy">
                </div>
                <div class="card-body card-thumbnail">
                    <div>
                        <small class="text-primary">
                            02 Dec 2021
                        </small>
                        <a href="{{ route('blog.details') }}" class="iq-title">
                            <h4 class="mt-2 mb-3 text-ellipsis short-2"
                                title="The Cheapest Destinations of All Time, A list of Beauty and Budget."
                                data-bs-toggle="tooltip">The Cheapest Destinations of All Time, A list of Beauty and
                                Budget.</h4>
                        </a>
                        <div class="d-flex gap-3">
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure">Travel</a><span> | </span>
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure text-primary">Jenny
                                Wilson</a>
                        </div>
                        <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div>
                            <a href="{{ route('blog.details') }}" role="button" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header card-thumbnail">
                    <img src="{{ asset('modules/blog/images/blog-grid/18.png') }}" alt="02"
                        class="img-fluid w-100 rounded object-cover " loading="lazy">
                </div>
                <div class="card-body card-thumbnail">
                    <div>
                        <small class="text-primary">
                            02 Dec 2021
                        </small>
                        <a href="{{ route('blog.details') }}" class="iq-title">
                            <h4 class="mt-2 mb-3 text-ellipsis short-2"
                                title="The Foreign and Domestic Culinary Adventures: An Art" data-bs-toggle="tooltip">
                                The Foreign and Domestic Culinary Adventures: An Art</h4>
                        </a>
                        <div class="d-flex gap-3">
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure">Travel</a><span> | </span>
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure text-primary">Jenny
                                Wilson</a>
                        </div>
                        <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div>
                            <a href="{{ route('blog.details') }}" role="button" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header card-thumbnail">
                    <img src="{{ asset('modules/blog/images/blog-grid/17.png') }}" alt="02"
                        class="img-fluid w-100 rounded object-cover " loading="lazy">
                </div>
                <div class="card-body card-thumbnail">
                    <div>
                        <small class="text-primary">
                            11 Dec 2021
                        </small>
                        <a href="{{ route('blog.details') }}" class="iq-title">
                            <h4 class="mt-2 mb-3 text-ellipsis short-2"
                                title="Paranomal and Ghost Experience: The man behind the musical"
                                data-bs-toggle="tooltip">Paranomal and Ghost Experience: The man behind the musical
                            </h4>
                        </a>
                        <div class="d-flex gap-3">
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure">Travel</a><span> |
                            </span>
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure text-primary">Jenny
                                Wilson</a>
                        </div>
                        <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div>
                            <a href="{{ route('blog.details') }}" role="button" class="btn btn-primary">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header card-thumbnail">
                    <img src="{{ asset('modules/blog/images/blog-grid/16.png') }}" alt="02"
                        class="img-fluid w-100 rounded object-cover " loading="lazy">
                </div>
                <div class="card-body card-thumbnail">
                    <div>
                        <small class="text-primary">
                            02 Dec 2021
                        </small>
                        <a href="{{ route('blog.details') }}" class="iq-title">
                            <h4 class="mt-2 mb-3 text-ellipsis short-2"
                                title="The Expierience: Travel Tales From India and Abroad." data-bs-toggle="tooltip">
                                The Expierience: Travel Tales From India and Abroad.</h4>
                        </a>
                        <div class="d-flex gap-3">
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure">Travel</a><span> |
                            </span>
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure text-primary">Jenny
                                Wilson</a>
                        </div>
                        <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div>
                            <a href="{{ route('blog.details') }}" role="button" class="btn btn-primary">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">

            <div class="card ">
                <div class="card-header card-thumbnail">
                    <img src="{{ asset('modules/blog/images/blog-grid/19.png') }}" alt="02"
                        class="img-fluid w-100 rounded object-cover" loading="lazy">
                </div>
                <div class="card-body card-thumbnail">
                    <div>
                        <small class="text-primary">
                            03 Aug 2021
                        </small>
                        <a href="{{ route('blog.details') }}" class="iq-title">
                            <h4 class="mt-2 mb-3 text-ellipsis short-2"
                                title="WIT AND DELIGHT: The Advice From A Twenty Something" data-bs-toggle="tooltip">
                                WIT AND DELIGHT: The Advice From A Twenty Something</h4>
                        </a>
                        <div class="d-flex gap-3">
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure">Travel</a><span> |
                            </span>
                            <a href="{{ route('blog.details') }}" class="iq-blog-adventure text-primary">Jenny
                                Wilson</a>
                        </div>
                        <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div>
                            <a href="{{ route('blog.details') }}" role="button" class="btn btn-primary">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="text-center">
            <a href="{{ route('blog.details') }}" class="btn btn-primary card">Load More</a>
        </div>
    </div>
</x-app-layout>
