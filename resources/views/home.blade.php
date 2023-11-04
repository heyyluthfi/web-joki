@extends('layouts.main')

@section('content')
    @include('component.rules')

    <div class="col-sm-8 pe-5">
        @include('component.input')
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">
                    Pilih Joki Rank
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <h5 class="mt-2 ps-2">Promo Joki</h5>
                    <div class="row row-cols-2 row-cols-md-3 g-2 ">
                        <div class="col-lg-4 mt-3">
                            <div class="list-group shadow h-100">
                                <input type="radio" name="inlineRadioOptions" id="nominal-3070" value="3070"
                                    data-type="diamond" data-product_id="9">
                                <label for="nominal-3070" class="list-group-item h-100">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col name-prod">Promo 10 Star Epic</div>
                                            </div>
                                            <div class="row">
                                                <div class="col nominal-price">
                                                    <b>Rp 60.000</b><br>
                                                    <span style="color:#ffffff"><s id="old_price" data-price="70000">Rp
                                                            70.000 </s></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="list-group shadow h-100">
                                <input type="radio" name="inlineRadioOptions" id="nominal-3071" value="3071"
                                    data-type="diamond" data-product_id="9">
                                <label for="nominal-3071" class="list-group-item h-100">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col name-prod">Promo 10 Star Legend</div>
                                            </div>
                                            <div class="row">
                                                <div class="col nominal-price">
                                                    <b>Rp 75.000</b><br>
                                                    <span style="color:#ffffff"><s id="old_price" data-price="80000">Rp
                                                            80.000 </s></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="list-group shadow h-100">
                                <input type="radio" name="inlineRadioOptions" id="nominal-3072" value="3072"
                                    data-type="diamond" data-product_id="9">
                                <label for="nominal-3072" class="list-group-item h-100">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col name-prod">Promo 10 Star Mythic</div>
                                            </div>
                                            <div class="row">
                                                <div class="col nominal-price">
                                                    <b>Rp 170.000</b><br>
                                                    <span style="color:#ffffff"><s id="old_price" data-price="180000">Rp
                                                            180.000 </s></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="list-group shadow h-100">
                                <input type="radio" name="inlineRadioOptions" id="nominal-3073" value="3073"
                                    data-type="diamond" data-product_id="9">
                                <label for="nominal-3073" class="list-group-item h-100">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col name-prod">Promo 10 Star Honor</div>
                                            </div>
                                            <div class="row">
                                                <div class="col nominal-price">
                                                    <b>Rp 190.000</b><br>
                                                    <span style="color:#ffffff"><s id="old_price" data-price="200000">Rp
                                                            200.000 </s></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="list-group shadow h-100">
                                <input type="radio" name="inlineRadioOptions" id="nominal-34" value="34"
                                    data-type="diamond" data-product_id="9">
                                <label for="nominal-34" class="list-group-item h-100">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col name-prod">Promo 5 Star Glory</div>
                                            </div>
                                            <div class="row">
                                                <div class="col nominal-price">
                                                    <b>Rp 120.000</b><br>
                                                    <span style="color:#ffffff"><s id="old_price" data-price="125000">Rp
                                                            125.000 </s></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Promo --}}
                <div class="row">
                    <h5 class="mt-4 ps-2">Joki / Star</h5>
                </div>
                <div class="row row-cols-2 row-cols-md-3 g-2 ">
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-646" value="646"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-646" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Master / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 4.000</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-30" value="30"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-30" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">GM / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 5.000</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-31" value="31"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-31" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Epic / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 7.000</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-32" value="32"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-32" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Legend / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 8.100</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-727" value="727"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-727" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Mythic / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 18.100</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-728" value="728"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-728" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Mythic Honor / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 20.100</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-729" value="729"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-729" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Mythic Glory / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 25.000</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="list-group shadow h-100">
                            <input type="radio" name="inlineRadioOptions" id="nominal-33" value="33"
                                data-type="diamond" data-product_id="9">
                            <label for="nominal-33" class="list-group-item h-100">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col name-prod">Mythic Immortal / Star</div>
                                        </div>
                                        <div class="row">
                                            <div class="col nominal-price">
                                                <b>Rp 27.500</b><br>
                                                <span style="color:#ffffff"><s id="old_price" data-price="0"></s></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card bg-dark shadow">
                        <div class="card-header">
                            <h5 class="card-title text-light">Masukkan Jumlah Order</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="number" name="qty" id="qty" class="form-control"
                                            value="1" required="" min="1"
                                            oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                                        <label for="qty">Mohon Di Baca ! Minimal Order Untuk Joki Rank/Star {
                                            (Master/GM/Epic/Legend) = 3 , (Mythic+) = 2 } . Minimal Order Untuk Paket
                                            Joki = 1 (Masukkan Angka di Jumlah Order)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Wa --}}
                <div class="col mt-4">
                    <div class="card bg-dark shadow">
                        <div class="card-header">
                            <h5 class="card-title text-light">Nomor Whatsapp</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="denom">Nomor Whatsapp</label>
                                <input class="form-control" placeholder="Nomor Whatsapp [628xxxxx]" type="number"
                                    name="denom" id="denom" required="">
                            </div>
                            <div class="h-captcha" data-sitekey=<?php echo env("HCAPTCHA_KEY", "somedefaultvalue"); ?>></div>
                            <button style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important;"
                                class="btn btn-ordernow mt-3 w-100 btn-lg btn-secondary" type="submit">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>>
@endsection
