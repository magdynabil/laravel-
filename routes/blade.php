<?php
Blade::directive('test',function ($val){
    return 'gfsdfdsoiffdsoijiods'.$val;
});
Blade::if('check',function (){
    if(auth()->user())
    {
        return true;
    }
    else
    {
        return false;
    }


});