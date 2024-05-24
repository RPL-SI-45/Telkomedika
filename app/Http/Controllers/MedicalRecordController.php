<?php
namespace App\Http\Controllers;

use App\Models\antrian;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $medicalRecords = antrian::all();
        return view('record.index', compact('medicalRecords'));
    }
}