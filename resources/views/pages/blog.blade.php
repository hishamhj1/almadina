@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Blog</h5>
    </div>
</div>
<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  col-md-8 col-sm-12">
                <div class="blog-posts">
                    <div class="post-image">
                        <a href="#"><img src="{{url('images/blog1.jpg')}}" alt="post-images"></a>
                    </div>
                    <div class="post-desc">
                        <div class="title">
                            <h4>Title</h4>
                        </div>
                        <div class="sub-title">
                            <h6>Admin</h6>
                            <span>
                                <h6>26th Dec ,2021</h6>
                            </span>
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, porro quod. Optio iusto id ipsum nemo deleniti beatae nam praesentium veniam? Voluptates laborum adipisci corporis ex odio illum, mollitia rem.</p>
                        </div>
                        <div class="read-more clearfix">
                            <a href="{{'readmore'}}">
                                <h6>Readmore<i class="fas fa-angle-double-right"></i> </h6>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="blog-posts">
                    <div class="post-image">
                        <a href="#"><img src="{{url('images/blog.jpg')}}" alt="post-images"></a>
                    </div>
                    <div class="post-desc">
                        <div class="title">
                            <h4>Title</h4>
                        </div>
                        <div class="sub-title">
                            <h6>Admin</h6>
                            <span>
                                <h6>26th Dec ,2021</h6>
                            </span>
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, porro quod. Optio iusto id ipsum nemo deleniti beatae nam praesentium veniam? Voluptates laborum adipisci corporis ex odio illum, mollitia rem.</p>
                        </div>
                        <div class="read-more">
                            <a href="{{'readmore'}}">
                                <h6>Readmore<i class="fas fa-angle-double-right"></i> </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="recent-post-contents">
                    <div class="main-title">
                        <h3>Recent Post</h3>
                    </div>
                    <div class="blog-title">
                        <a href="#">
                            <h5>Quality Assurance</h5>
                        </a>
                        <a href="#">
                            <p>quality assurance in the latest productions</p>
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
                        <a href="#">
                            <p>quality assurance in the latest productions</p>
                        </a>
                        <span>
                            <p>DEC 20,2021</p>
                        </span>
                    </div>  
                </span>
                    <div class="blog-title">
                        <h5>Tags</h5>
                    </div>
                    <div class="tags">
                        <div class="tag-names">
                            <p>learning</p>
                            <p>education</p>
                            <p>hello</p>
                            <p>skill</p>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>
    </div>
</div>



@endsection