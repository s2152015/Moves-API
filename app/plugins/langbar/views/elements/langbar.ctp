<ul>
    <?php $lang = Configure::read('Config.language'); ?>
    <?php
    $ll = $langbar->getLangs();
//print_r($ll);
    foreach ($ll[0] as $l) {
        if ($l["Language"]["alias"] <> $lang) {
            echo "<li style=\"list-style-type: none;\">";
            /* echo $html->link(
              $html->image('/langbar/img/flags/' . $l["Language"]["alias"] . ".png") . " " . $l["Language"]["title"],
              "/" . $l["Language"]["alias"] . "/" . $ll[2] . "/" . $ll[1] . implode("/",$ll[3]),
              array("escape" => false)); */
            //echo $ll[4]['url'];
            $tt = str_replace("ara/", "", $ll[4]['url']);
            $tt = str_replace("eng/", "", $tt);
            $tt = str_replace("eng", "", $tt);
            $tt = str_replace("ara", "", $tt);

            if ($lang == "ara") {
                if ($this->here == "/yallaseha_new/"||$this->here == "/yallaseha_new" ||$this->here == "/") {

                    echo $html->link(
                            $html->image('/langbar/img/flags/' . $l["Language"]["alias"] . ".png"), "/" . $l["Language"]["alias"] . "/" . "nodes/home", array("escape" => false, 'title' => $l["Language"]["title"]));
                } else {
                    echo $html->link(
                            $html->image('/langbar/img/flags/' . $l["Language"]["alias"] . ".png"), "/" . $l["Language"]["alias"] . "/" . $tt, array("escape" => false, 'title' => $l["Language"]["title"]));
                }
            } else {
                echo $html->link(
                        $html->image('/langbar/img/flags/' . $l["Language"]["alias"] . ".png"), "/" . $tt, array("escape" => false, 'title' => $l["Language"]["title"]));
            }
            echo "</li>";
        }
    }
    ?>
</ul>
