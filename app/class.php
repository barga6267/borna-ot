<?php

class calcut
{

    public function cal_sich($cod)// ای دی داخل دیتا بیس مربی ها باید با این لیست تطبیق داشته باشه
    {
        $str = "";
        switch ($cod) {
            case "1":
                $str = "والیبال";
                break;
            case "2":
                $str = "فوتسال";
                break;
            case "3":
                $str = "بسکتبال";
                break;
            case "4":
                $str = "ژیمناستیک پیشرفته ";
                break;
            case "5":
                $str = "کاراته";
                break;
            case "6":
                $str = "تکواندو";
                break;
            case "7":
                $str = "بوکس";
                break;
            case "8":
                $str = "کیک بوکس";
                break;
            case "9":
                $str = "ژیمناستیک مبتدی ";
                break;
            case "10":
                $str = "پارکور";
                break;
            case "11":
                $str = "کونگ فو";
                break;
            case "12":
                $str = "کشتی ازاد نوجوانان";
                break;
            case "13":
                $str = "کشتی ازاد بزرگسالان";
                break;
            case "14":
                $str = "ایروبیک ";
                break;
            case "15":
                $str = "پیلاتس";
                break;
        }

        return $str;
    }
    
    
}
