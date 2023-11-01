@extends('back.master')

@section('title', 'Add Info')

@section('body')

    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="{{route('admin')}}" class="logo d-flex align-items-center w-auto">
                                <img src="{{asset('/')}}admin/assets/img/logo.png" alt="">
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Enter Admin Information</h5>
                                </div>
                                <span class="text-success">{{ session('success') }}</span>
                                <form action="{{ route('store') }}" class="row g-3" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="col-12">
                                        <label for="" class="form-label">Summary</label>
                                        <textarea cols="30" rows="10" type="text" name="summary" class="form-control" placeholder="Summary"> </textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Your Image</label>
                                        <input type="file" name="image" class="form-control" placeholder="Image" />
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Your Birthday</label>
                                        <input type="date" name="bday" class="form-control" placeholder="Birthday" />
                                    </div>
{{--                                    <div class="col-12">--}}
{{--                                        <label for="" class="form-label">Your Website Link</label>--}}
{{--                                        <input type="text" name="website" class="form-control" placeholder="Website" />--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label for="" class="form-label">Your Phone Number</label>--}}
{{--                                        <input type="number" name="phone" class="form-control" placeholder="Number" />--}}
{{--                                    </div>--}}
                                    <div class="col-12">
                                        <label for="" class="form-label">Your Place</label>
                                        <input type="text" name="city" class="form-control" placeholder="City and Country" />
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Your Age</label>
                                        <input type="number" name="age" class="form-control" placeholder="Age" />
                                    </div>
{{--                                        <div class="col-12">--}}
{{--                                            <label for="" class="form-label">Your Availability</label>--}}
{{--                                            <input type="text" name="available" class="form-control" placeholder="Availability" />--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label for="" class="form-label">Your Cover Letter</label>--}}
{{--                                            <input type="text" name="cover" class="form-control" placeholder="Cover Letter" />--}}
{{--                                        </div>   <label for="" class="form-label">Your Degree</label>--}}
{{--                                        <input type="text" name="degree" class="form-control" placeholder="Degree" />--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label for="" class="form-label">Your Email</label>--}}
{{--                                        <input type="email" name="email" class="form-control" placeholder="Email" />--}}
{{--                                    </div>--}}


                                    <div class="col-12">
                                        <input type="Submit" class="btn btn-primary w-100" value="Submit" />
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

@endsection
