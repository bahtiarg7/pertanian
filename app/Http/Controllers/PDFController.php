<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF as DomPDF;
use Illuminate\Support\Facades\Validator;

class PDFController extends Controller
{
    protected $pdf;
    public function __construct(DomPDF $pdf) {
        $this->pdf = $pdf;
    }
    public function getSurat(Request $request)
    {
        // // Validate request parameters
        // $validator = Validator::make($request->all(), [
        //     'name' => 'nullable|string|max:255',
        //     'email' => 'nullable|email|max:255',
        //     'date_from' => 'nullable|date',
        //     'date_to' => 'nullable|date',
        //     'roles' => 'nullable'
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 422);
        // }

        // // Get parameters from the request
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $dateFrom = $request->input('date_from');
        // $dateTo = $request->input('date_to');
        // $roles = $request->input('roles');

        // Build query with filters
        $query = Letter::query();

        // Join the access table to get roles
        // $query->select('letter_disposition.*', 'letter.no_letter','letter.date_entry','letter.subject','letter.subject','letter.origin','letter.date_receipt','letter.document')
        //     ->join('users', 'letter_disposition.users_id', '=', 'users.id');

        // // Apply filters
        // if ($name) {
        //     $query->where('users.name', 'like', "%{$name}%");
        // }

        // if ($email) {
        //     $query->where('users.email', 'like', "%{$email}%");
        // }

        // if ($dateFrom) {
        //     $query->where('users.created_at', '>=', $dateFrom);
        // }

        // if ($dateTo) {
        //     $query->where('users.created_at', '<=', $dateTo);
        // }

        // if ($roles) {
        //     $query->where('access.roles', '=', $roles);
        // }

        $query->orderBy('letter.id', 'desc');

        // Get filtered users
        $items = $query->get();

        // Load view and pass user data
        $pdf = $this->pdf->loadView('admin.letter.pdf', ['items' => $items,'title' => 'Daftar Surat']);

        $pdf->setPaper('A4', 'landscape');

        // // Generate a unique filename
        // $filename = 'pengguna_' . time() . '.pdf';
        // $filePath = public_path('uploads/' . $filename);

        // // Save PDF to uploads directory
        // $pdf->save($filePath);

        // $this->_tte($filename);

        // Download PDF
        return $pdf->download('surat.pdf');
    }
}
