<?php
class Page{
    private $page = null;
    private $title;
    private $year;
    private $copyright;

    private function addHeader()
    {
        $this->page = "<h1>自動じどうで走はしるロボットが事故じこを起おこしたときの保険ほけんを作つくる</h1><br>";
        $this->page = $this->page . "<h1> Title: $this->title </h1><br>";
    }

    public function addContent($content)
    {
        $this->addHeader();
        $this->page = $this->page . $content . "<br>";
        $this->addFooter();
    }

    private function addFooter()
    {
        $this->page = $this->page . "This is Footer $this->copyright at $this->year year<br>";
    }

    public function get()
    {
        print("$this->page");
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

}

$new_page = new Page();
$new_page->setYear("2000");
$new_page->setTitle("Corona");
$new_page->setCopyright("VTV");
$new_page->addContent("
自動じどうで走はしるロボットが事故じこを起おこしたときの保険ほけんを作つくる
[10月5日 17時30分]

ニュースを聞きく
漢字かんじの読よみ方かたを消けす
新あたらしいコロナウイルスがうつらないように、自動じどうで走はしるロボットが物ものを運はこんだり、消毒しょうどくしたりするテストをいろいろな場所ばしょで行おこなっています。

このようなロボットが事故じこを起おこしたときの保険ほけんがないため、損保そんぽジャパンが特別とくべつな保険ほけんを作つくりました。");
$new_page->get();