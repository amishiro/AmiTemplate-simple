<?php
include("../function.php");
$meta->pageName = "カラムテスト";
// $meta->pageDesc = "ページ個別のディスクリプションがあれば記載";
// $meta->pageImg = "ページ個別のogpImageがあれば記載";
$bodyClass = new BodyClass('');
include($inc . "/head.php");
include($inc . "/header.php");
?>

<style>
.ex-box {
  background-color: red;
  min-height: 40px;
}
</style>

<article class="main">
  <section>
    <h2>h2.heading</h2>
    <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
  </section>
  <section>
    <h2>h2.heading</h2>
    <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし（１００文字）</p>
  </section>
</article>

<?php
include($inc . "/footer.php");
include($inc . "/foot.php");
?>