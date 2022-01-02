@extends('welcome')

@section('content')
<div class="readmore-contents">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="readmore-image">
                    <img src="{{url('images/blog.jpg')}}" alt="read-more images">
                </div>
                     
                <div class="readmore-detail">
                    <div class="title">
                        <h4>Title</h4>
                    </div>
                    <div class="comment-section">
                       <p>27 Dec, 2021</p>
                       
                    </div>
                    <div class="readmore-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, debitis quibusdam exercitationem iure ipsum id dolorum. Officia voluptates corrupti impedit placeat ducimus repellendus at, dolor quod doloremque fugit debitis nesciunt?Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, debitis quibusdam exercitationem iure ipsum id dolorum. Officia voluptates corrupti impedit placeat ducimus repellendus at, dolor quod doloremque fugit debitis nesciunt?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim impedit eveniet veritatis voluptates eaque aliquam consequatur nihil optio facere. Natus, dicta veniam aliquid exercitationem neque possimus tenetur nostrum ipsum sapiente!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, debitis quibusdam exercitationem iure ipsum id dolorum. Officia voluptates corrupti impedit placeat ducimus repellendus at, dolor quod doloremque fugit debitis nesciunt?Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, debitis quibusdam exercitationem iure ipsum id dolorum. Officia voluptates corrupti impedit placeat ducimus repellendus at, dolor quod doloremque fugit debitis nesciunt?</p>
                    </div>
                </div>
            </div> 
            <div class="col-lg-4">
            <div class="recent-post-contents">
                    <div class="main-title">
                        <h3>Recent Post</h3>
                    </div>
                    <div class="blog-title">
                        <a href="#">
                            <h5>Quality Assurance</h5>
                        </a>
                        <span>
                            <p>DEC 20,2021</p>
                        </span>
                    </div>
                    <span>
                        <div class="blog-title">
                            <a href="#">
                                <h5>Quality Assurance</h5>
                            </a>
                            <span>
                                <p>DEC 20,2021</p>
                            </span>
                        </div>
                    </span>

                </div>
                <!-- <div class="popular-post">
                    <div class="popular-post-title">
                        <h4>Popular Post</h4>
                    </div>
                    <div class="popular-post1">
                        <div class="popular-image">
                            <img src="{{url('images/blog.jpg')}}" alt="popular-post">
                        </div>
                        <div class="popular-desc">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            <p>Dec 27,2021</p>
                        </div>
                    </div>
                    <div class="popular-post1">
                        <div class="popular-image">
                            <img src="{{url('images/blog.jpg')}}" alt="popular-post">
                        </div>
                        <div class="popular-desc">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            <p>Dec 27,2021</p>
                        </div>
                    </div>
                    <div class="popular-post1">
                        <div class="popular-image">
                            <img src="{{url('images/blog.jpg')}}" alt="popular-post">
                        </div>
                        <div class="popular-desc">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            <p>Dec 27,2021</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="readmore-social">
            <div class="social-heading">
                <h4>Social Share</h4>
            </div>
            <div class="readmore-social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
            <a href="#"><i class="fab fa-youtube-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection