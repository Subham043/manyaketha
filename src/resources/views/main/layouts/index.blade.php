<!DOCTYPE html>
<html lang="en">

@include('main.includes.common_head')

<body>

    <div class="page-wrapper">

        @yield('content')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>

    @include('main.includes.common_script')

    @yield('javascript')

</body>

</html>
