@extends('template.master')
@section('mainContent')

@include('template.header')

@include('template.slider')

@include('template.boxes1')

@include('template.boxes2')

@include('template.testimonial')

@include('template.services')

@include('template.about')

@include('template.funfact')
@include('template.contact')

@include('template.footer')

<!-- For demo purposes Only ( You may delete this anytime :-) -->
<div id="colour-variations">
    <a class="option-toggle"><i class="icon-gear"></i></a>
    <h3>Preset Colors</h3>
    <ul>
        <li>
            <a href="javascript: void(0);" data-theme="style">
                <span style="background: #3f95ea;"></span>
                <span style="background: #52d3aa;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style2">
                <span style="background: #329998;"></span>
                <span style="background: #6cc99c;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style3">
                <span style="background: #9f466e;"></span>
                <span style="background: #c24d67;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style4">
                <span style="background: #21825C;"></span>
                <span style="background: #A4D792;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>

    </ul>
</div>
<!-- End demo purposes only -->

@endsection
