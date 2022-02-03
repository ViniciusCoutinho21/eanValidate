<?php 

namespace App\Validate;

class Validate
{
    /**
     * @param string $ean
     * @param int $len
     * @return bool
    */
    public static function validate(string $ean): bool
    {
        $ean = static::onlyNumbers($ean);

        $base = static::prepare($ean);
        $base .= static::digit($base);
        return ($base == $ean);
    } 

    /**
     * @param string $value
     * @return int
    */
    private static function digit(string $value): int
    {
        $toArray = str_split($value);
        $sum = 0;
        
        foreach($toArray as $key => $value) {
            $sum+= ($key % 2 === 0 ? $value : ($value * 3));
        }
        
        $digit = (((floor($sum / 10) + 1) * 10) - $sum);

        return ($digit % 10 === 0 ? 0 : $digit);
    }

    /**
     * @param string $ean
     * @return string
    */
    private static function prepare(string $ean)
    {
        $str = str_pad($ean, 13, 0, STR_PAD_LEFT);
        $str = mb_substr($str, 0, mb_strlen($str) - 1);
        return $str;
    }

    /**
     * @param string $value
     * @return string
    */
    private static function onlyNumbers(string $value): string
    {
        return preg_replace('/([^0-9]+)/', '', $value);
    }
}