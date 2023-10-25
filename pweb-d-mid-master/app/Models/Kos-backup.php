<?php

namespace App\Models;

class Kos
{
    protected $fillable = [
        'name', 'slug', 'description', 'price', 'phone', 'image', 'address', 'maps'
    ];

    private static $kos = [
        [
            "nama" => "Kos Anjayana",
            "slug" => "kos-anjayana",
            "harga" => "Rp1.000.000",
            "gambar" => "https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/06/14120054/Bisnis-Kos-kosan.png",
            "alamat" => "Jl. Cut Mutia No.180, RT.003/RW.011, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113",
            "maps" => "https://goo.gl/maps/KTVbAkwY1A9NT6c37",
            "deskripsi" => "Kost ini terdiri dari 2 lantai. Tipe kamar A berada di setiap lantainya dengan jendela yang menghadap ke arah luar dan arah koridor.",
            "telepon" => "812345678"
        ],
        [
            "nama" => "Kos Buyaka",
            "slug" => "kos-buyana",
            "harga" => "Rp500.000",
            "gambar" => "https://static.mamikos.com/uploads/cache/data/style/2022-09-15/YgDf5hqd-360x480.jpg",
            "alamat" => "Jl. Marina Emas Barat 6 1-21, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111",
            "maps" => "https://goo.gl/maps/YZjKqvjuBqFjQNrDA",
            "deskripsi" => "Kos dengan jendela yang menghadap ke arah luar dan memiliki kamar mandi dalam. Kamar sangat luas.",
            "telepon" => "81233278"
        ],
        ];
    
    public static function all() {
        return self::$kos;
    }

    public static function find($slug) {
        $koss = self::$kos;
        $kos = [];
        foreach ($koss as $k) {
            if($k["slug"] == $slug) {
                $kos = $k;
            }
        }

        return $kos;
    }
}
