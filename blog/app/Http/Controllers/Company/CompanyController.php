<?php
namespace App\Http\Controllers\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Mail\CompanyAtivation;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);
        $categories = CompanyCategory::all();
        $provinces = Province::all();

        return view('company.company', compact('companies', 'categories', 'provinces'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        //
        // Company::create($this->mapRequestData($request));
        // Mail::to(Auth::user())->send new CompanyAtivation());
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $companies = Company::find($company->id);
        $categories = CompanyCategory::all();
        $provinces = Province::all();
        return view('company.edit',compact('companies','categories','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
         $company = Company::find($company->id);
         $company->update($this->mapRequestData($request));
         return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $company = Company::find($id);
            $company->delete();
            return back();
    }
    private function mapRequestData($request){
        return [
            'name'                => $request->name,
            'license_number'      => $request->license_number,
            'address'             => $request->address,
            'user_id'             => Auth::user()->id,
            'established_date'    => $request->established_date,
            'phone'               => $request->phone,
            'email'               => $request->email,
            'province_id'         => $request->province_id,
            'company_category_id' => $request->company_category_id
        ];
    }   
}
