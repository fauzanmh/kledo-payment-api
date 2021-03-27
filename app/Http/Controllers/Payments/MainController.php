<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payments\DestroyMain;
use App\Http\Requests\Payments\StoreMain;
use App\Jobs\DestroyPaymentJob;
use App\Models\Payments\Main as Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data = Payments::select('id', 'payment_name')
                ->paginate($request->itemsPerPage);

            return response()->json([
                'data' => $data,
                'message' => 'Ok'
            ]);
        } catch (\Exception $e) {
            Log::error($e);

            return response()->json([
                'data' => [],
                'message' => 'Terjadi suatu kesalahan!'
            ], 500);
        }
    }

    public function create(StoreMain $request)
    {
        try {
            $paymentName = $request->payment_name;

            Payments::create([
                'payment_name' => $paymentName
            ]);

            return response()->json([
                'message' => 'Data berhasil ditambahkan'
            ]);
        } catch (\Exception $e) {
            Log::error($e);

            return response()->json([
                'message' => 'Terjadi suatu kesalahan!'
            ], 500);
        }
    }

    public function destroy(DestroyMain $request)
    {
        try {
            $id = $request->id;

            foreach ($id as $value) {
                dispatch(new DestroyPaymentJob($value));
            }
        } catch (\Exception $e) {
            Log::error($e);

            return response()->json([
                'message' => 'Terjadi suatu kesalahan!'
            ], 500);
        }
    }
}
