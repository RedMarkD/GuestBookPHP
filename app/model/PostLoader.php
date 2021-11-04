
<?php

class PostLoader{

    public function appendPost($post)
    {
        //$post = json_encode($post);
//        file_put_contents("file.json", $post, FILE_APPEND);
        $getfile = file_get_contents("file.json");
        $decfile = json_decode($getfile);
        $decfile[]= $post;
        $enc = json_encode($decfile);
        file_put_contents("file.json", $enc);
    }


    public function getAllPosts()
    {
        $file = file_get_contents("file.json");
        $dec = json_decode($file);
        $sli = array_slice($dec, -20, 20);
        $rev = array_reverse($sli);
        print_r($rev[0][0]);
        foreach ($rev as $i) {
            echo "<br>";
            echo "title:" . $i[0] . "<br>";
            echo "date:" . $i[1] . "<br>";
            echo "content:" . $i[2] . "<br>";
            echo "author:" . $i[3] . "<br>";
        }
    }

}
