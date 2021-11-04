<?php
//print_r(json_decode(file_get_contents("naughty-words/en.json")));
class Profanity
{
    private array $badWords= ["naughty-words/en.json", "naughty-words/fr.json", "naughty-words/de.json"];

    public function proCheck($input){
        for ($a=0; $a<=3; $a++) {
            $badEgg = json_decode(file_get_contents($this->badWords[$a]));
            for ($i=0; $i<count($badEgg); $i++) {
                if (in_array($input, $badEgg)) {
                    return $input = "naughty, naughty!";
                } else {
                    return $input = htmlspecialchars($input, ENT_SUBSTITUTE);
                }
        }
    }
    }
}