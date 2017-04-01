<div class="head-fix"></div>
<div class="container main-container">
<?php if (file_exists("documents/" . $_GET["f"] . "/content.md") && file_exists("documents/" . $_GET["f"] . "/config.json")){ ?>
    <?php
        $raw_markdown = file_get_contents("documents/" . $_GET["f"] . "/content.md");
        $document_meta = json_decode(file_get_contents("documents/" . $_GET["f"] . "/config.json"), true);
        $parsedown = new Parsedown();
        $document_content = $parsedown->text($raw_markdown);
    ?>
    <div class="document">
        <br><br>
        <h1><?=$document_meta["title"]?></h1>
        <span class='version'><?=$document_meta["version"]?></span>
        <div class="row">
            <div class="col-md-3 stick-parent">
                <ul class="hidden-xs hidden-sm document-nav"></ul>
            </div>
            <div class="col-md-9"><?=$document_content?></div>
        </div>
        <br><br>
    </div>
<?php } else { ?>
    <h1>File Not Found</h1>
<?php } ?>
</div>

<script>
    $(".document .row .col-md-9 h2, h3").each(function(i, dom){
        if($(dom).is("h3")){
            $(".document-nav").append("<li>-- <a href='#document_heading_" + i + "'>" + $(dom).text() + "</a></li>");
        } else {
            $(".document-nav").append("<li><a href='#document_heading_" + i + "'>" + $(dom).text() + "</a></li>");
        }
        $(dom).prepend("<a id='document_heading_" + i + "'></a>");
    });
</script>