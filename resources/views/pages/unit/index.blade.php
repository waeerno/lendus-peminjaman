@extends('layouts.master')
@section('title') @lang('translation.starter') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Starter @endslot
@endcomponent
<div class="table-responsive">
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck">
                        <label class="form-check-label" for="responsivetableCheck"></label>
                    </div>
                </th>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Customer</th>
                <th scope="col">Purchased</th>
                <th scope="col">Revenue</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck01">
                        <label class="form-check-label" for="responsivetableCheck01"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2110</a></td>
                <td>10 Oct, 14:47</td>
                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Jordan Kennedy
                        </div>
                    </div>
                </td>
                <td>Mastering the grid</td>
                <td>$9.98</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck02">
                        <label class="form-check-label" for="responsivetableCheck02"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2109</a></td>
                <td>17 Oct, 02:10</td>
                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Jackson Graham
                        </div>
                    </div>
                </td>
                <td>Splashify</td>
                <td>$270.60</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck03">
                        <label class="form-check-label" for="responsivetableCheck03"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2108</a></td>
                <td>26 Oct, 08:20</td>
                <td class="text-primary"><i class="ri-refresh-line fs-17 align-middle"></i> Refunded</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Lauren Trujillo
                        </div>
                    </div>
                </td>
                <td>Wireframing Kit for Figma</td>
                <td>$145.42</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck04">
                        <label class="form-check-label" for="responsivetableCheck04"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2107</a></td>
                <td>02 Nov, 04:52</td>
                <td class="text-danger"><i class="ri-close-circle-line fs-17 align-middle"></i> Cancel</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Curtis Weaver
                        </div>
                    </div>
                </td>
                <td>Wireframing Kit for Figma</td>
                <td>$170.68</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck05">
                        <label class="form-check-label" for="responsivetableCheck05"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2106</a></td>
                <td>10 Nov, 07:20</td>
                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Jason schuller
                        </div>
                    </div>
                </td>
                <td>Splashify</td>
                <td>$350.87</td>
            </tr>
        </tbody>
        <tfoot class="table-light">
            <tr>
                <td colspan="6">Total</td>
                <td>$947.55</td>
            </tr>
        </tfoot>
    </table>
    <!-- end table -->
</div>
<!-- end table responsive -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
