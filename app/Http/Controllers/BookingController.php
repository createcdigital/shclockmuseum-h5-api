<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show booking page
     *
     * @return view
     */
    public function create()
    {
        return view('booking-create');
    }

    /**
     * Show booking page
     *
     * @return view
     */
    public function index()
    {
        $models = Booking::all();
        return view('booking-list', ["bookings" => $models]);
    }

    /**
     * Store booking information
     *
     * @return string
     */
    public function store(Request $request)
    {
        $model = new Booking();
        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->date = $request->date;
        $model->type = $request->type;
        $model->group_ppl = $request->group_ppl;
        $model->narrator = $request->narrator;
        $model->item = $request->item;
        $model->item_time = $request->item_time;
        $model->company = $request->company;

        try{
            if ($model->save())
                return json_encode(["rs" => "success"]);
            else
                return json_encode(["rs" => "store fail"]);
        }catch (\Exception $e)
        {
            return json_encode(["rs" => "error, message:".$e->getMessage()]);
        }
    }
    public function selectTime($sdata){
        $model = Booking::where('date', $sdata)->get();

        $countTotal = 0;
        foreach ($model as $bookModel)
        {
            if($bookModel->type=="个人")
            {
                $countTotal+=1;
            }else
            {
                $countTotal+= intval($bookModel->group_ppl);
            }
        }

        return json_encode(["rs" => $countTotal]);
    }
}
