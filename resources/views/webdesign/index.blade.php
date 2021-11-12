@extends('webdesign.layouts.master')

@section('css')
<link rel="stylesheet" href="{{url('webdesign/css/style.css')}}">
<style>
    .header {
        background-image: linear-gradient(rgba(22, 30, 4, 0.7),rgba(4,9,30,0.7)),url(webdesign/images/bg.jpg);
    }
    .cta {
    background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),url(webdesign/images/bg.jpg);
    }
</style>
@endsection

@section('content')

<section class="course">
    <h1>Courses We Offer</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae. </p>

    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cum fuga, asperiores voluptatibus itaque, nulla ratione obcaecati expedita
                deserunt amet vel explicabo molestiae animi sequi nisi consectetur totam?
                Porro, culpa consequatur.
            </p>
        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cum fuga, asperiores voluptatibus itaque, nulla ratione obcaecati expedita
                deserunt amet vel explicabo molestiae animi sequi nisi consectetur totam?
                Porro, culpa consequatur.
            </p>
        </div>
        <div class="course-col">
            <h3>Post Graduate</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cum fuga, asperiores voluptatibus itaque, nulla ratione obcaecati expedita
                deserunt amet vel explicabo molestiae animi sequi nisi consectetur totam?
                Porro, culpa consequatur.
            </p>
        </div>
    </div>

</section>


<!-- campus -->
<section class="campus">
    <h1>Our Global Campus</h1>
    <p>Lorem ipsum dolor, sit amet consec</p>

    <div class="row">
        <div class="campus-col">
            <img src="webdesign/images/bg.jpg">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="webdesign/images/bg.jpg">
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="webdesign/images/bg.jpg">
            <div class="layer">
                <h3>WASHINGTON</h3>
            </div>
        </div>
    </div>

</section>

<!-- facilities -->

<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor, sit amet consec mdfhl djfkdhfk</p>

    <div class="row">
    <div class="facilities-col">
        <img src="webdesign/images/bg.jpg">
        <h3>World Class Library</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Autem ratione non nihil quia perspiciatis facere sequi
        </p>
    </div>
    <div class="facilities-col">
        <img src="webdesign/images/bg.jpg">
        <h3>Largest Play Ground</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Autem ratione non nihil quia perspiciatis facere sequi
        </p>
    </div>
    <div class="facilities-col">
        <img src="webdesign/images/bg.jpg">
        <h3>Tasty and Healthy Food</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Autem ratione non nihil quia perspiciatis facere sequi
        </p>
    </div>
</div>
</section>

<!-- testimonial -->
<section class="testimonials">
    <h1>What Our Student Says</h1>
    <p>Lorem ipsum dolor sit amet, conse</p>

    <div class="row">
        <div class="testimonial-col">
            <img src="{{ url('webdesign/images/bg.jpg')}}">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores ipsum distinctio facere sequi perferendis!
                    Mollitia tenetur ratione similique, architecto perferendis illum,
                </p>
                <h3>Christine Berkley</h3>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="{{ url('webdesign/images/bg.jpg')}}">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores ipsum distinctio facere sequi perferendis!
                    Mollitia tenetur ratione similique, architecto perferendis illum,
                </p>
                <h3>David Byer</h3>
            </div>
        </div>
    </div>
</section>

<!-- call to Action -->
<section class="cta">
    <h1>Enroll for our various online courses <br> Anywhere from The World</h1>
    <a href="" class="hero-btn">CONTACT US</a>
</section>

@endsection

@section('js')

    <!-- ----------JavaScript for Toggle Menu------------ -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

@endsection
