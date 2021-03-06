<?php

namespace App\Http\Services;

use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use Illuminate\Support\Facades\Session;

class CommuneService{

    public function getAllCommune(){
        return Commune::with('district.province')->orderBy('district_id', 'desc')->paginate(20);
    }
    
    public function filterCommune($request){
        $filter = explode("-", filter_var(trim($request->input('filterBy'), "-")));
        if($request->input('province') == null ){
            if($request->input('district') == null){
                return Commune:: with('district.province')->orderBy($filter[0], $filter[1])
                ->where('commune_name', 'like', "%". $request->input('seachTitle') ."%")
                ->paginate(15)->withQueryString();
            }
            return Commune:: with('district.province')->orderBy($filter[0], $filter[1])
                    ->where('commune_name', 'like', "%". $request->input('seachTitle') ."%")
                    ->where('district_id',$request->input('district'))
                    ->paginate(15)->withQueryString();
            
        }

        if($request->input('district') == null){
            return Commune::with('district.province')->orderBy('tbl_commune.'.$filter[0], $filter[1])
            ->join('tbl_district', 'tbl_commune.district_id', '=', 'tbl_district.district_id')
            ->where('commune_name', 'like', "%". $request->input('seachTitle') ."%")
            ->where('province_id', $request->input('province'))
            ->paginate(15)->withQueryString();
        }
        return Commune:: with('district.province')->orderBy($filter[0], $filter[1])
                    ->where('commune_name', 'like', "%". $request->input('seachTitle') ."%")
                    ->where('district_id',$request->input('district'))
                    ->paginate(15)->withQueryString();
}

    public function getAllCommuneByDistrict($district_id){
        return Commune::with('district.province')
        ->where('district_id', $district_id)
        ->orderBy('district_id', 'desc')->paginate(20);
    }
    
    public function getAllCommuneNongNghiepXanh(){
        return Commune::with('district.province')->orderBy('district_id', 'desc')->get();
    }
    
    public function create($request){
        try {
            $checkName = Commune::where("commune_name",$request->input("commune_name"))
            ->where("district_id",$request->input("district"))
            ->count();
            if($checkName){
                Session::flash('error', '???? T???n T???i T??n X?? - Ph?????ng N??y !!! ');
                return false;
            }
           
            $request->except('_token');
            Commune::create([
                'district_id' => $request->input('district'),
                'commune_name' => $request->input('commune_name')
            ]);
            Session::flash('success', 'Th??m X?? - Ph?????ng Th??nh C??ng !!! ');
        } catch (\Exception $err) {
            Session::flash('error', 'Th??m X?? - Ph?????ng Kh??ng Th??nh C??ng !!! <hr>' . $err->getMessage());

            return  false;
        }
        return true;
    }

    public function update($commune, $request){

        try {
            
            $request->except('_token');

            $updateCommune = Commune::find($commune->commune_id);

            $updateCommune->district_id = $request->input('district');
            $updateCommune->commune_name= $request->input('commune_name');
            $updateCommune->updated_at =  date('Y-m-d H:i:s');
            $updateCommune->save();
            Session::flash('success', 'C???p Nh???t X?? - Ph?????ng Th??nh C??ng !!! ' );
        } catch (\Exception $err) {
            Session::flash('error', 'C???p Nh???t T??n X?? - Ph?????ng Kh??ng Th??nh C??ng !!! <hr>' . $err->getMessage());

            return  false;
        }
        return true;
    }



    
    public function delete($request){
        $commune = Commune::where('commune_id', $request->input('id'))->first();
        if($commune){
            $commune->delete();
            return true;
        }
        return false;
    }

    public function getCommuneOfDistrict($request){
        return Commune::where('district_id',$request->input('district_id'))->get();
    }

 
}
