<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassengerDetailRequest;
use App\Interfaces\FlightRepositoryInterface;
use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Flight;
use App\Repositories\FlightRepository;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private FlightRepositoryInterface $flightRepository;
    private TransactionRepositoryInterface $transactionRepository;

    public function __construct(FlightRepositoryInterface $flightRepository,
    TransactionRepositoryInterface $transactionRepository)
    {
        $this->flightRepository = $flightRepository;
        $this->transactionRepository = $transactionRepository;
    }
    public function booking(Request $request, $flightNumber)
    {
        $this->transactionRepository->saveTransactionDataToSession($request->all());
        return redirect()->route('booking.choose-seat', ['flightNumber' => $flightNumber]);
    }

    public function chooseSeat(Request $request, $flightNumber)
    {
        $transaction = $this->transactionRepository->getTransactionDataFromSession();
        $flight = $this->flightRepository->getFlightByFlightNumber($flightNumber);
        $tier = $flight->classes->find($transaction['flight_class_id']);

        return view('pages.booking.choose-seat', compact('transaction', 'flight', 'tier'));
    }

    public function confirmSeat(Request $request, $flightNumber)
    {
        $this->transactionRepository->saveTransactionDataToSession($request->all());
        return redirect()->route('booking.passenger-details', ['flightNumber' => $flightNumber]);
    }

    public function passengerDetails(Request $request, $flightNumber)
    {
        $transaction = $this->transactionRepository->getTransactionDataFromSession();
        $flight = $this->flightRepository->getFlightByFlightNumber($flightNumber);
        $tier = $flight->classes->find($transaction['flight_class_id']);
        return view('pages.booking.passenger-details', compact('transaction', 'flight', 'tier'));
    }

    public function savePassengerDetails(StorePassengerDetailRequest $request, $flightNumber)
    {
        $this->transactionRepository->saveTransactionDataToSession($request->all());
        return redirect()->route('booking.checkout', ['flightNumber' => $flightNumber]);
    }

    public function checkout($flightNumber)
    {
        $transaction = $this->transactionRepository->getTransactionDataFromSession();
        $flight = $this->flightRepository->getFlightByFlightNumber($flightNumber);
        $tier = $flight->classes->find($transaction['flight_class_id']);
        // dd($transaction);
        return view('pages.booking.checkout', compact('transaction', 'flight', 'tier'));
    }

    public function checkBooking()
    {
        return view('pages.booking.check-booking');
    }

     public function payment(Request $request)
        {
            $this->transactionRepository->saveTransactionDataToSession($request->all());
            
            $transaction = $this->transactionRepository->saveTransaction($this->transactionRepository->getTransactionDataFromSession());
            
            //set your merchant server key
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            //set to development/sandbox environment
            \Midtrans\Config::$isProduction = config('midtrans.isProduction');
            //set sanitazion on(default)
            \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
            //set 3DS transaction for credit
            \Midtrans\Config::$is3ds = config('midtrans.is3ds');
            
            $params = [
                'transaction_details' => [
                    'order_id' => $transaction->code,
                    'gross_amount' => $transaction->grand_total,
                    ]
                ];
                $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
                // dd($transaction);
                return redirect($paymentUrl);
            }
}
