<?php
namespace MyGreeter;
class Client
{
    public function getGreeting()
    {
        ini_set('date.timezone','Asia/Shanghai');
        $return = "";
        $currentHour = date("H",time());
        //1. "Good morning" if it is after 12am and just before 12pm
        if($currentHour>=0 && $currentHour<12)
        {
            $return = "Good morning";
        }
        //2. "Good afternoon" if it is after 12pm and just before 6pm
        elseif($currentHour>=12 && $currentHour<18)
        {
            $return = "Good afternoon";
        }
        //3. "Good evening" if it is after 6pm and just before 12am
        else
        {
            $return = "Good evening";
        }
        return $return;
    }

}
