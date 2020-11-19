<?php

$contentExample = array (
    array(
        "name" => "First Product",
        "price" => "$52.52",
        "description" => "dicks, dicks, dicks, dicks, dicks."
    ),
    array(
        "name" => "Second Product",
        "price" => "$52.52",
        "description" => "dicks, dicks, dicks, dicks, dicks."
    ),
    array(
        "name" => "Third Product",
        "price" => "$52.52",
        "description" => "dicks, dicks, dicks, dicks, dicks."
    ),
    array(
        "name" => "Fourth Product",
        "price" => "$52.52",
        "description" => "dicks, dicks, dicks, dicks, dicks."
    ),
    array(
        "name" => "Fifth Product",
        "price" => "$52.52",
        "description" => "dicks, dicks, dicks, dicks, dicks."
    ),
    array(
        "name" => "Sixth Product",
        "price" => "$52.52",
        "description" => "dicks, dicks, dicks, dicks, dicks."
    )
)

Class Template {
    private $template;
    private $content;
    private $hasNext;
    public function __construct($template, $content) {
        //Should validate arguments before we continue
        $this->load($template, $content);
        }
    }

    public function __get($val) {
        if ($val=="hasNext") {
            return $this->$val;
        }
        else {
            die("Cannot access private property Template::$val");
        }
    }

    public function output() {
        $record = current($this->content);
        $html = $this->template;
        foreach($record as $key->$val){
            $html = str_replace("{".$key."}",$val,$html);
        }
        if (!next($this->content)) {
            $this->hasNext = FALSE;
        }
        return $html;
    }

    public function load ($template, $content) {
        $this->template = file_get_contents("http://localhost/shopify/templates/$template", true);
        //$this->template = $template;
        $this->content = $content;
        $this->hasNext = TRUE;
    }
}
  
$test = new Template("product_thumbnail.html", $contentExample);


while ($test->hasNext) {
    echo $test->output();
}

?>