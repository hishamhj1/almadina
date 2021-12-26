@extends('welcome')

@section('content')
<div class="top-content">
    <div class="top-headings">
        <h5>Gallery</h5>
    </div>
</div>
<div class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="gallery">
                    <a target="_blank" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service1.jpg')}}" alt="Cinque Terre" height="400">
                    </a>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery">
                    <a target="_blank" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service2.jpg')}}" alt="gallary-images"  height="400">
                    </a>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery">
                    <a target="_blank" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service2.jpg')}}" alt="gallery-images" height="400">
                    </a>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
                <div class="gallery">
                    <a target="_blank" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service1.jpg')}}" alt="Cinque Terre" height="400">
                    </a>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consectetur optio, praesentium exercitationem deleniti quibusdam culpa ullam obcaecati blanditiis laboriosam eligendi aspernatur molestiae, alias officia recusandae qui laudantium sint modi.</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery">
                    <a target="_blank" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service2.jpg')}}" alt="gallary-images"  height="400">
                    </a>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore vel nemo quia recusandae facilis aliquid nisi voluptatibus enim. Quibusdam non omnis qui ipsam veritatis magni recusandae reprehenderit pariatur officia minus.</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery">
                    <a target="_blank" href="{{('images/service1.jpg')}}">
                        <img src="{{('images/service3.jpg')}}" alt="gallery-images" height="400">
                    </a>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates quasi laborum, tenetur fugiat eum ut molestiae dolore reprehenderit quos dolores saepe similique facilis commodi eaque vero culpa exercitationem voluptate! Distinctio?</div>
                </div>
            </div>
        </div>
    </div>
</div>



    @endsection