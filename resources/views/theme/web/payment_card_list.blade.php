    <p>Please confirm your payment information, or add new for the transaction.</p>
    <div class="card-list-container">

        @foreach ($user_cards_list as $card)

        <label class="singleCardContainer" for="cardNumber{{$card['id']}}">
            <div class="row align-items-center card-row">
                <div class="col-md-11 col-10">
                    <div class="d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('public/cards').'/'.$card['card']['brand'].'.png' }}" alt="Card Img">
                        </div>
                        <div class="text">
                            <h6>{{$card['card']['brand']}}</h6>
                            <p>•••• ••••  ••••  {{$card['card']['last4']}} </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-2">
                    <input type="radio" class="card-select" name="payment_method" value="{{$card['id']}}" id="cardNumber{{$card['id']}}">
                </div>
            </div>
        </label>

        @endforeach

        <input type="hidden" value="{{$enc_data}}" id="enc_data"  name="enc_data">


    </div>
    <div class="form-error mt-3 hide" id="card-select-error"></div>
    <span id="card-errors" class="none text-danger"></span> <!-- Add this line for card errors -->
    @if(Illuminate\Support\Facades\Cookie::has('message'))
    <div class="mb-3">
    <span class="text-danger"> {{ Illuminate\Support\Facades\Cookie::get('message') }}</span>
    </div>
            @php
           Illuminate\Support\Facades\Cookie::queue(Illuminate\Support\Facades\Cookie::forget('message'));
        @endphp
    @endif
    <button type="button" class="btn update-payment-btn  old_card_to_new_card">Update payment method</button>
    <div class="ctr_btn my-md-5 my-4">
        <button class="email_btn prev-btn">Previous</button>
        <button class="email_btn  payment_get_from_old_card" id="payment_get_from_old_card">Submit</button>
    </div>


