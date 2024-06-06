<x-app-layout>

    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">Navigation</h4>
                            <ul class="account-nav__list">
                                <li class="account-nav__item"><a
                                        href="/account/dashboard">Dashboard</a></li>
                                <li class="account-nav__item account-nav__item--active"><a href="/account/garage">Garage</a></li>
                                <li class="account-nav__item"><a href="/user/profile">Edit Profile</a></li>
                                <li class="account-nav__item"><a href="/account/orders">Order History</a></li>
                                <li class="account-nav__item"><a href="/user/profile">Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>Garage</h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body card-body--padding--2">
                                <div class="vehicles-list vehicles-list--layout--account">
                                    <div class="vehicles-list__body">
                                        @foreach($garageVehicles as $garageVehicle)
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">{{ $garageVehicle->year }}
                                                        {{ $garageVehicle->brand }} {{ $garageVehicle->model }}</div>
                                                    <div class="vehicles-list__item-details"></div>
                                                    <div class="vehicles-list__item-links"><a href="/filter?filter_vehicle={{ $garageVehicle->year }}_{{ $garageVehicle->brand }}_{{ $garageVehicle->model }}">Show Parts</a>
                                                    </div>
                                                </div>
                                                <form action="{{ route('garage.destroy', $garageVehicle->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="vehicles-list__item-remove">
                                                        <svg
                                                            width="16" height="16">
                                                            <path
                                                                d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        @endforeach



                                        @if (count($garageVehicles) == 0)
                                            <div class="vehicles-list__item" style="width: 60%">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name" style="text-align: center">No
                                                        Vehicle Added
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-header">
                                <h5>Add A Vehicle</h5>
                            </div>
                            <div class="card-divider"></div>

                            <div class="card-body card-body--padding--2">
                                <form action="{{ route('garage.store') }}" method="post">
                                    @csrf
                                    <div class="vehicle-form vehicle-form--layout--account">
                                        <div class="vehicle-form__item vehicle-form__item--select"><select name="year"
                                                                                                           id="year"
                                                                                                           class="form-control form-control-select2"
                                                                                                           aria-label="Year">
                                                <option value="none">Select Year</option>
                                                @foreach($vehicleYears as $vehicleYear)
                                                    <option
                                                        value="{{ $vehicleYear->year }}">{{ $vehicleYear->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="vehicle-form__item vehicle-form__item--select"><select name="brand"
                                                                                                           id="brand"
                                                                                                           class="form-control form-control-select2"
                                                                                                           aria-label="Brand"
                                                                                                           disabled="disabled">
                                                <option value="none">Select Brand</option>
                                                @foreach($vehicleBrands as $vehicleBrand)
                                                    <option
                                                        value="{{ $vehicleBrand->brand }}">{{ $vehicleBrand->brand }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="vehicle-form__item vehicle-form__item--select"><select name="model"
                                                                                                           id="model"
                                                                                                           class="form-control form-control-select2"
                                                                                                           aria-label="Model"
                                                                                                           disabled="disabled">
                                                <option value="none">Select Model</option>
                                                @foreach($vehicleModels as $vehicleModel)
                                                    <option
                                                        value="{{ $vehicleModel->model }}">{{ $vehicleModel->model }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        {{--                                    <div class="vehicle-form__divider"></div>--}}
                                        <div class="vehicle-form__item">

                                        </div>
                                    </div>
                                    <div class="mt-4 pt-3">
                                        <button type="submit" class="btn btn-sm btn-primary">Add A Vehicle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
