<?php

namespace App\Http\Controllers;

use App\Http\Traits\Utilities;
use App\Models\ExchangeRate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ExchangeRateController extends Controller
{
    use Utilities;

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        list($validationStatus, $error) = $this->validateRequest($request);
        if (!$validationStatus) {
            return response($this->formatResponse(false, null, $error), Response::HTTP_BAD_REQUEST);
        }

        return $this->persist($request);
    }

    /**
     * @param Request $request
     */
    public function get(Request $request)
    {

    }

    /**
     * @param Request $request
     * @return bool
     */
    private function persist(Request $request)
    {
        $exchangeRate = new ExchangeRate();
        $exchangeRate->currency_from = $request->currencyFrom;
        $exchangeRate->currency_to = $request->currencyTo;
        $exchangeRate->amount_sell = $request->amountSell;
        $exchangeRate->amount_buy = $request->amountBuy;
        $exchangeRate->rate = $request->rate;
        $exchangeRate->time_placed = Carbon::parse( $request->timePlaced, 'UTC')->isoFormat('YYYY-MM-DD hh:mm:ss');
        $exchangeRate->originating_country = $request->originatingCountry;
        $exchangeRate->user_id = $request->userId;
        $exchangeRate->save();
        return response($this->formatResponse(true, null, null, 'The new currency exchange record has been successfully created'), Response::HTTP_OK);
    }

    /**
     * @param $request
     * @return array
     */
    private function validateRequest($request)
    {
        $validator = Validator::make($request->all(), $this->rules(), $this->messages());
        if ($validator->fails()) {
            return [false, $validator->errors()];
        }
        return [true, null];
    }
//    TODO: write a custom validator to validate date format
    /**
     * @return array
     */
    private function rules()
    {
        return [
            'userId' => ['required','numeric'],
            'currencyFrom' => ['required','max:3', 'min:3', 'alpha'],
            'currencyTo' => ['required', 'max:3', 'min:3','alpha'],
            'amountSell' => ['required', 'numeric'],
            'amountBuy' => ['required', 'numeric'],
            'rate' => ['required', 'numeric'],
//            'timePlaced' => ['required','date_format:"d-M-y h:i:s"'],
            'originatingCountry' => ['required', 'alpha'],
        ];
    }

    private function messages()
    {
        return [

        ];
    }
}