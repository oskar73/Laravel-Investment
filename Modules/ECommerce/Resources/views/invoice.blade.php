<x-app-layout layout="e-commerce" :assets="$assets ?? []" title="Invoice">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between mb-3">
                                <h4 class="mb-0">{{ __('e-commerce.inv') }}</h4>
                                <span>{{ __('e-commerce.hope_ui') }}</span>
                            </div>
                            <h5 class="mb-4">Elon Musk</h5>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 mt-3 mt-sm-0">
                                    <div>
                                        <h6>{{ __('e-commerce.bill_to') }}</h6>
                                        <p>
                                            Elon Musk
                                        </p>
                                        <p class="mb-0">
                                            {{ __('e-commerce.address') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mt-sm-0">
                                    <div>
                                        <h6>{{ __('e-commerce.bill_from') }}</h6>
                                        <p>
                                            {{ __('e-commerce.hope_ui') }}
                                        </p>
                                        <p class="mb-0">
                                            {{ __('e-commerce.address_one') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-6 mt-3 mt-lg-0 text-lg-end text-start">
                                    <div>
                                        <p class="text-muted mb-0">
                                            {{ __('e-commerce.amount_due') }}
                                        </p>
                                        <h5 class="mb-0">
                                            $14,010.00
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-6 mt-3 mt-lg-0 text-lg-end text-start">
                                    <div class="mb-3">
                                        <h6 class="mb-0">{{ __('e-commerce.invoice_date') }}</h6>
                                        <p>
                                            27 May 2021
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="table-responsive-lg">
                                <table class="table iq-billing-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('e-commerce.description') }}</th>
                                            <th class="text-center" scope="col">{{ __('e-commerce.price') }}</th>
                                            <th class="text-center" scope="col">{{ __('e-commerce.quantity') }}</th>
                                            <th scope="col">{{ __('e-commerce.sub_total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w-50">
                                                <h6 class="mb-0">{{ __('e-commerce.item_one') }}</h6>
                                                <p class="mb-0">{{ __('e-commerce.lorem') }}
                                                </p>
                                            </td>
                                            <td class="text-center">$2,100.00</td>
                                            <td class="text-center">1</td>
                                            <td>$2,100.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">{{ __('e-commerce.item_two') }}</h6>
                                                <p class="mb-0">{{ __('e-commerce.lorem') }}
                                                </p>
                                            </td>
                                            <td class="text-center">$4,205.00</td>
                                            <td class="text-center">2</td>
                                            <td>$8,410.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">{{ __('e-commerce.item_three') }}</h6>
                                                <p class="mb-0">{{ __('e-commerce.lorem') }}
                                                </p>
                                            </td>
                                            <td class="text-center">$1,500</td>
                                            <td class="text-center">3</td>
                                            <td>$4,500.00</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="text-center">
                                                    <h6>{{ __('e-commerce.total') }}</h6>
                                                    <h6>{{ __('e-commerce.tax') }}</h6>
                                                    <h6 class="mb-0">{{ __('e-commerce.discount') }}:</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <h6>$15,010.00</h6>
                                                    <h6>$1,500</h6>
                                                    <h6 class="mb-0">$2,500</h6>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">{{ __('e-commerce.net_amount') }}</td>
                                            <td>
                                                <h6 class="mb-0">$14,010.00</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="ms-4">
                                {{ __('e-commerce.pls') }}
                            </p>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn btn-primary"
                                    onClick="window.print()">{{ __('e-commerce.print') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
