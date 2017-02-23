<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Empleado as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use Notifiable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre',
      'Cliente',
      'usuario',
      'password',
      'Sexo',
      'Fech_Nac',
      'RFC',
      'NSS',
      'CURP',
      'Estados',
      'Municipios',
      'Colonia',
      'Calle',
      'Num_Ext',
      'Num_Int',
      'CP',
      'Tel_Loc',
      'Num_Cel',
      'Mail_Emp',
      'Mail_Pers',
      'Cargo',
      'Salario',
      'Horario',
      'FotoEmpleado',
      'statusCambioPass',
      'statusQR',
      'LocContinua',
      'timeLocCon',
      'NumEmpleadoNom',
      'Depto',
      'periodopago',
      'diasLaborados',
      'EnviarAlertas',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttributes($valor){
      if(!empty($valor)){
        $this->attributes['password']=\Hash::make($valor);
      }
    }

}
