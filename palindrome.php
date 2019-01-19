<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $newWord = str_split($word);
        $countNewWord = count($newWord)-1;
        $tempNewWord = "";
        for($countNewWord;$countNewWord>=0;$countNewWord--){
            $tempNewWord .= $newWord[$countNewWord]; 
        }
        if($tempNewWord == $word){
            $result = true;
        }else{
            $result = false;
        }
        return $tempNewWord;
    }
}

echo Palindrome::isPalindrome('Deleveled');

?>