@extends('frontendviews.main')

    @section('content')
    <section class="cmn_header_section space" style="background-image:url('{{asset('4n61/images/coaches_bg.png')}}') ;">
        <div class="custom_container">
            <h1>4N6 Speech Drama <br>
                Member Schools </h1>
        </div>
    </section>


    <div class="custom_container space">
        <div class="cmn_heading">
            <h2>4N6 Speech Drama - USA</h2>
            <p class="mt-3">Just click on the name of the state to explore Speech/Drama 
                organizations and access a list of current 4N6 Speech Drama Members.</p>
        </div>
    </div>
<section class="coach_list space pt-0">
    <div class="custom_container">
        <div class="row">
            <div class="col-md-4">
                <div class="coaches_list">
                    <p class="states">States A-J</p>
                    <ul>
                        <li><a href="">Alabama</a></li>
                        <li><a href="">Alaska</a></li>
                        <li><a href="">Arizona</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coaches_list">
                    <p class="states">States K-N</p>
                    <ul>
                        <li><a href="">Alabama</a></li>
                        <li><a href="">Alaska</a></li>
                        <li><a href="">Arizona</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coaches_list">
                    <p class="states">States O-Z</p>
                    <ul>
                        <li><a href="">Alabama</a></li>
                        <li><a href="">Alaska</a></li>
                        <li><a href="">Arizona</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    



    @endsection