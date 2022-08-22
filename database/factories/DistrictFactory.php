<?php

namespace Database\Factories;

use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = District::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $districts = array(
            "achham",
            "arghakhanchi",
            "baglung",
            "baitadi",
            "bajhang",
            "bajura",
            "banke",
            "bara",
            "bardiya",
            "bhaktapur",
            "bhojpur",
            "chitwan",
            "dadeldhura",
            "dailekh",
            "dang deukhuri",
            "darchula",
            "dhading",
            "dhankuta",
            "dhanusa",
            "dholkha",
            "dolpa",
            "doti",
            "gorkha",
            "gulmi",
            "humla",
            "ilam",
            "jajarkot",
            "jhapa",
            "jumla",
            "kailali",
            "kalikot",
            "kanchanpur",
            "kapilvastu",
            "kaski",
            "kathmandu",
            "kavrepalanchok",
            "khotang",
            "lalitpur",
            "lamjung",
            "mahottari",
            "makwanpur",
            "manang",
            "morang",
            "mugu",
            "mustang",
            "myagdi",
            "nawalparasi",
            "nuwakot",
            "okhaldhunga",
            "palpa",
            "panchthar",
            "parbat",
            "parsa",
            "pyuthan",
            "ramechhap",
            "rasuwa",
            "rautahat",
            "rolpa",
            "rukum",
            "rupandehi",
            "salyan",
            "sankhuwasabha",
            "saptari",
            "sarlahi",
            "sindhuli",
            "sindhupalchok",
            "siraha",
            "solukhumbu",
            "sunsari",
            "surkhet",
            "syangja",
            "tanahu",
            "taplejung",
            "terhathum",
            "udayapur"
        );
        return [
            //
        ];
    }
}