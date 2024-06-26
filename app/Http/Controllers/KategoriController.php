<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KategoriExport;
use App\Imports\KategoriImport;
use Exception;
use PDOException;
use Barryvdh\DomPDF\Facade\Pdf;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data['kategori'] = Kategori::orderBy('created_at', 'DESC')->get();
            return view('kategori.index', [
                'page' => 'Kategori',
                'section' => 'Kelola data',
            ])->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getCode());
        }
    }

    public function store(StoreKategoriRequest $request)
    {
        try {
            DB::beginTransaction();
            Kategori::create($request->all());
            DB::commit();
            return redirect('kategori')->with('success', 'Kategori berhasil ditambahkan!');
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack();
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

    public function update(StoreKategoriRequest $request, Kategori $kategori)
    {
        try {
            DB::beginTransaction();
            $kategori->update($request->all());
            DB::commit();
            return redirect('kategori')->with('success', 'Kategori berhasil diupdate!');
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack();
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

    public function destroy(Kategori $kategori)
    {
        try {
            DB::beginTransaction();
            $kategori->delete();
            DB::commit();
            return redirect('kategori')->with('success', 'Kategori berhasil dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack();
            return "Terjadi kesalahan :(" . $error->getMessage();
        }
    }

    public function exportData()
    {
        $date = date('Y-M-d');
        return Excel::download(new KategoriExport, $date . '-kategori.xlsx');
    }

    public function importData()
    {
        Excel::import(new KategoriImport, request()->file('import'));
        return redirect('kategori')->with('success', 'Import data kategori produk berhasil!');
    }

    public function cetakpdf()
    {


        $kategori = Kategori::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('kategori.pdf', compact('kategori'));
        return $pdf->download($date . '-kategori.pdf');
    }
}
