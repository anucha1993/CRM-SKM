@extends('layouts.template')


@section('content')

<div class="row">
    
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>เพิ่มข้อมูลผู้สมัคร</h3>
        </div>
        <div class="pull-right">
      
    </div>
</div>

<div class="col-lg-12 connectedSortable">
    <div class="card mb-4">
        <div class="card-header">
            <span>ข้อมูลส่วนตัวผูสมัคร</h5>
        </div>
      <div class="card-body">
        <div class="row">
          
            <div class="col-md-3 mb-2">
                <label>คำนำหน้า <span class="text-danger"> *</span></label>
                <select name="foreign_prefix" class="form-select  form-select-sm">
                   <option value="">-กรุณาเลือกข้อมูล-</option>
                </select>
            </div>
            <div class="col-md-3 mb-2">
                <label>เลขบัตร 13 หลัก <span class="text-danger"> *</span></label>
                <input type="text" name="foreign_idcard" class="form-control form-control-sm" placeholder="id card number.." required>
            </div>
            <div class="col-md-3 mb-2">
                <label>ชื่อ <span class="text-danger"> *</span></label>
                <input type="text" name="foreign_firstname" class="form-control form-control-sm" placeholder="First name.." required>
            </div>
            <div class="col-md-3 mb-2">
                <label>นามสกุล <span class="text-danger"> *</span></label>
                <input type="text" name="foreign_lastname" class="form-control form-control-sm" placeholder="Last name.." required>
            </div>
            <div class="col-md-3 mb-2">
                <label>วันเกิด <span class="text-danger"> *</span></label>
                <input type="date" name="foreign_birthday" class="form-control form-control-sm" required>
            </div>

            <div class="col-md-3 mb-2">
                <label>สัญชาติ <span class="text-danger"> *</span></label>
                <select name="foreign_nationality" class="form-select  form-select-sm">
                   <option value="">-กรุณาเลือกข้อมูล-</option>
                </select>
            </div>
            <div class="col-md-3 mb-2">
                <label>ศาสนา <span class="text-danger"> *</span></label>
                <select name="foreign_religion" class="form-select  form-select-sm">
                   <option value="">-กรุณาเลือกข้อมูล-</option>
                </select>
            </div>
            <div class="col-md-3 mb-2">
                <label>ศาสนา <span class="text-danger"> *</span></label>
                <select name="foreign_religion" class="form-select  form-select-sm">
                   <option value="">-กรุณาเลือกข้อมูล-</option>
                </select>
            </div>
            <div class="col-md-3 mb-2">
                <label>หนังสือเดินทางเลขที่  </label>
                <input type="text" name="foreign_passportnumber" class="form-control form-control-sm" placeholder="Passport Number.." >
            </div>
            <div class="col-md-3 mb-2">
                <label>วันที่ออก หนังสือเดินทาง </label>
                <input type="date" name="foreign_passport_startdate" class="form-control form-control-sm" >
            </div>
            <div class="col-md-3 mb-2">
                <label>วันหมดอายุ หนังสือเดินทาง </label>
                <input type="date" name="foreign_passport_expiredate" class="form-control form-control-sm" >
            </div>

            <div class="col-md-3 mb-2">
                <label>แขนที่ถนัด </label>
                <select name="foreign_arm" class="form-select  form-select-sm">
                    <option value="">-กรุณาเลือกข้อมูล-</option>
                 </select>
            </div>

            <div class="col-md-3 mb-2">
                <label>น้ำหนัก <span class="text-danger"> *</span></label>
                <input type="nymber" name="foreign_weight" class="form-control form-control-sm" placeholder="Kg..">
            </div>
            <div class="col-md-3 mb-2">
                <label>ส่วนสูง <span class="text-danger"> *</span></label>
                <input type="nymber" name="foreign_height" class="form-control form-control-sm" placeholder="Cm..">
            </div>

            <div class="col-md-3 mb-2">
                <label>สถานะผู้สมัคร <span class="text-danger"> *</span></label>
                <select name="foreign_status" class="form-select  form-select-sm" required>
                    <option value="">-กรุณาเลือกข้อมูล-</option>
                 </select>
            </div>

            <div class="col-md-12 mb-2">
                <label>ที่อยู่ <span class="text-danger"> *</span></label>
                <textarea name="foreign_address"  class="form-control" cols="30" rows="2"></textarea>
            </div>

        </div>
      </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <span>ข้อมูลการติดต่อ</h5>
        </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-3 mb-2">
                <label>เบอร์ติดต่อ </label>
                <input type="text" name="foreign_phone" class="form-control form-control-sm" placeholder="+66">
            </div>
            <div class="col-md-3 mb-2">
                <label>Email </label>
                <input type="email" name="foreign_email" class="form-control form-control-sm" placeholder="Email..">
            </div>
            <div class="col-md-3 mb-2">
                <label>ไอดี ไลน์ </label>
                <input type="Text" name="foreign_email" class="form-control form-control-sm" placeholder="Email..">
            </div>
            <div class="col-md-3 mb-2">
                <label>ชื่อ/เบอร์/บุคคลใช้ในการติดต่อฉุกเฉิน </label>
                <input type="Text" name="foreign_email" class="form-control form-control-sm" placeholder="ข้อมูลบุคคลใช้ในการติดต่อฉุกเฉิน">
            </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <span>ข้อมูลพิเศษ</h5>
            </div>
          <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <label>ใบอนุญาตขับขี่ </label>
                    <select name="foreign_drivers_license" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
                <div class="col-md-3 mb-2">
                    <label>ระบุตำแหน่งรอยสัก (ว่างไว้หากไม่มี)</label>
                    <input type="Text" name="foreign_tattoo" class="form-control form-control-sm" placeholder="ระบุตำแหน่งรอยสัก">
                </div>
                <div class="col-md-3 mb-2">
                    <label>สูบบุรี่ (ใช่ หรือ ไม่) </label>
                    <select name="foreign_smoking" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
                <div class="col-md-3 mb-2">
                    <label>ดื่มแอลกอฮอล์ (ใช่ หรือ ไม่) </label>
                    <select name="foreign_drink_alcohol" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
                <div class="col-md-3 mb-2">
                    <label>ประวัติอาชญากรรม (มี หรือ ไม่มี) </label>
                    <select name="foreign_criminal_history" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <span>งานต่างประเทศ ที่สนใจ</h5>
            </div>
          <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <label>ประเทศที่สนใจ ทำงาน</label>
                    <select name="foreign_countries_working" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
                <div class="col-md-12 mb-2">
                    <label>งานที่สนใจ</label>
                    <select name="foreign_working" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <span>ประสบการณ์การทำงานงานต่างประเทศ <a href="#"> เพิ่มประสบการณ์</a></h5>
            </div>
          <div class="card-body">
            {{-- <div class="row">
                <div class="col-md-12 mb-2">
                    <label>ประเทศที่เคยทำงาน</label>
                    <select name="foreign_countries_working" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
                <div class="col-md-12 mb-2">
                    <label>งานที่สนใจ</label>
                    <select name="foreign_working" class="form-select  form-select-sm" >
                        <option value="">-กรุณาเลือกข้อมูล-</option>
                     </select>
                </div>
            </div> --}}
          </div>
        </div>
    </div>

    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <span>ความสามารถด้านอื่นๆ <a href="#"> เพิ่มความสามารถ</a></h5>
            </div>
          <div class="card-body">
           
          </div>
        </div>
    </div>


    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <span>ไฟล์เอกสาร <a href="#"> Uploads</a></h5>
            </div>
          <div class="card-body">
           
          </div>
        </div>
    </div>

    <div class="col-lg-12 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <span>บันทึกเพิ่มเติม</h5>
            </div>
          <div class="card-body">
           <textarea name="foreign_note" class="form-control" cols="30" rows="2" placeholder="บันทึกข้อมูลเพิ่มเติม"></textarea>
          </div>
        </div>
    </div>
    
</div>

@endsection