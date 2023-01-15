<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class Student extends Model
{
    use HasFactory;
    public static $student;
    /**
     * @var mixed|string
     */
    private static $message;

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name        = $request->name;
        self::$student->email       = $request->email;
        self::$student->mobile      = $request->mobile;
        if ($request->password)
        {
            self::$student->password    = bcrypt($request->password);
        }
        else
        {
            self::$student->password    = bcrypt($request->mobile);
        }

        self::$student->save();
        return self::$student;
    }
    public function enrolls(){
        return $this->hasMany(Enroll::class);
    }

    public static function updateStatus($id){
        self::$student = Student::find($id);
        if(self::$student->status == 1){
            self::$student->status = 0;
            self::$message = 'Student Status info inactive Successfully';
        }
        else{
            self::$student->status = 1;
            self::$message = 'Student Status info Active Successfully';
        }
        self::$student->save();
        return self::$message;
    }
}
