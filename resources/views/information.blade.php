@extends('layouts.app')

@section('content')

<div class="row mt-2">
    <div class="col-lg-6 col-md-6 col-6">
    <ul class="list-group w-75 ml-5">
    <li class="list-group-item active">Personal details</li>
    <li class="list-group-item">First Name: {{$information->firstName}}</li>
    <li class="list-group-item">Surname: {{$information->surname}}</li>
    <li class="list-group-item">Date of Birth: {{$information->dob}}</li>
    <li class="list-group-item">Father's Name: {{$information->fatherName}}</li>
    <li class="list-group-item">Mothers' Name: {{$information->motherName}}</li>
    <li class="list-group-item">Email: {{$information->email}}</li>
    <li class="list-group-item">Position: {{$information->position}}</li>
    <li class="list-group-item">Phone number: {{$information->tel}}</li>
    <li class="list-group-item"> Tel of Spouse: {{$information->telOfSpouse}}</li>
    <li class="list-group-item">Name of the Bank: {{$information->nameOfTheBankUsed}}</li>
</ul>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <ul class="list-group w-75 ml-5">
    <li class="list-group-item active">Place of Birth</li>
    <li class="list-group-item">Cell: {{$information->cell}}</li>
    <li class="list-group-item">Sector: {{$information->sector}}</li>
    <li class="list-group-item">District: {{$information->district}}</li>
    <li class="list-group-item">Povince: {{$information->province}}</li>
    <li class="list-group-item">Country: {{$information->country}}</li>
</ul>
  </div>
</div>
<div class="row mt-2">
    <div class="col-lg-6 col-md-6 col-6">
        <ul class="list-group w-75 ml-5">
            <li class="list-group-item active">Place of Residence</li>
            <li class="list-group-item"> Residence Village: {{$information->residenceVillage}}</li>
            <li class="list-group-item">Residence Cell: {{$information->residenceCell}}</li>
            <li class="list-group-item">Residence Sector: {{$information->residenceSector}}</li>
            <li class="list-group-item">Residence District: {{$information->residenceDistrict}}</li>
            <li class="list-group-item">Resident Province: {{$information->residenceProvince}}</li>
        </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
        <ul class="list-group w-75 ml-5">
            <li class="list-group-item active">Marital status and Dependants</li>
            <li class="list-group-item">Marital status: {{$information->martialStatus}}</li>
            <li class="list-group-item">Dependants: {{$information->dependants}}</li>
       </ul>
    </div>
</div>
<div class="row mt-2">
    <div class="col-lg-6 col-md-6 col-6">
        <ul class="list-group w-75 ml-5">
            <li class="list-group-item active">Education and Skills</li>
            <li class="list-group-item">University: {{$information->university}}</li>
            <li class="list-group-item">Field: {{$information->field}}</li>
            <li class="list-group-item">Secondary: {{$information->secondary}}</li>
            <li class="list-group-item">Option: {{$information->option}}</li>
            <li class="list-group-item">Primary: {{$information->primary}}</li>
            <li class="list-group-item">Training: {{$information->training}}</li>
            <li class="list-group-item">Languages: {{$information->languages}}</li>
            <li class="list-group-item">Computer skills: {{$information->computerskills}}</li>
            <li class="list-group-item">Driving skills: {{$information->drivingskills}}</li>
        </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
        <ul class="list-group w-75 ml-5">
             <li class="list-group-item active">Heritier/Next of Kin</li>
             <li class="list-group-item">Heritier First Name: {{$information->heritierFirstName}}</li>
             <li class="list-group-item">Heritier Last Name: {{$information->heritierLastName}}</li>
             <li class="list-group-item">Heritier Address: {{$information->heritierAddress}}</li>
             <li class="list-group-item">Heritier Relation: {{$information->heritierRelation}}</li>
        </ul>
    </div>
</div>
<div class="row mt-2">
    <div class="col-lg-6 col-md-6 col-6">
        <ul class="list-group w-75 ml-5">
            <li class="list-group-item active">Previous Job</li>
            <li class="list-group-item">Employer Name: {{$information->employerName}}</li>
            <li class="list-group-item">Employer Address: {{$information->employerAddress}}</li>
            <li class="list-group-item">Employer Tel: {{$information->employerTel}}</li>
            <li class="list-group-item">Reason: {{$information->reason}}</li>
        </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
        <ul class="list-group w-75 ml-5">
            <li class="list-group-item active">Other Relevant Informations</li>
            <li class="list-group-item">Prohibited Drugs: {{$information->prohibitedDrugs}}</li>
            <li class="list-group-item">Disabilities: {{$information->disabilities}}</li>
            <li class="list-group-item">Contact First Name: {{$information->contactFirstName}}</li>
            <li class="list-group-item">Contact Last Name: {{$information->contactLastName}}</li>
            <li class="list-group-item">Contact Address: {{$information->contactAddress}}</li>
            <li class="list-group-item">Contact Relation: {{$information->contactRelation}}</li>
            <li class="list-group-item">Contact Tel: {{$information->contactTel}}</li>
            <li class="list-group-item">Contact Email:{{$information->contactEmail}}</li>
        </ul>
    </div>
</div>
<div class="row mt-2">
    <div class="col-lg-10 col-md-10 col-10">
        <ul class="list-group w-75 ml-5">
            <li class="list-group-item active">Your Relation Staff Rib </li>
            <li class="list-group-item">Staff Name: {{$information->staffName}}</li>
            <li class="list-group-item"> Staff Relationship: {{$information->staffRelationship}}</li>
            <li class="list-group-item">Other staff Name{{$information->otherStaffName}}</li>
            <li class="list-group-item">Other staff Relationship{{$information->otherStaffRelationship}}</li>
  
        </ul>
    <div>
</div> 

@endsection