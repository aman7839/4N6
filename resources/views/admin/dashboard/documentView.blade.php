@extends('admin.dashboard.layout.main')

@section('content')
<section class="cmn_header_section space" style="background-image:url('{{asset('4n61/images/service_bg.png')}}') ;">
    <div class="custom_container">
        <h1>Documents</h1>
    </div>
</section>



<!--  -->
<section class="documents">
    <div class="custom_container space">
        <div class="cmn_heading">
            <h2>Documents</h2>
        </div>
    </div>
    <div class="container space pt-0">
        <div class="row">
            <div class="col-md-4">
                <div class="doc_card">
                        <div class="doc_icon">
                                <img src="{{asset('4n61/images/doc_icon.png')}}" alt="">
                        </div>
                        <p class="doc_title">Price Quote</p>
                        <p class="doc_date">Aug 14 2022 12:49 pm</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="doc_card">
                        <div class="doc_icon">
                                <img src="{{asset('4n61/images/doc_icon.png')}}" alt="">
                        </div>
                        <p class="doc_title">Price Quote</p>
                        <p class="doc_date">Aug 14 2022 12:49 pm</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="doc_card">
                        <div class="doc_icon">
                                <img src="{{asset('4n61/images/doc_icon.png')}}" alt="">
                        </div>
                        <p class="doc_title">Price Quote</p>
                        <p class="doc_date">Aug 14 2022 12:49 pm</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection