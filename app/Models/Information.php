<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
     protected $fillable = [
        'firstName',
        'surname',
        'dob',
        'fatherName',
        'motherName',
        'email',
        'position',
        'tel',
        'telOfSpouse',
        'nameOfTheBankUsed',
        'cell',
        'sector',
        'district',
        'province',
        'country',
        'residenceVillage',
        'residenceCell',
        'residenceSector',
        'residenceDistrict',
        'residenceProvince',
        'martialStatus',
        'university',
        'dependants',
        'field',
        'secondary',
        'option',
        'primary',
        'training',
        'languages',
        'computerskills',
        'drivingskills',
        'heritierFirstName',
        'heritierLastName',
        'heritierAddress',
        'heritierRelation',
        'employerName',
        'employerAddress',
        'employerTel',
        'employerPosition',
        'reason',
        'prohibitedDrugs',
        'disabilities',
        'contactFirstName',
        'contactLastName',
        'contactAddress',
        'contactRelation',
        'contactTel',
        'contactEmail',
        'staffName',
        'staffRelationship',
        'otherStaffName',
        'otherStaffRelationship'


    ];
}
